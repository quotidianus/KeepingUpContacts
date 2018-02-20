<?php
// src/Controller/EventsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController
{
/**
* @Route("/events")
*/
    public function connexion()
    {
	return new Response(
	'<html><body>
		K-U Events<br/>
		<a href="../contacts">Contacts</a>
	</body></html>'
	);
    }
}