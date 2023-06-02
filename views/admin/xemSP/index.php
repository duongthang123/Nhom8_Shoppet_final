
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="public/assets/admin/css/style.css">
    <link rel="stylesheet" href="public/assets/admin/css/addProduct.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">

    <!-- sidebar -->
    <?php include("views/admin/layouts/sildebar.php") ?>
    
    <div class="main-content">

        <!-- header -->
    <?php include("views/admin/layouts/header.php") ?>
        
        <main>

            <div class="page-header">
                <h1>Xem sản phẩm</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <!--  -->
            <div class="page-content">
                <div class="content__fluid_see">
                    <div class="content__boxsee_left">
                        <div class="content__box_img">
                            <img src="<?php echo $img ?>" alt="" class="box__img">
                        </div>
                    </div>

                    <div class="content__boxsee_right">
                        <div class="content__product">
                            <h3 class="content__product_name"><?php echo $product['name'] ?></h3>
                            <p class="content__product_status">Tình trạng: <span> <?php echo $product['quantity'] > 0 ? "Còn Hàng" : "Hết Hàng" ?></span></p>
                            <p class="content__product_total">Số lượng: <span> <?php echo $product['quantity'] ?></span></p>
                            <p class="content__product_price">Giá: <span> <?php echo $product['price'] ?> VNĐ</span></p>
                            <p class="content__product_dis">Mô tả: <span> <?php echo $product['description'] ?></span></p>
                        </div>
                    </div>

                    <a href="index.php?controller=product&action=index&module=admin" class="btn__back">Quay lại</a>
                </div>
                
            
            </div>
            
        </main>
        
    </div>
</body>
</html>
