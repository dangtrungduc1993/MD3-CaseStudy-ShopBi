@extends('front.layout.master')
aaaaaaaaaaaaaaaaaaa


@section('body')
@section('title','Home')
{{-- <td><a href="{{route('product.detailType',4)}}">DetailType</a></td> --}}



    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a target="blank" href="{{route('product.listauth')}}"> Thời trang nam</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Thời trang nam</a></li>
                                    <div class="content trai">
                                        <li><a target="blank" href="#">Quần Shorts</a></li>
                                        <li><a target="blank" href="{{route('product.detailType',1)}}">Áo Thun & Áo Polo</a></li>
                                        <li><a target="blank" href="#">Áo Sơ Mi</a></li>

                                    </div>
                                    <div class="content phai">
                                        <li><a target="blank" href="#">Quần Dài</a></li>
                                        <li><a target="blank" href="#">Phụ Kiện Nam</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a target="blank" href="#">Thời Trang Nữ </a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Thời Trang Nữ</a></li>
                                    <div class="content trai">
                                        <li><a target="blank" href="#">Quần Shorts</a></li>
                                        <li><a target="blank" href="#">Chân Váy</a></li>
                                        <li><a target="blank" href="#">Đầm</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a target="blank" href="#">Áo Thun & Áo Kiểu</a></li>
                                        <li><a target="blank" href="#">Phụ Kiện Nữ </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Giày Dép Nam</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Giày Dép Nam</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Sneaker</a></li>
                                        <li><a href="#">Giày Da</a></li>
                                        <li><a href="#">Giày Oxfords</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Sandals & Dép Nam</a></li>
                                        <li><a href="#">Phụ Kiện Giày Dép</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Giày Dép Nữ</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Giày Dép Nữ</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Sneaker</a></li>
                                        <li><a href="#">Tiểu Thuyết </a></li>
                                        <li><a href="#">Giày Cao Gót</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Giày Oxfords</a></li>
                                        <li><a href="#">Dép Nữ</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Máy Tính & Laptop</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Máy Tính & Laptop</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Asus</a></li>
                                        <li><a href="#">Dell</a></li>
                                        <li><a href="#">Lenovo</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Msi</a></li>
                                        <li><a href="#">Acer</a></li>
                                        <li><a href="#">Hp</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện Thoại & Phụ Kiện</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện Thoại & Phụ Kiện</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Sony</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Oppo</a></li>
                                        <li><a href="#">Xiaomi</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Máy Ảnh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Máy Ảnh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Sony</a></li>
                                        <li><a href="#">Canon</a></li>
                                    </div>
                                    <div class="content trai">
                                        <li><a href="#">KingStone</a></li>
                                        <li><a href="#">Imout</a></li>
                                    </div>

                                </ul>
                            </li>
                            <li><a href="#">Đời Sống</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Đời Sống</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Dụng Cụ Nhà Bếp</a></li>
                                        <li><a href="#">Đồ Nội Thất</a></li>
                                        <li><a href="#">Dụng Cụ Phòng Tắm</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Trang Trí Nhà Cửa</a></li>
                                        <li><a href="#">Tinh Dầu Thơm</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Sức Khỏe</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Sức Khỏe</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Khẩu Trang</a></li>
                                        <li><a href="#">Xịt Họng Keo Ong</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Kit Test Covid</a></li>
                                        <li><a href="#">Viên Uống Bổ Sung</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Làm Đẹp</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Làm Đẹp</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Tóc Mượt Da Mịn</a></li>
                                        <li><a href="#">Chăm Sóc Da</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Dụng Cụ Trang Điểm</a></li>
                                        <li><a href="#">Dụng Cụ Làm Đẹp</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Mẹ & Bé</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Mẹ & Bé</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Bobby</a></li>
                                        <li><a href="#">Huggies</a></li>
                                        <li><a href="#">Pampers</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Babyhop</a></li>
                                        <li><a href="#">HiPP</a></li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="images/banner10.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner1.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner3.jpg" class="img-fluid"
                                        style="height: 386px;"width="900px" alt="Third slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner8.jpg" class="img-fluid"
                                        style="height: 386px;"width="900px" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <a class="nav-link text-dark giohang text-uppercase" href="{{route('auth.logout')}}"
                            style="display:inline-block">Log Out</a>
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">FLASH SALE</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg"
                                    alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                    <small class="thoigian text-muted">03/04/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg"
                                    alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                    <small class="thoigian text-muted">31/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                    <small class="thoigian text-muted">21/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"
                                    alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg"
                                    alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>



        <!-- div _1khoi -- khoi sachnendoc -->
        <section class="_1khoi sachnendoc bg-white mt-4">
            <div class="container">
                <div class="noidung" style=" width: 100%;">
                    <div class="row">
                        <!--header-->
                        <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                            <h2 class="header text-uppercase" style="font-weight: 400;">TOP TÌM KIẾM</h2>
                            <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                        </div>
                        <!-- 1 san pham -->
                        <div class="col-lg col-sm-4">
                            <div class="card">
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                    <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg"
                                        alt="tung-buoc-chan-no-hoa">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                        <small class="thoigian text-muted">03/04/2020</small>
                                        <div><a class="detail" href="#">Xem chi tiết</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-sm-4">
                            <div class="card">
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                    data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                    <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg"
                                        alt="cam-on-vi-da-duoc-thuong">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                        <small class="thoigian text-muted">31/03/2020</small>
                                        <div><a class="detail" href="#">Xem chi tiết</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-sm-4">
                            <div class="card">
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                    <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                        <small class="thoigian text-muted">21/03/2020</small>
                                        <div><a class="detail" href="#">Xem chi tiết</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-sm-4">
                            <div class="card">
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                    <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"
                                        alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                        <small class="thoigian text-muted">16/03/2020</small>
                                        <div><a class="detail" href="#">Xem chi tiết</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg col-sm-4">
                            <div class="card cuoicung">
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Đại dịch trên những con đường tơ lụa">
                                    <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg"
                                        alt="dai-dich-tren-con-duong-to-lua">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                        <small class="thoigian text-muted">16/03/2020</small>
                                        <div><a class="detail" href="#">Xem chi tiết</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>



            <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">TOP BÁN CHẠY</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg"
                                    alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                    <small class="thoigian text-muted">03/04/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg"
                                    alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                    <small class="thoigian text-muted">31/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                    <small class="thoigian text-muted">21/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"
                                    alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg"
                                    alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>


    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">GỢI Ý HÔM NAY</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg"
                                    alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                    <small class="thoigian text-muted">03/04/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg"
                                    alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                    <small class="thoigian text-muted">31/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                    <small class="thoigian text-muted">21/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"
                                    alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg"
                                    alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>








@endsection
