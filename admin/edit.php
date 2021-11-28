<?php
include('connection.php');

if (isset($_POST['event'])) {
    $specialty = $_POST['specialty'];
    $event = $_POST['event'];
    $id = $_POST['id'];

    // echo "$specialty";
    $query_run = mysqli_query($connect, "update login.event set specialty = '$specialty', event = '$event' where id = '$id'");

    if ($query_run) {
        echo "update success";
    } else {
        echo "error";
    }

    // echo "edit success";
}
