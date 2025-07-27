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
                    <div class="slide-item"><img src="/mkja2509/static/camry_trang.jpg" alt="Toyota Camry 2.5Q 2024 Trắng"></div>
                    <div class="slide-item"><img src="/mkja2509/static/camry_den.jpg" alt="Toyota Camry 2.5Q 2024 Đen"></div>
                </div>
            </div>

            <!-- Chọn màu xe -->
            <div class="color-options">
                <span data-color="0" class="color-dot white active"></span>
                <span data-color="1" class="color-dot black"></span>
            </div>

            <div class="card-info">
                <h1>Chi Tiết Xe Hơi</h1>
                <h2>Tên xe: Toyota Camry 2.5Q 2024</h2>
                <p><strong>Giá:</strong> 1.185.000.000 VNĐ</p>
                <p><strong>Kích thước DxRxC (mm):</strong> 4885 x 1840 x 1445</p>
                <p><strong>Chiều dài cơ sở (mm):</strong> 2825</p>
                <p><strong>Động cơ:</strong> A25A-FKS, van biến thiên VVT-iE</p>
                <p><strong>Dung tích công tác:</strong> 2.0L</p>
                <p><strong>Công suất cực đại (mã lực):</strong> 154(207)/ 6600</p>
                <p><strong>Mô-men xoắn cực đại (Nm):</strong> 250/ 5000</p>
                <p><strong>Hộp số:</strong> Tự động 8 cấp</p>
                <p><strong>Treo trước/sau:</strong> Macpherson/tay đòn kép</p>
                <button class="btn" onclick="window.location.href='/contact.html'">Liên hệ tư vấn</button>
            </div>
        </div>

        <!-- Khuyến mãi & Ưu đãi -->
        <div class="promotion-box">
            <h2>KHUYẾN MÃI & ƯU ĐÃI</h2>
            <ul class="promotion-list">
                <li>✅ Xe mới 2025</li>
                <li>✅ Sẵn xe giao ngay</li>
                <li>✅ Hỗ trợ ngân hàng đến 85%</li>
                <li>✅ Lãi xuất ưu đãi chỉ từ 6%</li>
                <li>✅ Nhận thu xe cũ – đổi xe mới giá tốt</li>
                <li>✅ Nhận giao xe tận nhà</li>
                <li>*Quý khách liên hệ hotline : 0123456789, nhận thông tin khuyến mãi và ưu đãi tốt nhất.</li>
            </ul>
        </div>

        <!-- Phần giới thiệu thêm về xe -->
        <div class="car-introduction">
            <h2>Giới Thiệu Toyota Camry 2.5Q 2024</h2>
            <p>
                Toyota Camry 2.5Q 2024 là phiên bản cao cấp trong bốn dòng xe Toyota Camry 2023. Phiên bản này được trang bị đầy đủ các tính năng an toàn, tiệm cận với phiên bản Camry Hybrid 2023 tuy nhiên có giá bán thấp hơn vì vậy đây là phiên bản được nhiều khách
                hàng quan tâm. Ưu điểm nổi bật của Camry 2.5Q 2024 là thiết kế đẹp mắt, trang bị đầy đủ các tính năng an toàn, mức giá giảm so với phiên bản lắp ráp trong khi sử dụng động cơ và hộp số mới.
            </p>
            <p>
                Ngoài Camry 2.5Q 2024, dòng xe Camry còn có các phiên bản khác bao gồm: Camry 2.0G 2024, Camry 2.0Q 2024, Camry Hybrid. Trong đó bản Hybrid sử dụng động cơ xăng lai điện hiện đại, lần đầu tiên được sử dụng trong phân khúc xe sedan cỡ D tại Việt Nam.
            </p>
        </div>

        <!-- Bảng giá niêm yết -->
        <div class="price-table">
            <h2>Giá Xe Toyota Camry Lăn Bánh</h2>
            <table>
                <thead>
                    <tr>
                        <th>Phiên bản</th>
                        <th>Giá niêm yết</th>
                        <th>Lăn bánh HN</th>
                        <th>Lăn bánh TP HCM</th>
                        <th>Lăn bánh Tỉnh khác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Camry Hybrid</td>
                        <td>1 tỷ 460 triệu VNĐ</td>
                        <td>1.657.537.000 VNĐ</td>
                        <td>1.628.337.000 VNĐ</td>
                        <td>1.609.337.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Camry 2.5Q</td>
                        <td>1 tỷ 370 triệu VNĐ</td>
                        <td>1.556.737.000 VNĐ</td>
                        <td>1.529.337.000 VNĐ</td>
                        <td>1.510.337.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Camry 2.0Q</td>
                        <td>1 tỷ 185 triệu VNĐ</td>
                        <td>1.349.537.000 VNĐ</td>
                        <td>1.325.837.000 VNĐ</td>
                        <td>1.306.837.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Camry 2.0G</td>
                        <td>1 tỷ 070 triệu VNĐ</td>
                        <td>1.220.737.000 VNĐ</td>
                        <td>1.199.337.000 VNĐ</td>
                        <td>1.180.337.000 VNĐ</td>
                    </tr>
                </tbody>
            </table>
            <p>Giá xe Toyota Camry 2024 giao động từ 1 tỷ 070 triệu cho phiên bản thấp nhất đến 1 tỷ 460 triệu cho phiên bản cao cấp.</p>
            <p>Toyota Camry 2.0G 2024 giá lăn bánh tại HN từ 1.220.737 VNĐ, giá lăn bánh tại TP HCM từ 1.199.337.000 VNĐ. Giá lăn bánh tại Tỉnh khác từ 1.180.337.000 VNĐ</p>
            <p>Toyota Camry 2.0Q 2024 giá lăn bánh tại Hà Nội từ 1.349.537.000 VNĐ, giá lăn bánh tại TP HCM giao động từ 1.325.837.000 VNĐ, giá lăn bánh tại Tỉnh khác giao động từ 1.306.837.000 VNĐ.</p>
            <p>Toyota Camry Hybrid 2024 giá lăn bánh tại Hà Nội từ 1.657.537.000 VNĐ, giá lăn bánh tại TP HCM giao động từ 1.628.337.000 VNĐ, giá lăn bánh tại các tỉnh khác giao động từ 1.609.337.000 VNĐ</p>
            <p>Toyota Camry 2.5Q 2024 giá lăn bánh tại Hà Nội khởi điểm từ 1.556.737.000 VNĐ, giá lăn bánh tại TP HCM khởi điểm giao động từ 1.529.337.000 VNĐ. Giá lăn bánh tại các tỉnh khác với phiên bản này khởi điểm từ 1.510.337.000 VNĐ</p>
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