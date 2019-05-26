<?php
include_once "user-pass.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=console', $user, $pass);
    foreach($dbh->query('SELECT * from games') as $row) {
        echo "<div>
        <img src={$row['pic']}><br />
        {$row['title']} <br />
        Оценка: {$row['rate']}
        </div>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>