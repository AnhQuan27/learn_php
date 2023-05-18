<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không, sử dụng hàm strrchr().
function fStrrchr($var_16, $var_2_16) {
    $return = strrchr($var_16, $var_2_16);
    echo $return ?
    "Chuỗi không kết thúc bằng \"$var_2_16\" "
    : 
    "Chuỗi kết thúc bằng \"$var_2_16\"";
}
fStrrchr("Hear my thoughts in every note", "every");

