<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SendEspDataToDatabaseController extends AbstractController
{
    /**
     * @Route("/SendDataToDatabase", name="send_data_to_database")
     */
    public function sendDatas(){
        return $this->render('base.html.twig', [
        ]);
    }


}