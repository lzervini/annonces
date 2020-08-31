<?php

namespace App;

class Homepage
{

	public static function homepage()
	{
		// Twig - emplacement du dossier des templates
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');

		// Twig - chargement des variables d'envirronement
		$twig = new \Twig\Environment($loader, ['cache' => false]);

		// Twig - Emplacement du template à charger
		$template = $twig->load('index.html');

		// Twig - variables test
		$test = "TEST HOMEPAGE OK";

		// Twig - Rendu du template et des variables
		echo $template->render([
			'test' => $test,
			'basepath' => SERVER_URI
		]);
	}


	public static function testpage()
	{
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');
		$twig = new \Twig\Environment($loader, ['cache' => false]);
		$template = $twig->load('test.html');


		// Connection à la bdd
		$db = new Database();
		$db->connect();
		var_dump($db->getPDO());
		//$sql='SELECT * FROM annonces';
		//$req = $conn->prepare($sql);




		// Twig - Rendu du template et des variables
		echo $template->render([
			'datas' => $req,
			'basepath' => SERVER_URI
		]);
	}


	// WIP Test static routes
	public static function nouvelle_annonce()
	{
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');
		$twig = new \Twig\Environment($loader, ['cache' => false]);
		$template = $twig->load('nouvelle_annonce.html');

		// Twig - variables test
		$test = "NOUVELLE ANNONCE OK";

		// Twig - Rendu du template et des variables
		echo $template->render([
			'test' => $test,
			'basepath' => SERVER_URI
		]);
	}


	// WIP Test static routes
	public static function modifier_annonce()
	{
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');
		$twig = new \Twig\Environment($loader, ['cache' => false]);
		$template = $twig->load('modifier_annonce.html');

		// Twig - variables test
		$test = "MODIFIER ANNONCE OK";

		// Twig - Rendu du template et des variables
		echo $template->render([
			'test' => $test,
			'basepath' => SERVER_URI
		]);
	}


	// WIP Test static routes
	public static function supprimer_annonce()
	{
		$loader = new \Twig\Loader\FilesystemLoader('../application/templates');
		$twig = new \Twig\Environment($loader, ['cache' => false]);
		$template = $twig->load('supprimer_annonce.html');

		// Twig - variables test
		$test = "SUPPRIMER ANNONCE OK";

		// Twig - Rendu du template et des variables
		echo $template->render([
			'test' => $test,
			'basepath' => SERVER_URI
		]);
	}


	public static function user()
	{
		echo "coucou";
	}

}