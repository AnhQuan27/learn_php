<?php
// Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function fRtrim($variable) {
    $lastCharacter = $variable[strlen($variable) - 1];
    echo  "Loại bỏ kí tự \"$lastCharacter\" ở đầu chuỗi \"$variable\"" . "<br>Chuỗi sau khi loại bỏ kí tự đầu: " . rtrim($variable,$lastCharacter );
}
fRtrim("You just want attention, you don't want my heart!");