<?php
try
{
require("dbConnector.php"); 

$db = loadDatabase(); 
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crestmont School Spanish Vocabulary</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    </head>
    <body>
        <header id="title">
            <h1>Crestmont School Spanish Vocabulary</h1>
        </header>
        <p id="mainImg">
            <img src="../images/espanol.jpg" alt="Spanish image"></p>
        
        <div class="container">
            <div class="padder">
                <section>
                    <h2>Spanish Vocabulary List</h2>
                    <p>
                        <?php
                        foreach ($db->query('SELECT spanish_word, spanish_id FROM spanish_words') as $row)
                        {
                            echo '<a href="./word.php?id=' . $row['spanish_id'] . '">' . ucfirst($row['spanish_word']) . '</a><br><br>';
                        }
                        ?>
                    </p>
                    
                </section>
            </div>

            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="./assignments.html">Click here to go to John
                    Vehikite's CS 313 Assignments Page</a>
                </section>
            </div>
        </div>
        <div class="padder">
            <footer>
                <p>
                <span id="copyright">&COPY;JdaVet Web Designs | </span>
                <a href="index.html">Home</a> |
                <a id="assignments" href="assignments.html">CS 313 Assignments</a></p>
            </footer>
        </div>
        <script type="text/javascript" src="javascript.js"></script>
    </body>