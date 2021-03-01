<?php
class AddressDisplay
{
    private $addressType;
    private $addressText;
 
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }
 
    public function getAddressType()
    {
        return $this->addressType;
    }
 
    public function setAddressText($addressText)
    {
        $this->addressText = $addressText;
    }
 
    public function getAddressText()
    {
        return $this->addressText;
    }
}
 
class EmailAddress
{
    private $emailAddress;
     
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
     
    public function setEmailAddress($address)
    {
        $this->emailAddress = $address;
    }
}
 
$emailAddress = new EmailAddress();
/* Populate the EmailAddress object */
$address = new AddressDisplay();
/* Here's the assignment code, where I'm assigning values 
  from one object to another... */
$address->setAddressType("email");
$address->setAddressText($emailAddress->getEmailAddress());
?>