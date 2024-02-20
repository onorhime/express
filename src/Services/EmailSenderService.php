<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class EmailSender
{
    private $mailer;
    private $twig;

    public function __construct(MailerInterface $mailer, \Twig\Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendRegEmail($to, $subject, $title, $content)
    {
        $email = (new TemplatedEmail())
            ->from(new Address('support@cloudmetronetwork.com', 'Cloud Metro Network'))
            ->to($to)
            ->subject($subject)
            ->htmlTemplate('email/regemail.html.twig')
            ->context([
                'title' => $title,
                'content' => $content,
            ]);

        $this->mailer->send($email);
    }
}