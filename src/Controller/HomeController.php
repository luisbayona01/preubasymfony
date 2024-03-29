<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello'=>'hola mundo con Symfony 4'
        ]);
    } 
    
    
    public  function animales($nombre){
        $title='Bienvenido a la paginade animales';
        return $this->render('home/animales.html.twig',[
           'title'=>$title,
           'nombre'=>$nombre     
        ]);
        
    }
}
