<?php
/*

    Classe Flash permet de faire des messages flash c'est ta dire 
    qui ne seront lue qu'une seul fois mais qui seront disponible 
    meme apres une redirection 

    utilisation :

    $Flash=new Flash; ### initialisation de l'instance 

    $Flash->Init('clef') ###(optionel) creer une variable flash de nom clef et de valeur vide 

    $Flash->Set('clef','valeur');  ###  creer une variable flash de nom clef et de valeur 'valeur'

    $Flash->Get('clef') ### recupere la variable flash de nom clef

*/

namespace core\obj{

    class Flash
    {
        function Set($key,$value){

                $_SESSION['Flash'][$key]=$value;
            }
            
         function Get($key){
                    if (!isset($_SESSION['Flash'][$key])){
                        return '';
                    }
                    $temp=$_SESSION['Flash'][$key];
                    $_SESSION['Flash'][$key]=NULL;
                    return $temp;

                }
                
         function Init($key)
                {

                    if (isset($_SESSION['Flash'][$key])) {
                        return 0;
                    };
                    
                    $_SESSION['Flash'][$key]='';
            }
    }

}

/*
{
    class flash{

        public function FlashSet($key,$value){

            $_SESSION['Flash'][$key]=$value;
        }
        
        public function FlashGet($key){
            $temp=$_SESSION['Flash'][$key];
            $_SESSION['Flash'][$key]=NULL;
            return $temp;

        }
        
        public function FlashInit()
        {
            $_SESSION['Flash']=[];
        }
        
    }


}
*/
