<?php
// src/Controller/KuContactsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KuContactsController
{
/**
* @Route("/contacts")
*/
    public function kucontacts()
    {
	return new Response(
	'<html><body>
		K-U Contacts<br/>
		<a href="../events">Events</a>
	</body></html>'
	);
    }
}