<?php


namespace GDF\Communicator;


class Communicator implements ICommunicator
{
    protected $handlers=[];
    protected $recipients=[];

    protected $object;
    protected $subject;


    public function __construct(string $object, string $subject)
    {
        $this->setSubject($subject);
        $this->setObject($object);
    }

    public function addHandler(IHandler $handler)
    {
        $this->handlers[]=$handler;
    }



    public function addRecipient(IRecipient $recipient)
    {
        $this->recipients[]=$recipient;
    }



    public function removeRecipient(IRecipient $recipient)
    {
        $recipients=array_filter($this->recipients, function ($item) use ($recipient){
            return $item->getIdentifier()!=$recipient->getIdentifier();
        });
        $this->recipients=$recipients;
    }


    public function setObject(string $object)
    {
        $this->object=$object;
    }





    public function setSubject(string $subject)
    {
        $this->subject=$subject;
    }


    public function send()
    {
        foreach($this->handlers as $handler){
            foreach($this->recipients as $recipient){
                $handler->send($recipient, $this->object, $this->subject);
            }
        }
    }

}