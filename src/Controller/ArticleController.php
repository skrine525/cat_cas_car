<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homepage()
    {
        return new Response('Это наша первая страница на Symfony');
    }

    public function show($slug)
    {
        return new Response(sprintf(
            'Будушая страница статьи: %s', ucwords(str_replace('-', ' ', $slug))));
    }
}
