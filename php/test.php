<html>
	<title>le test</title>
	<body>
		<h1>web test</h1>
	<?php
	class A 
	{
		private function operation1()
		{
			echo "operation1 called";
		}
		protected function operation2()
		{
			echo "operation2 called";
		}
		public function operation3()
		{
			echo "operation3 called";
		}
	}

	class B extends A 
	{
		function __construct()
		{
			//$this->operation1();
		    //$this->operation2();
			$this->operation3();
		}
	}

	$b = new B;
	?>
	</body>
</html>