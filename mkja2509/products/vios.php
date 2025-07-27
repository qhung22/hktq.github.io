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
                    <div class="slide-item"><img src="/mkja2509/static/vios_trang.jpg" alt="Toyota Vios 2024 Trắng">
                    </div>
                    <div class="slide-item"><img src="/mkja2509/static/vios_den.jpg" alt="Toyota Vios 2024 Đen"></div>
                </div>
            </div>

            <!-- Chọn màu xe -->
            <div class="color-options">
                <span data-color="0" class="color-dot white active"></span>
                <span data-color="1" class="color-dot black"></span>
            </div>
            <div class="card-info">
                <h1>Chi Tiết Xe Hơi</h1>
                <h2>Tên xe: Toyota Vios 2024</h2>
                <p><strong>Giá:</strong> Từ 458 - 545 triệu đồng</p>
                <p><strong>Kích thước DxRxC:</strong> 4425 x 1730 x 1475 (mm)</p>
                <p><strong>Chiều dài cơ sở:</strong> 2550 mm</p>
                <p><strong>Động cơ:</strong> 1.5L, 4 xy lanh thẳng hàng</p>
                <p><strong>Dung tích công tác:</strong> 1.496cc</p>
                <p><strong>Công suất cực đại:</strong> 107 mã lực</p>
                <p><strong>Mô-men xoắn cực đại:</strong> 140 Nm</p>
                <p><strong>Hộp số:</strong> Tự động CVT</p>
                <p><strong>Treo trước/sau:</strong> Độc lập Macpherson/dầm xoắn</p>
                <button class="btn" onclick="window.location.href='/contact.php'">Liên hệ tư vấn</button>
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
            <h2>GIỚI THIỆU TOYOTA VIOS 2024</h2>
            <p>
                Toyota Vios 2024 là phiên bản nâng cấp nhẹ của dòng xe Toyota Vios ra mắt năm 2022. Đây là dòng xe chiến lược chủ của Toyota và luôn được ưu đãi về giá bán để phục vụ cho nhu cầu mua xe của khách hàng. Vios 2024 nằm trong phân khúc xe sedan hạng B, bao
                gồm 3 phiên bản là Vios E CVT, Vios E MT, Vios G CVT. Tất cả các phiên bản xe Vios 2024 đều được sản xuất trong nước.
            </p>
            <p>
                Toyota Vios 2024 là dòng xe hội tụ nhiều ưu điểm nổi bật như thiết kế đẹp mắt, động cơ bền bỉ và tiết kiệm nhiên liệu. Mức tiêu hao nhiên liệu chỉ từ 4l/100 km mang đến cho bạn giá trị kinh tế vượt trội khi sử dụng dòng xe này.
            </p>
            <p>
                Giá xe Vios 2024 giao động từ 458 triệu đồng cho phiên bản thấp nhất Vios E MT số sàn và cao nhất từ 545 triệu đồng cho phiên bản Vios 1.5E CVT cao cấp.
            </p>
        </div>

        <!-- Bảng giá Vios -->
        <div class="price-table">
            <h2>Giá Xe Toyota Vios 2024 Lăn Bánh</h2>
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
                        <td>Vios E MT</td>
                        <td>458 triệu VNĐ</td>
                        <td>520.000.000 VNĐ</td>
                        <td>505.000.000 VNĐ</td>
                        <td>490.000.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Vios E CVT</td>
                        <td>495 triệu VNĐ</td>
                        <td>562.000.000 VNĐ</td>
                        <td>545.000.000 VNĐ</td>
                        <td>528.000.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>Vios G CVT</td>
                        <td>545 triệu VNĐ</td>
                        <td>615.000.000 VNĐ</td>
                        <td>598.000.000 VNĐ</td>
                        <td>580.000.000 VNĐ</td>
                    </tr>
                </tbody>
            </table>
            <p>Giá xe Toyota Vios 2024 dao động từ 458 triệu đồng cho phiên bản Vios E MT số sàn đến 545 triệu đồng cho phiên bản Vios G CVT cao cấp.</p>
            <p>Giá lăn bánh có thể thay đổi tùy theo khu vực và các khoản thuế, phí cụ thể.</p>
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