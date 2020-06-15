<?php

namespace App\Controller;

use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function index()
    {
        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findBy(array(), array('createdAt' => 'DESC'));

        return $this->render('news/news.html.twig', [
            'news' => $news,
            'controller_name' => 'EventController',
        ]);
    }
}
