<?php
session_start();
include('configs/config.php');
include('configs/codeGen.php');

if (isset($_POST['reset_pwd'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $err = 'Invalid Email';
    }
    $checkEmail = mysqli_query($mysqli, "SELECT `eamil` FROM `admin` WHERE `email` = '" . $_POST['email'] . "'") or exit(mysqli_error($mysqli));
    if (mysqli_num_rows($checkEmail) > 0) {
      //exit('This email is already being used');
      //Reset Password
      $token = $_POST['token'];
      $email = $_POST['email'];
      $query = "INSERT INTO password_resets (email, token) VALUES (?,?)";
      $reset = $mysqli->prepare($query);
      $rc = $reset->bind_param('ss', $email, $token);
      $reset->execute();
      if ($reset) {
        $success = "Password Reset Instructions Sent To Your Email";
        // && header("refresh:1; url=index.php");
      } else {
        $err = "Please Try Again Or Try Later";
      }
    } else {
      $err = "No account with that email";
    }
  }

require_once('partials/_head.php');
?>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">KEA Hotel ERP - Admin Module</h1>
                        <p class="">Provide Your Email To Reset Password.</p>
                        <form method="POST" class="text-left">
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="email" type="email" class="form-control">
                                    <input name="token" value="<?php echo $tk; ?>" type="hidden" class="form-control">
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" name="reset_pwd" class="btn btn-primary" value="">Reset Password</button>
                                    </div>
                                </div>
                                <p class="signup-link">Remebered Password ? <a href="index.php">Sign In</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>