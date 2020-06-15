<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findBy(array(), array('createdAt' => 'DESC'), 3);

        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findBy(array(), array('date' => 'ASC'), 3);

        return $this->render('index.html.twig', [
            'events' => $events,
            'news' => $news,
        ]);
    }

    /**
     * @Route("/history", name="history")
     */
    public function history()
    {
        return $this->render('history.html.twig', [

        ]);
    }
}
