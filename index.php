<?php

include ("connection.php");
if(isset($_POST['u_name']))
{
    $q="insert into user_details set    u_name='".$_POST['u_name']."',
                                    u_email='".$_POST['u_email']."',
                                    u_phone='".$_POST['u_phone']."',
                                    u_gender='".$_POST['u_gender']."',
                                    u_language='".$_POST['u_language']."'";


    if (mysqli_query($con,$q)) {
        echo "Details update Succesfully...";
        header("location:list-user.php");
    
    } 
    else {
        echo "There are some error...";
    }

}


?>

<html>  
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
<body>

    <form class="myForm" method="POST">
        <label>Enter Name</lebel>
        <br>
        <input type="text" id="u_name" name="u_name" required>
        <br>    

        <label>Enter email</lebel>
        <br>
        <input type="email" id="u_email" name="u_email" required>
        <br>

        <label>Enter Phone Number</lebel>
        <br>
        <input type="text" id="u_phone" name="u_phone" onkeypress="phoneno()" maxlength="10" required> 
        <br> 

        <label>Select Gender</lebel>
        <br>
        <select id="u_gender" name="u_gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
        </select>
        <br> 

        <label>Select Language</lebel>
        <br>    
        <select id="u_language" name="u_language" required> 
            <option value="">Select</option>
            <option value="bengali">Bengali</option>
            <option value="english">English</option>
            <option value="hindi">Hindi</option>
        </select>
        <br><br><br>
        
        <input class="btn" type="submit" value="Submit">
        <button class="dlt"><a href="list-user.php">View List</a></button>
    </form>
    
</body>
<script>        
        function phoneno(){          
            $('#u_phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
</>
</html>

