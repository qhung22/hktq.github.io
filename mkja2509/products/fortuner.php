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
                    <div class="slide-item"><img src="/mkja2509/static/fortuner.jpg" alt="Toyota Fortuner Trắng"></div>
                    <div class="slide-item"><img src="/mkja2509/static/fortuner_den.jpg" alt="Toyota Fortuner Đen"></div>
                </div>
            </div>

            <!-- Chọn màu xe -->
            <div class="color-options">
                <span data-color="0" class="color-dot white active"></span>
                <span data-color="1" class="color-dot black"></span>
            </div>
            <div class="card-info">
                <h1>Chi Tiết Xe Hơi</h1>
                <h2>Tên xe: Toyota Fortuner</h2>
                <p><strong>Giá:</strong> Từ 1 tỷ 055 triệu - 1 tỷ 350 triệu đồng</p>
                <p><strong>Đời xe:</strong> 2024</p>
                <p><strong>Kiểu xe:</strong> Đa dụng thể thao</p>
                <p><strong>Số chỗ ngồi:</strong> 7 chỗ</p>
                <p><strong>Nhiên liệu:</strong> Dầu/ Xăng</p>
                <p><strong>Xuất xứ:</strong> Việt Nam/ Nhập khẩu</p>
                <p><strong>Động cơ:</strong> 2GD-FTV (2.4L), 2TR-FE (2.7L), 1GD-FTV (2.8L)</p>
                <p><strong>Hộp số:</strong> 6AT/MT</p>
                <p><strong>Công suất:</strong> 147/3400, 164/5200, 201/3400</p>
                <button class="btn" onclick="window.location.href='/contact.html'">Liên hệ tư vấn</button>
            </div>
        </div>

        <!-- Khuyến mãi & Ưu đãi -->
        <div class="promotion-box">
            <h2>KHUYẾN MÃI & ƯU ĐÃI</h2>
            <ul class="promotion-list">
                <li>✅ Xe mới 2025</li>
                <li>✅ Giảm trực tiếp tiền mặt</li>
                <li>✅ Chỉ cần trả trước từ 160Tr</li>
                <li>✅ Lãi suất vay chỉ từ 6.99%</li>
                <li>✅ Tặng bảo hiểm thân vỏ xe</li>
                <li>✅ Tặng trọn bộ phụ kiện theo xe</li>
                <li>✅ Nhận thu xe cũ – đổi xe mới giá tốt</li>
                <li>✅ Nhận giao xe tận nhà</li>
                <li>✅ Sẵn xe lái thử</li>
                <li>✅ Đặc biệt hỗ trợ khách nợ xấu vay ngân hàng ( liên hệ Hotline để biết chi tiết ạ )</li>
                <li>*Quý khách liên hệ hotline : 0123456789, nhận thông tin khuyến mãi và ưu đãi tốt nhất.</li>
            </ul>
        </div>

        <!-- Phần giới thiệu thêm về xe -->
        <div class="car-introduction">
            <h2>GIỚI THIỆU TOYOTA FORTUNER 2024</h2>
            <p>
                Toyota Fortuner 2024 là phiên bản nâng cấp nhẹ của thế hệ SUV nổi tiếng nhà Toyota. Phiên bản này được chính thức giới thiệu đến khách hàng đầu năm nay với thiết kế trẻ trung, nội thất thể thao và bổ sung thêm nhiều công nghệ an toàn cao cấp lần đầu được
                ứng dụng trên Toyota Fortuner 2024.
            </p>
            <p>
                Đặc biệt, Toyota Fortuner 2024 còn được bổ sung thêm phiên bản thể thao Legender 2024 với thiết kế khác biệt dành cho đối tượng khách hàng trẻ tuổi yêu thích trải nghiệm công nghệ. Với ngoại hình mới, thể thao hơn và cá tính hơn sẽ là lựa chọn hoàn hảo
                cho khách hàng yêu thích dòng xe SUV đa dụng đích thực.
            </p>
            <p>
                Các phiên bản xe Toyota Fortuner 2024:
            </p>
            <ul>
                <li>Fortuner 2.7AT 4x2 (Máy xăng - Nhập khẩu Indonesia)</li>
                <li>Fortuner 2.7AT 4x4 (Máy xăng - Nhập khẩu Indonesia)</li>
                <li>Fortuner Legender 2.4AT 4x2 (Máy dầu - Việt Nam)</li>
                <li>Fortuner 2.4AT 4x2 (Máy dầu - Việt Nam)</li>
                <li>Fortuner Legender 2.8AT 4x4 (Máy dầu - Việt Nam)</li>
            </ul>
        </div>

        <!-- Bảng giá niêm yết -->
        <div class="price-table">
            <h2>GIÁ XE FORTUNER 2024 LĂN BÁNH</h2>
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
                        <td>Legender 2.8 4x4 AT</td>
                        <td>1 tỷ 350 triệu VNĐ</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                    </tr>
                    <tr>
                        <td>Fortuner 2.7 4x4 AT</td>
                        <td>1 tỷ 250 triệu VNĐ</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                    </tr>
                    <tr>
                        <td>Legender 2.4 4x2 AT</td>
                        <td>1 tỷ 185 triệu VNĐ</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                    </tr>
                    <tr>
                        <td>Fortuner 2.7 4x2 AT</td>
                        <td>1 tỷ 165 triệu VNĐ</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                    </tr>
                    <tr>
                        <td>Fortuner 2.4 4x2 AT</td>
                        <td>1 tỷ 055 triệu VNĐ</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                        <td>Chưa có thông tin</td>
                    </tr>
                </tbody>
            </table>
            <p>Giá xe Toyota Fortuner 2024 giao động từ 1 tỷ 055 triệu đồng cho phiên bản thấp nhất đến 1 tỷ 350 triệu đồng với phiên bản cao cấp.</p>
            <p>Fortuner 2024 giá lăn bánh thấp nhất là phiên bản 2.4AT 4x2 số sàn với giá lăn bánh giao động từ 1 tỷ 055 triệu đồng. Trong khi đó, giá xe Fortuner 2024 lăn bánh cao nhất thuộc về phiên bản Legender 2.8AT 4x4 với chi phí ước tính giao động
                từ 1 tỷ 350 triệu đồng.</p>
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