<?php 
$title = "User login"; // define title addon
require "entry/assets/user-login.asset.php"; // backend
require "entry/views/partials/head.php"; // front end template
?>

<!-- HTML section -->
<form action='login' method="post" class="login100-form validate-form">
    <span class="login100-form-title">
        User Login
    </span>

    <div class="wrap-input100 validate-input" data-validate="Username is required">
        <input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
    </div>
    <div class="help-block">
        <p><?php echo $username_err; ?></p>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    <div class="help-block">
        <p><?php echo $password_err; ?></p>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
            Login
        </button>
    </div>
    <!-- 
    <div class="text-center p-t-12">
        <span class="txt1">
            Forgot
        </span>
        <a class="txt2" href="#">
            Username / Password?
        </a>
    </div> -->

    <div class="text-center p-t-136">
        <a class="txt2" href="register">
            Buat Akun
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
        <br>
        <a class="txt2" href="../admin/login">
            Login sebagai Admin
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>

<?php require "entry/views/partials/footer.php"; ?>