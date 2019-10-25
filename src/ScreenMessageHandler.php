<?php


namespace GDF\Communicator;


class ScreenMessageHandler implements IHandler
{
    public function send(IRecipient $recipient, $object, $subject){
        if($recipient instanceof CompositeRecipient){ // è una collection
            $recipients=$recipient->getRecipient();
            echo "<ul>";
                echo "<li>".$recipient->getName()."</li>";
                echo "<ul>";
                    foreach($recipients AS $person){
                        echo "<li>-----------------------</li>";
                        echo "<li>to:".$person->getName()."</li>";
                        echo "<li>to:".$person->getAddress()."</li>";
                        echo "<li>object:".$object."</li>";
                        echo "<li>subject:".$subject."</li>";
                        echo "<li>-----------------------</li>";
                    }
                echo "</ul>";
            echo "</ul>";
        }else{ // è una singola persona
            echo "<ul>";
                echo "<li>-----------------------</li>";
                echo "<li>to:".$recipient->getName()."</li>";
                echo "<li>to:".$recipient->getAddress()."</li>";
                echo "<li>object:".$object."</li>";
                echo "<li>subject:".$subject."</li>";
            echo "<li>-----------------------</li>";
            echo "</ul>";
        }
    }

}