<?php
namespace App\Umut\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MerhabaBundleController extends AbstractController
{
    #[Route('/hello', name: 'hello')]
    public function index(): Response
    {
        return new response("Merhaba Bundle");
    }
}
