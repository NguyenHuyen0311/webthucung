<?php
    require_once 'connect.php';

    if(isset($_GET['this_id'])){
        $id = $_GET['this_id'];

        if(isset($_POST['sbm'])){
            $prd_name = $_POST['prd_name'];
            $old_price = $_POST['old_price'];
            $current_price = $_POST['current_price'];

            // Kiểm tra xem người dùng đã chọn file ảnh mới chưa
            if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];

                // Di chuyển file ảnh mới vào thư mục chỉ định
                move_uploaded_file($image_tmp, './assets/image/'.$image);
            } else {
                // Nếu người dùng không chọn ảnh mới, sử dụng ảnh cũ
                $image = $_POST['old_image'];
            }

            // Cập nhật dữ liệu vào bảng products
            $sql_update = "UPDATE products SET prd_name = '$prd_name', image = '$image', old_price = '$old_price', current_price = '$current_price' WHERE prd_id = $id";
            $query_update = mysqli_query($conn, $sql_update);

            if($query_update){
                header('location: admin.php');
            } else {
                echo "Sửa sản phẩm thất bại!";
            }
        }

        // Lấy thông tin sản phẩm để hiển thị trong form
        $sql_select = "SELECT * FROM products WHERE prd_id = $id";
        $query_select = mysqli_query($conn, $sql_select);
        $row = mysqli_fetch_assoc($query_select);

    } else {
        echo "Không có thông tin sản phẩm cần sửa!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Sửa sản phẩm</h2>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="prd_name">Tên sản phẩm</label>
                        <input type="text" name="prd_name" class="form-control" value="<?php echo $row['prd_name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh sản phẩm</label>
                        <input type="file" name="image">
                        <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                        <br>
                        <img src="./assets/image/<?php echo $row['image']; ?>" style="width: 150px;">
                    </div>
                    <div class="form-group">
                        <label for="old_price">Old price</label>
                        <input type="number" name="old_price" class="form-control" value="<?php echo $row['old_price']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="current_price">Current price</label>
                        <input type="number" name="current_price" class="form-control" value="<?php echo $row['current_price']; ?>" required>
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
