<?php
include ("connection.php");
?>

<html>
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
<body>
    <?php
        $query=mysqli_query($con,"select * From user_details where id='".$_GET['pk']."'");
        $row=mysqli_fetch_array($query);
    ?>
    
        <form class="myForm" action="update-record.php" method="POST">
            <input type="hidden" value="<?php echo $_GET["pk"]; ?>" id="pk" name="pk">
            <br>
            <label>Edit Name</label>
            <br>
            <input type="text" id="u_name" name="u_name" value="<?php echo $row["u_name"]; ?>">
            <br>
            <label>Edit Email</label>
            <br>
            <input type="text" id="u_email" name="u_email" value="<?php echo $row["u_email"]; ?>">
            <br>
            <label>Edit Phone Number</label>
            <br>
            <input type="text" id="u_phone" name="u_phone" value="<?php echo $row["u_phone"]; ?>">
            <br>    
            <label>Edit Gender</label>
            <br>
            <select id="u_gender" name="u_gender" value="<?php echo $row["u_gender"]; ?>">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
            <br>
            <br>
            <label>Edit Language</label>
            <br>
            <select id="u_language" name="u_language" value="<?php echo $row["u_gender"]; ?>"> 
                <option value="">Select</option>
                <option value="bengali">Bengali</option>
                <option value="english">English</option>
                <option value="hindi">Hindi</option>
            </select>
                <br><br><br>
            <input class="btn" type="submit" value="Update Details">
        </form>
    
</body>
<html>