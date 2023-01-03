<?php require APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>

<?php

    $host = 'localhost';
    $user = 'postgres';
    $password = 'cetis';
    $dbname = 'testeMVC';

    $dsn = 'pgsql:host=' . $host . ';dbname=' . $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $status = 'Caua';

    $sql = 'SELECT * FROM users WHERE name = :status';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['status' => $status]);
    $users = $stmt->fetchAll();
    foreach($users as $user){
        echo $user->name, '<br>';
    }
    
    ?> 


<?php require APPROOT . '/views/inc/footer.php'; ?>
