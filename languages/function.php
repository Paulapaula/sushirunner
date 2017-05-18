<?php

	session_start();

	function __($str, $lang){

		if ( $lang != null ){

			if ( file_exists('languages/language_'.$lang.'.php') ){

				include('languages/language_'.$lang.'.php');
				
			} else {
                
                include('languages/language_en.php');
            }
            
            if ( isset($texts[$str]) ){
					$str = $texts[$str];
				}
		}

		return $str;
	}

	if ( isset($_GET['lang']) || isset($_SESSION['lang'])){

		$lang = isset($_GET['lang']) ? $_GET['lang'] : $_SESSION['lang'];

		if ( !file_exists('languages/language_' . $lang . '.php') ){
			$lang = 'en';
		}

		} else {
			$lang = 'en';
		}

	$_SESSION['lang'] = $lang;

?>