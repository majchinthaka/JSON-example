<?php
    if(isset($_POST['uname']) && isset($_POST['pass']))
    {
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $name = 'Admin';
        $address = 'Colombo';
		
		if($username == "admin" && $password == "123")
		{
		    //echo result by JSON format ==> {"name":"Admin" , "address":"Colombo"}
            echo "{
            \"name\":\"{$name}\",
            \"address\":\"{$address}\"
            }";
		}
		else
        {
            echo "Invalid Username or Password";
        }
    }
?>
