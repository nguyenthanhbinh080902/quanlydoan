<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Bán Đồ Ăn Vặt Nhóm 3</title>
    <link
      rel="shortcut icon"
      href="https://www.foody.vn/style/images/logo/foody-vn.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!-- menu -->
    <div class="menu border-bottom">
      <!-- navbar -->
      <nav
        class="navbar navbar-expand-sm navbar-light bg-light"
        style="height: 70px"
      >
        <div class="container-fluid" style="height: 100%">
          <!-- logo -->
          <a class="navbar-brand" style="height: 100%" href="index.php">
            <img
              style="height: 100%"
              src="https://www.foody.vn/style/images/logo/foody-vn.png"
              alt=""
            />
          </a>
          <!-- main menu -->
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link text-hover active-now" href="index.php">
                  <i class="fa-solid fa-house"></i>
                  Trang chủ
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-hover" href="collections.php">
                  <i class="fa-solid fa-bars"></i>
                  Tất cả
                  </a>
              </li>
              <li>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn btn-light nav-link dropdown-toggle text-hover"
                    data-bs-toggle="dropdown"
                  >
                  <i class="fa-solid fa-utensils"></i>
                    Đồ ăn
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/cakes.php"
                        >
                        <i class="fa-duotone fa-cake-slice"></i>
                        Bánh</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/candies.php"
                        >Kẹo</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/fried-foods.php"
                        >Đồ chiên</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/snacks.php"
                        >Snacks</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn btn-light nav-link dropdown-toggle text-hover"
                    data-bs-toggle="dropdown"
                  >
                  <i class="fa-solid fa-whiskey-glass"></i>
                    Đồ uống
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/soft-drinks.php"
                        >Nước ngọt</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item text-hover"
                        href="category/milk-tea.php"
                        >Trà sữa</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-hover" href="admin.html">
                  <i class="fa-solid fa-user-tie"></i>
                  Admin
                  </a>  
              </li>
              <li class="nav-item">
                <a class="nav-link text-hover" href="login.php">
                  <i class="fa-solid fa-user-tie"></i>
                  Đăng xuất
                  </a>
              </li>
            </ul>

            <!-- phải -->
            <form class="d-flex">
              <!-- giỏ hàng -->
              <div class="dropdown">
                <button
                  class="btn btn-outline-danger me-5 dropdown-toggle"
                  type="button"
                  id="triggerId"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <!-- data-bs-toggle="dropdown" -->
                  <i
                    class="fa-solid fa-cart-shopping"
                    style="pointer-events: none"
                  ></i>
                  <span
                    class="total bg-danger text-light px-2 rounded"
                    style="position: absolute; bottom: 20px; right: 40px"
                    >0</span
                  >
                </button>

                <div
                  id="dropMenu"
                  class="dropdown-menu dropdown-menu-end"
                  style="min-width: 500px; min-height: 100px; right: 0px"
                  aria-labelledby="triggerId"
                >
                  <h3 class="d-flex justify-content-center p-2 border-bottom">
                    Giỏ hàng
                  </h3>
                  <!-- <a class="dropdown-item" href="#">Action</a> -->

                  <table
                    class="table table-striped table-hover table-borderless table-primary align-middle"
                  >
                    <tbody class="table-group cart-table">
                      <!-- <tr class="table-primary">
                          <td scope="row" style="width: 100%">
                            <img
                              style="width: 100%"
                              src="image/"
                              alt=""
                            />
                          </td>

                          <td>
                            <div style="float: right">
                              <i class="fa-solid fa-x"></i>
                            </div>
                            <a href="">
                              <h5>Gà rán và Mì Ý - Jollibee</h5>
                            </a>

                            <span
                              class="quantity bg-light rounded px-2 py-1 me-2"
                              >1</span
                            >
                            <span class="price">30.000 VNĐ</span>
                          </td>
                        </tr> -->
                    </tbody>
                  </table>

                  <div class="dropdown-divider"></div>

                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td>TỔNG TIỀN</td>
                        <td class="cart-total">0 VNĐ</td>
                      </tr>
                      <tr>
                        <td>
                          <a href="">
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                            >
                              XEM GIỎ HÀNG
                            </button>
                          </a>
                        </td>
                        <td>
                          <a href="checkouts.php">
                            <button type="button" class="btn btn-danger">
                              THANH TOÁN
                            </button>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <input
                class="form-control me-2"
                type="text"
                placeholder="Tìm kiếm"
              />
              <button class="btn btn-outline-danger" type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- banner -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://theme.hstatic.net/200000523823/1000881506/14/home_bannerslider_1_picture.jpg?v=771"
            class="d-block w-100"
          />
          <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
          <img
            src="https://theme.hstatic.net/200000419141/1000794022/14/home_bannerslider_1_picture.jpg?v=144"
            class="d-block w-100"
          />
          <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
          <img
            src="https://file.hstatic.net/200000140033/file/cooking_at_home._happiness_with_family__8__5ad9048c0d964c14a3db20b56b6b7b49.png"
            class="d-block w-100"
          />
          <div class="carousel-caption"></div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev bg-dark"
        style="height: 50px; width: 50px; margin: auto 0 auto 10px"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next bg-dark"
        style="height: 50px; width: 50px; margin: auto 10px auto 0"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <!-- phần sản phẩm -->
    <div class="sectionCollection bg-light mb-3 p-3">
      <div class="container">
        <h2 class="title">
          <a class="nav-link" href="">Đồ ăn</a>
        </h2>
        <div class="wraplist-container">
          <div class="row">
            <?php 
                include 'connect.php';
                $sql = "SELECT image, Name, Price FROM food WHERE IdCategory='garan'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
              ?>
              <div class="col-md-3 p-2" style="height: 300px">
                <a href="products.php">
                  <div class="item-img bg-primary" style="height: 80%; overflow: hidden">
                    <img src="image/<?php echo $row['image']; ?>" alt="" style="height: 100%; width: 100%">
                  </div>
                  <?php echo $row['Name']; ?>
                  <?php echo $row['Price']; ?>
                </a>
              </div>
            <?php  } ?>
        </div>
      </div>
    </div>
    <div class="sectionCollection bg-light mb-3 p-3">
      <div class="container">
        <h2 class="title">
          <a class="nav-link" href="">Đồ uống</a>
        </h2>
        <div class="wraplist-container">
          <div class="row">
            <?php 
                  include 'connect.php';
                  $sql = "SELECT image, Name, Price FROM food WHERE IdCategory='Drink'";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-md-3 p-2" style="height: 300px">
                  <a href="products.php">
                    <div class="item-img bg-primary" style="height: 80%; overflow: hidden">
                      <img src="image/<?php echo $row['image']; ?>" alt="" style="height: 100%; width: 100%">
                    </div>
                    <?php echo $row['Name']; ?>
                    <?php echo $row['Price']; ?>
                  </a>
                </div>
              <?php  } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="sectionCollection bg-light mb-3 p-3">
      <div class="container">
        <h2 class="title">
          <a class="nav-link" href="">Trà sữa</a>
        </h2>
        <div class="wraplist-container">
          <div class="row">
            <?php 
                include 'connect.php';
                $sql = "SELECT image, Name, Price FROM food WHERE IdCategory='tsua'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
              ?>
              <div class="col-md-3 p-2" style="height: 300px">
                <a href="products.php">
                  <div class="item-img bg-primary" style="height: 80%; overflow: hidden">
                    <img src="image/<?php echo $row['image']; ?>" alt="" style="height: 100%; width: 100%">
                  </div>
                  <?php echo $row['Name']; ?>
                  <?php echo $row['Price']; ?>
                </a>
              </div>
            <?php  } ?>
        </div>
      </div>
    </div>
    <div class="sectionCollection bg-light border-bottom p-3">
      <div class="container">
        <h2 class="title">
          <a class="nav-link" href="">Đồ chiên</a>
        </h2>
        <div class="wraplist-container">
          <div class="row">
            <?php 
                include 'connect.php';
                $sql = "SELECT image, Name, Price FROM food WHERE IdCategory='burge'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
              ?>
              <div class="col-md-3 p-2" style="height: 300px">
                <a href="products.php">
                  <div class="item-img bg-primary" style="height: 80%; overflow: hidden">
                    <img src="image/<?php echo $row['image']; ?>" alt="" style="height: 100%; width: 100%">
                  </div>
                  <?php echo $row['Name']; ?>
                  <?php echo $row['Price']; ?>
                </a>
              </div>
            <?php  } ?>
        </div>
      </div>
    </div>

    <div class="bg-light p-3 border-bottom d-flex justify-content-center">
      <a href="collections.php">
        <button
          type="button"
          class="btn btn-outline-danger"
          style="width: 500px"
        >
          Xem tất cả
        </button>
      </a>
    </div>
    <!-- phần phản hồi -->
    <div class="bg-light mb-3 p-5" >
      <div class="container" data-aos="zoom-out" data-aos-duration="5000">
        <div class="row">
          <div class="section-title">
            <h2 data-title="Ý kiến">Phản hồi</h2>
          </div>
        </div>
        <div class="row">
          <div class="phan-hoi-items">
            <div class="phan-hoi-item" data-aos="zoom-out-up">
              <div class="phan-hoi-item-content">
                <div class="phan-hoi-item-img-content-text">
                  <h2>John Wick</h2>
                  <p>Food reviews</p>
                </div>
                <div class="phan-hoi-item-img-content-img">
                  <img src="image/phan-hoi1.jpg" alt="" />
                </div>
              </div>
              <p>
                People often think that eating at home is healthier. I
                completely agreed with this point of view until I visited Rutass
                restaurant. When I started college, cooking took up a lot of my
                time. When the wonderful time came, I realized that Rutass is
                the best restaurant I have ever known. Rutass is located in a
                small alley near my school. During a book-shopping trip across
                the alley, I accidentally turned into a restaurant for lunch. It
                is decorated in a warm classic style with ocher tones. The wall
                with plants and dried flowers makes me very comfortable.
              </p>
              <div class="phan-hoi-item-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="phan-hoi-item" data-aos="zoom-out-down">
              <div class="phan-hoi-item-content">
                <div class="phan-hoi-item-img-content-text">
                  <h2>Antony Harry</h2>
                  <p>Food reviews</p>
                </div>
                <div class="phan-hoi-item-img-content-img">
                  <img src="image/phan-hoi2.jpg" alt="" />
                </div>
              </div>
              <p>
                Rutass is located in a small alley near my school. During a
                book-shopping trip across the alley, I accidentally turned into
                a restaurant for lunch. It is decorated in a warm classic style
                with ocher tones. The wall with plants and dried flowers makes
                me very comfortable. The restaurant has a wall made of glass.
                That is why the store is always filled with warm natural light.
                All the food and drinks here are delicious and it is also
                reasonably priced for students
              </p>
              <div class="phan-hoi-item-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="phan-hoi-item">
              <div class="phan-hoi-item-content" data-aos="zoom-out-right">
                <div class="phan-hoi-item-img-content-text">
                  <h2>Jenny Huỳnh</h2>
                  <p>Food reviews</p>
                </div>
                <div class="phan-hoi-item-img-content-img">
                  <img src="image/phan-hoi3.jpg" alt="" />
                </div>
              </div>
              <p>
                The hostess and service staff were very kind. After many
                appearances at the restaurant, we got to know each other and
                became friends. Try to visit this restaurant if you have time. I
                really like the way they present this dish creatively, so I
                would highly recommend this dish to all my friends and family.
                It is always a pleasure to enjoy this dish at Rutass Restaurant.
              </p>
              <div class="phan-hoi-item-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- thông tin trang -->
    <div class="bg-light">
      <div class="container">
        <div class="row p-3">
          <div class="col-md-4 p-5">
            <h5>VỀ WEBSITE</h5>
            <p>
              Web Bán Đồ Ăn Vặt là trang bán đồ ăn, thức uống hàng đầu dành cho
              bạn trẻ Việt. Web Bán Đồ Ăn Vặt nhanh chóng trở thành sự lựa chọn
              tối ưu cho việc tìm kiếm món ăn với tốc độ nhanh gấp 7 lần, giao
              diện hiện đại cùng vô số hình ảnh bắt mắt. Sứ mệnh của chúng tôi
              là giúp người dùng Việt Nam đơn giản hoá việc tìm kiếm các món ăn,
              đồ uống và khám phá những món ăn địa điểm thú vị xung quanh họ để
              có những trải nghiệm tốt hơn mỗi ngày.
            </p>
          </div>
          <div class="col-md-4 p-5">
            <h5>LIÊN HỆ</h5>
            <p>
              Điện thoại: 0384762936 <br />
              Email: webanvat@gmail.com
            </p>
          </div>
          <div class="col-md-4 p-5">
            <h5>HỖ TRỢ KHÁCH HÀNG</h5>
            <ul>
              <li><a class="text-hover" href="">Giới thiệu</a></li>
              <li><a class="text-hover" href="">Chính sách đổi trả</a></li>
              <li><a class="text-hover" href="">Chính sách bảo mật</a></li>
              <li><a class="text-hover" href="">Điều khoản dịch vụ</a></li>
              <li><a class="text-hover" href="">liên hệ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="bg-dark p-3 text-light">
        <h6 class="d-flex justify-content-center">
          Copyright © 2023 by Nhom4-ltweb
        </h6>
      </div>
    </footer>
  </body>
  <script src="script.js"></script>
</php>
