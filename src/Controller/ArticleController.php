<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    public function homepage()
    {
        return $this->render('articles/homepage.html.twig');
    }

    public function show($slug)
    {
        $comments = [
            'Хочу кушац',
            'Опять дождь во Владивостоке',
            'Знаешь ли ты, вдоль ночных дорог'
        ];

        dump($slug, $this);

        return $this->render('articles/show.html.twig', [
            'article' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}
