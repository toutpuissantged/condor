<?php

/*

    la classe Web nous permet de gerer les routes un peut comme dans 
    laravel mais en plus personalisable 
    utilisation : $App->GET('monurl','le fichiers views corespondant '); pour les requetes get
                  $App->POST('monurl','le fichiers controller corespondant '); pour les requetes post

    les fichiers views se trouve dans /tests/
    les fichires controller se trouve dans /controller/

*/

use core\obj\render as render;
use router\auth\Auth as Auth;
use core\router\App as App;

#$App = new App;
#$Auth = new Auth;

#session_start();
class Web
{
    public static function main(){

        $App = new App; 

        ##### requets de type GET    ####

        $App->GET('/','home');
        
            ###  requets de type POST  ####

        $App->POST('/','home');
        /*-- test de prototypes --*/

        $App->GET('/flash','prototypes/flash');

        /*------------------------*/
        
    }

}

#$Web=new Web;

Web::main();

?>