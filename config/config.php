<?php 
	session_start();
	define("DEFAULT_LANGUAGE", "en");
	define("LANGUAGES", [
		"en"=>"English",
		"id"=>"Indonesia",
	]);
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = DEFAULT_LANGUAGE;
	}else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
		foreach(LANGUAGES as $key => $item){
			if($_GET['lang'] == $key){
				$temp = $key;
				break;
			}
		}
		isset($temp) ? $_SESSION['lang'] = $temp : $_SESSION['lang'] = DEFAULT_LANGUAGE;
	}
	require_once('languages/'.$_SESSION["lang"].'.php');
 ?>