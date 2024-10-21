<?php
    include ("connection.php");
    $query="update user_details set u_name='".$_POST['u_name']."',
                                    u_email='".$_POST['u_email']."',
                                    u_phone='".$_POST['u_phone']."',
                                    u_gender='".$_POST['u_gender']."',
                                    u_language='".$_POST['u_language']."'where id='".$_POST['pk']."'";
    
    $res=mysqli_query($con,$query);
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=list-user.php">';
?>