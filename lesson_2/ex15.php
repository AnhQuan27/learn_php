<?php
// Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function fStr_pad($string_15) {
    return str_pad($string_15, 32, "*", STR_PAD_BOTH);
}
echo "Bài 15: " . fStr_pad("Baby Shark, doo-doo, doo-doo") . "<br>";