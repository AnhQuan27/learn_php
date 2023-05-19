<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function fStrstr($var_1_17, $var_2_17) {
    $return = strstr($var_1_17, $var_2_17);
    echo $return ?
    "Chuỗi \"$var_1_17\" chứa chuỗi con \"$var_2_17\" "
    : 
    "Chuỗi \"$var_1_17\" không chứa chuỗi \"$var_2_17\"";
}

fStrstr("Let my heart free", "Viet");