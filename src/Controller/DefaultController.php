<?php
/**
 * :tmtfactory) © 2018
 * Carles Capell <carles.capell@tmtfactory.com>
 */

namespace App\Controller;

use App\Repository\QuoteRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class DefaultController extends Controller
{

    /**
     * @var QuoteRepository
     */
    private $quoteRepository;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * DefaultController constructor.
     * @param QuoteRepository $quoteRepository
     * @param SerializerInterface $serializer
     */
    public function __construct(QuoteRepository $quoteRepository, SerializerInterface $serializer)
    {
        $this->quoteRepository = $quoteRepository;
        $this->serializer = $serializer;
    }

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
        $quotes = $this->quoteRepository->findAll();
        $serializedQuotes = array_map(function($quote) {
            return $this->serializer->serialize($quote, 'json');
        }, $quotes);
        return new JsonResponse($serializedQuotes);
    }
}