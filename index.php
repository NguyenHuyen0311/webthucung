<?php 
  require_once 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Thú Cưng</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body id="myPage">
  <!-- Navbar Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid navbar-full">
      <a class="navbar-brand" href="#myPage">
        <img src="./assets/image/logo.jpg" alt="Logo" class="navbar-logo">
      </a>
      <button class="navbar-toggler navbar-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active navbar-page" aria-current="page" href="#myPage">Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active navbar-page" aria-current="page" href="#IntroducePage">Giới Thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active navbar-page" aria-current="page" href="#ServicesPage">Dịch Vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active navbar-page" aria-current="page" href="#ProductsPage">Cửa Hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active navbar-page" aria-current="page" href="#ContactPage">Liên Hệ</a>
          </li>
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2 customer-input" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-primary button-search button-navbar" type="submit">
            <i class="fas fa-magnifying-glass"></i>
          </button>
        </form> -->
      </div>
      <div class="navbar-icon">
        <div class="navbar-cart">
          <i class="fa-solid fa-cart-shopping navbar-cart-icon"></i>
        </div>
        <div class="navbar-user">
          <a href="login.php">
            <i class="fa-solid fa-circle-user navbar-user-icon"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Banner Header -->
  <div class="banner-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <div class="header-title">
            <div class="header-sub-title">
              <div class="scrossbar"></div>
              <h4>PET SERVICE</h4>
            </div>
            <div class="header-main-title text-shadow-title">
              <h1>Dịch vụ chăm sóc dành cho thú cưng của bạn</h1>
            </div>
            <div class="header-end-title">
              <h3>UY TÍN HÀNG ĐẦU TẠI HÀ NỘI</h3>
            </div>
            <a href="#ServicesPage" class="banner-button_click">
              <button class="btn btn-primary button-search banner-button" type="submit">
                <span class="banner-button-title">Xem Thêm</span>
                <i class="fa-solid fa-play banner-button-icon"></i>
              </button>
            </a>
          </div>
        </div>

        <div class="col-md-5">
          <img src="./assets/image/banner.png" alt="Banner Header" class="img-banner">
        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="content">
    <!-- Giới Thiệu -->
    <div class="Introduce" id="IntroducePage">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <img src="./assets/image/Introduce.png" alt="Ảnh Giới Thiệu" class="Introduce-img">
          </div>
          <div class="col-md-6 Introduce-description">
            <div class="Introduce-description-title text-shadow-title">
              <h1>Giới Thiệu Về Chúng Tôi</h1>
              <h3 class="Introduce-title">
                <i class="fa-solid fa-square-plus"></i>
                Sản Phẩm - Dịch Vụ
              </h3>
              <h5 class="Introduce-text">Từ thức ăn dinh dưỡng, đồ chơi sáng tạo cho đến chuồng êm ái và các dịch vụ y tế chuyên nghiệp, 
              chúng tôi cam kết mang đến sự đa dạng và chất lượng tốt nhất cho thú cưng của bạn.</h5>
              
              <h3 class="Introduce-title">
                <i class="fa-solid fa-people-roof"></i>
                Chuyên Gia Hàng Đầu
              </h3>
              <h5 class="Introduce-text"> Đội ngũ chuyên gia của chúng tôi không chỉ có kiến thức sâu rộng về các loài thú cưng, 
              mà còn luôn sẵn lòng tư vấn và hỗ trợ bạn với mọi vấn đề liên quan đến việc chăm sóc, dinh dưỡng và sức khỏe cho thú cưng.</h5>

              <h3 class="Introduce-title">
                <i class="fa-solid fa-hand-holding-heart"></i>
                Khách Hàng Hài Lòng
              </h3>
              <h5 class="Introduce-text">Cùng với hơn 5.000 khách hàng đã luôn tin tưởng, đồng hành, chúng tôi luôn đặt ra những mục tiêu 
              và thử thách mới. PET SERVICE cung cấp các sản phẩm, phụ kiện rất đa dạng...</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Dịch Vụ -->
    <div class="services" id="ServicesPage">
      <div class="service-item">
        <div class="container-fluid service-all">
          <div class="service-banner-title">
            <div class="row service-title">
              <div class="col-md-8">
                <h2 class="service-title-main">
                  DỊCH VỤ TẬN TÌNH - AN TÂM CHẤT LƯỢNG
                </h2>
                <h4 class="service-title-sub">
                  Liên hệ ngay để được tư vấn và báo giá các dịch vụ phù hợp cho bé yêu của bạn!
                </h4>
              </div>
              <div class="col-md-4">
                <a href="#ContactPage" class="service-button_click">
                  <button class="btn btn-light service-button" type="submit">
                    <span class="service-button-title">Tư Vấn Miễn Phí</span>
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-1">
                <h6 class="service-1-info">Thông Tin & Bảng Giá</h6>
                <h1 class="service-1-title">Dịch vụ tắm vệ sinh</h1>
                <div class="form-service">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed form-service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Dịch Vụ Bao Gồm
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <ul class="form-service-list">
                            <li class="form-service-list_text">CẠO BÀN CHÂN / BỤNG / HẬU MÔN</li>
                            <li class="form-service-list_text">CẮT & MÀI NHẴN MÓNG CHÂN</li>
                            <li class="form-service-list_text">VỆ SINH TAI & KHỬ MÙI TUYẾN HÔI</li>
                            <li class="form-service-list_text">TẮM SẠCH BẰNG 2 LOẠI SỮA TẮM </li>
                            <li class="form-service-list_text">SẤY & CHẢI BUNG XÙ LÔNG</li>
                            <li class="form-service-list_text">XỊT THƠM BẰNG NƯỚC HOA</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed form-service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Bảng Giá
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="form-service-price_list">
                            <li class="form-service-price_list--text">Dưới 10 kg: 300.000đ</li>
                            <li class="form-service-price_list--text">Dưới 20 kg: 380.000đ</li>
                            <li class="form-service-price_list--text">Dưới 30 kg: 460.000đ</li>
                            <li class="form-service-price_list--text">Dưới 40 kg: 540.000đ</li>
                            <li class="form-service-price_list--text">
                              Trên 40 kg: 
                              <a href="" class="service-1-contact">Liên Hệ</a>
                            </li>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="service-1-contact-button">
                  <button class="btn btn-primary service-contact-button" type="submit">
                    <span class="service-contact-button-title">Đặt lịch ngay</span>
                  </button>
                </div>
              </div>
              <div class="service-2">
                <h6 class="service-2-info">Thông Tin & Bảng Giá</h6>
                <h1 class="service-2-title">Dịch vụ cắt tỉa lông</h1>
                <div class="row service-2-info">
                  <ul class="col-md-7 service-2-info-list">
                    <li class="service-2-info-list_item">
                      <div class="service-2-info-list_item--icon">
                        <i class="fa-solid fa-check service-2-info-list_item--icon-check"></i>
                      </div>
                      <p class="service-2-info-list_item--title">Cắt Gọn Lông</p>
                    </li>
                    <li class="service-2-info-list_item">
                      <div class="service-2-info-list_item--icon">
                        <i class="fa-solid fa-check service-2-info-list_item--icon-check"></i>
                      </div>
                      <p class="service-2-info-list_item--title">
                        Tỉa Lông Tạo Kiểu
                      </p>
                    </li>
                    <li class="service-2-info-list_item">
                      <div class="service-2-info-list_item--icon">
                        <i class="fa-solid fa-check service-2-info-list_item--icon-check"></i>
                      </div>
                      <p class="service-2-info-list_item--title">
                        Cạo Lông
                      </p>
                    </li>
                  </ul>
                  <div class="col-md-5 service-2-info-list_price">
                    Chỉ từ 400.000đ
                  </div>
                </div>
                <div class="service-2-contact-button">
                  <button class="btn btn-primary service-contact-button" type="submit">
                    <span class="service-contact-button-title">Đặt lịch ngay</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6 service-banner">
              <img src="./assets/image/dichvutam.jpg" alt="Dịch Vụ Tắm" class="service-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Sản Phẩm -->
    <div class="Products" id="ProductsPage">
      <div class="container-fluid">
        <div class="Products-title text-shadow-title">
          <h1>Sản Phẩm Vệ Sinh & Thức Ăn</h1>
        </div>
        <div class="row product-all">
          <?php 
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
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
                } else {
                    echo "0 results";
                }

                $conn->close();
              ?>
          <!-- <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/pate.png" alt="Pate" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Pate Tell Me Creamy sốt kem cho chó</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">25.000đ</span>
                <span class="product-item_price--current">18.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/hatnatural.png" alt="Hạt Natural" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Hạt Natural Core Puppy 1kg cho chó con-cừu</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">670.300đ</span>
                <span class="product-item_price--current">525.500đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/hatmem.png" alt="Hạt mềm" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Hạt mềm Felicucina 1.2 kg cho chó</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">455.000đ</span>
                <span class="product-item_price--current">300.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/hatcho.png" alt="Hạt Chó" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Hạt chó Royal Canin Mini Adult - 2kg</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">499.000đ</span>
                <span class="product-item_price--current">379.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/ga.png" alt="Gà Viên" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Gà viên sấy Pawo</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">96.500đ</span>
                <span class="product-item_price--current">60.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/Khan.png" alt="Khăn tắm" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Khăn tắm chuyên dụng</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">89.800đ</span>
                <span class="product-item_price--current">66.500đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/xit.png" alt="Xịt khử khuẩn" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Xịt khử khuẩn NaturalClean</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">235.200đ</span>
                <span class="product-item_price--current">190.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/luoc.png" alt="Lược" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Lược chải lông tròn</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">120.300đ</span>
                <span class="product-item_price--current">88.500đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/tam.png" alt="Tắm khô" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Dung dịch tắm khô cho thú cưng</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">168.600đ</span>
                <span class="product-item_price--current">150.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/danhrang.png" alt="Bộ Đánh Răng" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Bộ Đánh Răng</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">99.000đ</span>
                <span class="product-item_price--current">70.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 product-all_item">
            <div class="product-item">
              <div class="product-item_img">
                <img src="./assets/image/chaixit.png" alt="Chai Xịt" class="product-item_img--product">
              </div>
              <h4 class="product-item_name">Chai xịt huấn luyện vệ sinh cho chó</h4>
              <div class="product-item_price">
                <span class="product-item_price--old">99.700đ</span>
                <span class="product-item_price--current">65.000đ</span>
              </div>
              <button class="btn btn-primary product-button" type="submit">
                <span class="product-button-title">Thêm Vào Giỏ Hàng</span>
              </button>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Liên Hệ -->
    <div class="contact" id="ContactPage">
      <div class="container-fluid contact-full">
        <div class="row">
          <div class="col-sm-5">
            <h2 class="contact-title text-center">Liên Hệ Với Chúng Tôi</h2>
            <div class="contact-all">
              <p class="contact-item_title--main">
                Pet Service ra đời với mong muốn mang lại cho khách hàng sự chuyên nghiệp, uy tín, đem lại sự trải nghiệm tốt nhất cho thú cưng của bạn.
                Hãy liên hệ với chúng tôi và chúng tôi sẽ liên hệ lại với bạn trong vòng 24 giờ.
              </p>

              <div class="contact-item-all">
                <div class="contact-item">
                  <i class="fa-solid fa-map-pin contact-item_icon"></i>
                </div>
                <p class="contact-item_title">
                  306 Đ. Mỹ Đình, Mỹ Đình, Từ Liêm, Hà Nội, Việt Nam
                </p>
              </div>
              
              <div class="contact-item-all">
                <div class="contact-item">
                  <i class="fa-solid fa-phone contact-item_icon"></i>
                </div>
                <p class="contact-item_title">
                  +84 966556026
                </p>
              </div>

              <div class="contact-item-all">
                <div class="contact-item">
                  <i class="fa-solid fa-envelope contact-item_icon"></i>
                </div>
                <p class="contact-item_title">
                  huyenmeroria@gmail.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-7 form-contact">
            <form action="lienhe.php" method="post" class="row" enctype="multipart/form-data">
              <div class="col-sm-12 form-group">
                <label for="username">
                  Họ Tên
                  <span class="required-item">*</span>
                </label>
                <input class="form-control" id="username" name="username" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="email">
                  Email
                  <span class="required-item">*</span>
                </label>
                <input class="form-control" id="email" name="email" type="email" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="sđt">
                  Số Điện Thoại
                  <span class="required-item">*</span>
                </label>
                <input class="form-control" id="sđt" name="sđt" type="tel" required>
              </div>
              <div class="col-sm-12 form-group">
                <label for="note">Ghi Chú</label>
                <textarea class="form-control" id="note" name="note" placeholder="Chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc của bạn" rows="5"></textarea><br>
              </div>
              <div class="col-sm-12 form-group">
                <button type="button" class="btn btn-secondary form-group-button" name="lienhe">Gửi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="start-footer">
        <div class="row">
          <div class="col-md-6 start-footer_part">
            <a class="start-footer-main_title" href="">
              <h2>PET SERVICE</h2>
            </a>
            <h6 class="start-footer-sub_title">
              Chúng tôi cam kết mang đến cho bạn và người bạn của mình những sản phẩm chất lượng, dịch vụ y tế chuyên nghiệp nhất. 
              Hãy để chúng tôi mang lại sức khỏe và hạnh phúc cho người bạn đáng yêu của bạn.
            </h6>
            <div class="footer-item-all">
              <div class="footer-item">
                <i class="fa-solid fa-map-pin footer-item_icon"></i>
              </div>
              <p class="footer-item_title">
                306 Đ. Mỹ Đình, Mỹ Đình, Từ Liêm, Hà Nội, Việt Nam
              </p>
            </div>
            
            <div class="footer-item-all">
              <div class="footer-item">
                <i class="fa-solid fa-phone footer-item_icon"></i>
              </div>
              <p class="footer-item_title">
                +84 966556026
              </p>
            </div>

            <div class="footer-item-all">
              <div class="footer-item">
                <i class="fa-solid fa-envelope footer-item_icon"></i>
              </div>
              <p class="footer-item_title">
                huyenmeroria@gmail.com
              </p>
            </div>

            <div class="footer-socials">
              <a class="footer-socials-item">
                <i class="fa-brands fa-facebook footer-socials-item_icon"></i>
              </a>
              <a class="footer-socials-item">
                <i class="fa-brands fa-instagram footer-socials-item_icon"></i>
              </a>
              <a class="footer-socials-item">
                <i class="fa-solid fa-envelope footer-socials-item_icon"></i>
              </a>
              <a class="footer-socials-item">
                <i class="fa-solid fa-square-phone footer-socials-item_icon"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3 start-footer_part">
            <div class="footer-service">
              <h5 class="footer-service_title">Dịch Vụ</h5>
              <div class="footer-service_list">
                <div>
                  <a class="footer-service_list--item">Dịch vụ tắm vệ sinh thú cưng</a>
                </div>
                <div>
                  <a class="footer-service_list--item">Dịch vụ cắt tỉa lông và tạo kiểu</a>
                </div>
                <div>
                  <a class="footer-service_list--item">Cung cấp sản phẩm vệ sinh, thức ăn</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 start-footer_part">
            <h5 class="footer-customer">Hỗ Trợ Khách Hàng</h5>
            <div class="footer-customer_list">
              <div class="footer-customer_list--item">Chính sách bảo hành</div>
              <div class="footer-customer_list--item">Chính sách bảo mật</div>
              <div class="footer-customer_list--item">Chính sách thanh toán</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="end-footer">
        <div class="end-footer_title">
          © 2023 All rights reserved
        </div>
        <div class="end-footer_title">
          Made by Huyền DZ
        </div>
      </div>
    </div>
  </footer>
</body>
</html>