<?php
    include ("connection.php");
?>

<html>
    <head>
        <link href="style.css" rel="stylesheet">
    </head>    
<body>

    <center>
    <h1>List of the Users</h1>
    <table class="tableSec">
        <tr>
            <th>Id</th>
            <th>Name</ht>
            <th>Email</ht>
            <th>Phone</ht>
            <th>Gender</ht>
            <th>Language</ht>
            <th></ht>
            <th></ht>
        </tr>

        <?php
            $query=mysqli_query($con,"select * from user_details");
            while ($row=mysqli_fetch_array($query)) {
        ?>

                <tr>
                    <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row ['u_name']; ?></td>
                    <td><?php echo $row ['u_email']; ?></td>
                    <td><?php echo $row ['u_phone']; ?></td>
                    <td><?php echo $row ['u_gender']; ?></td>
                    <td><?php echo $row ['u_language']; ?></td>
                    <td><a href="edit-record.php?pk=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a></td>
					<td><a href="delete-record.php?pk=<?php echo $row['id']; ?>"><button class="dlt">Delete</button class="btn"></a></td>
                </tr>

        <?php
            }
        ?>
    </table>
            <br>
            <br>
            <button class="btn"><a href="index.php">Back</a></button>
    </center>
</body>
</html>