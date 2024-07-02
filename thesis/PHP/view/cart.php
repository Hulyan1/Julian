<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../../CSS/userprof.css">
        <title>Document</title>
    </head>
    <body>
     <header>
            <nav>
                <div class="logo">
                    <a href="../../index.php">
                        <img src="../IMG/logo.png" alt="">
                    </a>
                </div>
                <ul class="links">
                    <li>
                        <a href="../../index.php">Home</a>
                    </li>   
                    <li>
                        <a href="gearlibrary.php">Gear Library</a>
                    </li>
                    <li>
                        <a href="community.php">EIM Community</a>
                    </li>
                    <li>
                        <a href="#">Customize</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    
                    <div class="logn">
                        <a href="signup_login.php" ><i class="fa-solid fa-user-plus"></i><a>
                    </div>
                </ul>
            </nav>
        </header>
        <div class="cartp">
            <div class="text">
                <h1><i class="fa-solid fa-cart-shopping"></i> My Cart</h1>
            </div>
            <div class="ctable">
                <table>
                    <tr class="ctitle">
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>                 
                   
                    <tr>
                        <td>
                            <div class="card-info">
                                <img src="../../IMG/galaxy.png" alt="">
                                <div class="ctext">
                                    <h3>Galaxy Blue</h3>
                                </div>
                            </div>
                        </td>
                        <td>    
                            <div class="inputn">
                                <input type="number" value="1">
                            </div>
                        </td>
                        <td class="cprice">9,899</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>

</html>