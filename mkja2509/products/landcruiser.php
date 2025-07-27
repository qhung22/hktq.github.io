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
                    <div class="slide-item"><img src="/mkja2509/static/avanza.jpg" alt="Land Cruiser Prado 2024"></div>
                    <div class="slide-item"><img src="/mkja2509/static/avanza_black1.jpg" alt="Land Cruiser Prado 2024"></div>
                </div>
            </div>

            <!-- Chọn màu xe -->
            <div class="color-options">
                <span data-color="0" class="color-dot white active"></span>
                <span data-color="1" class="color-dot black"></span>
            </div>

            <div class="card-info">
                <h1>Chi Tiết Xe Hơi</h1>
                <h2>Tên xe: TOYOTA AVANZA PREMIO 2024</h2>
                <p><strong>Giá:</strong> Từ 558 -598 triệu đồng</p>
                <p><strong>Số chỗ ngồi:</strong> 7 chỗ</p>
                <p><strong>Kiểu xe:</strong> Đa dụng MPV</p>
                <p><strong>Xuất xứ:</strong> Nhập khẩu Indonesia</p>
                <p><strong>Động cơ:</strong> Xăng dung tích 1496cc</p>
                <p><strong>Hộp số:</strong> CVT/ MT</p>
                <p><strong>Công suất:</strong> 105/6000 mã lực</p>
                <p><strong>Hệ dẫn động:</strong> Cầu trước</p>
                <button class="btn" onclick="window.location.href='/contact.html'">Liên hệ tư vấn</button>

            </div>
        </div>

        <!-- Khuyến mãi & Ưu đãi -->
        <div class="promotion-box">
            <h2>KHUYẾN MÃI & ƯU ĐÃI</h2>
            <ul class="promotion-list">
                <li>✅ Xe mới 2025</li>
                <li>✅ Tặng phí trước bạ</li>
                <li>✅ Chỉ cần trả trước từ 80Tr</li>
                <li>✅ Lãi suất vay chỉ từ 1.99%</li>
                <li>✅ Tặng bảo hiểm thân vỏ xe</li>
                <li>✅ Tặng trọn bộ phụ kiện theo xe</li>
                <li>✅ Tặng hợp tác xã 7 năm cho xe kinh doanh</li>
                <li>✅ Tặng hộp đen tài xế kinh doanh</li>
                <li>✅ Nhận hỗ trợ cải tạo xe tập lái vay ngân hàng</li>
                <li>✅ Nhận thu xe cũ – đổi xe mới giá tốt</li>
                <li>✅ Nhận giao xe tận nhà</li>
                <li>✅ Sẵn xe lái thử</li>
                <li>✅ <strong>Đặc biệt</strong> hỗ trợ khách nợ xấu vay ngân hàng (liên hệ Hotline để biết chi tiết)
                </li>
                <li>*Quý khách liên hệ hotline : 0123456789, nhận thông tin khuyến mãi và ưu đãi tốt nhất.</li>
            </ul>
        </div>

        <!-- Phần giới thiệu thêm về xe -->
        <div class="car-introduction">
            <h2>GIỚI THIỆU TOYOTA AVANZA PREMIO 2024</h2>
            <p>
                Avanza Premio 2024 là phiên bản thuộc thế hệ mới được Toyota Việt Nam nhập khẩu Indonesia. Mẫu MPV phát triển dựa trên nền tảng khung gầm DNGA của hãng con Daihatsu. Bản mới của Avanza 2024 thay đổi triệt để ngoại, nội thất. Động cơ mới loại 1,5 lít cho
                công suất 104 mã lực, mô-men xoắn cực đại 138 Nm.
            </p>
            <p>
                Toyota Avanza Premio 2024 bán tại Việt Nam có 2 phiên bản gồm Avanza Premio CVT số tự động và bản Avanza Premio 2024 MT số sàn. Giá xe Avnaza Premio 2024 giao động từ 558 triệu đồng - 598 triệu đồng. Trong đó:
            </p>
            <ul>
                <li><strong>Giá xe Avanza Premio 2024 CVT:</strong> 598.000.000 VNĐ</li>
                <li><strong>Giá xe Avanza Premio 2024 MT:</strong> 558.000.000 VNĐ</li>
            </ul>
        </div>

        <!-- Bảng giá niêm yết -->
        <div class="price-table">
            <h2>TOYOTA AVANZA PREMIO 2024 GIÁ LĂN BÁNH</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tên phiên bản</th>
                        <th>Giá niêm yết</th>
                        <th>Lăn bánh tại HN</th>
                        <th>Lăn bánh tại TP.HCM</th>
                        <th>Lăn bánh tại các tỉnh khác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Avanza Premio AT</td>
                        <td>598 triệu VNĐ</td>
                        <td>692.454.000 VNĐ</td>
                        <td>680.494.000 VNĐ</td>
                        <td>661.494.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Avanza Premio MT</td>
                        <td>558 triệu VNĐ</td>
                        <td>647.654.000 VNĐ</td>
                        <td>636.494.000 VNĐ</td>
                        <td>617.494.000 VNĐ</td>
                    </tr>
                </tbody>
            </table>
            <p>​Toyota Avanza Premio CVT 2024 giá lăn bánh tại Hà Nội từ 692.454.000 VNĐ, giá lăn bánh tại TP HCM từ 680.494.000 VNĐ, giá lăn bánh tại tỉnh khác từ 661.494.000 VNĐ. Giá xe Toyota Avanza Premio 2024 bản MT (số sàn) tại Hà Nội từ 647.654.000
                VNĐ, giá lăn bánh tại TP từ 636.494.000 VNĐ, giá lăn bánh tại các tỉnh khác từ 617.494.000 VNĐ.</p>
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
        function clearSpecificErrors(elementId) {
            const el = document.getElementById(elementId);
            if (el) el.textContent = '';
        }


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