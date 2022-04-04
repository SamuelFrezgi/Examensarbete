<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL WebbApplikation</title>
    <link rel="stylesheet" href="../Style.css">


</head>

<body>
    <div id="topnav">
        <button class="tablink" onclick="openPage('Home',this)">Page one </button>
        <button class="tablink" onclick="openPage('News',this)" id="defaultOpen">Page Two</button>
    </div>
    <div id="Home" class="tabcontent">
        <h3>Home</h3>
        <p>Home is where the heart is..</p>
    </div>

    <div id="News" class="tabcontent">
        <h3>News</h3>
        <p>Some news this fine day!</p>
    </div>


    <script>
        function openPage(pageName, elmnt) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            //elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


</body>

</html>