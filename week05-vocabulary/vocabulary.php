<?php
try
{
require("dbConnector.php"); 



$db = loadDatabase();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!empty($_POST['spanish']))
{
$spanish = $_POST['spanish'];
$english = $_POST['english'];
$image = $_POST['image'];
$category = $_POST['category'];

//$spanish = mysqli_real_escape_string($db, $_POST['spanish']);
//$english = mysqli_real_escape_string($db, $_POST['english']);
//$image = mysqli_real_escape_string($db, $_POST['image']);
//$category = mysqli_real_escape_string($db, $_POST['category']);

$newVocab = "INSERT INTO vocabulary (spanish, english, image)
    VALUES ('$spanish', '$english', '$image');";

$newVC = "INSERT INTO vocabulary_categories
    VALUES
    ((SELECT id FROM vocabulary WHERE spanish = '$spanish'),
    (SELECT id FROM categories WHERE category = '$category'))";


$db->query($newVocab);
$db->query($newVC);
}

} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}

//$db = loadDatabase(); 


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
<!--                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >-->
<!--                        <a href="vocabulary-form.php">Add Vocabulary</a> >-->
                        <a href="vocabulary.php">Home</a></p>
                    <h2 style="text-align: center">Spanish Vocabulary List</h2>
                    <h3 style="text-align: center">Choose a word for more information</h3>
                    <p>
                        <?php
                        foreach ($db->query('SELECT spanish, id, image FROM vocabulary') as $row)
                        {
                            echo '<h3 id="vocab" style="text-align: center"><a href="./word.php?id=' . $row['id'] . '">' . ucfirst($row['spanish']) . '</h3>';
                            echo '<center><img src="' . $row['image'] . '" width="20%"></center></a><br><br>';
                        }
                        ?>
                    </p>
                    
                </section>
            </div>

<!--            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="vocabulary-form.php">Click here to add a word to the vocabulary list.</a>
                </section>
            </div>
        </div>
        <div class="padder">-->
            <footer>
                <p>
                <span id="copyright">&COPY;JdaVet Web Designs | </span>
<!--                <a href="../index.html">Home</a> |
                <a id="assignments" href="../assignments.html">CS 313 Assignments</a></p>-->
            </footer>
        </div>
        <script type="text/javascript" src="../javascript.js"></script>
    </body>