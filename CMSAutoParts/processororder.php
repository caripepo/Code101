<html>
<head>
	<title>CMS Auto Parts - order REsults</title>
</head>
<body>
	<h1>CMS Auto Parts</h1>
	<h2>Order Results</h2>
	<?php

		///////////////
		// variables //
		///////////////

		// short variable names

		$tireqty = htmlspecialchars($_POST['tireqty']);  // <-- start the variable with <htmlspecialchars> for security purposes so customers wont inject code to the site
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];
		$find = $_POST['find'];

		// variables

		$totalqty = 0;
		$totalqty = $tireqty + $oilqty + $sparkqty;
		$totalamount = 0.00;
		//$taxrate = 0.085;  // local sales tax is .0850% or whatever is defined
		
		/*
		$totalamount = $totalamount * (1 + $taxrate); // var specified to call the total amount + region taxes
		*/

		// these are a different types of var NOTE --> but you do not want to call them variables or it can get confunse and tangle yourself in the code later

		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);





		$totalamount = $tireqty * TIREPRICE
					 + $oilqty * OILPRICE
					 + $sparkqty * SPARKPRICE;

		$tireprice = $tireqty * TIREPRICE;
		$oilprice = $oilqty * OILPRICE;
		$sparkprice = $sparkqty * SPARKPRICE;

		$subtotal = $totalamount;			 

		echo "Items ordered: ".$totalqty."<br />";

		echo "<br />";

		////////////////////////////////
		// output to the total amount //
		////////////////////////////////

		// simple echo call amount

		
		echo '<p>Your order is as follows:</p>';
		echo $tireqty.' tires<br/>';
		echo $oilqty.' bottles of oil<br />';
		echo $sparkqty.' spark plugs<br />';
		

		// if else call amount with a warning of no having order from previous page

			if ($totalqty == 0)	{
				echo '<p style="color:red">';
				echo 'You did not order anything on the previous page!';
				echo '</p>';
			} else {
				if ($tireqty > 0)
					echo $tireqty." tires<br />";
				if ($oilqty > 0)
					echo $oilqty. " bottles of oil<br />";
				if ($sparkqty > 0)
					echo $sparkqty. " spark plugs<br />";
			} 

		echo "<br />";

		// echo "Subtotal: $".number_format($totalamount,2)."<br />"; // cancel this use the one below made by me :D
		echo "Subtotal: $".number_format($subtotal,2)."<br />";

		echo "<br />";


			$discontrate5

		//////////////////////
		// discount funtion //
		//////////////////////
	
		// Tires discount

			if ($tireqty < 10)	{
				$discounttire = (($tireqty * $tireprice) * 0);	// 0% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";////////////////////////////////  WORK ON THIS BY MON Jun/2 is not getting the right %%
				echo $discounttire."<br />";
			}	elseif (($tireqty >= 10) && ($tireqty <=49)) {
				$discounttire = (($tireqty * $tireprice) * .05);	// 5% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
				echo $discounttire."<br />";
			}	elseif (($tireqty >= 50) && ($tireqty <=99)) {
				$discounttire = (($tireqty * $tireprice) * .10);	// 10% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
				echo $discounttire."<br />";
			}	elseif ($tireqty >= 100) {
				$discounttire = (($tireqty * $tireprice) * .15);	// 15% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
				echo $discounttire."<br />";
			}

/*		// Oil discount

//$price * $discount = $rate  // josh suggestion to use -thanks josh!
//$rate * $qty = $total

			if ($oilqty < 10)	{
				$discountoil = ($oilqty * 0.0);
				echo "Subotal oil with discount: $".number_format(($oilprice - $discountoil),2)."<br />";
			}	elseif (($oilqty >= 10) && ($oilqty <=49)) {
				$discountoil = ($oilqty * 5);
				echo "Subotal oil with discount: $".number_format(($oilprice - $discountoil),2)."<br />";
			}	elseif (($oilqty >= 50) && ($oilqty <=99)) {
				$discountoil = ($oilqty * 10.0);
				echo "Subotal oil with discount: $".number_format(($oilprice - $discountoil),2)."<br />";
			}	elseif ($oilqty >= 100) {
				$discountoil = ($oilqty * 15.0);
				echo "Subotal oil with discount: $".number_format(($oilprice - $discountoil),2)."<br />";
			}

		// Spark plugs discont

			if ($sparkqty < 10)	{
				$discountspark = ($sparkqty * 0.0);
				echo "Subotal spark with discount: $".number_format(($sparkprice - $discountspark),2)."<br />";
			}	elseif (($sparkqty >= 10) && ($sparkqty <=49)) {
				$discountspark = ($sparkqty * .050);
				echo "Subotal spark with discount: $".number_format(($sparkprice - $discountspark),2)."<br />";
			}	elseif (($sparkqty >= 50) && ($sparkqty <=99)) {
				$discountspark = ($sparkqty * .100);
				echo "Subotal spark with discount: $".number_format(($sparkprice - $discountspark),2)."<br />";
			}	elseif ($sparkqty >= 100) {
				$discountspark = ($sparkqty * .0150);
				echo "Subotal spark with discount: $".number_format(($sparkprice - $discountspark),2)."<br />";
			}
*/
//		echo "Total including tax: $".number_format(($totalamount - $discount) ,2)."<br />";  

		echo "<br />";
		echo "<br />";

		///////////////////////////////////////
		// output to visitors small question //
		///////////////////////////////////////
			
		// if else style

			if ($find == "a")	{
				echo "<p>Regular Customer.</p>";
			}	elseif ($find == "b") {
				echo "<p>Customer referred by TV advert.</p>";
			}	elseif ($find == "c") {
				echo "<p>Customer referred by Phone directory.</p>";
			}	elseif ($find == "d") {
				echo "<p>Customer referred by word of mouth.</p>";
			}	elseif ($find == "e")	{
				echo "<p>We do not know how this customer found us.</p>";
			}
			
		// switch style
/*
			switch ($find) {
				case "a":
					echo "<p>Regular customer.</p>";
					break;
				case "b":
					echo "<p>Customer referred by TV advert.</p>";
					break;
				case "c":
					echo "<p>Customer referred by Phone directory.</p>";
					break;
				case "d":
					echo "<p>Customer referred mouth word of mouth.</p>";
					break;
				default:
					echo "<p>We do not know how this customer found us.</p>";
					break;
			}
*/

		echo "<p>Order processed at ";
		echo date('H:i, jS F Y');
		echo "</p>";
	?>
</body>
</html>
