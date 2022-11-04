<?php require APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>

<?php

    $host = 'localhost';
    $user = 'postgres';
    $password = 'cetis';
    $dbname = 'testeMVC';

    $dsn = 'pgsql:host=' . $host . ';dbname=' . $dbname;

    $pdo = new PDO($dsn, $user, $password);

    $status = 'Caua';

    $sql = 'SELECT * FROM users WHERE name = :status';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['status' => $status]);
    $users = $stmt->fetchAll();
    ?> 

    <h1><?php print_r ($users); ?></h1>
<?php require APPROOT . '/views/inc/footer.php'; ?>
