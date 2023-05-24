<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không, sử dụng hàm strrchr().
function fStrrchr($var_1_16, $var_2_16) {
    $return = strrchr($var_1_16, $var_2_16);
    if($return !== false && $return === substr($var_1_16, -strlen($var_2_16))){     // Lấy phần cuối của chuỗi $var_1 có độ dài bằng với độ dài của chuỗi con $var_2
        echo "Chuỗi \"$var_1_16\" kết thúc bằng chuỗi con \"$var_2_16\"";
    } else {
        echo "Chuỗi \"$var_1_16\" không kết thúc bằng chuỗi con \"$var_2_16\"";
    }
}
fStrrchr("Hear my thoughts in every note","note");

