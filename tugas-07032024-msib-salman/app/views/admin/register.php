<div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="<?php echo BASEURL; ?>/admin/register"
                >
            <input type="text" placeholder="Name *" name="nama">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo BASEURL; ?>/admin/register">Create an account!</a></p>
        </form>
    </div>
</div>
