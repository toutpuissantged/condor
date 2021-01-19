<?php
/*

    Class App permet de faires gerer les url au lieu des 'public/view/count/home.php' on pourait juste avoir '/home'

    utilisation :
    voir dans le fichiers /router/web.php

    NB: A besion de la classe render pour fonctioner


*/


namespace core\router ;

use core\obj\render as render;
use env\Main as MainEnv;

class App {
    public function GET($Route,$Controller,$mode='view',$reg=false){
        
        $render =  new render;
        #$onenv=$env::myenv('dev');
        $myenv= new MainEnv;
        $mytab=$myenv::main();
        $onenv=$mytab;
        #var_dump($onenv);
        #exit();

        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $Route=$onenv['FolderName'].'/index.php'.$Route;

        if ($reg==true){
            //$isvalid=(strpos($url,$Route)!==FALSE);
            if (strpos($url,$Route)!==FALSE){
                if ($mode=='view') {
                    $render->renderView($Controller);
                }
                else if ($mode=='ctrl') {
                    $render->renderController($Controller);
                }
                else{
                    $render->renderView($Controller);
                }
            }
        }
        else{
            if($url==$Route and $method=='GET'){

                if ($mode=='view') {
                    $render->renderView($Controller);
                }
                else if ($mode=='ctrl') {
                    $render->renderController($Controller);
                }
                else{
                    $render->renderView($Controller);
                }
                
            }
        }

        
    } 

    public function POST ($Route,$Controller,$mode='ctrl',$reg=false){
        
        $render =  new render;
        $myenv= new MainEnv;

        $mytab=$myenv::main();
        $onenv=$mytab;

        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $Route=$onenv['FolderName'].'/index.php'.$Route;

        if ($reg==true){
            //$isvalid=(strpos($url,$Route)!==FALSE);
            if (strpos($url,$Route)!==FALSE){
                if ($mode=='view') {
                    $render->renderView($Controller);
                }
                else if ($mode=='ctrl') {
                    $render->renderController($Controller);
                }
                else{
                    $render->renderView($Controller);
                }
            }
        }
        else
            {

            if($url==$Route and $method=='POST'){
    
                if ($mode=='view') {
                    $render->renderView($Controller);
                }
                else if ($mode=='ctrl') {
                    $render->renderController($Controller);
                }
                else{
                    $render->renderView($Controller);
                }
                
            }
        }
    }

    public function DefRedirect(){
        
    }

    public function RegGET($route){
        $url = $_SERVER['REQUEST_URI'];
        $isvalid=(strpos($Url,$route)!==FALSE);
         $Route='/index.php'.$Route;

    }
}
