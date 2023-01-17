<?php
include_once 'navigation.php';
?>

<?php
include_once 'header.php';
?>

<?php
require 'db_conn.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<h2 class="page-title">Human Resource Management</h2>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Staff Record
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

                            <div class="mb-3">
                                <label>Staff Name</label>
                                <p class="form-control">
                                    <?= $staff['name']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Contact</label>
                                <p class="form-control">
                                    <?= $staff['contact']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Position</label>
                                <p class="form-control">
                                    <?= $staff['position']; ?>
                                </p>
                            </div>

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