<?php

namespace App\Controller;

use App\Service\CargaService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class SubirController extends AbstractController
{


    /**
     * @Route("/subir", name="xlsx")
     */
    public function index(
    Request $request,
    EntityManagerInterface $em

    ): Response
    {
        $file = $request->files->get('doc'); // Obtiene el archivo de la solicitud enviada
        $ce = new CargaService($em);
        $ce->cargaexcel($file);

        $this->redirectToRoute('xlsx'); 

        
        echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>';
            return $this->render('subir/index.html.twig', [
                'controller_name' => 'SubirController',
            ]);
        }
         
            
    }



