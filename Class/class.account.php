<?php
class Account
{

    public $accountNumber;
    public $blanch;

    function __construct($accountNumber, $blanch)
    {
        $this->accountNumber = $accountNumber;
        $this->blanch = $blanch;
    }
    function getBlanch()
    {
        return $this->blanch;
    }

}
$MoshiurAccount = new Account("525020", 20000);

?>