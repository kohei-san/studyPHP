<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=test_pdo', 'root', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'select * from foods;';
    // $result = $db->exec($sql);
    $result = $db->query($sql);

    while ($row = $result->fetch()){
        print "$row[name] \t $row[price] \t $row[stock] <br>";
    }
    // var_dump($result);

}catch(PDOException $e){
    print $e->getMessage();
}