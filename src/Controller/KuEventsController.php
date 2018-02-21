<?php
// src/Controller/KuEventsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KuEventsController
{
/**
* @Route("/events")
*/
    public function kuevents()
    {
	return new Response(
	'<html><body>
		K-U Events<br/>
		<a href="../contacts">Contacts</a>
	</body></html>'
	);
    }
}