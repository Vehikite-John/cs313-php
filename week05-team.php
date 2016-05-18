<?php
try
{
    $user = 'php';
    $password = 'php-pass';
    $db = new PDO('mysql:host=localhost;dbname=scriptures', $user, $password);
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CS 313: Week 05 - Team 2 Readiness Activity</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <header id="title">
            <h1>CS 313: Team 2 Readiness Activity</h1>
        </header>
        <p id="mainImg">
            <img src="./scriptures.jpg" alt="LDS Scriptures"></p>
        
        <div class="container">
            <div class="padder">
                <section>
                    <h2>SCRIPTURE RESOURCES</h2>
                    <p>
                        <?php
                        foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
                        {
                            echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . ' -</strong> "';
                            echo $row['content'] . '"<br><br>';
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