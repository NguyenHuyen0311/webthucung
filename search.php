<?php 
    require_once "connect.php";

    if (isset($_POST['timKiem'])) {
        $keyWord = $_POST['keyWord'];
    }else {
        $keyWord = "";
    }

    $search = "SELECT * FROM products WHERE products.prd_name LIKE '%".$keyWord."%' OR products.old_price LIKE '%".$keyWord."%' OR products.current_price LIKE '%".$keyWord."%'";

    $sql = mysqli_query($conn, $search);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="row product-all">
        <div class="col-sm-12">
            <a href="index.php">
                <button name="btnBack" class="btn btn-primary" type="submit">Về Trang Chủ</button>
            </a>
        </div>
        <?php 
            while ($row = $sql->fetch_assoc()) {
                echo '<div class="col-sm-6 col-md-3 col-lg-2 product-all_item">';
                echo '<div class="product-item">';
                echo '<div class="product-item_img">';
                echo '<img src="./assets/image/' . $row["image"] . '" alt="Product Image" class="product-item_img--product"><br>';
                echo '</div>';
                echo '<h4 class="product-item_name">'. $row["prd_name"] .'</h4>';
                echo '<div class="product-item_price">';
                echo '<span class="product-item_price--old">' . $row["old_price"] . '</span>';
                echo '<span class="product-item_price--current">' . $row["current_price"] . '</span>';
                echo '</div>';
                echo '<button class="btn btn-primary product-button" type="submit">
                        <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
                        </button>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>