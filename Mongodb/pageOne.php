<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL WebbApplikation</title>
    <link rel="stylesheet" href="../Style.css">
    <script src="../onePageApplikation.js"></script>


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


  


</body>

</html>