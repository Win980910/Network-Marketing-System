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

<div class="container">

    <?php include('message.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Staff
                        <a href="hrm.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $staff_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM staff WHERE id='$staff_id' ";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $staff = mysqli_fetch_array($query_run);
                    ?>

                            <form action="code.php" method="POST">
                                <input type="hidden" name="staff_id" value="<?= $staff['id']; ?>">

                                <div class="mb-3">
                                    <label>Staff Name</label>
                                    <input type="text" name="name" value="<?= $staff['name']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Contact</label>
                                    <input type="text" name="contact" value="<?= $staff['contact']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Position</label>
                                    <input type="text" name="position" value="<?= $staff['position']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_staff" class="btn btn-primary">Save Record</button>
                                </div>

                            </form>

                    <?php
                        } else {
                            echo "<h4>No Such ID Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>