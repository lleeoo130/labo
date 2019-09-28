<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route(path="/")
     */
    public function testPage()
    {
        $messages = [
            "Je t'Aime Fayrouz <3",
            "continuer logger",
            "poser des tests U",
            ];

        $this->logger->info('User logged in.');

        return $this->render('test.html.twig', [
            'messages' => $messages,
        ]);
    }
}