<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

function fIs_int($variable) {
    if (is_int($variable)){
        echo "\"$variable\" là một số nguyên";
    } else {
        echo "\"$variable\" không phải là một số nguyên";
    }
}

fIs_int(12);
echo "<br>";
fIs_int("Just a string");