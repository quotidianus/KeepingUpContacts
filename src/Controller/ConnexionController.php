<?php
// src/Controller/ConnexionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController
{
/**
* @Route("/")
*/
    public function connexion()
    {
	return new Response(
	'<html><body>
		Page de connexion<br/>
		<a href="/contacts">Go</a>
	</body></html>'
	);
    }
}