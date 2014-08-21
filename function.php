<?php 
/**
* 
*/
class MyClass
{
	public $prop1 = "I'm a class property!";
	public static $count = 0;

	public function __construct() {
		echo 'The class "', __CLASS__, '" was initiated!<br />';
	}

	public function __destruct() {
		echo 'Te class was,'.__CLASS__.',
		destructed';
	}

	public function setProperty($newval)
	{
		$this->prop1 = $newval;
	}

	public function __toString() {
		echo "using the toString method";
		return $this->getProperty();
	}

	private function getProperty()
	{
		return $this->prop1 . "<br />";
	}

	public function Test()
	{
		return self::getProperty();
	}

	public static function plusOne()
	{
		return "The count is " . ++self::$count . ".<br />";
	}


}

/**
* 
*/
class MyOtherClass extends MyClass
{	

	public function __construct()
	{
		parent::__construct();
		echo "This is a new construct in" . __CLASS__ ."<br />";
	}
	
	public function newMethod(){
		echo "From a new  method in " . __CLASS__ . ".<br />";
	}

	public function callProtected()
	{
		return $this->getProperty();
	}
}

?>