<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="C:\Users\quoc hung\Downloads\mkja2509.github.io-main\mkja2509.github.io-main\css\styles.css">
    <title>StoreSuperCar - Blog</title>
    <style>
        /* Reset mặc định */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        /* Thêm màu nền trắng cho body */
        
        body {
            background-color: #ffffff;
        }
        /* Header */
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1a1a1a;
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            transition: color 0.3s;
        }
        
        .nav a:hover {
            color: #ff4d4d;
        }
        
        .sign-in {
            color: #ff4d4d;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #ff4d4d;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .sign-in:hover {
            background-color: #ff4d4d;
            color: white;
        }
        /* Blog Section */
        
        .blog-container {
            max-width: 900px;
            margin: 100px auto 50px auto;
            padding: 0 20px;
            color: #333;
            /* Đổi màu chữ thành màu tối để dễ đọc trên nền trắng */
        }
        
        .blog-container h1 {
            font-size: 32px;
            color: #1a1a1a;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .blog-meta {
            font-size: 14px;
            color: #666;
            /* Đổi màu chữ meta thành xám để dễ đọc */
            text-align: center;
            margin-bottom: 20px;
        }
        
        .blog-container h2 {
            font-size: 24px;
            color: #ff4d4d;
            margin: 20px 0 10px;
        }
        
        .blog-container p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .blog-container ul,
        .blog-container ol {
            padding-left: 20px;
            margin-bottom: 15px;
        }
        
        .blog-container li {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .blog-image {
            width: 100%;
            max-width: 700px;
            height: auto;
            margin: 20px auto;
            display: block;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Footer */
        
        .footer {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 50px;
            text-align: center;
        }
        
        .social-links a {
            color: #ff4d4d;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #ffffff;
        }
        
        .contact-info {
            margin: 20px 0;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .map-box {
            margin: 20px 0;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .footer p {
            font-size: 12px;
            color: #b3b3b3;
        }
        /* Responsive */
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 20px;
            }
            .nav {
                margin: 15px 0;
            }
            .nav a {
                margin: 0 10px;
            }
            .sign-in {
                margin-top: 10px;
            }
            .blog-container {
                margin: 80px 15px 30px;
            }
            .blog-container h1 {
                font-size: 24px;
            }
            .blog-container h2 {
                font-size: 20px;
            }
            .blog-image {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">STORE</div>
        <div class="nav">
            <a href="#">TRANG CHỦ</a>
            <a href="#">GIỚI THIỆU</a>
            <a href="#">KHO XE</a>
            <a href="#">ĐỊA CHỈ</a>
            <a href="#">BLOG</a>
            <a href="#">LIÊN HỆ</a>
        </div>
        <a href="login.html" class="sign-in">Đăng nhập</a>
    </div>

    <!-- Blog Section -->
    <div class="blog-container">
        <h1>Khám Phá Thế Giới Siêu Xe: Hành Trình Tốc Độ và Đẳng Cấp</h1>
        <div class="blog-meta">
            Ngày đăng: 06/04/2025 | Tác giả: StoreSuperCar Team
        </div>
        <img src="https://www.slashgear.com/img/gallery/the-best-supercar-model-from-every-major-brand/l-intro-1683239292.jpg" alt="Supercar Header" class="blog-image">
        <p>Chào mừng bạn đến với blog chính thức của <strong>StoreSuperCar</strong> – nơi hội tụ những kiệt tác tốc độ và nghệ thuật thiết kế đỉnh cao! Hôm nay, chúng ta sẽ cùng nhau khám phá lý do vì sao siêu xe không chỉ là phương tiện di chuyển, mà còn
            là biểu tượng của phong cách sống và đam mê bất tận.</p>

        <h2>Siêu Xe – Hơn Cả Một Chiếc Xe</h2>
        <a href="https://autopro.com.vn/10-tuy-chon-cua-xe-sang-va-sieu-xe-dat-hon-ca-mot-chiec-o-to-20161107152301311.chn" target="_blank">
            <h4>Tham khảo thêm tại đây.</h4>
        </a>

        <p>Khi nhắc đến siêu xe, người ta thường nghĩ ngay đến những cái tên như Lamborghini, Ferrari, Bugatti hay McLaren. Nhưng điều gì khiến những cỗ máy này trở nên đặc biệt? Đó là sự kết hợp hoàn hảo giữa công nghệ tiên tiến, thiết kế táo bạo và hiệu
            suất vượt trội. Mỗi chiếc siêu xe đều mang trong mình một câu chuyện, từ bàn tay tài hoa của các kỹ sư cho đến giấc mơ chinh phục tốc độ của người sở hữu.</p>
        <p>Tại <strong>StoreSuperCar</strong>, chúng tôi không chỉ bán xe, mà còn mang đến cho bạn cơ hội sở hữu một phần của lịch sử và phong cách sống đẳng cấp. Bạn đã sẵn sàng để cầm lái giấc mơ của mình chưa?</p>

        <h2>Top 3 Mẫu Siêu Xe Đáng Sở Hữu Năm 2025</h2>
        <a href="https://gotech.vn/7-xe-dang-chu-y-ra-mat-2025/" target="_blank">
            <h4>Tham khảo thêm tại đây.</h4>
        </a>
        <ol>
            <li><strong>Lamborghini Aventador SVJ</strong><br> Với động cơ V12 mạnh mẽ và thiết kế khí động học tối ưu, Aventador SVJ là biểu tượng của sức mạnh Ý. Tăng tốc từ 0-100 km/h chỉ trong 2,8 giây – đây chính là lựa chọn dành cho những ai yêu thích
                cảm giác adrenaline.<br>
                <img src="static/car.png" alt="Lamborghini Aventador SVJ" class="blog-image">
            </li>
            <li><strong>Ferrari SF90 Stradale</strong><br> Một kiệt tác hybrid với công suất lên đến 1.000 mã lực, SF90 Stradale không chỉ nhanh mà còn thân thiện với môi trường. Sự kết hợp giữa truyền thống và tương lai khiến chiếc xe này trở thành “viên
                ngọc quý” trong bộ sưu tập của bất kỳ tín đồ siêu xe nào.<br>
                <img src="https://images.unsplash.com/photo-1616788494707-ec28f08d05a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Ferrari SF90 Stradale" class="blog-image">
            </li>
            <li><strong>Bugatti Chiron Super Sport</strong><br> Vua của tốc độ với vận tốc tối đa vượt ngưỡng 400 km/h, Chiron Super Sport là minh chứng cho sự hoàn hảo trong kỹ thuật chế tạo xe hơi. Đây không chỉ là một chiếc xe, mà là một tác phẩm nghệ
                thuật.
                <br>
                <img src="https://images.unsplash.com/photo-1594502184342-2e12f877aa73?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Bugatti Chiron Super Sport" class="blog-image">
            </li>
        </ol>

        <h2>Tại Sao Chọn StoreSuperCar?</h2>
        <ul>
            <li><strong>Kho Xe Độc Quyền</strong>: Chúng tôi tự hào sở hữu những mẫu siêu xe hiếm có, được kiểm định kỹ lưỡng để đảm bảo chất lượng hoàn hảo.</li>
            <li><strong>Dịch Vụ Cá Nhân Hóa</strong>: Từ tùy chỉnh màu sơn đến nội thất bespoke, đội ngũ của chúng tôi sẽ biến chiếc xe của bạn thành một phiên bản độc nhất vô nhị.</li>
            <li><strong>Hỗ Trợ Tận Tâm</strong>: Đội ngũ chuyên gia của StoreSuperCar luôn sẵn sàng đồng hành cùng bạn trên mọi hành trình, từ lúc chọn xe đến khi bảo dưỡng định kỳ.</li>
        </ul>

        <h2>Lời Mời Từ StoreSuperCar</h2>
        <p>Bạn đam mê tốc độ? Bạn muốn sở hữu một chiếc siêu xe mang đậm dấu ấn cá nhân? Hãy ghé thăm <strong>Kho Xe</strong> của chúng tôi tại 123 Đường Siêu Xe, Quận 1, TP. Hồ Chí Minh hoặc liên hệ qua số điện thoại (+84) 123 456 789 để được tư vấn chi
            tiết. Đừng quên theo dõi các kênh mạng xã hội của chúng tôi để cập nhật những tin tức mới nhất về thế giới siêu xe!</p>
        <p>Hãy để <strong>StoreSuperCar</strong> cùng bạn viết nên câu chuyện tốc độ của riêng mình. Chờ gì nữa? Khởi động động cơ và bắt đầu hành trình ngay hôm nay!</p>
    </div>

    <!-- Phần Footer Copyright -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://facebook.com/storesupercar" target="_blank">Facebook</a> |
            <a href="https://instagram.com/storesupercar" target="_blank">Instagram</a> |
            <a href="https://twitter.com/storesupercar" target="_blank">Twitter</a>
        </div>
        <div class="contact-info">
            <p>Số điện thoại: (+84) 123 456 789</p>
            <p>Địa chỉ: StoreSuperCar, 6 Trần Hưng Đạo, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh, Việt Nam</p>
        </div>
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.669576!2d106.698254!3d10.759917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f38f747b2c7%3A0x4e7f0e743f4e3e!2sHo%20Chi%20Minh%20City!5e0!3m2!1sen!2s!4v1634567890123!5m2!1sen!2s"
                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
        <p>© 2025 StoreSuperCar. All rights reserved.</p>
    </footer>
</body>

</html>