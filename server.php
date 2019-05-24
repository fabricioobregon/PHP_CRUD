<?php
    //initialize variables
    session_start();
    $id = 0;
    $name = "";
    $address = "";
    $edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root','527527527','crud');

    //if save button is clicked
    if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $query = "INSERT INTO info (name,address) VALUES ('$name', '$address')";
    mysqli_query($db,$query);
    $_SESSION['msg'] = "Address Saved";
    header('location: crud.php');
    }

    //update records
    if (isset($_POST['update'])) {
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $id = ($_POST['id']);

    mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id='$id' ");
    $_SESSION['msg'] = "Address Updated";
    header('location: crud.php');
}
    //delete records
    if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['msg'] = "Address Deleted";
    header('location: crud.php');
}
    //retrieve records
    $select_query = "SELECT * FROM info";
    $results = mysqli_query($db,$select_query);

?>


