<?php
class bankaccount
{
		public $balance;
		public $accountnumber;

		function set_balance($balance)
		{
			$this->balance=$balance; /*The $this keyword refers to the current object, and is only available inside methods.*/
	
		}
		function get_balance()
		{
			return $this->balance;
			
		}
		function set_accountnumber($number)
		{
			$this->number=$number;
	
		}
		function get_accountnumber()
		{
			return $this->number;
		}
		
}

$account= new bankaccount();
$account->set_balance('254312');
$account->set_accountnumber('4565678');
echo "Balance: ".$account->get_balance();
echo "<br>";
echo "Account number: ".$account->get_accountnumber();

?>