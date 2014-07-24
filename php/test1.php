<html>
	<title>le test</title>
	<body>
		<h1>web test</h1>
	<?php

	class A 
	{
		public $attribute = "A";
		function operation() {

			echo "something 1<br />";
			echo "The value of \$attribute is ". $this->attribute."<br />";
		}
	}

	class B extends A 
	{
		public $attribute = "B";
		function operation()	{
			parent::operation();
			echo "something 2<br />";
			echo "The value of \$attribute is ". $this->attribute."<br />";
		}
	}

	class C extends B
	{
		public $attribute = "C";
		function operation() {
			parent::operation();
			echo "something 3<br />";
			echo "The value of \$attribute is ". $this->attribute."<br />";
		}
	}

	class D extends C
	{
		public $attribute = "D";
		function operation()	{
			parent::operation();
			echo "something 4<br />";
			echo "The value of \$attribute is ". $this->attribute."<br />";
		}
	}

//	$a = new A();
//	$a -> operation();

//	$b = new B();
//	$b -> operation();

//	$c = new C();
//	$c -> operation();

	$d = new D();
	$d -> operation();

//	phpinfo();

	?>
	</body>
</html>