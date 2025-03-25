<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="burgerdb";

$link=mysqli_connect($servername,$username,$passward,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con){
   echo("Connection Ok !!");
}
else{
   die("Connection failed: ".mysqli_connect_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">


<style>
div {
            box-sizing: border-box;
            width: 100%;
            border: 100px solid black;
            float: left;
            align-content: center;
            align-items: center;
      
  
        }
        
        form {
            margin: 0 auto;
            width: 600px;
            background: url(images/order.gif);
 
            
        }

input[type=text], select {
  width: 170%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 5px 5px #B9BE07;
  box-sizing: border-box;
}



input[type=submit] {
  width: 150%;
  background-color: #B9BE07;
  color: #B9BE07;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}







input[type=reset] {
  width: 150%;
  background-color: #AC5449;
  color: #B9BE07;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #BE8C07;
}
input[type=reset]:hover {
  background-color: #E98276;
}

div {
  border-radius: 5px;
  padding: 20px;
  
 
}
</style>

 <script>

        function GEEKFORGEEKS() {
		var name = document.forms.form1.name.value;
		var regname = /\d+$/g; 

		var email = document.forms.form1.email.value;
		var regEmail=/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/g;
		
		var nic = document.forms.form1.nic.value;
		var regnic = /^\d{12}$/;

		var number = document.forms.form1.number.value;
		var regnumber = /^\d{10}$/;
		
		var item = document.forms.form1.item.value;
		var regitem = /\d+$/g; 

		var quantity = document.forms.form1.quantity.value;
		var regquantity = /^\d{1}$/;

		if (name == "" || regname.test(name)) {
                window.alert("Please Enter Your Name Properly.");
                return false;
           		 }


		if (email == "" || !regEmail.test(email)) {
                window.alert("Please Enter a Valid E-mail Address.");
                return false;
           		 }

		if (nic == "" || !regnic.test(nic)) {
                alert("Please Enter Valid NIC Number.");              
                return false;
            }
		if (number == "" || !regnumber.test(number)) {
                alert("Please Enter Valid Phone Number.");              
                return false;
            }
		
		if (item == "" || regname.test(item)) {
                window.alert("Please Enter Item Name Properly.");
                return false;
           		 }
		if (quantity == "" || !regquantity.test(quantity)) {
                alert("Please Enter Quantity Properly.");              
                return false;
            }
		


    return true;
        }
    </script>


</head>



<body>
    
    
    <header class="header">
        <a href="#home" class="logo"> burger</a>

        <nav class="navbar">
             <a href="home.html">home</a>                      
            <a href="menu.html">menu</a>
            <a href="dessert.html">dessert</a>	   
             
	    <a href="special.html">speciality</a>
	    <a href="order.html">order</a>
 	    <a href="about.html">about</a>
        </nav>
    
 
    </header>


   
              
    <!-- order -->
<br><br><br><br><br><br><br><br><br><br>
<form name ="form1" onsubmit="return GEEKFORGEEKS()" action="connection.php" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name ="name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name ="email"></td>
</tr>
<tr>
<td>NIC</td>
<td><input type="text" name ="nic"></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name ="number"></td>
</tr>
<tr>
<td>Item Name</td>
<td><input type="text" name ="item"></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name ="quantity"></td>
</tr>
<br><br><br><br>
<td colspan ="2" align="center">
<input type="submit" name="submit1" value="Insert Order">
</td>
</tr>
</table>
</form>


</body>
</html>


<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into order_table values('$_POST[name]','$_POST[email]','$_POST[nic]','$_POST[number]','$_POST[item]','$_POST[quantity]')");
echo"Your Order Created !! ";
}



?>

















<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="burgerdb";

$link=mysqli_connect($servername,$username,$passward,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con){
   echo("Connection ok");
}
else{
   die("Connection failed: ".mysqli_connect_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bakery Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">



<style>
div {
            box-sizing: border-box;
            width: 100%;
            border: 100px solid black;
            float: left;
            align-content: center;
            align-items: center;
      
  
        }
        
        form {
            margin: 0 auto;
            width: 600px;
            background: url(images/order.gif);
 
            
        }

input[type=text], select {
  width: 170%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 box-shadow: 5px 5px #B9BE07;
  box-sizing: border-box;
}



input[type=submit] {
  width: 150%;
  background-color: #AC5449;
  color: #B9BE07;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}








input[type=reset] {
  width: 150%;
  background-color: #AC5449;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #E98276;
}
input[type=reset]:hover {
  background-color: #E98276;
}

div {
  border-radius: 5px;
  padding: 20px;
  
 
}
</style>



</head>



<body>
    
    <!-- header -->

   <header class="header">
        <a href="#home" class="logo"> burger</a>

        <nav class="navbar">
             <a href="home.html">home</a>                      
            <a href="menu.html">menu</a>
            <a href="dessert.html">dessert</a>	   
             
	    <a href="special.html">speciality</a>
	    <a href="order.html">order</a>
 	    <a href="about.html">about</a>
        </nav>
    
 
    </header>

        

    </header>

    <!-- header end -->
              
    <!-- order -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form name ="form1" action="connection.php" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name ="name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name ="email"></td>
</tr>
<tr>
<td>NIC</td>
<td><input type="text" name ="nic"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="text" name ="number"></td>
</tr>
<tr>
<td>Item Name</td>
<td><input type="text" name ="item"></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name ="quantity"></td>
</tr>
<td colspan ="2" align="center">

<input type="submit" name="submit2" value="Order Delete">

</td>
</tr>
</table>
</form>


</body>
</html>


<?php

if(isset($_POST["submit2"]))
{
mysqli_query($link,"delete from order_table where nic='$_POST[nic]'");
echo"Your Order Deleted";
}


?>

    








<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="burgerdb";

$link=mysqli_connect($servername,$username,$passward,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con){
   echo("Connection ok");
}
else{
   die("Connection failed: ".mysqli_connect_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bakery Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">



<style>
div {
            box-sizing: border-box;
            width: 100%;
            border: 100px solid black;
            float: left;
            align-content: center;
            align-items: center;
      
  
        }
        
        form {
            margin: 0 auto;
            width: 700px;
            background-color: ;
 
            
        }

  input[type=text], select {
  width: 170%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 5px 5px #B9BE07;
  box-sizing: border-box;
  font-family: Times new romen;
  font-size: 17px;

}



input[type=submit] {
  width: 150%;
  background-color: #B9BE07;
  color: #060606;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: Times new romen;
  font-size: 17px;
}






input[type=reset] {
  width: 150%;
  background-color: #AC5449;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #DEC210;
}
input[type=reset]:hover {
  background-color: #E98276;
}

div {
  border-radius: 5px;
  padding: 20px;
  
 
}
</style>



</head>



<body>
    
    <!-- header -->

    <header class="header">
        <a href="#home" class="logo"> burger</a>

        <nav class="navbar">
             <a href="home.html">home</a>                      
            <a href="menu.html">menu</a>
            <a href="dessert.html">dessert</a>	   
             
	    <a href="special.html">speciality</a>
	    <a href="order.html">order</a>
 	    <a href="about.html">about</a>
        </nav>
    
 
    </header>


        

    </header>

    <!-- header end -->
              
    <!-- order -->
<br><br><br><br><br><br><br><br><br><br>
<form name ="form1"  action="connection.php" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name ="name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name ="email"></td>
</tr>
<tr>
<td>NIC</td>
<td><input type="text" name ="nic"></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name ="number"></td>
</tr>
<tr>
<td>Item Name</td>
<td><input type="text" name ="item"></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name ="quantity"></td>
</tr>
<td colspan ="2" align="center">

<input type="submit" name="submit3" value="Update Order">
</td>
</tr>
</table>
</form>


</body>
</html>


<?php

if(isset($_POST["submit3"]))
{
mysqli_query($link,"update order_table set name='$_POST[name]' where nic='$_POST[nic]'");

echo"Your Order Updated";
}


?>

    
 
 

    
 