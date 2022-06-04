<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="pngfind.com-privacy-icon-png-4703547.png">
</head>
<body bgcolor="gray">
    
</body>
</html>

<?php

$flag=0;
if(empty($_POST['fname'])){echo "First Name is empty <br>"; $flag=1;}
if(empty($_POST['lname'])){echo "Last Name is empty <br>"; $flag=1;}
if(empty($_POST['gender'])){echo "Gender is not selected <br>"; $flag=1;}
if(empty($_POST['email'])){echo "Email is empty <br>"; $flag=1;}
    elseif (strpos($_POST['email'],"@")==false) 
    {
    echo "Email must contain '@' <br>";$flag=1;
    }
    elseif (strpos($_POST['email'],".")==false) 
    {
    echo "Email must contain '.' <br>";$flag=1;
    }
if(empty($_POST['mobNo'])){echo "Mobile No is empty <br>"; $flag=1;}
    elseif (strlen($_POST['mobNo'])!=11) 
        {
        echo "Mobile number must contain 11 digits <br>";$flag=1;
        }
if(empty($_POST['address'])){echo "Address is empty <br>"; $flag=1;}
if(empty($_POST['country'])){echo "Country is empty <br>"; $flag=1;}
if($flag==0){echo "<h1>Form is submitted";}
?>