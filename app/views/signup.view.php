<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="<?= ROOT ?>/assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form class="signup-form" method="POST">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger text-center">Fill all fields</div>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?=old_value('username')?>" type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?=old_value('email')?>"type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?=old_value('password')?>" type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input value="<?=old_value('password')?>"type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign Up">
            </div>
        </form>
        <p class="redirect-link">Already have an account? <a href="<?= ROOT ?>/login">Login here</a></p>
    </div>
</body>
</html>


