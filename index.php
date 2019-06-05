<?php

    require_once('vendor/autoload.php');
    $sender = "sixtrone@gmail.com";
    $to = array('nancy.test1@mmcp.groupe-efrei.fr','test2.toto@mmcp.groupe-efrei.fr');
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
        ->setUsername($sender)
        ->setPassword('gf4mP321@gv5');
// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom([$sender])
        ->setTo(['nitish@sixtrone.com'])
        ->setBody('Here is the message itself')
         ->attach(Swift_Attachment::fromPath('moi.jpg'));
// Send the message
    $result = $mailer->send($message);
    print_r($result);
