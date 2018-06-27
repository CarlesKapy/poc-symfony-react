<?php
/**
 * :tmtfactory) © 2018
 * Carles Capell <carles.capell@tmtfactory.com>
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
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
                'avatarUrl' => 'data:image/jpeg;base64,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',
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