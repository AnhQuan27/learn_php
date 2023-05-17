<?php
// Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function fExplode($character,$variable) {
    $array = explode($character,$variable);
    return $array;
}
print_r(fExplode(",","Baby, you know that's not how this works"));