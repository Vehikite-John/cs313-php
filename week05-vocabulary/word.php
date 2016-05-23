<?php
try
{
require("dbConnector.php"); 

$db = loadDatabase(); 
    $sql = '';
    if ($_GET['id'] == 1)
        // TODO: USE FUNCTION TO REDUCE REDUNDANT CODE
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 1;';
    elseif ($_GET['id'] == 2)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 2;';
    elseif ($_GET['id'] == 3)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 3;';
    elseif ($_GET['id'] == 4)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 4;';
    elseif ($_GET['id'] == 5)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 5;';
    elseif ($_GET['id'] == 6)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 6;';
    elseif ($_GET['id'] == 7)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 7;';
    elseif ($_GET['id'] == 8)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 8;';
    elseif ($_GET['id'] == 9)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 9;';
    elseif ($_GET['id'] == 10)
        $sql = 'SELECT ew.english_word, i.image, spanish_word FROM spanish_words sw
            INNER JOIN spanish_english_image sei
            ON sw.spanish_id = sei.spanish_id
            INNER JOIN english_words ew
            ON sei.english_id = ew.english_id
            INNER JOIN images i
            ON sei.image_id = i.image_id
            WHERE sw.spanish_id = 10;';
        
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
                    <?php 
                    foreach ($db->query($sql) as $row) {
                        echo '<h2>' . ucfirst($row['spanish_word']) . '</h2>';
                        echo '<p><img src="../images/' . $row['image'] . '"></p>';
                        echo '<h3>' . ucfirst($row['english_word']) . '</h3>';
                    }
                    ?>
                    
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