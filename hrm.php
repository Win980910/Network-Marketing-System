<?php
include_once 'navigation.php';
?>

<?php
include_once 'header.php';
?>

<?php
session_start();
require 'db_conn.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<h2 class="page-title">Human Resource Management</h2>

<div class="container mt-4">

    <?php
    include('message.php');
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Staff List
                        <a href="staff_create.php" class="btn btn-primary float-end">Add Staff</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Staff Name</th>
                                <th>Contact</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM staff";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $staff) {

                            ?>
                                    <tr>
                                        <td><?= $staff['id']; ?></td>
                                        <td><?= $staff['name']; ?></td>
                                        <td><?= $staff['contact']; ?></td>
                                        <td><?= $staff['position']; ?></td>
                                        <td>
                                            <a href="staff_view.php?id=<?= $staff['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="staff_edit.php?id=<?= $staff['id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_staff" value="<?= $staff['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                            <?php

                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>