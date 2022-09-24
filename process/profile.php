?>
<?php include_once("db.php"); ?>
<?php include_once("index.php"); ?>

<div id="content-wrapper" class="d-flex-column">

    <div id="content">
        <?php include_once("registerPage.php"); ?>
        <div class="container-fluid">
            <form method="post">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $_SESSION['name']?> class="form-control">
        </div>