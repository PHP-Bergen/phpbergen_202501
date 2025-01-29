<?php

namespace phpbergen\Attributes\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BeerController
{
    #[Route('/beer')]
    public function index(): Response
    {
        return new Response('<h1>Beer</h1>', Response::HTTP_OK);
    }

}
