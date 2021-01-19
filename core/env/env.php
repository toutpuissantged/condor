<?php
/*

	fichiers d'environement permet de personaliser son application et de passer facilement de developement a la production 

	'dev' => environement de developement 
	'prod' => envireonement de production

	utilisation : 
	$env::myenv('environememnt'); ### renvoye le tableau de l'environment correspondant

*/

namespace env;

Class Main{
	
	static function main(){

		$Env=new Env;
		#$cur=new Env;
		return $Env::myenv('dev');  ### definisez votre environemet courent ici : dev ? prod

	}
}


#$OneEnv =$cur::myenv('env');

Class Env
{
	

	public static function myenv($my){

		##### configuration pour environement de developement ######

		$dev = [
			'ProjectName'=>'Clinique',
			'FolderName'=>''
		];

		##### configuration pour environement de production ######

		$prod = [
			'ProjectName'=>'Clinique',
			'FolderName'=>'/Clinique'
		];



		if ($my=='dev') return $dev;
		else if ($my=='prod') return $prod;
		else return [];

	}




}

?>