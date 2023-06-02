<?php include("views/web/layouts/header.php") ?>

<div class="container container__shop">
    <div class="grid wide">
        <div class="row sm-gutter">
            <h1 class="shop__title">THANH TOÁN</h1>
        </div>
        
        <form action="index.php?controller=order&action=create&module=web" class="check__out_form" method="POST">
            <div class="row sm-gutter">
                <div class="col l-7 m-12 c-12">
                    <div class="checkout__top">
                        <h3 class="checkout__top_heading">Thông Tin Thanh Toán</h3>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-6 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title">Họ Tên:</lable>
                                <input type="text" name="fullname" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>" placeholder="Nhập họ tên..." class="checkout__name-input">
                            </div>
                            <div class="error">
                                <p><?php echo isset($orderErrors['fullname']) ? $orderErrors['fullname'] : "" ?></p>
                            </div>
                        </div>
                        <div class="col l-6 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title">Số điện thoại:</lable>
                                <input type="text" name="phoneNumber" value="<?php echo isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" placeholder="Nhập số điện thoại.." class="checkout__name-input">
                            </div>
                            <div class="error">
                                <p><?php echo isset($orderErrors['phoneNumber']) ? $orderErrors['phoneNumber'] : "" ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title">Tỉnh/Thành Phố:</lable>
                                <input type="text" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" placeholder="Nhập địa chỉ..." class="checkout__name-input">
                            </div>    
                            <div class="error">
                                <p><?php echo isset($orderErrors['city']) ? $orderErrors['city'] : "" ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title">Địa Chỉ:</lable>
                                <input type="text" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" placeholder="Nhập địa chỉ..." class="checkout__name-input">
                            </div>
                            <div class="error">
                                <p><?php echo isset($orderErrors['address']) ? $orderErrors['address'] : "" ?></p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__out_info">
                                <lable class="checkout__title">Địa Chỉ Email:</lable>
                                <input type="email" require name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Nhập email..." class="checkout__name-input">
                            </div>
                            <div class="error">
                                <p><?php echo isset($orderErrors['email']) ? $orderErrors['email'] : "" ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col l-5 m-12 c-12">
                    <div class="check__add">
                        <input type="checkbox" name="address2" id="">
                        <h3 class="checkout__addAddress">Giao tới địa chỉ khác</h3>
                    </div>
                    <div class="col l-12 -12 c-12">
                        <p class="checkout__title">Ghi chú đơn hàng:</p>
                        <textarea class="checkout_note" name="note" id="" cols="30" rows="5" placeholder="Ghi chú về đơn hàng..."></textarea>
                    </div>
                </div>
            </div>

            <div class="row sm-gutter">
                <div class="col l-7 m-12 c-12">
                    <div class="checkout__top">
                        <h3 class="checkout__top_heading">Đơn hàng của bạn</h3>
                    </div>

                    <div class="row sm-gutter">
                        <table class="cart__table">
                    
                            <thead class="cart__table_head">
                                <tr>
                                    <th class="cart__title checkout__table_name ">Sản Phẩm</th>
                                    <th class="cart__title checkout__table_name ">Số lượng</th>
                                    <th class="cart__title checkout__table_name cart__title-price">Tạm Tính</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $subTotalPrice = 0;

                                foreach($_SESSION['cart'] as $itemCart) {?>
                                    <tr>
                                        <td class="cart__title-name">
                                            <p class="cart__name_name"><?php echo $itemCart['name'] ?></p>
                                        </td>
                                        <td class="cart__title-quatity">
                                            <div class="cart__title-quatity-main">
                                                <p class="check__out_quantity"><?php echo $itemCart['quantity'] ?></p>
                                                <input type="hidden" name="quantity" value="<?php echo $itemCart['quantity'] ?>">
                                                <input type="hidden" name="product_id" value="<?php echo $itemCart['product_id'] ?>">
                                            </div>
                                        </td>
                                        <td class="cart__title-total">
                                            <?php
                                                $subTotal= $itemCart['quantity'] * $itemCart['price'];
                                                $subTotalPrice += $subTotal;
                                            ?>
                                            <?php echo number_format($subTotal, 0, ",", ".") ?>
                                        </td>
                                    </tr>
                                <?php } ?>

                                <tr>
                                    <td class="cart__title-name">
                                        <p class="cart__name_name checkout__pay_title">Tạm Tính: </p>
                                    </td>
                                    <td class="cart__title-quatity">
                                        <div class="cart__title-quatity-main">
                                            <p class="check__out_quantity"></p>
                                        </div>
                                    </td>
                                    <td class="cart__title-total"><?php echo number_format($subTotalPrice, 0, ",", ".") ?></td>
                                </tr>

                                <tr>
                                    <td class="cart__title-name">
                                        <p class="cart__name_name checkout__pay_title">Giao hàng: </p>
                                    </td>
                                    <td class="cart__title-quatity">
                                        <div class="cart__title-quatity-main">
                                            <p class="check__out_quantity"></p>
                                        </div>
                                    </td>
                                    <td class="cart__title-total">
                                        <?php $shiping = 0;
                                            echo number_format($shiping, 0, ",", ".");
                                        ?>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart__title-name">
                                        <p class="cart__name_name checkout__pay_title">Tổng Tiền: </p>
                                    </td>
                                    <td class="cart__title-quatity">
                                        <div class="cart__title-quatity-main">
                                            <p class="check__out_quantity"></p>
                                        </div>
                                    </td>
                                    <td class="cart__title-total cart__title-total--active">
                                        <?php $total = $subTotalPrice + $shiping;
                                        echo number_format($total, 0, ",", ".")
                                        ?> đ

                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row sm-gutter">
                        <div class="col l-12 -12 c-12">
                            <div class="check__add checkout__pay_info">
                                <input type="radio" name="pay" value="online" id="pay__online" checked>
                                <lable for="pay__online" class="checkout__title checkout__pay">Thanh toán bằng hình thức chuyển khoản</lable>
                            </div>

                            <div class="check__add">
                                <input type="radio" name="pay" value="offline" id="pay__off">
                                <lable for="pay__off" class="checkout__title checkout__pay">Trả tiền khi nhận hàng</lable>
                            </div>
                        </div>
                    </div>
                    <button name="btn_order" class="btn cart__btn_order">Đặt Hàng</button>
                </div>

                <!-- <div class="col l-5 m-12 c-12">
                </div> -->
            </div>
        </form>
    </div>
</div>

<?php include("views/web/layouts/footer.php") ?>