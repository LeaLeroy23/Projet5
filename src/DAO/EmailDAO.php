<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;

class EmailDAO extends DAO
{
    public function registerEmail(Parameter $post){

        $subject = 'Votre inscription sur Hestia.com';
        $fromEmail = 'Contact@hestia.fr';
        $fromUser = 'Hestia real estate';
        $body = '
        Votre inscription sur le site Hestia a bien été pris en compte.
        Pour activer votre compte veuillez suivre le lien ci-dessous et renseigner le token demandé
        lien :
        token : '  .$post->get('token');
        'Une fois votre connexion faites veuillez modifier votre mot de passe';

        $this->getEmail($post);
    }

    public function getEmail(Parameter $post){
        $transport = (new Swift_SmtpTransport(EMAIL_HOST, EMAIL_PORT))
            ->setUsername(EMAIL_USERNAME)
            ->setPassword(EMAIL_PASSWORD)
            //->setEncryption(EMAIL_ENCRYPTION) //For Gmail
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message($subject))
            ->setFrom([$fromEmail => $fromUser])
            ->setTo($post->get('email'))
            ->setBody($body)
        ;

        // Send the message
        $result = $mailer->send($message);
    }

}