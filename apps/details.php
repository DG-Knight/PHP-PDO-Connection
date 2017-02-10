<?php
if (isset($_POST['id']) && isset($_POST['id']) != "") {
    require '../libs/lib.php';
    $user_id = $_POST['id'];

    $object = new CRUD();

    echo $object->Details($user_id);
}
?>
