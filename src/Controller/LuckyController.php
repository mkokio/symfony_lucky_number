<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response; //import the Response class
use Symfony\Component\Routing\Annotation\Route; //import the Route annotation class
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //import the AbstractController class

class LuckyController extends AbstractController //in order to render a template
{
    #[Route('/lucky/number')] //add route directly above the controller
    public function number(): Response
    {
        $number = random_int(0, 100);

        //return new Response(
        //    '<html><body>（1~100）ラッキーナンバーは'.$number.'</body></html>'
        return $this->render('lucky/number.html.twig', [
            'number' => $number //pass a 'number' variable to be used in Twig
        ]);
    }
}
