<?php
// src/Controller/LuckyController.php
namespace App\Controller;

//if creating route with routes.yaml: use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>ラッキーナンバーは'.$number.'</body></html>'
        );
    }
}
