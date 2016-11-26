<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Team;
use MainBundle\Entity\Tokens;
use MainBundle\Entity\UsersInTeams;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class DefaultController extends Controller
{

    /**
     * @Route("/", name="defaultAction")
     */
    public function defaultAction (Request $request)
    {
        return $this->render('MainBundle:default:default.html.twig');
    }

    /**
     * @Route("/app", name="app_request")
     */
    public function appRequestAction(Request $request)
    {
        if($request->get("appVerifier") != null && $request->get("appVerifier")  == "eduardFlorianMotherfuckergang"){
            switch ($request->get("appCall")) {
                case "getUsernames":
                    $this->getUserNames();
                    break;
                case "addToken":
                    if(isset($_POST["token"])){
                        $this->addToken($_POST["token"]);
                    }
                    break;
            }
        }else{
            echo "no access";
        }

        return $this->render('MainBundle:default:default.html.twig');
    }

    public function getUserNames(){
        $arr = array(
            array('Name' => "Nachricht 1"),
            array('Name' => "Nachricht 2"),
            array('Name' => "Nachricht 3"),
            array('Name' => "Nachricht 4")
        );

        echo json_encode($arr);

        $this->send_notification();
    }

    function addToken($tokenString){
        $tokenrepository = $this->getDoctrine()
            ->getRepository('MainBundle:Tokens');

        $tokenData = $tokenrepository->findOneByToken($tokenString);

        if($tokenData === null){
            $now = new \DateTime('NOW');
            $em = $this->getDoctrine()->getManager();
            $token = new Tokens();
            $token->setCreatetime($now);
            $token->setToken($tokenString);
            $token->setUserid(1);
            $em->persist($token);
            $em->flush();
        }
    }

    function send_notification ()
    {
        $tokenrepository = $this->getDoctrine()
            ->getRepository('MainBundle:Tokens');
        $tokens = array("dqC1sov7Uks:APA91bH_1bicJpavX_IidZU5XguH97hqD10y44n8bnQxvf_M8Q4CVNpBoZKvZEqjihEzKnr657Beb954mzuW_VA2Bc_gXC0sH-mM6oGH_wWOywAF7L-ktkYdVekVIQ1oXBLGWyIod7nL");
        $url = 'https://fcm.googleapis.com/fcm/send';
        $notification= array('title' => 'Es klappt Jaaa','body' => 'jawolll jaman jaaa' );

        $fields = array(
            'registration_ids' => $tokens,
            'notification' => $notification

        );


        $headers = array(
            'Authorization:key=AAAAZHnow2A:APA91bFEsglVuHSz_gtfowL14lR9-8W5rZFHJai2nHG6fC-ZHtnnOcIMc-pL0rddKc79NIvVD2v8MqsgOo9dkS2aGwwF73g_MMwYJOg1OOv0O4d8S0LvTieiWoH1D-GFsHlq3LPPIzHWvoZfToWIino6UuREOBRewg',
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        // echo json_encode($fields);
        $result = curl_exec($ch);
        echo curl_error($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        //echo $result;
    }


}
