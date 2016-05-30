<?php
try
{
    require("dbConnector.php"); 

    $db = loadDatabase(); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topic = $_POST['topic'];
    
    $scriptures = "INSERT INTO scriptures (book, chapter, verse, content)
        VALUES ('" . mysql_escape_string($book) . "',
        '" . mysql_escape_string($chapter) . "',
        '" . mysql_escape_string($verse) . "',
        '" . mysql_escape_string($content) . "')";
    
    // query for scripture id
    $s_id = "SELECT id FROM scriptures WHERE book = " . mysql_escape_string($book);
    
    $scriptures_topics = "INSERT INTO scriptures_topics
            VALUES ('')";
    // use exec() because no results are returned
    $db->exec($scriptures);
    $db->exec($s_id);
    $db->exec($scriptures_topics);
    //echo "New record created successfully";
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 06 - Team Activity</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
        
    </head>
    <body>
        <header id="title">
            <h1>CS 313: Add Scripture to Database</h1>
        </header>
        <p class="topImg">
            <img src="./scriptures.jpg" alt="Scriptures image"></p>
        
        <div class="container">
            <div class="padder">
                <section>
                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="scripture-form.php">Survey</a></p>
                    <h2>Add a Scripture to the Scripture Database!</h2>
                    
                    <form action="show-scripture-database.php" id="scripture" method="post">
                        <h3>Book</h3>
                        <input type="text" name="book" placeholder="Ex: John" required><br>
                        
                        <h3>Chapter</h3>
                        <input type="text" name="chapter" placeholder="Ex: 3" required><br>
                        
                        <h3>Verse</h3>
                        <input type="text" name="verse" placeholder="Ex: 16" required><br>
                        
                        <h3>Content</h3>
                        <textarea rows="4" cols="50" name="content" form="scipture" placeholder="Ex: For God so loved the world..."></textarea>
                        
                        <h3>Topic</h3>
                        <?php
                        foreach ($db->query('SELECT name FROM topics') as $row)
                        {
                            echo '<input type="checkbox" name="topic" value="' . $row['name'] . '">' . ucfirst($row['name']) . '<br>';
                        }
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