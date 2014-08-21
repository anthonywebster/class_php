<?php 
	
	trait Foo 
	{
		public function sayFoo()
		{
			return "I'm saying foo from trait foo!";
		}

		private $test = 10;
	}

	class Base
	{
		public static $number = 5;

		public function sayFoo($value='')
		{
			return "I'm saying foo from Base Class";
		}
	}
	

	class Some extends Base {

		//use Foo;
		
		private $property = "Hello";

		public static function getArray()	
		{
			return [
				"hola"=>[1,2,3],
				2,
				3
			]; 
		}

		public function getProperty()
		{
			return $this->property;
		}

		public function getTest()
		{
			return $this->test;
		}

		public function getFoo()
		{
			return $this->sayFoo();
		}
	} 
	
	$o = new Some;
	echo $o::$number;

?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Class 2</h1>	
</body>
</html>