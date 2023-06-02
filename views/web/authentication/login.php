<?php include_once("views/web/layouts/header.php") ?>

<div class="container container__shop">
    <div class="grid wide">
        <div class="row sm-gutter">
            <h1 class="shop__title">Đăng Nhập</h1>
        </div>
        
        <form action="index.php?controller=authentication&action=login&module=web" class="check__out_form" method="POST">
            <div class="row sm-gutter">
                <div class="col l-3 c-0 m-0"></div>
                <div class="col l-6 m-12 c-12">
                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Email</lable>
                                <input type="email"  name="email" id="" placeholder="Nhập email..." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p><?php echo isset($loginErrors['email']) ? $loginErrors['email'] : "" ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Mật Khẩu</lable>
                                <input type="password" name="password" id="" placeholder="Nhập mật khẩu..." class="checkout__name-input login__input" class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p><?php echo isset($loginErrors['password']) ? $loginErrors['password'] : "" ?></p>
                            </div>
                            <div class="error">
                                    <p><?php echo isset($loginErrors['error']) ? $loginErrors['error'] : "" ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="check__add login_check">
                            <input type="checkbox" name="remmeber" id="pay__off">
                            <lable for="pay__off" class="checkout__title login__remember">Remember me</lable>
                        </div>

                        
                    </div>

                    <div class="row sm-gutter">
                        <button name="btn_login" class="login__btn">Đăng Nhập</button>
                    </div>

                    <div class="row sm-gutter">
                        <p class="login__link">Nếu bạn chưa có tài khoản, hãy <a href="index.php?controller=authentication&action=showregister&module=web">Đăng Ký</a> ngay! </p>
                        <p class="login__link">Đăng nhập với tư cách quản trị viên: <a href="index.php?controller=authentication&action=showloginAdmin&module=web">Đăng nhập ngay!</a></p>
                    </div>
                    
                </div>
                <div class="col l-3 c-0 m-0"></div>

            </div>
        </form>
    </div>
</div>

<?php include_once("views/web/layouts/footer.php") ?>