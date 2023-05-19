<?php
// Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function fStrpos($string, $search) {
    return strpos($string, $search);
}

echo "Vị trí: " . fStrpos("I only pray you'll never leave me behind ", "you");