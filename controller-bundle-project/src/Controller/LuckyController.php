<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/books", name="app_books")
     */
    public function getBooks(): Response
    {
       
        $books=['Kitap1','Kitap2','Kitap3'];
        
        return new Response(
            print_r($books)
        );
    }


    /**
     * @Route("/books/{id}", name="app_book")
     */
    public function getBook(int $id): Response
    {   
        $books=['Kitap1','Kitap2','Kitap3'];

        $response ='Boş Veri yok';

        if (!empty($books[$id])) {
            $response=$books[$id];
        }

        return new Response(
            $response
        );
    }
}
