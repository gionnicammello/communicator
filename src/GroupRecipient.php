<?php


namespace gionnicammello\Communicator;


class GroupRecipient extends CompositeRecipient
{


    public function getAddress()
    {
        $address=[];
        foreach($this->recipient as $recipient){
            $address[]=$recipient->getAddress();
        }
        return $address;
    }

}