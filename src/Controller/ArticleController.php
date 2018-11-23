<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     *@Get(
     *     path = "/articles/{id}",
     *     name = "app_article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function show()
    {
        $article = new Article();
        $article->setTitle("Mon article");
        $article->setContent("Mon contenu");
        return $article;
    }
}
