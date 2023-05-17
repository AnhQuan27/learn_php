<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
    function fStrlen() {
        return strlen("Hello World!");
    }

    echo "Bài 1: " . fStrlen() . "<br>";

    // Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
    function fWordCount() {
        return str_word_count("Hello World!");
    }
    echo "Bài 2: " . fWordCount() . "<br>";
    
    // Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
    function fStrrev() {
        return strrev("Hello World!");
    }
    echo "Bài 3: " . fStrrev() . "<br>";

    // Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
    function fStrpos() {
        return strpos("Hello World!", "World!");
    }
    echo "Bài 4: " . fStrpos() . "<br>";

    // Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
    function fStrReplace() {
        return str_replace("World!", "VietNam!", "Hello World!" );
    }
    echo "Bài 5: " . fStrReplace() . "<br>";

    // Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
    function fStrncmp() {
        return strncmp("Hello World!", "World!", strlen("World!") );
    }
    $ex6;

    if(fStrncmp() == 0) {
        $ex6 = "Đúng";
    } else {
        $ex6 = "Sai";
    }
    echo "Bài 6: " . $ex6 . "<br>";

    // Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    function fStrtoupper() {
        return strtoupper( "Hello World!" );
    }
    echo "Bài 7: " . fStrtoupper() . "<br>";

    // Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
    function fStrtolower() {
        return strtolower("HELLO WORLD!");
    }
    echo "Bài 8: " . fStrtolower() . "<br>";

    // Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
    function fUcwords() {
        return ucwords( "hello world!" );
    }
    echo "Bài 9: " . fUcwords() . "<br>";

    // Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
    function fTrim() {
        return trim(" Hello World!  " );
    }
    echo "Bài 10: " . fTrim() . "<br>";

    // Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    function fLtrim() {
        return ltrim("Hello World!", "Hello World!"[0]);
    }
    echo "Bài 11: " . fLtrim() . "<br>";

    // Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    function fRtrim() {
        return rtrim("Hello World!", "Hello World!"[strlen("Hello World!") - 1] );
    }
    echo "Bài 12: " . fRtrim() . "<br>";

    // Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    function fExplode() {
        $array = explode(",", "Hello World,Hello VietNam");
        return $array;
    }
    echo "Bài 13: ";
    print_r(fExplode());
    echo "<br>";
    

    // Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    function fImplode() {
        $newArray = ["Hello", " World!"];
        return implode($newArray);
    }

    echo "Bài 14: " . fImplode() . "<br>";

    // Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
    function fStr_pad($string_15) {
        return str_pad($string_15, 13, "*", STR_PAD_BOTH);
    }
    echo "Bài 15: " . fStr_pad("Hello") . "<br>";

    // Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không, sử dụng hàm strrchr().
    function fStrrchr($var_16, $var_2_16) {
        return strrchr($var_16, $var_2_16);
    }
    
    $ex16 = fStrrchr("Hello World!", "World!") ? "Đúng" : "Sai";
    echo "Bài 16: " . $ex16 . "<br>";

    // Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    function fStrstr($var_1_17, $var_2_17) {
        return strstr($var_1_17, $var_2_17);
    }
    
    $ex17 = fStrstr("Hello World!", "VietNam") ? "Đúng" : "Sai";
    echo "Bài 17: " . $ex17 . "<br>";

    // Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    function fPreg_replace($var_1_18, $var_2_18) {
        $var_3_18 = '/[^a-zA-Z0-9]/';
        return preg_replace($var_3_18, $var_2_18, $var_1_18);
    }

    echo "Bài 18: " . fPreg_replace("Hello, 123 World!", "_") . "<br>"; ;
    

    // Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

    // Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().

    ?>
</body>
</html>

