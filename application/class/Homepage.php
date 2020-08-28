<?php

namespace App;

class Homepage
{
	public static function homepage()
	{
		// Twig - emplacement du dossier des templates
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');

		// Twig - chargement des variables d'envirronement
		$twig = new \Twig\Environment($loader, [
		    'cache' => false,
		]);


		// Twig - Emplacement du template à charger
		$template = $twig->load('index.html');


		// Twig - variables test
		$test1 = "TEST 1 OK";
		$test2 = "TEST 2 OK";


		// Twig - Rendu du template et des variables

		echo $template->render([
			'test1' => $test1,
			'test2' => $test2,
			'basepath' => SERVER_URI
		]);
	}

	public static function user()
	{
		echo "coucou";
	}

}