<?php
try
{
    require("dbConnector.php");
    require("password.php");

$db = loadDatabase();    
 
} catch (Exception $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 07 - Team Readiness Activity</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
        
    </head>
    <body>
        <header id="title">
            <h1>CS 313: Week 07 Team Readiness Activity</h1>
        </header>
        <p class="topImg">
            <img src="../images/password.jpg" alt="Password image"></p>
        
        <div class="container">
            <div class="padder">
                <section>
<!--                    <p><a href="../index.html">Home</a> > 
                        <a href="../assignments.html">Assignments</a> >
                        <a href="login-form.php">Add Vocabulary</a></p>-->
                    <h2>Please create a username and password.</h2>
                    
                    <form action="login.php" id="vocabulary" method="post">
                        <h3>Username</h3>
                        <input type="text" name="username" required><br>
                        
                        <h3>Password</h3>
                        <input type="password" name="password" placeholder="Ex: tree" required><br>
                        
                        <input type="submit" value="Submit">
                    </form>
                    
                </section>
            </div>

            <div class="padder">
                <section id="link">
                    <a class="bottom-link" href="vocabulary.php">Click here to see the vocabulary list.</a>
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