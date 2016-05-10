<?php
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
        <p id="assignmentsImg">
            <img src="./survey-results.png" alt="Survey Results image"></p>
        
        <div class="container">
            <div class="padder">
                <?php
                $results = explode(" ", file_get_contents("results.txt"));
                if (isset($_GET["gender"]) && isset($_GET["age"]))
                {
                    //GENDER
                    if ($_GET["gender"] == "Male")
                    {
                        $_SESSION["gender"] = "Male";
                        $results[0]++;
                    }
                    if ($_GET["gender"] == "Female")
                    {
                        $_SESSION["gender"] = "Female";
                        $results[1]++;
                    }
                    //AGE
                    if ($_GET["age"] == "Under 18")
                    {
                        $_SESSION["age"] = "Under 18";
                        $results[2]++;
                    }
                    if ($_GET["age"] == "18-25")
                    {
                        $_SESSION["age"] = "18-25";
                        $results[3]++;
                    }
                    if ($_GET["age"] == "36-65")
                    {
                        $_SESSION["age"] = "36-55";
                        $results[4]++;
                    }

                    if ($_GET["age"] == "Over 65")
                    {
                        $_SESSION["age"] = "Over 65";
                        $results[5]++;
                    }

                    // ETHNICITY
                    if ($_GET["ethnicity"] == "White")
                        $results[6]++;
                    if ($_GET["ethnicity"] == "Latino or Hispanic")
                        $results[7]++;
                    if ($_GET["ethnicity"] == "Black or African American")
                        $results[8]++;
                    if ($_GET["ethnicity"] == "Asian or Pacific Islander")
                        $results[9]++;
                    if ($_GET["ethnicity"] == "Other Ethnicity")
                        $results[10]++;

                    // COLOR
                    if ($_GET["color"] == "Red")
                        $results[11]++;
                    if ($_GET["color"] == "Blue")
                        $results[12]++;
                    if ($_GET["color"] == "Green")
                        $results[13]++;
                    if ($_GET["color"] == "Yellow")
                        $results[14]++;
                    if ($_GET["color"] == "Other Color")
                        $results[15]++;
                } 
                $myfile = fopen("results.txt", "w") or die("Unable to open file!");
                $text = implode(" ", $results);
                //echo $text;
                fwrite($myfile, $text);
                fclose($myfile);
                ?>
                <section>
                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="survey.php">Survey</a> >
                        <a href="results.php">Results</a></p>
                    <h2>Survey Results</h2>
                    
                    <h3>Gender</h3>
                    <p>Male: <?php echo $results[0]; ?><br></p>
                    <p>Female: <?php echo $results[1]; ?><br></p>

                    <h3>Age</h3>
                    <p>Under 18: <?php echo $results[2]; ?></p>
                    <p>18-35: <?php echo $results[3]; ?></p>
                    <p>36-65: <?php echo $results[4]; ?></p>
                    <p>Under 65: <?php echo $results[5]; ?></p>

                    <h3>Ethnicity</h3>
                    <p>White: <?php echo $results[6]; ?></p>
                    <p>Latino or Hispanic: <?php echo $results[7]; ?></p>
                    <p>Black or African American: <?php echo $results[8]; ?></p>
                    <p>Asian or Pacific Islander: <?php echo $results[9]; ?></p>
                    <p>Other Ethnicity: <?php echo $results[10]; ?></p>

                    <h3>Color</h3>
                    <p>Red: <?php echo $results[11]; ?></p>
                    <p>Blue: <?php echo $results[12]; ?></p>
                    <p>Green: <?php echo $results[13]; ?></p>
                    <p>Yellow: <?php echo $results[14]; ?></p>
                    <p>Other Color: <?php echo $results[15]; ?></p>
                    
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