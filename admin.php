<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">IMAGE</th>
      <th scope="col">OLD PRICE</th>
      <th scope="col">CURRENT PRICE</th>
      <th scope="col"><button class="btn btn-outline-primary btn-update"><a href="them.php">Thêm</a></button></th>
    </tr>
  </thead>
  <tbody>
    <?php 
        require_once 'connect.php';

        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row['prd_id'] ?></th>
      <td><?php echo $row['prd_name'] ?></td>
      <td><img src="./assets/image/<?php echo $row['image'] ?>" style="width: 150px;"></td>
      <td><?php echo $row['old_price'] ?></td>
      <td><?php echo $row['current_price'] ?></td>
      <td>
        <a href="sua.php?this_id=<?php echo $row['prd_id'] ?>">Sửa</a>
        <a href="xoa.php?this_id=<?php echo $row['prd_id'] ?>">Xóa</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>