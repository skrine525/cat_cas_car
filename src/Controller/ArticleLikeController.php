<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleLikeController extends AbstractController
{
    public function like($id, $type)
    {
        if($type == "like")
        {
            $likes = rand(121, 200);
        }
        else
        {
            $likes = rand(0, 119);
        }

        return $this->json(['likes' => $likes]);
    }
}
