<?php


namespace GDF\Communicator;


abstract class Recipient implements IRecipient
{
    protected $name;
    protected $identifier;


    public function __construct($identifier, string $name)
    {
        $this->identifier=$identifier;
        $this->name=$name;
    }



    public function getRecipient()
    {
        return $this;
    }



    public function getName()
    {
        return $this->name;
    }


    public function getIdentifier()
    {
        return $this->identifier;
    }



    abstract public function getAddress();

}