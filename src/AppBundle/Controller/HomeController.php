<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	public function homeAction()
	{
		return $this->render( 'AppBundle:Home:home.html.twig', [
			// ...
		] );
	}

	public function campingSiteAction()
	{
		return $this->render( 'AppBundle:Home:camping_site.html.twig', [
			// ...
		] );
	}

	public function apartmentAction()
	{
		return $this->render( 'AppBundle:Home:apartment.html.twig', [
			// ...
		] );
	}

	public function pricesAction()
	{
		return $this->render( 'AppBundle:Home:prices.html.twig', [
			// ...
		] );
	}

	public function jorisAction()
	{
		return $this->render( 'AppBundle:Home:joris.html.twig', [
			// ...
		] );
	}

}
