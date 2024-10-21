<?php
    include ("connection.php");
    $res=mysqli_query($con,"delete from user_details where id='".$_GET['pk']."'");
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=list-user.php">';
?>