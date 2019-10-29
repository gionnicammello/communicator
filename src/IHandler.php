<?php


namespace gionnicammello\Communicator;


interface IHandler
{
    public function send(IRecipient $recipient,$object, $subject);
}