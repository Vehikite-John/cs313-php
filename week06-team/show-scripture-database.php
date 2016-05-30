<?php
try
{
require("dbConnector.php"); 

$db = loadDatabase(); 
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}

$scriptures = 'SELECT book, chapter, verse, content FROM scriptures';
$topics='SELECT t.name
    FROM scriptures s
    INNER JOIN scriptures_topics st
    ON s.id = st.s_id
    INNER JOIN topics t
    ON st.t_id = t.id';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 06 - Scripture Database</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
        
    </head>
    <body>
        <header id="title">
            <h1>CS 313: Week 6 - Team Readiness Activity</h1>
        </header>
        <p id="assignmentsImg">
            <img src="./scriptures.jpg" alt="Scriptures image"></p></p>
        
        <div class="container">
            <div class="padder">
                <?php
                
                ?>
                <section>
                    <table>
                        <tr>
                            <th>Scripture</th>
                            <th>Content</th>
                            <th>Topic(s)</th>
                        </tr>
                        <?php
                        foreach ($db->query($scriptures) as $row)
                        {
                            echo '<tr><td>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</td>';
                            echo '<td>' . $row['content'] . '</td>';
                            // Source: http://stackoverflow.com/questions/4705814/stripping-last-comma-from-a-foreach-loop
                            $topicstr = array();
                            foreach ($db->query($topics) as $topic)
                            {
                                $topicstr[] = $topic;
                            }
                            $topic = implode(",", $topicstr);
                            echo '<td>' . $topic . '</td>';
                        }
                        ?>
                    </table>
                    
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