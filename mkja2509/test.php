<?php
$serverName = "HUNG426113"; // hoặc tên máy bạn
$connectionOptions = array(
    "Database" => "ToyotaDB",
    "Uid" => "sa",
    "PWD" => "Quochung426113@"
    
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "Kết nối thành công!";
} else {
    echo "Lỗi kết nối!";
    print_r(sqlsrv_errors());
}
?>
