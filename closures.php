<?php  
/**
* 
*/
class Original
{
	
	private $value = 5;

	public function getFunction()
	{
		return function ($i) {
			return $this->value * $i;
		};
	}
}

class Bond
{
	private $value = 10;
}

$a = new Original();
$b = new Bond();
$fun = $a->getFunction();

echo $fun(10);