
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./public/assets/admin/css/style.css">
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
                <h1>Sửa Danh mục</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <!--  -->
            <div class="page-content">
                <div class="content__fluid-add">
                    <div class="title__add">
                        Sửa Danh Mục
                    </div>

                    <form action="index.php?controller=category&action=update&module=admin&id=<?php echo $category['id'] ?>" class="content__form" method="POST">

                        <div class="content__form_box">
                            <h3 class="content__form_titile">Tên danh mục</h3>
                            <input class="content__form_input"  type="text" name="name" value="<?php echo isset($category['name']) ? $category['name'] : '' ?>"/>
                            <p id="errors">
                                <?php echo isset($categoryErrors['name']) ? $categoryErrors['name'] :'' ?>
                            </p>
                        </div>

                        <button type="submit" name="btn_edit" class="content__form_btn">Lưu danh mục</button>
                        <button type="button" onclick="history.back()" class="content__form_btn--dis">Hủy</button>
                    </form>

                </div>
                
            
            </div>
            
        </main>
        
    </div>
</body>
</html>
