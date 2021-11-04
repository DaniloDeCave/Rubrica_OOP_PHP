<?php
require_once '../model/db.php';

class RubricaModel{

    public function addContatto($nome, $cog, $tel){

        $check = "SELECT * FROM contatti;";
        $stmt = DB::getConnect()->query($check);
        foreach($stmt as $value){
            $check = $value;           
        }
        if($check['nome']==$nome && $check['cognome']==$cog && $check['telefono']==$tel){
            echo "contatto giá presente !";
        }
        else{
            $sql = "INSERT INTO contatti (`nome`,`cognome`,`telefono`)
                    VALUES ('$nome','$cog','$tel');";
            $stmt = DB::getConnect()->query($sql);
            echo "contatto inserito !";
        }



    }
    public function SearchContatto($cog){

        $sql = "SELECT * FROM contatti WHERE `cognome` = '$cog';";
        $stmt = DB::getConnect()->query($sql);

        while ($row = $stmt->fetch_assoc()){
            foreach($row as $v =>$value){
                $id = $row['id_contatto'];
                $tel = $row['telefono'];
                $nome = $row['nome'];
                $cog = $row['cognome'];
            }
            echo $id." ".$tel." ".$nome." ".$cog." "."<br>";
            // print_r($row);

            $result[] = $row;

            $Jfile = json_encode($result, JSON_PRETTY_PRINT);           
            $file = fopen('../data/data.json', 'w');
            fwrite($file,$Jfile);
            fclose($file);


        }
        // echo json_encode($result, JSON_PRETTY_PRINT);
    }
       

    public function ViewContatti(){

        $sql = "SELECT * FROM contatti";
        $stmt = DB::getConnect()->query($sql);

        while ($row = $stmt->fetch_assoc()){         
            $id = $row['id_contatto'];
            $tel = $row['telefono'];
            $nome = $row['nome'];
            $cog = $row['cognome'];
            // echo $contatto."";
            echo $id." ".$tel." ".$nome." ".$cog." "."<br>";
            echo "<hr>";

            $result[] = $row;

            $Jfile = json_encode($result, JSON_PRETTY_PRINT);           
            $file = fopen('../data/fullBook.json', 'w');
            fwrite($file,$Jfile);
            fclose($file);
        }
    }

    public function UpdateContatto($id,$nome, $cog, $tel){

        $sql = "SELECT * FROM contatti WHERE `id_contatto` = '$id';";
        $stmt = DB::getConnect()->query($sql);
        $row = $stmt->fetch_row();
        if($row==0){
            die ("contatto non esistente ");   

        }            
        $update = "UPDATE contatti 
        SET  `nome` = '$nome',`cognome` = '$cog',`telefono` = '$tel'
        WHERE `id_contatto` = '$id';";
        $result = DB::getConnect()->query($update);

        if($result)
            echo "contatto aggiornato !";
        else
            echo "si é verificato un errore durante l'aggiornamento";

    }

    public function DeleteContatto($cog, $tel){

        $sql = "DELETE FROM contatti WHERE `cognome` = '$cog' OR `telefono` = '$tel' ;";
        $stmt = DB::getConnect()->query($sql);        
        if($stmt){
            echo "contatto cancellato con successo !";
        }
        else
            echo "contatto non cancellato !";

    }
}
?>