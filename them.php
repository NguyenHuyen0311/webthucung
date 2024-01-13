<?php
    require_once 'connect.php';

    // Sửa câu lệnh SQL để lấy dữ liệu từ bảng sản phẩm
    $sql_prd = "SELECT * FROM products";
    $query_prd = mysqli_query($conn, $sql_prd);

    if(isset($_POST['sbm'])){
        $prd_name = $_POST['prd_name'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $old_price = $_POST['old_price'];
        $current_price = $_POST['current_price'];

        // Sửa câu lệnh SQL để chèn dữ liệu vào bảng sản phẩm
        $sql = "INSERT INTO products (prd_name, image, old_price, current_price)
        VALUES ('$prd_name', '$image', '$old_price', '$current_price')";
        $query = mysqli_query($conn, $sql);

        // Di chuyển file ảnh vào thư mục chỉ định
        move_uploaded_file($image_tmp, './assets/image/'.$image);
        header('location: admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Thêm sản phẩm</h2>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data"> <!-- Sửa enctype -->
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="prd_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="">Old price</label>
                        <input type="number" name="old_price" class="form-control" required> <!-- Sửa name -->
                    </div>
                    <div class="form-group">
                        <label for="">Current price</label>
                        <input type="number" name="current_price" class="form-control" required> <!-- Sửa name -->
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
