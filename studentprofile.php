<?php
    session_start();
    include("headstudent.php");
    include ('inc/connect.php'); 
?>
<html>
    <head>
        <title>Student Profile</title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">

    </head>
    <body class = "profile">
        <section>
        <?php
            $username= $_SESSION['username'];

            $sql= "SELECT * FROM student where susername='$username'";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row= $result->fetch_assoc())
                {
                    echo "<table>";
                    echo "<img width = '160px' height = '200px' src='data:image/jpg;charset=utf8;base64,"?><?php echo base64_encode($row['img']); ?><?php echo"' />";
                    echo "<p>";
                    echo "<p><a href = 'updatestudentprofile.php'><input type = 'button' value = 'UPDATE PROFILE'></a></p>";
                    echo "<tr><th>Username: </th><td>".$row['susername']."</td></tr>";
                    echo "<tr><th>Name: </th><td>".$row['name']."</td></tr>";
                    echo "<tr><th>Email: </th><td>".$row['email']."</td></tr>";
                    echo "<tr><th>Phone No: </th><td>".$row['phone']."</td></tr>";
                    echo "<tr><th>Gender: </th><td>".$row['gender']."</td></tr>";
                    echo "<tr><th>Class: </th><td>".$row['class']."</td></tr>";
                }
            
                echo "</table><br><br>";
            }
            else
            {
            echo "<br>0 result<br><br>";
            }

        ?>
        </section>
        <?php
            include("footer.php");
        ?>
    </body>
</html>