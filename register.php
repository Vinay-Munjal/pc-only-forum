
<?php
include 'includes/header.php';
include 'includes/topmenu.php';
$type = "button";
?>

<section id="register" class="register">
<h1 class="cred-heading">
   Register
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
                <label class="control-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Enter email">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="mobile">Mobile</label>
                <input type="number" name="mobile" id="mobile" class="form-control mb-3" placeholder="Enter mobile">
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
                <label class="control-label" for="con_password">Confirm Password</label>
                <input type="password" name="con_password" id="con_password" class="form-control mb-3" placeholder="Confirm password">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="capcha">5+4</label>
                <input type="number" name="capcha" id="capcha" class="form-control mb-3" placeholder="Solve this to proceed">
            </div>
        </div>
        <div class="col-md-8">
            <button class="btn btn-block main-btn">Register</button> <span class="cred-link">Already an amazing member? <a href="login.php">Login</a></span>
        </div>
    </form>
</section>

<?php
include 'includes/footer.php';
?>