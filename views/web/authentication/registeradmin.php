<?php include_once("views/web/layouts/header.php") ?>


<div class="container container__shop">
    <div class="grid wide">
        <div class="row sm-gutter">
            <h1 class="shop__title">Đăng Ký ADMIN</h1>
        </div>
        
        <form action="index.php?controller=authentication&action=registerAdmin&module=web" class="check__out_form" method="POST">
            <div class="row sm-gutter">
                <div class="col l-3 c-0 m-0"></div>
                <div class="col l-6 m-12 c-12">

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Họ Tên</lable>
                                <input type="text" name="name" placeholder="Nhập họ tên..." value="<?php echo isset($_POST['name']) ? $_POST['name'] :'' ?>" class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p>
                                    <?php echo isset($registerErrors['name']) ? $registerErrors['name'] : '' ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Email</lable>
                                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] :'' ?>" placeholder="Nhập email..." class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p>
                                    <?php echo isset($registerErrors['email']) ? $registerErrors['email'] : '' ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Mật Khẩu</lable>
                                <input type="password" name="password" id="" value="<?php echo isset($_POST['password']) ? $_POST['password'] :'' ?>" placeholder="Nhập mật khẩu..." class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p>
                                    <?php echo isset($registerErrors['password']) ? $registerErrors['password'] : '' ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title login__title">Xác Nhận Mật Khẩu</lable>
                                <input type="password" name="confirm_password" id="" placeholder="Nhập lại mật khẩu..." class="checkout__name-input login__input">
                            </div>

                            <div class="error">
                                <p>
                                  <?php echo isset($registerErrors['confirm_password']) ? $registerErrors['confirm_password'] : '' ?>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row sm-gutter">
                        <button name="btn_register" class="login__btn">Đăng Ký Ngay</button>
                    </div>
                    
                </div>
                <div class="col l-3 c-0 m-0"></div>

            </div>
        </form>
    </div>
</div>

<?php include_once("views/web/layouts/footer.php") ?>