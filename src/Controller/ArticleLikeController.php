<?php

namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleLikeController extends AbstractController
{
    public function like($id, $type, LoggerInterface $logger)
    {
        if($type == "like")
        {
            $likes = rand(121, 200);
            $logger->info('Кто-то лайкнул статью');
        }
        else
        {
            $likes = rand(0, 119);
            $logger->info('Какая досада, дизлайк');
        }

        return $this->json(['likes' => $likes]);
    }
}
