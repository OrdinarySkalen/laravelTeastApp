<?php
class Basket
{ 
	public $balls;
	
	function __construct()
	{
		$this->balls = array();
	}
	
	public function fillBasket(int $value)
	{
		for ($i=1; $i<$value; $i++)
		{
			$ball = rand(1, 999);
			if (!in_array ( $ball , $this->balls , true))
			{
				$this->balls[] = $ball;
			}
		}
		if (count($balls)===0)
			$this->balls[] = rand(1, 999);
	}
	
	public function printBasket($title)
	{
		print "<br>$title: ";
		foreach ($this->balls as $value)
		{
			print "$value, ";
		}
	}
}
?>