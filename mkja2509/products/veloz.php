<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chi Tiết Xe Hơi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/products.css" />
    <link rel="stylesheet" href="../css/footer.css" />

    <!-- JS -->
    <script src="../js/script.js" defer></script>
</head>

<body>

    <!-- Navbar -->
<body>

    <!-- Navbar -->
    <header>
        <!-- Logo (ra khỏi products → vào static/logo) -->
        <img src="../static/logo/logo3.jpg" alt="Logo" class="logo">

        <div class="nav">
            <!-- Quay ra khỏi /products để truy cập các trang PHP -->
            <a href="../index.php">TRANG CHỦ</a>
            <a href="../about.php">GIỚI THIỆU</a>
            <a href="../cars.php">KHO XE</a>
            <a href="../policy.php">CHÍNH SÁCH</a>
            <a href="../blog.php">BLOG</a>
            <a href="../contact.php">LIÊN HỆ</a>
        </div>

        <a href="../login.php" class="sign-in">Đăng nhập</a>
    </header>
    <!-- Nội dung chính -->
    <div class="container">
        <div class="card">
            <div class="card-img">
                <div class="car-slider">
                    <div class="slide-item"><img src="/mkja2509/static/ToyotaVeloz2024-Trang.jpg" alt="Toyota Veloz 2024 Trắng">
                    </div>
                    <div class="slide-item"><img src="/mkja2509/static/ToyotaVeloz2024-den.jpg" alt="Toyota Veloz 2024 Đen"></div>
                </div>
            </div>

            <!-- Chọn màu xe -->
            <div class="color-options">
                <span data-color="0" class="color-dot white active"></span>
                <span data-color="1" class="color-dot black"></span>
            </div>
            <div class="card-info">
                <h1>Chi Tiết Xe Hơi</h1>
                <h2>Tên xe: Toyota Veloz 2024</h2>
                <p><strong>Giá:</strong> Từ 638 - 660 triệu đồng</p>
                <p><strong>Kiểu xe:</strong> MPV</p>
                <p><strong>Nguồn gốc:</strong> Nhập khẩu</p>
                <p><strong>Số phiên bản:</strong> CVT và bản TOP</p>
                <p><strong>Số chỗ ngồi:</strong> 7 chỗ</p>
                <p><strong>Động cơ:</strong> 2NR-VE</p>
                <p><strong>Hộp số:</strong> Tự động vô cấp CVT</p>
                <button class="btn" onclick="window.location.href='/contact.html'">Liên hệ tư vấn</button>
            </div>
        </div>

        <div class="promotion-box">
            <h2>KHUYẾN MÃI & ƯU ĐÃI</h2>
            <ul class="promotion-list">
                <li>✅ Xe mới 2025</li>
                <li>✅ Tặng phí trước bạ</li>
                <li>✅ Chỉ cần trả trước từ 69Tr</li>
                <li>✅ Lãi suất vay chỉ từ 6.99%</li>
                <li>✅ Tặng bảo hiểm thân vỏ xe</li>
                <li>✅ Tặng trọn bộ phụ kiện theo xe</li>
                <li>✅ Tặng hợp tác xã 7 năm cho xe kinh doanh</li>
                <li>✅ Tặng hộp đen tài xế</li>
                <li>✅ Nhận hỗ trợ cải tạo xe tập lái vay ngân hàng</li>
                <li>✅ Nhận thu xe cũ - đổi xe mới giá tốt</li>
                <li>✅ Nhận giao xe tận nhà</li>
                <li>✅ Sẵn xe lái thử</li>
                <li>✅ Đặc biệt khách nợ xấu vẫn được hỗ trợ vay ngân hàng ( Lien hệ Hotline để được tư vấn chi tiết ạ )
                </li>
                <li>*Quý khách liên hệ hotline 0123456789, để nhận thông tin khuyến mãi và ưu đãi tốt nhất.</li>
                </li>
            </ul>
        </div>
        <!-- Phần giới thiệu thêm về xe -->
        <div class="car-introduction">
            <h2>GIỚI THIỆU TOYOTA VELOZ 2024</h2>
            <p>
                Toyota Veloz 2024 giá siêu ưu đãi tại Toyota Bắc Ninh và nhiều khuyến mại hấp dẫn. Đến với chúng tôi, quý khách hàng sẽ lựa chọn được cho mình chiếc xe Veloz 2024 ưng ý, đa dạng màu sắc lựa chọn cùng với chất lượng dịch vụ tốt nhất. Toyota Veloz 2024
                là phiên bản nâng cấp nhẹ của thế hệ xe Veloz Cross ra mắt trong năm vừa qua. Toyota Veloz 2024 nằm trong phân khúc xe đa dụng với thiết kế 7 chỗ ngồi, sử dụng động cơ xăng 2NR-VE hút khí tự nhiên cho công suất tối đa 105HP.
            </p>
            <p>
                Toyota Veloz 2024 ra mắt với 2 phiên bản bao gồm Toyota Veloz 2024 bản tiêu chuẩn (Veloz CVT) và Toyota Veloz TOP bản cao cấp. Giá xe Toyota Veloz 2024 giao động từ 638 triệu đến 660 triệu đồng tuỳ thuộc vào từng phiên bản. Thế hệ xe Veloz 2024 sử dụng
                hộp số tự động vô cấp CVT cho khả năng vận hành mượt mà êm ái, cùng hệ dẫn động cầu trước cho khả năng vận hành linh hoạt trên các cung đường khác nhau.
            </p>
        </div>

        <!-- Thông báo chưa có bảng giá -->
        <div class="price-table">
            <h2>Giá Xe Toyota Veloz 2024 Lăn Bánh</h2>
            <p>Hiện tại chưa có thông tin chi tiết về giá lăn bánh cho Toyota Veloz 2024. Quý khách vui lòng liên hệ để được tư vấn và cập nhật giá chính xác nhất.</p>
        </div>
    </div>
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

    <script>
        const colorDots = document.querySelectorAll('.color-dot');
        const slider = document.querySelector('.car-slider');

        colorDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = dot.getAttribute('data-color');

                // Chuyển ảnh
                slider.style.transform = `translateX(-${index * 100}%)`;

                // Thêm trạng thái active
                colorDots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
            });
        });
    </script>
</body>

</html>