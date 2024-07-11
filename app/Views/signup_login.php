

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/signup.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Sign Up</title>
        <style>
            .error{
                color: red;
                margin-left: 200px;
            }
            h5 a{
                text-decoration: none;
                color: white;
            }
        </style>
        
    </head>
    <body>
        <php class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

<!-- this is sign up form -->
            <div class="signup">
                <form action="signup_login/Signup" method="post">
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <h5><a href="<?= base_url('/') ?>">Home</a></h5>
                    <div class="input-block">
                        <input type="text" name="fname" placeholder="Enter your First name" required>
                        <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required>
                    </div>
                    <div class="input-block">
                        <input type="email" name="email" id="email" placeholder="Enter your Email Address" required>
                        <input type="number" name="pnum" id="pnum" placeholder="Enter your Phone Number" required>
                    </div>
                    <div class="input-block">
                        <input type="password" name="pass" id="pass" placeholder="Enter your Password" required>
                        <input type="password" name="cpass" id="cpass" placeholder="Confirm your Passsword" required>
                    </div>
                    <button type="submit" value="register" name="submit">Sign up</button>
                </form>
            </div>

<!-- this is login form for admin? -->
            <div class="login">
                <form action="signup_login/login" method="post">
                    <label for="chk" aria-hidden="true" class="logins">Login</label><label for="chk" aria-hidden="true" class="xbutton"><i class="fa-solid fa-xmark"></i></label>
                    <input type="text" name="username" id="email" placeholder="Enter your Username or Email" required>
                    <input type="text" name="pass" id="pass" placeholder="Enter your Password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>