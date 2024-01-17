<?php
require_once 'connect.php';

if (isset($_POST['dichvu'])) {
    // Lấy giá trị từ form
    $serviceType = $_POST['servicetype'];
    $username = $_POST['username'];
    $sdt = $_POST['sdt'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $time = $_POST['time'];
    $namePet = $_POST['namePet'];
    $age = $_POST['age'];
    $species = $_POST['species'];
    $weight = $_POST['weight'];
    $note = $_POST['note'];

    // Thêm dữ liệu vào database
    $sql = "INSERT INTO service (service_type, username, sdt, address, email, day, time, name_pet, age, species, weight, note)
            VALUES ('$serviceType', '$username', '$sdt', '$address', '$email', '$day-$month-$year', '$time', '$namePet', '$age', '$species', '$weight', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "Dữ liệu được thêm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .required-item {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container col-sm-7 form-contact">
        <form action="service.php" method="post" class="row" enctype="multipart/form-data">
            <div class="col-sm-12 form-group">
                <label for="username">
                    YÊU CẦU DỊCH VỤ
                    <span class="required-item">*</span>
                </label>
                <select class="form-select" aria-label="Default select example" id="servicetype" name="servicetype">
                <option selected>CẠO BÀN CHÂN / BỤNG / HẬU MÔN</option>
                <option value="CẮT & MÀI NHẴN MÓNG CHÂN">CẮT & MÀI NHẴN MÓNG CHÂN</option>
                <option value="VỆ SINH TAI & KHỬ MÙI TUYẾN HÔI">VỆ SINH TAI & KHỬ MÙI TUYẾN HÔI</option>
                <option value="TẮM SẠCH BẰNG 2 LOẠI SỮA TẮM">TẮM SẠCH BẰNG 2 LOẠI SỮA TẮM</option>
                <option value="SẤY & CHẢI BUNG XÙ LÔNG">SẤY & CHẢI BUNG XÙ LÔNG</option>
                <option value="XỊT THƠM BẰNG NƯỚC HOA">XỊT THƠM BẰNG NƯỚC HOA</option>
                <option value="CẮT GỌN LÔNG">CẮT GỌN LÔNG</option>
                <option value="TỈA LÔNG TẠO KIỂU">TỈA LÔNG TẠO KIỂU</option>
                <option value="CẠO LÔNG">CẠO LÔNG</option>
                </select>
            </div>
            <div class="col-sm-12 form-group">
                <label for="username">
                    Họ Tên
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="username" name="username" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="sdt">
                    Số Điện Thoại
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="sdt" name="sdt" type="tel" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address">
                    Địa chỉ
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="address" name="address" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">
                    Email
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="email" name="email" type="email" required>
            </div>
            <div class="col-md-3">
                <label for="day">Ngày:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="day" name="day">
                    <option value="0">-----</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="month">Tháng:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="month" name="month">
                    <option value="0">-----</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="year">Năm:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="year" name="year">
                    <option value="0">-----</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="col-sm-12 form-group">
                <label for="time">
                    Thời gian
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="time" name="time" type="time" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="namePet">
                    Tên thú cưng
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="namePet" name="namePet" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="age">
                    Tuổi
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="age" name="age" type="number" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="species">
                    Thuộc giống
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="species" name="species" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="weight">
                    Trọng lượng (Kg)
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="weight" name="weight" type="number" required>
            </div>
            <div class="col-sm-12 form-group">
                <label for="note">Ghi Chú</label>
                <textarea class="form-control" id="note" name="note" placeholder="Chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc của bạn" rows="3"></textarea><br>
            </div>
            <div class="col-sm-6 form-group">
                <button type="submit" class="btn btn-secondary form-group-button" name="dichvu">GỬI YÊU CẦU</button>
            </div>
        </form>
        <div class="col-sm-6">
            <a href="index.php">
                <button name="btnBack" class="btn btn-primary" type="submit">Về Trang Chủ</button>
            </a>
        </div>
    </div>
</body>
</html>