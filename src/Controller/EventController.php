<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/events", name="events")
     */
    public function index()
    {

        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findBy(array(), array('date' => 'ASC'));

        return $this->render('event/event.html.twig', [
            'events' => $events,
            'controller_name' => 'EventController',
        ]);
    }
}
