<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/ingvaroli/jokes/db/dbConnect.php';

    try{
        $sql = $pdo->query('SELECT id, name FROM categories WHERE id = :id');
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching category details.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/ingvaroli/jokes/error/error.php';
        exit();
    }

    $row = $s->fetch();
?>