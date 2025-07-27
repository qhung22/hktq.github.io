<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu</title>
    <!-- CSS chính -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS riêng cho trang Giới thiệu -->
    <link rel="stylesheet" href="css/about.css">
</head>

<body>

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

    <section class="about-car">
        <h2 class="about-title">Công ty của chúng tôi</h2>
        <h1 class="about-heading">Kinh nghiệm & Trải nghiệm</h1>
        <hr class="about-divider">

        <p class="about-intro">🚗 Vẻ đẹp đầy cuốn hút: Chúng tôi mang đến những dòng xe hơi từ phổ thông đến cao cấp, thể thao và cả xe cổ điển - mỗi chiếc đều mang một cá tính riêng biệt. Tại đây, bạn có thể khám phá những mẫu xe mơ ước mà trước đây bạn chỉ thấy trên màn ảnh.</p>
        <p class="about-content">💪 Sức mạnh vượt trội: Các mẫu xe tại showroom HKTQ đều được kiểm định kỹ lưỡng, bảo đảm chất lượng vận hành bền bỉ, mạnh mẽ, và sẵn sàng chinh phục mọi cung đường.</p>
        <p class="about-content">🛠️ Hậu mãi tận tâm: Đội ngũ kỹ thuật viên lành nghề luôn túc trực để hỗ trợ khách hàng, cùng các chính sách bảo hành - bảo dưỡng uy tín giúp bạn hoàn toàn yên tâm sau khi mua xe.</p>

        <div class="intro-button">
            <button>▶ Watch Our Intro</button>
        </div>

        <div class="stats-container">
            <div class="stat-block">
                <div class="icon-box"><img src="./static/icons/carlogo.png" alt="Car Icon"></div>
                <div>
                    <div class="stat-number">712</div>
                    <div class="stat-label">Số lượng xe</div>
                </div>
            </div>
            <div class="stat-block">
                <div class="icon-box"><img src="./static/icons/carlogo.png" alt="Car Icon"></div>
                <div>
                    <div class="stat-number">27</div>
                    <div class="stat-label">Số năm kinh nghiệm</div>
                </div>
            </div>
            <div class="stat-block">
                <div class="icon-box"><img src="./static/icons/carlogo.png" alt="Car Icon"></div>
                <div>
                    <div class="stat-number">510+</div>
                    <div class="stat-label">Khách hàng thân thiết</div>
                </div>
            </div>
            <div class="stat-block">
                <div class="icon-box"><img src="./static/icons/carlogo.png" alt="Car Icon"></div>
                <div>
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Khách hài lòng </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-text">
            <h2>Về SHOWROOM HKTQ</h2>
            <p class="highlight">Tại <strong>SHOWROOM HKTQ</strong>, chúng tôi không chỉ bán xe – chúng tôi tạo dựng trải nghiệm. Từ lúc bạn bước vào cửa cho đến khi bạn lái chiếc xe mơ ước ra khỏi showroom, mọi bước đi đều được chăm chút với sự tận tâm và chuyên nghiệp.</p>

            <h3>🚗 Vẻ đẹp đầy cuốn hút</h3>
            <p>Chúng tôi cung cấp đa dạng dòng xe từ phổ thông đến hạng sang, thể thao đến cổ điển – mỗi chiếc đều mang phong cách riêng biệt, phản ánh cá tính của người sở hữu.</p>

            <h3>💪 Sức mạnh vượt trội</h3>
            <p>Mỗi chiếc xe tại HKTQ đều được kiểm định kỹ lưỡng trước khi đến tay khách hàng. Đảm bảo hiệu năng bền bỉ, an toàn và cảm giác lái tuyệt vời.</p>

            <h3>🛠️ Hậu mãi tận tâm</h3>
            <p>Đội ngũ kỹ thuật viên chuyên nghiệp luôn sẵn sàng hỗ trợ bảo trì, bảo dưỡng, với chính sách hậu mãi linh hoạt và chu đáo.</p>
        </div>

        <div class="about-images">
            <img src="./static/1showrm.jpg" alt="Xe thể thao" />
            <img src="./static/luxury_car.jpg" alt="Xe sang trọng" />
        </div>
    </section>

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