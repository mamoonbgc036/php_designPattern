<?php

interface observable{
    function attach(Observer $observer);
    function notify($info, $event);
}

interface observer{
    function update(observable $observable, $info, $event);
}

class bankaccount implements observable{
    private $observer = [];
    function attach(Observer $observer){
        $this->observer = $observer;
    }

    function notify($info, $event){
        foreach($this->observer as $observe){
            $observe->update($this, $info, $event);
        }
    }

    function withdraw($money){
        $this->notify($money, 'witdraw');
    }
}

class smsNotifyer implements observer{
    function update(observable $observable, $info, $event){
        print_r($info, $event);
    }
}

echo "mamoon";

$bank = new bankaccount();
$sms = new smsNotifyer();

$bank->attach($sms);
$bank->withdraw(500);