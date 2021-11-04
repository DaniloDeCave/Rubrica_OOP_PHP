<?php
include_once '../model/RubricaModel.php';

class RubricaController{
    public $rubrica;

    public function __construct(){
        $this->rubrica = new RubricaModel(); 
    }

    public function actionAdd($nome, $cog, $tel){
        
        $this->rubrica->addContatto($nome, $cog, $tel);

    }

    public function actionView(){

        $this->rubrica->viewContatti();
               

    }

    public function actionSearch($cog){

        $this->rubrica->SearchContatto($cog);
      
    }

    public function actionUpdate($id,$nome, $cog, $tel){

        $this->rubrica->UpdateContatto($id,$nome, $cog, $tel);
  
    }

    public function actionDelete($cog, $tel){

        $this->rubrica->DeleteContatto($cog, $tel);
  
    }

}







?>
