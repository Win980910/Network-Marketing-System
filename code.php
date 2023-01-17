<?php
session_start();
require 'db_conn.php';

if (isset($_POST['delete_staff'])) {
    $staff_id = mysqli_real_escape_string($conn, $_POST['delete_staff']);

    $query = "DELETE FROM staff WHERE id='$staff_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Staff Deleted Successfully.";
        header("Location: hrm.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Staff Not Deleted.";
        header("Location: hrm.php");
        exit(0);
    }
}

if (isset($_POST['update_staff'])) {
    $staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    $query = "UPDATE staff SET name='$name', contact='$contact', position='$position' WHERE id='$staff_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Staff Updated Successfully.";
        header("Location: hrm.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Staff Not Updated.";
        header("Location: hrm.php");
        exit(0);
    }
}

if (isset($_POST['save_staff'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    $query = "INSERT INTO staff (name, contact, position) VALUES ('$name', '$contact', '$position')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Staff Created Successfully.";
        header("Location: hrm.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Staff Not Created.";
        header("Location: hrm.php");
        exit(0);
    }
}
