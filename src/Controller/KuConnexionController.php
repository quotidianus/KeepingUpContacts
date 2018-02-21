<?php
// src/Controller/KuConnexionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KuConnexionController
{
/**
* @Route("/")
*/
    public function kuconnexion()
    {
	return new Response(
	'<html><body>
		Page de connexion<br/>
		<a href="/contacts">Se connecter</a>
	</body></html>'
	);
    }
}