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
		$oilqty = htmlspecialchars($_POST['oilqty']);
		$sparkqty = htmlspecialchars($_POST['sparkqty']);
		$find = htmlspecialchars($_POST['find']);

		// variables

		$totalqty = 0;
		$totalqty = $tireqty + $oilqty + $sparkqty;
		$totalamount = 0.00;

		// these are a different types of var NOTE --> but you do not want to call them variables or it can get confunse and tangle yourself in the code later

		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);

		$tireprice = $tireqty * TIREPRICE;
		$oilprice = $oilqty * OILPRICE;
		$sparkprice = $sparkqty * SPARKPRICE;

		$totalamount = $tireqty * TIREPRICE
					 + $oilqty * OILPRICE
					 + $sparkqty * SPARKPRICE;

		$subtotal = $totalamount;	

		$discountrate0 = 0;
		$discountrate5 = 0.05;
		$discountrate10 = 0.10;
		$discountrate15 = 0.15;


		$taxrate = 0.085;  // local sales tax is .0850% or whatever is defined
		$totaltopay = $totalamount * (1 + $taxrate); // var specified to call the total amount + region taxes

		echo "Items ordered: ".$totalqty."<br />";

		echo "<br />";

		////////////////////////////////
		// output to the total amount //
		////////////////////////////////

		// simple echo call amount

		/*
		echo '<p>Your order is as follows:</p>';
		echo $tireqty.' tires<br/>';
		echo $oilqty.' bottles of oil<br />';
		echo $sparkqty.' spark plugs<br />';
		*/

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

		//////////////////////
		// discount funtion //
		//////////////////////

		//$price * $discount = $rate  // josh suggestion to use -thanks josh!
		//$rate * $qty = $total

		// Tires discount

			if ($tireqty < 10) {
				$tirediscount1 = $tireprice * $discountrate0; // 0% discount
					echo "Subtotal tire with discount: $".number_format(($tireprice - $tirediscount1),2)."<br />";
					echo $tirediscount1;
				} elseif (($tireqty >= 10) && ($tireqty <= 49)) {
				$tirediscount2 = $tireprice * $discountrate5; // 5% discount
					echo "Subtotal tire with discount: $".number_format(($tireprice - $tirediscount2),2)."<br />";
					echo $tirediscount2;
				} elseif (($tireqty >= 50) && ($tireqty <= 99)) {
				$tirediscount3 = $tireprice * $discountrate10; // 10% discount
					echo "Subtotal tire with discount: $".number_format(($tireprice - $tirediscount3),2)."<br />";
					echo $tirediscount3;
				} elseif ($tireqty >= 100) {
				$tirediscount4 = $tireprice * $discountrate15; // 15% discount
					echo "Subtotal tire with discount: $".number_format(($tireprice - $tirediscount4),2)."<br />";
					echo $tirediscount4;
			}

		echo "<br />";	
		// Oil discount

			if ($oilqty < 10)	{
				$oildiscount1 = $oilprice * $discountrate0;
					echo "Subotal oil with discount: $".number_format(($oilprice - $oildiscount1),2)."<br />";
					echo $oildiscount1;
			}	elseif (($oilqty >= 10) && ($oilqty <=49)) {
				$oildiscount2 = $oilprice * $discountrate5;
					echo "Subtotal oil with discount: $".number_format(($oilprice - $oildiscount2),2)."<br />";
					echo $oildiscount2;
			}	elseif (($oilqty >= 50) && ($oilqty <=99)) {
				$oildiscount3 = $oilprice * $discountrate10;
					echo "Subtotal oil with discount: $".number_format(($oilprice - $oildiscount3),2)."<br />";
					echo $oildiscount3;
			}	elseif ($oilqty >= 100) {
				$oildiscount4 = $oilprice * $discountrate15;
					echo "Subtotal oil with discount: $".number_format(($oilprice - $oildiscount4),2)."<br />";
					echo $oildiscount4;
			}
		echo "<br />";
		// Spark plugs discont

			if ($sparkqty < 10)	{
				$sparkdiscount1 = $sparkprice * $discountrate0;
					echo "Subtotal spark with discount: $".number_format(($sparkprice - $sparkdiscount1),2)."<br />";
					echo $sparkdiscount1;
			}	elseif (($sparkqty >= 10) && ($sparkqty <=49)) {
				$sparkdiscount2 = $sparkprice * $discountrate5;
					echo "Subtotal spark with discount: $".number_format(($sparkprice - $sparkdiscount2),2)."<br />";
					echo $sparkdiscount2;
			}	elseif (($sparkqty >= 50) && ($sparkqty <=99)) {
				$sparkdiscount3 = $sparkprice * $discountrate10;
					echo "Subtotal spark with discount: $".number_format(($sparkprice - $discountspark3),2)."<br />";
					echo $sparkdiscount3;
			}	elseif ($sparkqty >= 100) {
				$sparkdiscount4 = $sparkprice * $discountrate15;
					echo "Subtotal spark with discount: $".number_format(($sparkprice - $discountspark4),2)."<br />";
					echo $sparkdiscount4;
			}

//		echo "Total including tax: $".number_format(($totalamount - $discount) ,2)."<br />";  

			/////////////////////////////////////////////////////
			// This if statement won't work becuz is taking    //
			// the *qty 2x once in $tireqty var and the second //
			// in $tireprice var for that reason the % with    //
			// the combination of subtotal were oooofffff 	   //
			/////////////////////////////////////////////////////

			/*
			if ($tireqty < 10)	{
				$discounttire1 = (($tireqty * $tireprice) * $discountrate0);	// 0% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";////////////////////////////////  WORK ON THIS BY MON Jun/2 is not getting the right %%
			}	elseif (($tireqty >= 10) && ($tireqty <=49)) {
				$discounttire2 = (($tireqty * $tireprice) * $discontraterate5);	// 5% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
			}	elseif (($tireqty >= 50) && ($tireqty <=99)) {
				$discounttire3 = (($tireqty * $tireprice) * $discountrate10);	// 10% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
			}	elseif ($tireqty >= 100) {
				$discounttire4 = (($tireqty * $tireprice) * $discountrate15);	// 15% discount
				echo "Subtotal tire with discount: $".number_format(($tireprice - $discounttire),2)."<br />";
			}
			*/

		echo "<br />";
		echo "<br />";

		// echo "Subtotal: $".number_format($totalamount,2)."<br />"; // cancel this use the one below made by me :D
		echo "Subtotal: $".number_format($subtotal,2)."<br />";

		echo "<br />";

		echo "Total amount to pay: $".number_format($totaltopay,2)."<br />";
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
