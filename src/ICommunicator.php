<?php


namespace GDF\Communicator;



interface ICommunicator
{
    public function addHandler(IHandler $handler);
    public function addRecipient(IRecipient $recipient);
    public function removeRecipient(IRecipient $recipient);
    public function setObject(string $object);
    public function setSubject(string $object);
    public function send();
}