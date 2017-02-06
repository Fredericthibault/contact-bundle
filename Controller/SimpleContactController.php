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
        $name = $request->request->get('name');
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