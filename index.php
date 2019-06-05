<?php

    require_once('vendor/autoload.php');
    $sender = "contact@dev-sixtrone.com";
    $to = array('nancy.test1@mmcp.groupe-efrei.fr','test2.toto@mmcp.groupe-efrei.fr');
    // Create the Transport
    $transport = (new Swift_SmtpTransport('SSL0.OVH.NET',587,'tls'))
        ->setUsername($sender)
        ->setPassword('rc9uf7SNb453RVU4');
// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom([$sender])
        ->setTo($to)
        ->setBody('Here is the message itself')
         ->attach(Swift_Attachment::fromPath('/home/floof/moi.jpg'));
// Send the message
 $mailer->send($message);
