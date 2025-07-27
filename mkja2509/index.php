<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>

    <title>Trang chủ SHOWROOM HKTQ</title>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <img src="/mkja2509/static/logo/logo3.jpg" alt="Logo" class="logo">
        <div class="nav">
            <a href="index.php" data-replace="Trang chủ"><span>Trang chủ</span></a>
            <a href="about.php" data-replace="Giới thiệu"><span>Giới thiệu</span></a>
            <a href="cars.php" data-replace="KHO XE"><span>KHO XE</span></a>
            <a href="policy.php" data-replace="CHÍNH SÁCH"><span>CHÍNH SÁCH</span></a>
            <a href="blog.php" data-replace="BLOG"><span>BLOG</span></a>
            <a href="contact.php" data-replace="Liên hệ"><span>Liên hệ</span></a>
        </div>
        <span id="welcomeUser" style="color: white; margin-right: 10px;"></span>
        <a href="#" id="loginBtn" class="sign-in" data-bs-toggle="modal" data-bs-target="#combinedModal">Đăng nhập</a>
        <a href="#" id="logoutBtn" class="sign-in" style="display: none;">Đăng xuất</a>
        <span id="welcomeUser"></span>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="/mkja2509/static/bg2.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/mkja2509/static/bg1.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <video class="d-block w-100" loop playsinline>
                        <source src="/mkja2509/static/video\supra1.mp4" type="video/mp4">
                        
                    </video>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/mkja2509/static/bg2.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Hero Content -->
        <div class="hero-content">
            <h1>SỨC MẠNH & VẺ ĐẸP</h1>
            <p>
                Kho lưu trữ ô tô trị giá 1 triệu USD của Thư viện miễn phí đang chuyển đến bảo tàng ô tô nổi tiếng thế giới tại Philly và một điểm du lịch ở Hershey.
            </p>
            <a href="#product-list" class="btn">Khám phá ngay</a>
        </div>
        <!-- <img src="/static/car.png" alt="Ô tô" class="car-image" /> -->
    </div>
    <br>

    <!-- Product Section -->
    <div class="product-list" id="product-list">
        <div class="product">
            <img src="/mkja2509/static/avanza1.jpg" alt="Xe 1" />
            <h3>TOYOTA AVANZA PREMIO 2024</h3>
            <p>Giá: 558,000,000vnđ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\avanza.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/11.png" alt="Xe 2" />
            <h3>Toyota Camry 2.5Q 2024</h3>
            <p>Giá: 1.185.000.000vnđ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\camry.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/corolla2.jpg" alt="Xe 3" />
            <h3>Toyota Corolla Cross Hybrid 2024</h3>
            <p>Giá: 905,000,000vnđ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\corolla.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/fortuner1.jpg" alt="Xe 3" />
            <h3>Toyota Fortuner</h3>
            <p>Giá: 1,055,000,000vnđ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\fortuner.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/landcruiser.jpg" alt="Xe 3" />
            <h3>TOYOTA LAND CRUISER PRADO 2024</h3>
            <p>Giá: 2.628.000.000 VNĐ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\landcruiser.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/camry-hybird.jpg" alt="Xe 3" />
            <h3>Toyota Camry Hybrid 2023</h3>
            <p>Giá: 1.460.000.000 VNĐ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\toyota2023.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/veloz3-2024.jpg" alt="Xe 3" />
            <h3>Toyota Veloz 2024</h3>
            <p>Giá: 638.000.000 VNĐ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\veloz.html" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/vios2-2024.jpg" alt="Xe 3" />
            <h3>Toyota Vios 2024</h3>
            <p>Giá: 458.000.000 VNĐ</p>
            <a href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\products\vios.html" class="btn">Mua ngay</a>
        </div>
    </div>
    <br>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://facebook.com/storesupercar" target="_blank">Facebook</a> |
            <a href="https://instagram.com/storesupercar" target="_blank">Instagram</a> |
            <a href="https://twitter.com/storesupercar" target="_blank">Twitter</a>
        </div>
        <div class="contact-info">
            <p>Số điện thoại: (+84) 123 456 789</p>
            <p>Địa chỉ: Số 504 Đại lộ Bình Dương, P. Hiệp Thành, Tp. Thủ Dầu Một, T. Bình Dương</p>
        </div>
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6503259060482!2d106.66144937486027!3d10.989744289172352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1be2495c19d%3A0xafd977d94466ffc2!2zxJDhuqFpIGjhu41jIELDrG5oIETGsMahbmc!5e0!3m2!1svi!2s!4v1744386856913!5m2!1svi!2s"
                width="70%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p>© 2025 SHOWROOM HKTQ. All rights reserved.</p>
    </footer>

    <!-- Modal Đăng Nhập / Đăng Ký -->
    <div class="modal fade" id="combinedModal" tabindex="-1" aria-labelledby="combinedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content card">
                <div class="modal-header card-header">
                    <h5 class="modal-title" id="combinedModalLabel">Đăng Nhập / Đăng Ký</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card-body">
                    <ul class="nav nav-tabs" id="outerTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab-modal" data-bs-toggle="tab" data-bs-target="#login-pane" type="button" role="tab" aria-controls="login-pane" aria-selected="true">Đăng Nhập</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="register-tab-modal" data-bs-toggle="tab" data-bs-target="#register-pane" type="button" role="tab" aria-controls="register-pane" aria-selected="false">Đăng Ký</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="outerTabContent">
                        <!-- Login Pane -->
                        <div class="tab-pane fade show active" id="login-pane" role="tabpanel" aria-labelledby="login-tab-modal">
                            <form action="#" method="POST" class="login-form" id="loginForm" novalidate>
                                <div class="form-group mb-3 position-relative">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="loginEmail" name="email" required placeholder="Nhập email">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email hợp lệ.</div>
                                </div>
                                <div class="form-group mb-3 position-relative">
                                    <label for="loginPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password" required placeholder="Nhập mật khẩu">
                                    <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                    <label class="form-check-label" for="rememberMe">Lưu Tài Khoản</label>
                                </div>
                                <button type="submit" class="btn btn-custom w-100">Đăng Nhập</button>
                                <div id="loginErrorGeneral" class="invalid-feedback d-block text-center mt-3"></div>
                            </form>
                        </div>
                        <!-- Register Pane -->
                        <div class="tab-pane fade" id="register-pane" role="tabpanel" aria-labelledby="register-tab-modal">
                            <form action="#" method="POST" class="register-form" id="registerForm" novalidate>
                                <div class="form-group mb-3 position-relative">
                                    <label for="registerName" class="form-label">Họ và Tên</label>
                                    <input type="text" class="form-control" id="registerName" name="name" required placeholder="Nhập họ và tên">
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên.</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerPhone" class="form-label">Số điện thoại</label>
                                        <input type="tel" class="form-control" id="registerPhone" name="phone" required pattern="^(0\d{9})$" placeholder="Nhập số điện thoại">
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại hợp lệ (10 số, bắt đầu bằng 0).</div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerGender" class="form-label">Giới tính</label>
                                        <select class="form-select form-control" id="registerGender" name="gender" required>
                                            <option selected disabled value="">Chọn giới tính</option>
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                            <option value="other">Khác</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 position-relative">
                                    <label for="registerEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="registerEmail" name="email" required placeholder="Nhập email">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email hợp lệ.</div>
                                    <div id="registerEmailTakenFeedback" class="invalid-feedback"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerPassword" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="registerPassword" name="password" required minlength="6" placeholder="Mật khẩu (ít nhất 6 ký tự)">
                                        <div class="invalid-feedback">Mật khẩu phải có ít nhất 6 ký tự.</div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerConfirmPassword" class="form-label">Nhập lại Mật khẩu</label>
                                        <input type="password" class="form-control" id="registerConfirmPassword" name="confirmPassword" required placeholder="Nhập lại mật khẩu">
                                        <div class="invalid-feedback">Vui lòng nhập lại mật khẩu.</div>
                                        <div id="registerConfirmPasswordError" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerCity" class="form-label">Tỉnh/Thành phố</label>
                                        <select class="form-select form-control" id="registerCity" name="city" required>
                                            <option selected disabled value="">Chọn tỉnh thành</option>
                                            <option value="hcm">Hồ Chí Minh</option>
                                            <option value="bd">Bình Dương</option>
                                            <option value="hn">Hà Nội</option>
                                            <option value="dn">Đà Nẵng </option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn tỉnh/thành phố.</div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3 position-relative">
                                        <label for="registerDistrict" class="form-label">Quận/Huyện</label>
                                        <select class="form-select form-control" id="registerDistrict" name="district" required>
                                            <option selected disabled value="">Chọn quận huyện</option>
                                            <option value="tdm">Thủ Dầu Một</option>
                                            <option value="q1">Quận 1</option>
                                            <option value="q2">Quận 2</option>
                                            <option value="q3">Quận 3</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn quận/huyện.</div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 position-relative">
                                    <label for="registerAddress" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="registerAddress" name="address" required placeholder="Nhập địa chỉ (số nhà, đường, phường/xã)">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
                                </div>
                                <div class="form-group mb-3 position-relative">
                                    <label for="registerBirthdate" class="form-label">Ngày sinh</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        <input type="date" class="form-control" id="registerBirthdate" name="birthdate" required>
                                        <div class="invalid-feedback w-100">Vui lòng chọn ngày sinh.</div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 position-relative">
                                    <label class="form-label">Mã bảo mật</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text captcha-code-display" id="captchaCode"></span>
                                        <input type="text" class="form-control" id="registerCaptcha" name="captcha" required placeholder="Nhập mã bảo mật">
                                        <button type="button" class="btn btn-secondary btn-sm" onclick="generateCaptcha()">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                        <div class="invalid-feedback w-100">Vui lòng nhập đúng mã bảo mật.</div>
                                    </div>
                                </div>
                                <div class="mb-3 form-check position-relative">
                                    <input type="checkbox" class="form-check-input" id="registerAgree" name="agree" required>
                                    <label class="form-check-label" for="registerAgree">Tôi đã đọc và đồng ý với <a href="/policy.html" target="_blank">Chính sách</a> của chương trình</label>
                                    <div class="invalid-feedback">Bạn cần đồng ý với chính sách.</div>
                                </div>
                                <button type="submit" class="btn btn-custom w-100">Đăng Ký</button>
                                <div id="registerErrorGeneral" class="invalid-feedback d-block text-center mt-3"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <small>Chuyển đổi? <a href="#" class="link-toggle" onclick="switchTab(event)">Nhấn vào đây</a></small>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselElement = document.querySelector('#heroCarousel');
            const carousel = new bootstrap.Carousel(carouselElement, {
                ride: 'carousel',
                interval: 5000 // Thời gian mặc định cho slide ảnh
            });

            carouselElement.addEventListener('slide.bs.carousel', function(e) {
                // Dừng tất cả video khi chuyển slide
                const videos = document.querySelectorAll('.carousel-item video');
                videos.forEach(video => {
                    video.pause();
                    video.currentTime = 0; // Reset video về đầu
                });

                // Xử lý slide sắp hiển thị
                const nextSlide = e.relatedTarget;
                const video = nextSlide.querySelector('video');
                if (video) {
                    // Tạm dừng carousel khi slide video hiển thị
                    carousel.pause();
                    video.play();

                    // Chuyển slide khi video kết thúc
                    video.onended = function() {
                        carousel.next();
                        carousel.cycle(); // Tiếp tục tự động chuyển cho các slide sau
                    };
                }
            });

            // Cho phép điều hướng thủ công bằng nút
            carouselElement.addEventListener('slid.bs.carousel', function() {
                const activeSlide = document.querySelector('.carousel-item.active');
                const video = activeSlide.querySelector('video');
                if (!video) {
                    carousel.cycle(); // Tiếp tục tự động chuyển nếu không phải slide video
                }
            });
        });
    </script>
</body>
<script>
    console.log("Trang đã tải");
    console.log("Người dùng đã đăng nhập:", localStorage.getItem('loggedInUser'));
</script>
</html>