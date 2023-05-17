<?php
// Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function fImplode($variable) {
    echo implode("<br>",$variable);
}

fImplode(["PHP", "Java", "JavaScript", "Ruby"]) . "<br>";
