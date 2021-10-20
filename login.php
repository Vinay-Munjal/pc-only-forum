

<?php
include 'includes/header.php';
include 'includes/topmenu.php';
$type = "button";
?>

<section id="login" class="login">
<h1 class="cred-heading">
   Login
    </h1>
    <form action="" class="cred-form form-horizontal">
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Enter username">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Enter password">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="capcha">5+4</label>
                <input type="number" name="capcha" id="capcha" class="form-control mb-3" placeholder="Solve this to proceed">
            </div>
        </div>
        <div class="col-md-8">
            <button class="btn btn-block main-btn">Login</button> <span class="cred-link">Want to Join this amazing community? <a href="register.php">Register</a></span>
        </div>
    </form>
</section>

<?php
include 'includes/footer.php';
?>