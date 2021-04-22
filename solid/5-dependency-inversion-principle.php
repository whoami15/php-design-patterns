<?php

// High-level modules should not depend on low-level modules. Both should depend on abstractions.
// Abstractions should not depend upon details. Details should depend upon abstractions.

// principle of least compromise
// abstraction focuses on "what he does" regardless of "how he does it"

// both high-level and low-level objects must depend on the same abstraction

/* Bad example */

class Mailer
{
    // Methods for a Mailer class
}

class SendWelcomeMessageBadClass
{
    private $mailer;

    // Mailer is an specific method to sent the message via email
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

/* Good example */

interface MailerInterface
{
    public function send();
}

class SmtpMailer implements MailerInterface
{
    public function send()
    {
        // Send an email via SMTP
    }
}

class SendSlackMailer implements MailerInterface
{
    public function send()
    {
        // Send a message via Slack
    }
}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}
