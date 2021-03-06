<?php
require_once __DIR__.'./core/init.php';
require_once __DIR__.'./includes/header.php';

if (isset($_POST['signup'])) {
    ['signUpEmail' => $email, 'signUpName' => $name, 'signUpPwd' => $pwd] = $_POST;
    $sign_up_error = $getUserManager->validateInputInfo($email,$name,$pwd);
    if (empty($sign_up_error)){
        $getUserManager->register($email,$name,password_hash($pwd,PASSWORD_BCRYPT));
        $getUserManager->login($email,$pwd);
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $home_url = 'home.php';
        header("Location: http://$host$uri/$home_url");
        exit;
    }
}
?>
<h3 class="login-heading mb-4">Join Tato</h3>
<form method="post">
    <div class="form-label-group">
        <input type="text" class="form-control" id="signUpName" name="signUpName" placeholder="Full Name"
            <?php if (isset($_POST['signUpName'])) echo 'value="' . htmlspecialchars($_POST['signUpName']) . '"' ?>
        required>
        <label for="signUpName">Full Name</label>
    </div>
    <div class="form-label-group">
        <input type="email" class="form-control" id="signUpEmail" name="signUpEmail" placeholder="Email address"
            <?php if (isset($_POST['signUpEmail'])) echo 'value="' . htmlspecialchars($_POST['signUpEmail']) . '"' ?>
               required>
        <label for="signUpEmail">Email Address</label>
    </div>

    <div class="form-label-group">
        <input type="password" class="form-control" id="signUpPwd" name="signUpPwd" placeholder="Password" required>
        <label for="signUpPwd">Password</label>
    </div>
    <?php
    if (isset($sign_up_error)) {
        echo '<div class="span-fp-error" style="color:darkred">' . $sign_up_error . '<br></div>';
    }
    ?>
    <input class="btn btn-lg btn-secondary btn-block btn-outline-light text-uppercase font-weight-bold mb-2" type="submit"
           name="signup" value="Count Me In!">
</form>
<a class="btn-link" href="loginpage.php">Already in?</a>

    <!-- LOGIN SIGNUP FOOTER -->
<?php
require_once __DIR__.'./includes/footer.php';
?>