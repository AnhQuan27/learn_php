<?php
// Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function fTrim($variable) {
    $trimmedVar = trim($variable," ");
    echo "Chuỗi gốc: " . $variable . "<br>Thành chuỗi: " . $trimmedVar;
}
// $string = "It's been a long day without you";
fTrim("  It's been a long day without you  ");
