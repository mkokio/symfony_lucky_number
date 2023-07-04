<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response; //import the Response class
use Symfony\Component\Routing\Annotation\Route; //import the Route annotation class

class LuckyController
{
    #[Route('/lucky/number')] //add route directly above the controller
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>（1~100）ラッキーナンバーは'.$number.'</body></html>'
        );
    }
}
