<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\News;
use App\Form\EventType;
use App\Form\NewsType;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/events", name="admin_events")
     */
    public function events()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findBy(array(), array('date' => 'ASC'));



        return $this->render('admin/events.html.twig', [
            'events' => $events,
            'controller_name' => 'EventController',
        ]);
    }


    /**
     * @Route("/admin/events/add", name="admin_event_add")
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function add_event(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // 1) build the form
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->setCreatedAt(new DateTime());
            $event->setUpdatedAt(new DateTime());


            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash("success", "Event created !");
            return $this->redirectToRoute('admin_events');
        }

        return $this->render('admin/add_event.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'EventController',
        ]);
    }


    /**
     * @Route("/admin/events/{id}/delete", name="admin_event_delete")
     * @param int $id
     * @return RedirectResponse
     */
    public function delete_event(int $id){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $event = $this->getDoctrine()
            ->getRepository(Event::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        $this->addFlash("success", "Event deleted !");
        return $this->redirectToRoute('admin_events');

    }


    /**
     * @Route("/admin/events/{id}", name="admin_event_modify")
     * @param int $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function modify_event(int $id, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $event = $this->getDoctrine()
            ->getRepository(Event::class)
            ->find($id);

        $newEvent = $event;

        $form = $this->createFormBuilder($newEvent)
            ->add('title', TextType::class, [
                'data' => $event->getTitle(),
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'data' => $event->getDescription(),
                'attr' => ['class' => 'form-control']
            ])
            ->add('date', DateTimeType::class, [
                'data' => $event->getDate()
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-primary']
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $event = $form->getData();

            $em->persist($event);
            $em->flush();

            $this->addFlash("success", "Event modified !");

            return $this->redirectToRoute('admin_events');

        }


        return $this->render('admin/modify_event.html.twig', [
            'form' => $form->createView(),
            'event' => $event,
            'controller_name' => 'EventController',
        ]);
    }


    /**
     * @Route("/admin/news", name="admin_news")
     */
    public function news()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findBy(array(), array('createdAt' => 'DESC'));



        return $this->render('admin/news.html.twig', [
            'news' => $news,
            'controller_name' => 'EventController',
        ]);
    }


    /**
     * @Route("/admin/news/add", name="admin_new_add")
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function add_new(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // 1) build the form
        $new = new News();
        $form = $this->createForm(NewsType::class, $new);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new->setCreatedAt(new DateTime());
            $new->setUpdatedAt(new DateTime());


            $em = $this->getDoctrine()->getManager();
            $em->persist($new);
            $em->flush();
            $this->addFlash("success", "News created !");
            return $this->redirectToRoute('admin_news');
        }

        return $this->render('admin/add_news.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'newController',
        ]);
    }


    /**
     * @Route("/admin/news/{id}/delete", name="admin_news_delete")
     * @param int $id
     * @return RedirectResponse
     */
    public function delete_new(int $id){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $new = $this->getDoctrine()
            ->getRepository(News::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($new);
        $em->flush();

        $this->addFlash("success", "News deleted !");
        return $this->redirectToRoute('admin_news');

    }


    /**
     * @Route("/admin/news/{id}", name="admin_news_modify")
     * @param int $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function modify_new(int $id, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->find($id);

        $newNews = $news;

        $form = $this->createFormBuilder($newNews)
            ->add('title', TextType::class, [
                'data' => $news->getTitle(),
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'data' => $news->getDescription(),
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-primary']
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $news = $form->getData();

            $em->persist($news);
            $em->flush();

            $this->addFlash("success", "News modified !");

            return $this->redirectToRoute('admin_news');

        }


        return $this->render('admin/modify_news.html.twig', [
            'form' => $form->createView(),
            'news' => $news,
            'controller_name' => 'newController',
        ]);
    }

}
