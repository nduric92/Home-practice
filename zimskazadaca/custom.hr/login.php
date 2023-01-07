<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'; ?>
    </head>
    <body>
        <div class="grid">
            <?php include_once 'navbar.php'; ?>   

            <div class="large-6 medium-6 small-12 cell">
                <img src="slike/pp.jpg" alt="" style="width: 100%; max-height: 300px; object-fit:cover;">
            </div>

             <!-- login form start -->
            <div class="body">
                <form action="">
                    <!-- Headings for the form -->
                    <div class="headingsContainer">
                        <h3>Sign in</h3>
                        <p>Sign in with your username and password</p>
                    </div>

                    <!-- Main container for all inputs -->
                    <div class="mainContainer">
                        <!-- Username -->
                        <label for="username">Your username</label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <br><br>

                        <!-- Password -->
                        <label for="pswrd">Your password</label>
                        <input type="password" placeholder="Enter Password" name="pswrd" required>

                        <!-- sub container for the checkbox and forgot password link -->
                        <div class="subcontainer">
                            <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                            </label>
                            <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                        </div>


                        <!-- Submit button -->
                        <button type="submit">Login</button>

                        <!-- Sign up link -->
                        <p class="register">Not a member?<a href="#">Register here!</a></p>
                    </div>
                </form>
            </div>
            
        </div>
        <script src="custom.js"></script>
    </body>
</html>