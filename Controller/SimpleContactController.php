<?php
/**
 * Created by PhpStorm.
 * User: pmdc
 * Date: 30/01/17
 * Time: 4:20 PM
 */

namespace Viweb\ContactBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SimpleContactController extends Controller
{
    public function sendSimpleFormAction(Request $request)
    {
        if($request->request->get('l_name')){
            $l_name = $request->request->get('l_name');
            $f_name = $request->request->get('f_name');
            $adress = $request->request->get('adress');
            $city = $request->request->get('city');
            $province = $request->request->get('province');
            $postal = $request->request->get('postal');
            $mail = $request->request->get('mail');
            $phone = $request->request->get('phone');
            $cell = $request->request->get('cell');
            $reason = $request->request->get('reason');
            $main_text = $request->request->get('main_text');

            $sendTo = $this->getParameter('viweb_contact.main_mail');
            $message = \Swift_Message::newInstance()
                ->setSubject('Nouveau contact')
                ->setFrom('send@example.com')
                ->setTo($sendTo)
                ->setBody(
                    $this->renderView('@ViwebContact/SimpleContact/longMail.html.twig', [
                        'lastName' => $l_name,
                        'firstName' => $f_name,
                        'mail' => $mail,
                        'address' => $adress,
                        'city' => $city,
                        'province' => $province,
                        'postal' => $postal,
                        'phone' => $phone,
                        'cell' => $cell,
                        'reason' => $reason,
                        'message' => $main_text
                    ]),
                    'text/html'
                )
            ;
            $this->get('mailer')->send($message);

            return new JsonResponse(['stauts' => 'ok']);
        } else {
            $name = $request->request->get('name') ?? 'Non disponible';
            $mail = $request->request->get('email');
            $mess = $request->request->get('message');
            $sendTo = $this->getParameter('viweb_contact.main_mail');
            $message = \Swift_Message::newInstance()
                ->setSubject('Nouveau contact')
                ->setFrom('send@example.com')
                ->setTo($sendTo)
                ->setBody(
                    $this->renderView('@ViwebContact/SimpleContact/mail.html.twig', [
                        'nom' => $name,
                        'mail' => $mail,
                        'message' => $mess
                    ]),
                    'text/html'
                )
            ;
            $this->get('mailer')->send($message);

            return new JsonResponse(['stauts' => 'ok']);
        }

    }


}