

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/assets/web/css/base.css">
    <link rel="stylesheet" href="./public/assets/web/css/main.css">
    <link rel="stylesheet" href="./public/assets/web/css/grid.css">
    <link rel="stylesheet" href="./public/assets/web/css/responsive.css">
    <link rel="stylesheet" href="./public/assets/web/fonts/fontawesome-free-6.2.0/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="./public/assets/web/fonts/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <!-- Header -->
        
        <div class="header">
            <!-- Header Top -->
            <div class="header__top">
                <div class="grid wide">
                    <div class="header__top-content">
                        <ul class="header__social-list none__mobile">
                            <li class="header__social-item">
                                <a href="" class="header__social-link">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="header__social-item">
                                <a href="" class="header__social-link">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="header__social-item">
                                <a href="" class="header__social-link">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                        
                        
                        <ul class="header__user-list">
                            <!-- header Search -->
                            <form action="index.php?controller=shopgrid&action=search&module=web" method="POST" class="header__user-item header__search">
                                <input type="text" name="key" placeholder="Nhập từ khóa..." class="header__search-input">
                                <button type="submit" class="header__search-btn">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                            <li class="header__user-item none__mobile">
                                <a href="index.php?controller=authentication&action=showlogin&module=web" class="header__user-link">
                                    <i class="header__user-login-icon fa-solid fa-user"></i>
                                    <?php if(!isset($_SESSION['user'])) {?>
                                        <a href="index.php?controller=authentication&action=showlogin&module=web" class="header__user-login">
                                            Đăng nhập
                                        </a> 
                                    <?php }else {?>

                                        <a href="#" class="header__user-login">
                                            <?php echo isset($_SESSION['user']) ? $_SESSION['user']['name'] : 'Đăng Nhập'?>
                                        </a>

                                        <a href="index.php?controller=authentication&action=logout&module=web" class="header__user-login">
                                            --  Đăng xuất
                                        </a>
                                    <?php  }  ?>
                                </a>
                            </li>
                            <li class="header__user-item header__cart">
                                <a href="index.php?controller=cart&action=index&module=web" class="header__user-link">
                                    <!-- <i class="ti-shopping-cart header__user-cart-icon"></i> -->
                                    <i class="header__user-cart-icon fa-solid fa-cart-shopping"></i>
                                    <!-- <span class="header__user-cart">Cart</span> -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header__menu">
                <div class="grid wide">
                    <div id="header__menu" class="header__menu-content">
                        <a href="index.php?controller=homepage&action=index&module=web" class="header__logo">
                            <img src="./public/assets/web/img/Logo.webp" alt="Logo" class="header__logo-img">
                        </a>

                        <div id="menu__mobile" class="header__menu_icon none__tablet show__mobile">
                            <i class="ti-menu"></i>
                        </div>
                        
                        <ul id="header__nav-list" class="header__nav-list ">
                            <li class="header__nav-item">
                                <a href="index.php?controller=homepage&action=index&module=web" class="header__nav-link header__nav-link--active">TRANG CHỦ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="index.php?controller=shopgrid&action=index&module=web" class="header__nav-link">SHOP</a>
                            </li>
                            <li class="header__nav-item header__nav-parent">
                                <a href="#" class="header__nav-link">
                                    THÚ CƯNG
                                    <i class="header__nav-icon ti-angle-down"></i>
                                </a>
                                <ul class="header__subnav">

                                    <?php foreach($categories as $category) {?>
                                        <li class="header__subnav-item">
                                            <a href="index.php?controller=shopgrid&action=showProductByCategory&module=web&category_id=<?php echo $category['id'] ?>" class="header__subnav-link"><?php echo $category['name'] ?></a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li class="header__nav-item header__nav-parent">
                                <a href="#" class="header__nav-link">
                                    DỊCH VỤ
                                    <i class="header__nav-icon ti-angle-down"></i>
                                </a>
                                <ul class="header__subnav">
                                    <li class="header__subnav-item">
                                        <a href="#" class="header__subnav-link">Spa</a>
                                    </li>
                                    <li class="header__subnav-item">
                                        <a href="#" class="header__subnav-link">Hotel Pets</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">LIÊN HỆ</a>
                            </li>
                            <li class="header__nav-item none_PC none__desktop none__tablet show__on_mobile">
                                <?php if(!isset($_SESSION['user'])) {?>
                                    <a href="index.php?controller=authentication&action=showlogin&module=web" class="header__nav-link">Đăng Nhập</a>
                                    
                                <?php }else {?>
                                    <a href="index.php?controller=authentication&action=logout&module=web" class="header__nav-link">Đăng Xuất</a>
                                <?php } ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="./public/assets/web/js/main.js"></script>
</body>
</html>