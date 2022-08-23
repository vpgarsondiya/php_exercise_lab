<?php
class Bankaccount {
  public $balance;
  public $accountnumber;

  function __construct($balance, $accountnumber) {
    $this->balance = $balance; 
    $this->accountnumber = $accountnumber; 
  }
  function get_balance() {
    return $this->balance;
  }
  function get_accountnumber() {
    return $this->accountnumber;
  }
}

$myaccount = new Bankaccount("500", "353776229945");
echo 'Account_Balance = '.$myaccount->get_balance();
echo "<br>";
echo 'Account_Number = '.$myaccount->get_accountnumber();

?>