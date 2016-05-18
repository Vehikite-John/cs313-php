<?php
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
?>

<html>
    <body>
        <?php
            try
            {
                $user = 'php';
                $password = 'php-pass';
                $db = new PDO('mysql:host=127.0.0.1;dbname=week05_prepare', $user, $password);
            } catch (Exception $ex) {
                echo 'Error!: ' . $ex->getMessage();
                die();
            }
            foreach ($db->query('SELECT username, password FROM user') as $row)
            {
                echo 'user: ' . $row['username'];
                echo ' password: ' . $row['password'];
                echo '<br />';
            }
        ?>
    </body>
</html>