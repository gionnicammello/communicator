<?php


namespace GDF\Communicator;


class UnitRecipient extends Recipient
{

    protected $address;



    public function __construct($identifier, string $name,string $address)
    {
        $this->address=$address;
        parent::__construct($identifier, $name,$address);
    }


    public function getAddress()
    {
        return $this->address;
    }
}