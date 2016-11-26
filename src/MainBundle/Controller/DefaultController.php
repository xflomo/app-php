<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Team;
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


    function send_notification ()
    {
        $message = array("message" => " FCM PUSH NOTIFICATION TEST MESSAGE");
        $url = 'https://fcm.googleapis.com/fcm/send';
        $tokens = array("fAGSH3-rRGo:APA91bF2iZGhrsktWUJX8B14DQ6LfGoLXKEHSsg3CSv6qnaDg9T95ytn5Y_8Jq11fsCDTaMepI4KHUGLd_L5Sdld8Al5RZnCrmLDSuCFlgKD-FYqEwfpAf5erOX6YBt1X4Xrx-vBH_Pg");
        $fields = array(
            'registration_ids' => $tokens,
            'data' => $message
        );
        $headers = array(
            'Authorization:key=' . "AAAArSWOoNw:APA91bFv_JaCkVtGrfBrwBMM0Tm1upexkEGrz8m4dbRa-0aGk_IsA52zWeApf4WdlXNfEnqmw4B-lf8njQSIMuFeo8kFLPv1iaB4uGSRpthpYDM-LK6-UKcYue8_YwjOSFbFVsZsyg0-V-2HIpotEHN5xm_PpUd1Ug",
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
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }


}
