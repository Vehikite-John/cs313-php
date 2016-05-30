<?php
try
{
require("dbConnector.php"); 

$db = loadDatabase();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

//$v_id = mysql_query("SELECT id FROM vocabulary WHERE spanish = '$spanish'");
//if (!$v_id) {
//    echo 'Could not run query: ' . mysql_error();
//    exit;
//}
//$vocab = mysql_fetch_row($v_id);
//
//$c_id = mysql_query("SELECT id FROM categories WHERE category = '$category'");
//if (!$c_id) {
//    echo 'Could not run query: ' . mysql_error();
//    exit;
//}
//$cat = mysql_fetch_row($c_id);
//
//$newVC = "INSERT INTO vocabulary_categories VALUES ('$vocab','$cat')";


$db->query($newVocab);
//$db->query($v_id);
//$db->query($newVC);

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
                    <h2>Spanish Vocabulary List</h2>
                    <p>
                        <?php
                        foreach ($db->query('SELECT spanish, id FROM vocabulary') as $row)
                        {
                            echo '<a href="./word.php?id=' . $row['id'] . '">' . ucfirst($row['spanish']) . '</a><br><br>';
                        }
                        ?>
                    </p>
                    
                </section>
            </div>

            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="../assignments.html">Click here to go to John
                    Vehikite's CS 313 Assignments Page</a>
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