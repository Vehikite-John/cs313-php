<?php
try
{
    require("dbConnector.php"); 

$db = loadDatabase();    
    // query for scripture id
//    $s_id = "SELECT id FROM scriptures WHERE book = " . mysql_escape_string($book);
//    
//    $scriptures_topics = "INSERT INTO scriptures_topics
//            VALUES ('')";
//    // use exec() because no results are returned
//    $db->exec($scriptures);
//    $db->exec($s_id);
//    $db->exec($scriptures_topics);
    //echo "New record created successfully";
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 06 - Database Modification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
        
    </head>
    <body>
        <header id="title">
            <h1>CS 313: Add Vocabulary to Database</h1>
        </header>
        <p class="topImg">
            <img src="../images/espanol.jpg" alt="Spanish image"></p>
        
        <div class="container">
            <div class="padder">
                <section>
                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="scripture-form.php">Survey</a></p>
                    <h2>Add Vocabulary to the Crestmont Spanish Database!</h2>
                    
                    <form action="vocabulary.php" id="vocabulary" method="post">
                        <h3>Spanish Word</h3>
                        <input type="text" name="spanish" placeholder="Ex: arbol" required><br>
                        
                        <h3>English Translation</h3>
                        <input type="text" name="english" placeholder="Ex: tree" required><br>
                        
                        <h3>Image URL</h3>
                        <input type="text" name="image" placeholder="Ex: http://www.trees.com" required>
                        
                        <h3>Category</h3>
                        <?php
                        foreach ($db->query('SELECT category FROM categories') as $row)
                        {
                            echo '<input type="checkbox" name="category" value="' . $row['category'] . '">' . ucfirst($row['category']) . '<br>';
                        }
                        echo '<br><br>';
                        ?>
                        
                        <input type="submit" value="Submit">
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