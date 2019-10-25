<?php


namespace GDF\Communicator;


abstract class CompositeRecipient extends Recipient implements IRecipient
{
    protected $recipient=[];


    public function addRecipient(IRecipient $recipient)
    {
        $this->recipient[]=$recipient;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

}