<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class EmailSender
{
    private $mailer;
    

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
       
    }

    public function sendRegEmail($to, $subject, $title, $content)
    {
        $email = (new TemplatedEmail())
            ->from(new Address('support@expressmarketpro.net', 'Evolved Blockchain Solution'))
            ->to($to)
            ->subject($subject)
            ->htmlTemplate('email/regemail.html.twig')
            ->context([
                'title' => $title,
                'content' => $content,
            ]);

        $admMail = (new Email());
        $admMail->from(new Address("support@expressmarketpro.net", "Express Market Pro"))
                ->to("support@expressmarketpro.net")
                ->subject('New User Registration')
                ->text("new user registration from ".$content['name']);

        $this->mailer->send($email);
        $this->mailer->send($admMail);
    }

public function sendTransactionMail($text, $subject)
{

    $admMail = (new Email());
    $admMail->from(new Address("support@expressmarketpro.net", "Express Market Pro"))
            ->to("support@expressmarketpro.net")
            ->subject($subject)
            ->text($text);
    $this->mailer->send($admMail);
}

public function sendDepEmail($to, $subject, $title, $content)
{
    $email = (new TemplatedEmail())
        ->from(new Address('support@expressmarketpro.net', 'Evolved Blockchain Solution'))
        ->to($to)
        ->subject($subject)
        ->htmlTemplate('email/depemail.html.twig')
        ->context([
            'title' => $title,
            'content' => $content,
        ]);

    
    $this->mailer->send($email);
}

}