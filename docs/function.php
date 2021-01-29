<?php if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    ?>
        <h1><?= $name ?></h1>
        <h1><?= $phone ?></h1>
        <h1><?= $email ?></h1>
        <p><?= $msg ?></p>
    <?php
}