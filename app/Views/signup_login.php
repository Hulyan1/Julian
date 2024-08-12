

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/signup.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Sign Up</title>
        <style>
            /* Simple styling for modal */
            #notificationModal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .modal-content {
                padding: 20px;
                border-radius: 5px;
                position: relative;
                text-align: center;
                width: 300px;
            }
            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                cursor: pointer;
                font-size: 18px;
            }
            h5 a{
                text-decoration: none;
                color: white;
            }
        </style>
        
    </head>
        <php class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

<!-- this is sign up form -->
            <div class="signup">
                <form action="<?= base_url("/account/user") ?>" method="post">
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
                        <input type="password" name="cpass" id="cpass" placeholder="Confirm your Password">
                    </div>
                    <button type="submit" value="register" name="submit">Sign up</button>
                </form>             

                <!-- Modal for errors -->
               
                <div id="notificationModal" style="display: none;">
                    <div class="modal-content">
                        <span class="close-btn" onclick="closeModal()">&times;</span>
                        <p id="modalMessage"></p>
                    </div>
                </div>
            </div>
            

<!-- this is login form for admin? -->
            <div class="login">
                <form action="<?= base_url("/account/accountLogin") ?>" method="post">
                    <label for="chk" aria-hidden="true" class="logins">Login</label><label for="chk" aria-hidden="true" class="xbutton"><i class="fa-solid fa-xmark"></i></label>
                    <input type="text" name="username" id="email" placeholder="Enter your Email" required>
                    <input type="text" name="pass" id="pass" placeholder="Enter your Password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>

        <script>
            function showModal(message, type) {
                const modal = document.getElementById('notificationModal');
                const modalContent = document.querySelector('.modal-content');

                document.getElementById('modalMessage').innerText = message;
                
                if (type === 'success') {
                    modalContent.style.backgroundColor = '#d4edda'; // Green background for success
                    modalContent.style.color = '#155724'; // Dark green text for success
                } else if (type === 'error') {
                    modalContent.style.backgroundColor = '#f8d7da'; // Red background for error
                    modalContent.style.color = '#721c24'; // Dark red text for error
                }

                modal.style.display = 'flex';
            }

            function closeModal() {
                document.getElementById('notificationModal').style.display = 'none';
            }

            <?php if (session()->getFlashdata('success')): ?>
                showModal('<?= session()->getFlashdata('success'); ?>', 'success');
            <?php elseif (session()->getFlashdata('error')): ?>
                showModal('<?= session()->getFlashdata('error'); ?>', 'error');
            <?php endif; ?>
        </script>

    </body>
</html>