<?php
/**
 * :tmtfactory) © 2018
 * Carles Capell <carles.capell@tmtfactory.com>
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render("Default/index.html.twig");
    }

    /**
     * @Route("/data")
     */
    public function dataAction()
    {
        return new JsonResponse([
            [
                'id' => 1,
                'book' => '1984',
                'author' => 'George Orwell',
                'avatarUrl' => 'http://1.bp.blogspot.com/-d1n-icVMYek/UweacPpNyRI/AAAAAAAAA5Q/VMHLR6fqkVc/s1600/1984.jpg',
                'quote' => 'Perhaps one did not want to be loved so much as to be understood',
            ],
            [
                'id' => 2,
                'book' => 'The metamorphosis',
                'author' => 'Franz Kafka',
                'avatarUrl' => 'https://images-na.ssl-images-amazon.com/images/I/51Tp515tDyL._SX334_BO1,204,203,200_.jpg',
                'quote' => "I cannot make you understand. I cannot make anyone understand what is happening inside me. I cannot even explain it to myself.",
            ],
        ]);
    }
}