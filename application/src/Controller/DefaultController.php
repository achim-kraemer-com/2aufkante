<?php

namespace App\Controller;

use App\Repository\LiveRepository;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(MessageRepository $messageRepository, LiveRepository $liveRepository)
    {
        return $this->render('index.html.twig', [
            'messages' => $messageRepository->findBy([], ['updatedAt' => 'DESC']),
            'lives' => $liveRepository->findBy([], ['updatedAt' => 'DESC']),
            'cart' => 0,
        ]);
    }

    /**
     * @Route("/band", name="band", methods={"GET"})
     */
    public function band(): Response
    {
        return $this->render('band.html.twig');
    }

    /**
     * @Route("/impressum", name="impressum", methods={"GET"})
     */
    public function impressum(): Response
    {
        return $this->render('impressum.html.twig');
    }
}
