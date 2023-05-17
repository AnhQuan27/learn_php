<?php 
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function fUcwords($variable) {
    echo "Chuyển chuỗi: " . $variable . "<br>Thành chuỗi: " . ucwords($variable);
}
fUcwords("if only i said it, if only you knew it");