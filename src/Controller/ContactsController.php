<?php
// src/Controller/ContactsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController
{
/**
* @Route("/contacts")
*/
    public function connexion()
    {
	return new Response(
	'<html><body>
		K-U Contacts<br/>
		<a href="../events">Events</a>
	</body></html>'
	);
    }
}