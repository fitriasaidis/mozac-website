<html>
<head>
    <title>Homepage Student Page</title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top ↑</button>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 80px from the top of the document, show the button
        window.onscroll = function() 
        {
            scrollFunction()
        };

        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) 
        {
            mybutton.style.display = "block";
        } 
        else 
        {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() 
        {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

<aside>
    <nav>
        <ul>
            <li>
                <a href = "teacherinformationstudent.php">ABOUT TEACHERS</a>   
            </li>
            <li>
                <a href = "teacheravailabilitystudent.php">TEACHERS AVAILABILITY</a>
            </li>
            <li>
                <a href = "studentappointment.php">MY APPOINTMENT</a>
            </li>
            <li>
                <a href = "studentprofile.php">MY PROFILE</a>
            </li>
            <li>
                <a href = "logout.php">LOGOUT</a>
            </li>
        </ul>
    </nav>
</aside>

</body>
</html>