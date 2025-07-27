<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu</title>
    <!-- CSS chính -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS riêng cho trang Giới thiệu -->
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <img src="./static/logo/logo3.jpg" alt="Logo" class="logo">
        <div class="nav">
            <a href="index.php" data-replace="Trang chủ"><span>Trang chủ</span></a>
            <a href="about.php" data-replace="Giới thiệu"><span>Giới thiệu</span></a>
            <a href="cars.php" data-replace="KHO XE"><span>KHO XE</span></a>
            <a href="policy.php" data-replace="CHÍNH SÁCH"><span>CHÍNH SÁCH</span></a>
            <a href="blog.php" data-replace="BLOG"><span>BLOG</span></a>
            <a href="contact.php" data-replace="Liên hệ"><span>Liên hệ</span></a>
        </div>
        <a href="#" class="sign-in" data-bs-toggle="modal" data-bs-target="#combinedModal">Đăng nhập</a>
    </div>


    <!-- Liên Hệ -->
    <div class="contact-container">
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <p>Nếu bạn có bất kỳ câu hỏi hoặc yêu cầu nào, vui lòng điền vào biểu mẫu bên dưới.</p>

        <form action="#" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" />
            </div>

            <div class="form-group">
                <label for="message">Nội dung:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit">Gửi Liên Hệ</button>
        </form>
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
</body>

</html>