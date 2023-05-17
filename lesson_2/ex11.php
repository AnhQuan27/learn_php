<?php
// Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function fLtrim($variable) {
    echo "Loại bỏ kí tự \"$variable[0]\" ở đầu chuỗi \"$variable\"" . "<br>Chuỗi sau khi loại bỏ kí tự đầu: " . ltrim($variable, $variable[0]);
}
fLtrim("oOne step closer");