<html>
<head>
<title>COR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
  <script>
  $(document).ready(function(){
		var count=0;
		var totamount=0;
		
		$("#logout").click(function(){
			
			window.location.href='LOGOUT.php';
		});
		
		//$("#po").click(function(){
		//	window.location.href='ORDER_INFO.php';
		//});
		
		
		$("#b1").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Roasted Red Pepper Soup";
				document.getElementById("amount1").value=parseInt(document.getElementById("a1").value);
				count++;
				calculator(parseInt(document.getElementById("a1").value));
			break;
			case 1:
				document.getElementById("item2").value="Roasted Red Pepper Soup";
				document.getElementById("amount2").value=parseInt(document.getElementById("a1").value);
				count++;
				calculator(parseInt(document.getElementById("a1").value));
			break;
			case 2:
				document.getElementById("item3").value="Roasted Red Pepper Soup";
				document.getElementById("amount3").value=parseInt(document.getElementById("a1").value);
				count++;
				calculator(parseInt(document.getElementById("a1").value));
			break;
			case 3:
				document.getElementById("item4").value="Roasted Red Pepper Soup";
				document.getElementById("amount4").value=parseInt(document.getElementById("a1").value);
				count++;
				calculator(parseInt(document.getElementById("a1").value));
			break;
			case 4:
				document.getElementById("item5").value="Roasted Red Pepper Soup";
				document.getElementById("amount5").value=parseInt(document.getElementById("a1").value);
				count++;
				calculator(parseInt(document.getElementById("a1").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		$("#b2").click(function(){
			switch(count)
			{
			case 0:
				document.getElementById("item1").value="Classic Caeser Salad";
				document.getElementById("amount1").value=parseInt(document.getElementById("a2").value);
				count++;
				calculator(parseInt(document.getElementById("a2").value));
			break;
			case 1:
				document.getElementById("item2").value="Classic Caeser Salad";
				document.getElementById("amount2").value=parseInt(document.getElementById("a2").value);
				count++;
				calculator(parseInt(document.getElementById("a2").value));
			break;
			case 2:
				document.getElementById("item3").value="Classic Caeser Salad";
				document.getElementById("amount3").value=parseInt(document.getElementById("a2").value);
				count++;
				calculator(parseInt(document.getElementById("a2").value));
			break;
			case 3:
				document.getElementById("item4").value="Classic Caeser Salad";
				document.getElementById("amount4").value=parseInt(document.getElementById("a2").value);
				count++;
				calculator(parseInt(document.getElementById("a2").value));
			break;
			case 4:
				document.getElementById("item5").value="Classic Caeser Salad";
				document.getElementById("amount5").value=parseInt(document.getElementById("a2").value);
				count++;
				calculator(parseInt(document.getElementById("a2").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b3").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Crab Shrimp and Avocado Salad";
				document.getElementById("amount1").value=parseInt(document.getElementById("a3").value);
				count++;
				calculator(parseInt(document.getElementById("a3").value));
			break;
			case 1:
				document.getElementById("item2").value="Crab Shrimp and Avocado Salad";
				document.getElementById("amount2").value=parseInt(document.getElementById("a3").value);
				count++;
				calculator(parseInt(document.getElementById("a3").value));
			break;
			case 2:
				document.getElementById("item3").value="Crab Shrimp and Avocado Salad";
				document.getElementById("amount3").value=parseInt(document.getElementById("a3").value);
				count++;
				calculator(parseInt(document.getElementById("a3").value));
			break;
			case 3:
				document.getElementById("item4").value="Crab Shrimp and Avocado Salad";
				document.getElementById("amount4").value=parseInt(document.getElementById("a3").value);
				count++;
				calculator(parseInt(document.getElementById("a3").value));
			break;
			case 4:
				document.getElementById("item5").value="Crab Shrimp and Avocado Salad";
				document.getElementById("amount5").value=parseInt(document.getElementById("a3").value);
				count++;
				calculator(parseInt(document.getElementById("a3").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b4").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Florets Grana Padano Soup";
				document.getElementById("amount1").value=parseInt(document.getElementById("a4").value);
				count++;
				calculator(parseInt(document.getElementById("a4").value));
			break;
			case 1:
				document.getElementById("item2").value="Florets Grana Padano Soup";
				document.getElementById("amount2").value=parseInt(document.getElementById("a4").value);
				count++;
				calculator(parseInt(document.getElementById("a4").value));
			break;
			case 2:
				document.getElementById("item3").value="Florets Grana Padano Soup";
				document.getElementById("amount3").value=parseInt(document.getElementById("a4").value);
				count++;
				calculator(parseInt(document.getElementById("a4").value));
			break;
			case 3:
				document.getElementById("item4").value="Florets Grana Padano Soup";
				document.getElementById("amount4").value=parseInt(document.getElementById("a4").value);
				count++;
				calculator(parseInt(document.getElementById("a4").value));
			break;
			case 4:
				document.getElementById("item5").value="Florets Grana Padano Soup";
				document.getElementById("amount5").value=parseInt(document.getElementById("a4").value);
				count++;
				calculator(parseInt(document.getElementById("a4").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b5").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Minestrone Soup";
				document.getElementById("amount1").value=parseInt(document.getElementById("a5").value);
				count++;
				calculator(parseInt(document.getElementById("a5").value));
			break;
			case 1:
				document.getElementById("item2").value="Minestrone Soup";
				document.getElementById("amount2").value=parseInt(document.getElementById("a5").value);
				count++;
				calculator(parseInt(document.getElementById("a5").value));
			break;
			case 2:
				document.getElementById("item3").value="Minestrone Soup";
				document.getElementById("amount3").value=parseInt(document.getElementById("a5").value);
				count++;
				calculator(parseInt(document.getElementById("a5").value));
			break;
			case 3:
				document.getElementById("item4").value="Minestrone Soup";
				document.getElementById("amount4").value=parseInt(document.getElementById("a5").value);
				count++;
				calculator(parseInt(document.getElementById("a5").value));
			break;
			case 4:
				document.getElementById("item5").value="Minestrone Soup";
				document.getElementById("amount5").value=parseInt(document.getElementById("a5").value);
				count++;
				calculator(parseInt(document.getElementById("a5").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		$("#b6").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Home Made Pata Gannochi";
				document.getElementById("amount1").value=parseInt(document.getElementById("a6").value);
				count++;
				calculator(parseInt(document.getElementById("a6").value));
			break;
			case 1:
				document.getElementById("item2").value="Home Made Pata Gannochi";
				document.getElementById("amount2").value=parseInt(document.getElementById("a6").value);
				count++;
				calculator(parseInt(document.getElementById("a6").value));
			break;
			case 2:
				document.getElementById("item3").value="Home Made Pata Gannochi";
				document.getElementById("amount3").value=parseInt(document.getElementById("a6").value);
				count++;
				calculator(parseInt(document.getElementById("a6").value));
			break;
			case 3:
				document.getElementById("item4").value="Home Made Pata Gannochi";
				document.getElementById("amount4").value=parseInt(document.getElementById("a6").value);
				count++;
				calculator(parseInt(document.getElementById("a6").value));
			break;
			case 4:
				document.getElementById("item5").value="Home Made Pata Gannochi";
				document.getElementById("amount5").value=parseInt(document.getElementById("a6").value);
				count++;
				calculator(parseInt(document.getElementById("a6").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b7").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Fussili Mamarosa";
				document.getElementById("amount1").value=parseInt(document.getElementById("a7").value);
				count++;
				calculator(parseInt(document.getElementById("a7").value));
			break;
			case 1:
				document.getElementById("item2").value="Fussili Mamarosa";
				document.getElementById("amount2").value=parseInt(document.getElementById("a7").value);
				count++;
				calculator(parseInt(document.getElementById("a7").value));
			break;
			case 2:
				document.getElementById("item3").value="Fussili Mamarosa";
				document.getElementById("amount3").value=parseInt(document.getElementById("a7").value);
				count++;
				calculator(parseInt(document.getElementById("a7").value));
			break;
			case 3:
				document.getElementById("item4").value="Fussili Mamarosa";
				document.getElementById("amount4").value=parseInt(document.getElementById("a7").value);
				count++;
				calculator(parseInt(document.getElementById("a7").value));
			break;
			case 4:
				document.getElementById("item5").value="Fussili Mamarosa";
				document.getElementById("amount5").value=parseInt(document.getElementById("a7").value);
				count++;
				calculator(parseInt(document.getElementById("a7").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		
		$("#b8").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Ravioli Orange Paprika";
				document.getElementById("amount1").value=parseInt(document.getElementById("a8").value);
				count++;
				calculator(parseInt(document.getElementById("a8").value));
			break;
			case 1:
				document.getElementById("item2").value="Ravioli Orange Paprika";
				document.getElementById("amount2").value=parseInt(document.getElementById("a8").value);
				count++;
				calculator(parseInt(document.getElementById("a8").value));
			break;
			case 2:
				document.getElementById("item3").value="Ravioli Orange Paprika";
				document.getElementById("amount3").value=parseInt(document.getElementById("a8").value);
				count++;
				calculator(parseInt(document.getElementById("a8").value));
			break;
			case 3:
				document.getElementById("item4").value="Ravioli Orange Paprika";
				document.getElementById("amount4").value=parseInt(document.getElementById("a8").value);
				count++;
				calculator(parseInt(document.getElementById("a8").value));
			break;
			case 4:
				document.getElementById("item5").value="Ravioli Orange Paprika";
				document.getElementById("amount5").value=parseInt(document.getElementById("a8").value);
				count++;
				calculator(parseInt(document.getElementById("a8").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b9").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Agnoletti Al Ferno";
				document.getElementById("amount1").value=parseInt(document.getElementById("a9").value);
				count++;
				calculator(parseInt(document.getElementById("a9").value));
			break;
			case 1:
				document.getElementById("item2").value="Agnoletti Al Ferno";
				document.getElementById("amount2").value=parseInt(document.getElementById("a9").value);
				count++;
				calculator(parseInt(document.getElementById("a9").value));
			break;
			case 2:
				document.getElementById("item3").value="Agnoletti Al Ferno";
				document.getElementById("amount3").value=parseInt(document.getElementById("a9").value);
				count++;
				calculator(parseInt(document.getElementById("a9").value));
			break;
			case 3:
				document.getElementById("item4").value="Agnoletti Al Ferno";
				document.getElementById("amount4").value=parseInt(document.getElementById("a9").value);
				count++;
				calculator(parseInt(document.getElementById("a9").value));
			break;
			case 4:
				document.getElementById("item5").value="Agnoletti Al Ferno";
				document.getElementById("amount5").value=parseInt(document.getElementById("a9").value);
				count++;
				calculator(parseInt(document.getElementById("a9").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		
		$("#b10").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Hazze Inut Creme Brulee";
				document.getElementById("amount1").value=parseInt(document.getElementById("a10").value);
				count++;
				calculator(parseInt(document.getElementById("a10").value));
			break;
			case 1:
				document.getElementById("item2").value="Hazze Inut Creme Brulee";
				document.getElementById("amount2").value=parseInt(document.getElementById("a10").value);
				count++;
				calculator(parseInt(document.getElementById("a10").value));
			break;
			case 2:
				document.getElementById("item3").value="Hazze Inut Creme Brulee";
				document.getElementById("amount3").value=parseInt(document.getElementById("a10").value);
				count++;
				calculator(parseInt(document.getElementById("a10").value));
			break;
			case 3:
				document.getElementById("item4").value="Hazze Inut Creme Brulee";
				document.getElementById("amount4").value=parseInt(document.getElementById("a10").value);
				count++;
				calculator(parseInt(document.getElementById("a10").value));
			break;
			case 4:
				document.getElementById("item5").value="Hazze Inut Creme Brulee";
				document.getElementById("amount5").value=parseInt(document.getElementById("a10").value);
				count++;
				calculator(parseInt(document.getElementById("a10").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b11").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Creme Al Fughni";
				document.getElementById("amount1").value=parseInt(document.getElementById("a11").value);
				count++;
				calculator(parseInt(document.getElementById("a11").value));
			break;
			case 1:
				document.getElementById("item2").value="Creme Al Fughni";
				document.getElementById("amount2").value=parseInt(document.getElementById("a11").value);
				count++;
				calculator(parseInt(document.getElementById("a11").value));
			break;
			case 2:
				document.getElementById("item3").value="Creme Al Fughni";
				document.getElementById("amount3").value=parseInt(document.getElementById("a11").value);
				count++;
				calculator(parseInt(document.getElementById("a11").value));
			break;
			case 3:
				document.getElementById("item4").value="Creme Al Fughni";
				document.getElementById("amount4").value=parseInt(document.getElementById("a11").value);
				count++;
				calculator(parseInt(document.getElementById("a11").value));
			break;
			case 4:
				document.getElementById("item5").value="Creme Al Fughni";
				document.getElementById("amount5").value=parseInt(document.getElementById("a11").value);
				count++;
				calculator(parseInt(document.getElementById("a11").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		
		$("#b12").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Egg Less Chocolate Fondue";
				document.getElementById("amount1").value=parseInt(document.getElementById("a12").value);
				count++;
				calculator(parseInt(document.getElementById("a12").value));
			break;
			case 1:
				document.getElementById("item2").value="Egg Less Chocolate Fondue";
				document.getElementById("amount2").value=parseInt(document.getElementById("a12").value);
				count++;
				calculator(parseInt(document.getElementById("a12").value));
			break;
			case 2:
				document.getElementById("item3").value="Egg Less Chocolate Fondue";
				document.getElementById("amount3").value=parseInt(document.getElementById("a12").value);
				count++;
				calculator(parseInt(document.getElementById("a12").value));
			break;
			case 3:
				document.getElementById("item4").value="Egg Less Chocolate Fondue";
				document.getElementById("amount4").value=parseInt(document.getElementById("a12").value);
				count++;
				calculator(parseInt(document.getElementById("a12").value));
			break;
			case 4:
				document.getElementById("item5").value="Egg Less Chocolate Fondue";
				document.getElementById("amount5").value=parseInt(document.getElementById("a12").value);
				count++;
				calculator(parseInt(document.getElementById("a12").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		
		$("#b13").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Egg Less Fruit And Nut Fundue";
				document.getElementById("amount1").value=parseInt(document.getElementById("a13").value);
				count++;
				calculator(parseInt(document.getElementById("a13").value));
			break;
			case 1:
				document.getElementById("item2").value="Egg Less Fruit And Nut Fundue";
				document.getElementById("amount2").value=parseInt(document.getElementById("a13").value);
				count++;
				calculator(parseInt(document.getElementById("a13").value));
			break;
			case 2:
				document.getElementById("item3").value="Egg Less Fruit And Nut Fundue";
				document.getElementById("amount3").value=parseInt(document.getElementById("a13").value);
				count++;
				calculator(parseInt(document.getElementById("a13").value));
			break;
			case 3:
				document.getElementById("item4").value="Egg Less Fruit And Nut Fundue";
				document.getElementById("amount4").value=parseInt(document.getElementById("a13").value);
				count++;
				calculator(parseInt(document.getElementById("a13").value));
			break;
			case 4:
				document.getElementById("item5").value="Egg Less Fruit And Nut Fundue";
				document.getElementById("amount5").value=parseInt(document.getElementById("a13").value);
				count++;
				calculator(parseInt(document.getElementById("a13").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		
		$("#b14").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Mocha Fudge Cake";
				document.getElementById("amount1").value=parseInt(document.getElementById("a14").value);
				count++;
				calculator(parseInt(document.getElementById("a14").value));
			break;
			case 1:
				document.getElementById("item2").value="Mocha Fudge Cake";
				document.getElementById("amount2").value=parseInt(document.getElementById("a14").value);
				count++;
				calculator(parseInt(document.getElementById("a14").value));
			break;
			case 2:
				document.getElementById("item3").value="Mocha Fudge Cake";
				document.getElementById("amount3").value=parseInt(document.getElementById("a14").value);
				count++;
				calculator(parseInt(document.getElementById("a14").value));
			break;
			case 3:
				document.getElementById("item4").value="Mocha Fudge Cake";
				document.getElementById("amount4").value=parseInt(document.getElementById("a14").value);
				count++;
				calculator(parseInt(document.getElementById("a14").value));
			break;
			case 4:
				document.getElementById("item5").value="Mocha Fudge Cake";
				document.getElementById("amount5").value=parseInt(document.getElementById("a14").value);
				count++;
				calculator(parseInt(document.getElementById("a14").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		
		$("#b15").click(function(){
		switch(count)
			{
			case 0:
				document.getElementById("item1").value="Tres Leches";
				document.getElementById("amount1").value=parseInt(document.getElementById("a15").value);
				count++;
				calculator(parseInt(document.getElementById("a15").value));
			break;
			case 1:
				document.getElementById("item2").value="Tres Leches";
				document.getElementById("amount2").value=parseInt(document.getElementById("a15").value);
				count++;
				calculator(parseInt(document.getElementById("a15").value));
			break;
			case 2:
				document.getElementById("item3").value="Tres Leches";
				document.getElementById("amount3").value=parseInt(document.getElementById("a15").value);
				count++;
				calculator(parseInt(document.getElementById("a15").value));
			break;
			case 3:
				document.getElementById("item4").value="Tres Leches";
				document.getElementById("amount4").value=parseInt(document.getElementById("a15").value);
				count++;
				calculator(parseInt(document.getElementById("a15").value));
			break;
			case 4:
				document.getElementById("item5").value="Tres Leches";
				document.getElementById("amount5").value=parseInt(document.getElementById("a15").value);
				count++;
				calculator(parseInt(document.getElementById("a15").value));
			break;
			default:
				message();
			break;
			}	
			
		});
		
		function calculator(price)
		{
			document.getElementById("content1").value="TOTAL";
			document.getElementById("content2").value="VAT @5.5%";
			document.getElementById("content3").value="SERVICE TAX @5.8%";
			document.getElementById("content4").value="PAYMENT";
			var node = document.getElementById("po");
			node.style.visibility = "visible";
			
			if(count <= 5)
			{
			totamount = totamount + price;
			vatamount = (totamount * 5.5)/100;
			taxamount = (totamount * 5.8)/100;
			payment = totamount + vatamount + taxamount;
			
			document.getElementById("amount").value=totamount;
			document.getElementById("vat").value=vatamount;
			document.getElementById("st").value=taxamount;
			document.getElementById("p").value=payment;
			}
		}
		
		function message()
		{
			alert("Only Five Food Items can be Added In Order!!!!");
		}
		
		
	});
  </script>
  <style>
  #div1{
    border-radius: 6px;
   
    background-color: #B4FAFB;
    background-position: left top;
    background-repeat: repeat;
	padding-top:20px;
    padding-left:10px;
    padding-right:80px;
    width: 1330px;
    height: 200px;    
}
#div2{
    border-radius: 6px;
   
    background-color: #B4FAFB;
    background-position: left top;
    background-repeat: repeat;
	padding-left:10px;
	padding-right:10px;
	padding-top:20px;
    width: 850px;
    height: 2050px;    
}

#div3{
    border-radius: 6px;
    background-color: #B4FAFB;
    background-position: left top;
    background-repeat: repeat;
	padding-left:10px;
	padding-right:10px;
	padding-top:20px;
    width: 415px;
    height: 550px;   
	position:absolute;
	top:47%;
	left:67%	
}
.t2
{
	font-size: 18px;
	background-color:transparent;
	border:0px solid;
	color:red;
	width:60px;
	height:30px;
}
.t3
{
	font-size:20px;
	background-color:transparent;
	border:0px solid;
	height:30px;
	width:280px;
}
.t4
{
	font-size:20px;
	background-color:transparent;
	border:0px solid;
	height:30px;
	width:120px;
}
.t5
{
	font-size:20px;
	background-color:transparent;
	border:0px solid;
	height:30px;
	width:280px;
}
.t6
{
	font-size:20px;
	background-color:transparent;
	border:0px solid;
	height:30px;
	width:120px;
}
  </style>
</head>
<body>
<?php
error_reporting(0);
	session_start();
	$user_id=$_SESSION['username'];
	if(!isset($_SESSION['name']))
	{
		echo "<script>alert('PLEASE LOGIN FIRST');</script>";
        //echo "window.location='MAIN_PAGE.php'";
		header("Location: HOME_PAGE.php");
	}


$server="localhost";
$username="root";
$password="";
$dbname="cor";
$record = "";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
		die('could not connect'.mysql_error());
}
else
{
	$item1 = $item2 = $item3 = $item4 = $item5 = $item6 = $item7 = $item8 = $item9 = $item10 = $item11 = $item12 = $item13 = $item14 = $item15 = "";
	$sql="SELECT * FROM restaurants where id=3";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0)
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result))
			{
				$item1 = $row["item1"];$item8 = $row["item8"];$item15 = $row["item15"];
				$item2 = $row["item2"];$item9 = $row["item9"];
				$item3 = $row["item3"];$item10 = $row["item10"];
				$item4 = $row["item4"];$item11 = $row["item11"];
				$item5 = $row["item5"];$item12 = $row["item12"];
				$item6 = $row["item6"];$item13 = $row["item13"];
				$item7 = $row["item7"];$item14 = $row["item14"];
			}
		}
			
		
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(isset($_POST['submit']))
			{
				$itemn1 = test_input($_POST['itemn1']);$amt1 = test_input($_POST['itema1']);
				$itemn2 = test_input($_POST['itemn2']);$amt2 = test_input($_POST['itema2']);
				$itemn3 = test_input($_POST['itemn3']);$amt3 = test_input($_POST['itema3']);
				$itemn4 = test_input($_POST['itemn4']);$amt4 = test_input($_POST['itema4']);
				$itemn5 = test_input($_POST['itemn5']);$amt5 = test_input($_POST['itema5']);
				$t = test_input($_POST['am']);
				$v = test_input($_POST['vt']);
				$st = test_input($_POST['srt']);
				$p = test_input($_POST['py']);
				$name = 'id';
				
				$sql3="INSERT INTO orderplaced(userid,name) VALUES('".$user_id."','".$name."')";
				$result3 = mysqli_query($conn,$sql3);
				//if($result3)
				//{
				//echo "<script>alert('Request Generated Successfully!!!!');</script>";
				//}
				
				
				$sql2="SELECT * FROM orderplaced WHERE name = '$name'";
				$result2=mysqli_query($conn,$sql2);
				if (mysqli_num_rows($result2) > 0)
				{
					// output data of each row
					while($row2 = mysqli_fetch_assoc($result2))
					{
					//$id = 1;
					$oid = $row2["orderid"];
					}
				}
				
				session_start();
				$_SESSION['itemn1'] = $itemn1;$_SESSION['itemn2'] = $itemn2;$_SESSION['itemn3'] = $itemn3;
				$_SESSION['itemn4'] = $itemn4;$_SESSION['itemn5'] = $itemn5;
				
				$_SESSION['itema1'] = $amt1;$_SESSION['itema2'] = $amt2;$_SESSION['itema3'] = $amt3;
				$_SESSION['itema4'] = $amt4;$_SESSION['itema5'] = $amt5;
				
				$_SESSION['am'] = $t;
				$_SESSION['vt'] = $v;
				$_SESSION['srt'] = $st;
				$_SESSION['py'] = $p;
				$_SESSION['oid'] = $oid;
				
				echo "<script>window.location='http://localhost/COR/ORDER_INFO3.php'</script>";
			}
		}
}


function test_input($data)
{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}


?>
<nav class="navbar navbar-inverse" style="background-color:#E84478">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
      <ul class="nav navbar-nav" style="font-color:white">
        <li><a href="CUSTOMER.php" style="color:white;font-size:20px">Home</a></li>
        <li><a href="DBDETAILS.php" style="color:white;font-size:20px">Delivery Info</a></li>
		<li><a href="BDETAILS.php" style="color:white;font-size:20px">Booking Info</a></li>
        <li><a href="#" style="color:white;font-size:20px">Notifications</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<center>
<div id="div1">
<p align="left" style="color:grey;">&nbsp&nbsp&nbsp&nbspORDER FOOD ONLINE FROM</p>
<p style="color:grey;position:absolute;top:14%;left:86%">Minimum Order</p>
<h6 style="position:absolute;top:16%;left:87%">Rs.2000.00</h6>
<p style="color:grey;position:absolute;top:25%;left:86%">Payment Methods</p>
<h6 style="position:absolute;top:28%;left:89%">CASH</h6>
<h6 style="position:absolute;top:32%;left:86%">CREDIT & DEBIT Cards</h6>
<h2 align="left">&nbsp&nbspSavoury-Sea Shell Restaurant</h2></br>
<p align="left" style="color:grey;">&nbsp&nbsp&nbsp&nbspBrigade Road * Cost Rs.2000 for two people(approx.)</p>
</div>
</br>
</center>
<div id="div2" style="position:absolute;top:47%;left:2%">
<p style="font-size:22px;background-color:#9DE1F6">&nbsp&nbsp<span style="color:grey">Recommended<span></p>
<p style="font-size:22px">&nbsp&nbspSoups and Salads</p>



<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspRoasted Red Pepper Soup</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b1"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a1" value="<?php echo $item1 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">



<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspClassic Caeser Salad</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b2"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a2" value="<?php echo $item2 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspCrab Shrimp and Avocado Salad</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b3"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a3" value="<?php echo $item3 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">



<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspFlorets Grana Padano Soup</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b4"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a4" value="<?php echo $item3 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspMinestrone Soup</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b5"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a5" value="<?php echo $item3 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">








<p style="font-size:22px;background-color:#9DE1F6">&nbsp&nbsp<span style="color:grey">Mains<span></p>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspHome Made Pata Gannochi</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b6"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a6" value="<?php echo $item4 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspFussili Mamarosa</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b7"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a7" value="<?php echo $item5 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspRavioli Orange Paprika</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b8"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a8" value="<?php echo $item6 ?>"></p>
<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">

<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspAgnoletti Al Ferno</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b9"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a9" value="<?php echo $item7 ?>"></p>
<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">



<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspHazze Inut Creme Brulee</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b10"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a10" value="<?php echo $item8 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspCreme Al Fughni</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b11"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a11" value="<?php echo $item9 ?>"></p>

<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">





<p style="font-size:22px;background-color:#9DE1F6">&nbsp&nbsp<span style="color:grey">Desserts And Beverages<span></p>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspEgg Less Chocolate Fondue</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b12"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a12" value="<?php echo $item12 ?>"></p>
<p style="font-size:12px;font-weight:500;font-family: Geneva,Tahoma,Verdana,sans-serif;font-color:grey">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomization's Available</p>
<hr style="border:1px solid grey;">


<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspEgg Less Fruit And Nut Fundue</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b13"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a13" value="<?php echo $item13 ?>"></p>
<hr style="border:1px solid grey;">

<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspMocha Fudge Cake</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b14"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a14" value="<?php echo $item14 ?>"></p>
<hr style="border:1px solid grey;">

<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp*&nbsp&nbspTres Leches</p>
<input type="button" value="ADD" style="float:right" class="btn-warning" id="b15"/>
<p style="font-size:15px;font-weight:900;font-family: Geneva,Tahoma,Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbspRs.<input type="text" class="t2" id="a15" value="<?php echo $item15 ?>"></p>

</div>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div id="div3">
<table id="t1">
<tr>
<td><input type="text" class="t5" placeholder="FOOD ITEM" /></td><td><input type="text" class="t6" placeholder="AMOUNT"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="item1" name="itemn1"/></td><td><input type="text" class="t4" id="amount1" name="itema1"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="item2" name="itemn2" /></td><td><input type="text" class="t4" id="amount2" name="itema2" /></td>
</tr>
<tr>
<td><input type="text" class="t3" id="item3" name="itemn3"/></td><td><input type="text" class="t4" id="amount3" name="itema3"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="item4" name="itemn4"/></td><td><input type="text" class="t4" id="amount4" name="itema4"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="item5" name="itemn5"/></td><td><input type="text" class="t4" id="amount5" name="itema5"/></td>
</tr>
<tr>
<td><input type="text" class="t3" /></td><td><input type="text" class="t4"/></td>
</tr>
<tr>
<td><input type="text" class="t3"/></td><td><input type="text" class="t4"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="content1" /></td><td><input type="text" class="t4" id="amount" name="am" /></td>
</tr>
<tr>
<td><input type="text" class="t3"  id="content2" /></td><td><input type="text" class="t4" id="vat" name="vt"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="content3" /></td><td><input type="text" class="t4" id="st" name="srt"/></td>
</tr>
<tr>
<td><input type="text" class="t3" id="content4" /></td><td><input type="text" max="6" class="t4" id="p" name="py"/></td>
</tr>
</table>
</br>
</br>
</br>
</br>
</br>
<center><input type="submit"  name="submit" class="btn btn-success"  value="Place Order" id="po" style="visibility:hidden"/></center>
</div>



</form>

</body>
</html>