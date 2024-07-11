<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/userprof.css') ?>">
        <title>Document</title>
    </head>
    <body>
     <header>
            <nav>
                <div class="logo">
                    <a href="<?= base_url('/') ?>">
                        <img src="<?= base_url('assets/images/logo.png')?>" alt="">
                    </a>
                </div>

                <ul class="links">
                    <li>
                        <a href="<?= base_url('/') ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?= base_url('/gearlibrary') ?>">Gear Library</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/community') ?>">EIM Community</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/customize') ?>">Customize</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/shop') ?>">Shop</a>
                    </li>

                    <div class="logn">
                        <a href="<?= base_url('/signup_login') ?>" ><i class="fa-solid fa-user-plus"style="color: white;"></i><a>
                    </div>
                </ul>
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
                                <img src="<?= base_url('assets/images/galaxy.png')?>" alt="">
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