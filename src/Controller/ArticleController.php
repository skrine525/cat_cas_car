<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    public function homepage()
    {
        return new Response('Это наша первая страница на Symfony');
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
