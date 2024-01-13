<?php
    require_once 'connect.php';

    if(isset($_GET['this_id'])){
        $id = $_GET['this_id'];

        $sql_delete = "DELETE FROM products WHERE prd_id = $id";
        $query_delete = mysqli_query($conn, $sql_delete);

        if($query_delete){
            header('location: admin.php');
        } else {
            echo "Xóa sản phẩm thất bại!";
        }
    } else {
        echo "Không có thông tin sản phẩm cần xóa!";
    }
?>
