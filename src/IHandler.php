<?php


namespace GDF\Communicator;


interface IHandler
{
    public function send(IRecipient $recipient,$object, $subject);
}