<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu</title>
    <!-- CSS chính -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS riêng cho trang Giới thiệu -->
    <link rel="stylesheet" href="css/cars.css">
</head>

<?php
$serverName = "HUNG426113"; // hoặc tên máy bạn
$connectionOptions = array(
    "Database" => "ToyotaDB",
    "Uid" => "sa",
    "PWD" => "Quochung426113@"
    
);

// Kết nối SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>


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
    
    <!-- Hero Section -->
    <div class="hero-car">
        <h1>ĐẲNG CẤP TOYOTA</h1>
        <p class="car-introduction">
            Khám phá bộ sưu tập ô tô đa dạng từ Toyota với công nghệ tiên tiến, thiết kế sang trọng và giá cả cạnh tranh tại showroom HKTQ.
        </p>
        <a href="#products" class="btn">Xem tất cả xe</a>
        <!-- <video class="car-video" autoplay loop playsinline controls>
            <source src="/static/video/supra1.mp4" type="video/mp4">
        </video> -->
    </div>
    <br>
    <!-- Product Section -->
    <div class="product-list" id="products">
        <div class="product">
            <img src="/mkja2509/static/avanza1.jpg" alt="Xe 1" />
            <h3>TOYOTA AVANZA PREMIO 2024</h3>
            <p>Giá: 558,000,000vnđ</p>
            <a href="/mkja2509/products/avanza.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/11.png" alt="Xe 2" />
            <h3>Toyota Camry 2.5Q 2024</h3>
            <p>Giá: 1.185.000.000vnđ</p>
            <a href="/mkja2509/products/camry.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/corolla2.jpg" alt="Xe 3" />
            <h3>Toyota Corolla Cross Hybrid 2024</h3>
            <p>Giá: 905,000,000vnđ</p>
            <a href="/mkja2509/products/corolla.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/fortuner1.jpg" alt="Xe 3" />
            <h3>Toyota Fortuner</h3>
            <p>Giá: 1,055,000,000vnđ</p>
            <a href="/mkja2509/products/fortuner.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/landcruiser1.jpg" alt="Xe 3" />
            <h3>TOYOTA LAND CRUISER PRADO 2024</h3>
            <p>Giá: 2.628.000.000 VNĐ</p>
            <a href="/mkja2509/products/.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/camry-hybird.jpg" als="xe 3"/>
            <h3>Camry Hybrid 2023</h3>
            <p>Giá: 1.460.000.000 VNĐ</p>
            <a href="/mkja2509/products/.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <img src="/mkja2509/static/veloz3-2024.jpg" alt="Xe 3" />
            <h3>Toyota Veloz 2024</h3>
            <p>Giá: 638.000.000 VNĐ</p>
            <a href="/mkja2509/products/.php" class="btn">Mua ngay</a>
        </div>
        <div class="product">
            <h3>Toyota
            <img src="/mkja2509/static/vios2-2024.jpg" alt="Xe 3" />
            <h3>Toyota Vios 2024</h3>
            <p>Giá: 458.000.000 VNĐ</p>
            <a href="/mkja2509/products/vios.php" class="btn">Mua ngay</a>
        </div>
    </div>
    <br>
<h2>Danh sách xe Toyota</h2>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Tên xe</th>
        <th>Dòng xe</th>
        <th>Năm sản xuất</th>
        <th>Màu sắc</th>
        <th>Giá (VND)</th>
        <th>Số KM đã đi</th>
        <th>Trạng thái</th>
        <th>Loại nhiên liệu</th>
        <th>Số chỗ</th>
        <th>Hộp số</th>
        <th>Hình ảnh</th>
    </tr>

    <?php
    $sql = "SELECT * FROM danh_sach_oto_toyota";
    $stmt = sqlsrv_query($conn, $sql);
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['Ten_xe'] . "</td>";
        echo "<td>" . $row['Dong_xe'] . "</td>";
        echo "<td>" . $row['Nam_san_xuat'] . "</td>";
        echo "<td>" . $row['Mau_sac'] . "</td>";
        echo "<td>" . number_format($row['Gia_VND']) . "</td>";
        echo "<td>" . $row['So_km_da_di'] . "</td>";
        echo "<td>" . $row['Tinh_trang'] . "</td>";
        echo "<td>" . $row['Loai_nhien_lieu'] . "</td>";
        echo "<td>" . $row['So_cho'] . "</td>";
        echo "<td>" . $row['Hop_so'] . "</td>";
        echo "<td><img src='" . $row['Hinh_anh'] . "' width='100'></td>";
        echo "</tr>";
    }
    ?>
</table>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>