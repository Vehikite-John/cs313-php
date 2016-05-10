<?php
// My attempt to automatically show results page didn't work as expected
// session variables are created and instantiated automatically
//if (!empty($_SESSION["gender"]))
//    header("Location: results.php");
//else
//{
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
$txt = "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0";
fwrite($myfile, $txt);
fclose($myfile);
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 03 - PHP Survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
        
    </head>
    <body>
        <header id="title">
            <h1>CS 313: PHP Survey</h1>
        </header>
        <p class="topImg">
            <img src="./survey.jpg" alt="Survey image"></p>
        
        <div class="container">
            <div class="padder">
                <section>
                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="survey.php">Survey</a></p>
                    <h2>Demographics Survey</h2>
                    <p><strong>Note: There is a link below the survey to view the results without taking the survey.</strong><p>
                    
                    <form action="results.php" method="get">
                        <h3>What is your gender?</h3>
                        <input type="radio" name="gender" value="Male" required> Male<br>
                        <input type="radio" name="gender" value="Female"> Female<br>

                        <h3>In what age group are?</h3>
                        <input type="radio" name="age" value="Under 18" required> Under 18<br>
                        <input type="radio" name="age" value="18-35"> 18-35<br>
                        <input type="radio" name="age" value="36-65"> 36-65<br>
                        <input type="radio" name="age" value="Over 65"> Over 65<br>

                        <h3>What is your ethnicity?</h3>
                        <input type="radio" name="ethnicity" value="White" required> White<br>
                        <input type="radio" name="ethnicity" value="Latino or Hispanic"> Latino or Hispanic<br>
                        <input type="radio" name="ethnicity" value="Black or African American"> Black or African American<br>
                        <input type="radio" name="ethnicity" value="Asian or Pacific Islander"> Asian or Pacific Islander<br>
                        <input type="radio" name="ethnicity" value="Other Ethnicity"> Other Ethnicity<br>

                        <h3>What is your favorite color?</h3>
                        <input type="radio" name="color" value="Red" required> Red<br>
                        <input type="radio" name="color" value="Blue"> Blue<br>
                        <input type="radio" name="color" value="Green"> Green<br>
                        <input type="radio" name="color" value="Yellow"> Yellow<br>
                        <input type="radio" name="color" value="Other Color"> Other Color<br>

                        <input type="submit" value="Submit">


                        <p>Click <a href="results.php">here</a> to see the results without voting.</p>
                    </form>
                    
                </section>
            </div>

            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="../assignments.html">Click here to go to John
                    Vehikite's Assignment Page</a>
                </section>
            </div>
        </div>
        <div class="padder">
            <footer>
                <p>
                <span id="copyright">&COPY;JdaVet Web Designs | </span>
                <a href="../index.html">Home</a> |
                <a id="assignments" href="../assignments.html">CS 313 Assignments</a></p>
            </footer>
        </div>
        <script type="text/javascript" src="../javascript.js"></script>
    </body>
</html>