<?php

/*

    Class render permet de charger un fichiers php et de lui fournir en memem temp des argument 
    de maniere simple et propre 

    utilisation :

    $render = new render;

    $render->renderView('nom_du_fichier','arguments a passser') ### charge le fichiers dans /tests/

    $render->renderController('nom_du_fichier','arguments a passser') ### charge le fichiers dans /controller/

    $render->redirectView('url_pour_redirection') ### fait une redirection 

    $render->tester('parametre') ### laissez pour les tests

*/

namespace core\obj;

class render{

    public function renderView($ViewName='index',$args=[]){

        #$temp=include_once($GLOBALS['view'].'/'.$ViewName.'.php');
        $temp=include_once('tests/'.$ViewName.'.php');
        print($temp[0]);
        return 0;
    }
    
    public function renderController($ViewName='index',$args=[]){
    
        #$temp=include_once($GLOBALS['controller'].'/'.$ViewName.'.php');
        $temp=include_once('controller/'.$ViewName.'.php');
        print($temp[0]);
        return 0;
    }
    
    public function redirectView($url)
    {
        header("Location: /index.php/".$url);
        return 0;
    }
    public function tester(){
        return 'hello';
    }
}

