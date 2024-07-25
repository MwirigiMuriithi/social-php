<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?=ROOT?>/assets/css/login.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" method="post">
        <?php if (!empty($errors)): ?>
                <div class="alert alert-danger text-center"><?=implode("<br>", $errors)?></div>
            <?php endif; ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <p class="redirect-link">Don't have an account yet? <a href="<?=ROOT?>/signup">Sign up here</a></p>
    </div>
</body>
</html>

