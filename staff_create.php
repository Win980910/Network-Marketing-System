<?php
include_once 'navigation.php';
?>

<?php
include_once 'header.php';
?>

<?php
session_start();
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
                        Add Staff
                        <a href="hrm.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Staff Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_staff" class="btn btn-primary">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>