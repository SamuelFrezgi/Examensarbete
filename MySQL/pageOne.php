<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> kronofogdens dataset with MySQL web application</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Style.css">

    <script src="dataTotal.js"></script>

</head>

<body>
    <nav class="navbar">
        <ul class="nav navbar-nav ">
            <li class="nav-item">
                <a class="nav-link">page One</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pageTwo.php">page Two</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
        </ul>
    </nav>
    <!-- page one-->
    <div id="pageOne" class="tabcontent">
        <h1>Web application with MySQL, presents total</h1>
        <hr style="border: 1px solid #000;">
        <section id="data">
            <form>
                <label for="Indebted_regions"> Chose Regions:</label>
                <select name="Indebted_regions" id="sorting">
                    <option id="BLEKINGE" name='Indebted_regions' value="BLEKINGE">BLEKINGE</option>
                    <option id="DALARNA" name='Indebted_regions' value="DALARNA">DALARNA</option>
                    <option id="GAVLEBORG" name='Indebted_regions' value="GAVLEBORG">GAVLEBORG</option>
                    <option id="GOTLAND" name='Indebted_regions' value="GOTLAND">GOTLAND</option>
                    <option id="HALLAND" name='Indebted_regions' value="HALLAND">HALLAND</option>
                    <option id="JAMTLAND" name='Indebted_regions' value="JAMTLAND">JAMTLAND</option>
                    <option id="JONKOPING" name='Indebted_regions' value="JONKOPING">JONKOPING</option>
                    <option id="KALMAR" name='Indebted_regions' value="KALMAR">KALMAR</option>
                    <option id="KRONOBERG" name='Indebted_regions' value="KRONOBERG">KRONOBERG</option>
                    <option id="NORRBOTTEN" name='Indebted_regions' value="NORRBOTTEN">NORRBOTTEN</option>
                    <option id="OREBRO" name='Indebted_regions' value="OREBRO">OREBRO</option>
                    <option id="OSTERGOTLAND" name='Indebted_regions' value="OSTERGOTLAND">OSTERGOTLAND</option>
                    <option id="OVRIGT" name='Indebted_regions' value="OVRIGT">OVRIGT</option>
                    <option id="SKANE" name='Indebted_regions' value="SKANE">SKANE</option>
                    <option id="SODERMANLAND" name='Indebted_regions' value="SODERMANLAND">SODERMANLAND</option>
                    <option id="STOCKHOLM" name='Indebted_regions' value="STOCKHOLM">STOCKHOLM</option>
                    <option id="UPPSALA" name='Indebted_regions' value="UPPSALA">UPPSALA</option>
                    <option id="VARMLAND" name='Indebted_regions' value="VARMLAND">VARMLAND</option>
                    <option id="VASTERBOTTEN" name='Indebted_regions' value="VASTERBOTTEN">VASTERBOTTEN</option>
                    <option id="VASTERNORRLAND" name='Indebted_regions' value="VASTERNORRLAND">VASTERNORRLAND</option>
                    <option id="VASTMANLAND" name='Indebted_regions' value="VASTMANLAND">VASTMANLAND</option>
                    <option id="VASTRA GOTALAND" name='Indebted_regions' value="VASTRA GOTALAND">VASTRA GOTALAND</option>
                    <option value="Entirely" name='Indebted_regions'>All Regions in Sweden</option>
                </select>
                <button type="button" onclick="getData();"> Get Data</button><br>
            </form>
            <div id="chartData_container">
                <canvas id="myCharyOne"></canvas>
            </div>

        </section>
    </div>



    <script src="../onePageApplikation.js"></script>

</body>

</html>