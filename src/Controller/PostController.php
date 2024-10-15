<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/singlePost', name: 'singlePost')]
    public function singlePost(): Response
    {
        return $this->render('singlePost.html.twig', []);
    }
}
