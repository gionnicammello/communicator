<?php


namespace gionnicammello\Communicator;


interface IRecipient
{
    public function getAddress(); // get the recipient addres or the collection of address
    public function getName(); //get the name of the recipient
    public function getIdentifier();
    public function getRecipient(); //get the recipient object or the collection of recipient objects
}