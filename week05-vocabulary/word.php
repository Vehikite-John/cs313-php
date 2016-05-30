<?php
try
{
require("dbConnector.php"); 

$db = loadDatabase(); 
$id = $_GET['id'];

$sql = "SELECT v.spanish, v.english, v.image, c.category FROM vocabulary v
    INNER JOIN vocabulary_categories vc
    ON v.id = vc.v_id
    INNER JOIN categories c
    ON vc.c_id = c.id
    WHERE v.id = '$id'";
 
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
                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="vocabulary-form.php">Add Vocabulary</a> >
                        <a href="vocabulary.php">Vocabulary List</a></p>
                    <?php 
                    foreach ($db->query($sql) as $row) {
                        echo '<h2>' . ucfirst($row['spanish']) . '</h2>';
                        echo '<p><img src="' . $row['image'] . '"></p>';
                        echo '<h3>' . ucfirst($row['english']) . '</h3>';
                        echo '<p><strong>Category: ' . ucfirst($row['category']) . '</strong></p>';
                    //echo $_GET['id'];
                    }
                    ?>
                    
                </section>
            </div>
            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="vocabulary-form.php">Click here to add a word to the vocabulary list.</a>
                </section>
            </div>
            
            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="vocabulary.php">Click here to go back to the vocabulary page.</a>
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