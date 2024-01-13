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
    <div class="col-sm-7 form-contact">
        <form action="service.php" method="post" class="row" enctype="multipart/form-data">
            <div class="col-sm-12 form-group">
                <label for="username">
                    YÊU CẦU DỊCH VỤ
                    <span class="required-item">*</span>
                </label>
                <select class="form-select" aria-label="Default select example">
                <option selected>CẠO BÀN CHÂN / BỤNG / HẬU MÔN</option>
                <option value="1">CẮT & MÀI NHẴN MÓNG CHÂN</option>
                <option value="2">VỆ SINH TAI & KHỬ MÙI TUYẾN HÔI</option>
                <option value="3">TẮM SẠCH BẰNG 2 LOẠI SỮA TẮM</option>
                <option value="4">SẤY & CHẢI BUNG XÙ LÔNG</option>
                <option value="5">XỊT THƠM BẰNG NƯỚC HOA</option>
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
                <label for="sđt">
                    Số Điện Thoại
                    <span class="required-item">*</span>
                </label>
                <input class="form-control" id="sđt" name="sđt" type="tel" required>
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
                <div class="col-sm-12 form-group">
                <button type="button" class="btn btn-secondary form-group-button" name="lienhe">GỬI YÊU CẦU</button>
            </div>
        </form>
    </div>
</body>
</html>