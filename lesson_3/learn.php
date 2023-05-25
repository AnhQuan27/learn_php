<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEvenNum($var){
    if($var % 2 !== 0) {
        echo "Số này không phải là số chẵn";
    } else {
        echo "Số này là số chẵn";
    }
}

checkEvenNum(9);
echo "<br>";

// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum1toN($n) {
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i;
    }
    echo "Tổng từ 1 đến $n là: $sum";
}

sum1toN(9);
echo "<br>";

// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiplicationTable() {
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
            echo "$i * $j = " . $i*$j;
            echo "<br>";
        }
        echo "<br>";
    }
}

echo "Bảng cửu chương: <br>";
multiplicationTable();

// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($string, $subString) {
    $pos = strpos($string, $subString);
    if($pos !==false) {
        echo "Chuỗi \"$string\" chứa từ \"$subString\"";
    } else {
        echo "Chuỗi \"$string\" không chứa từ \"$subString\"";
    }
}

checkString("This is an example, not real", "and");
echo "<br>";

// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function checkMinMax($array) {
    echo "Giá trị lớn nhất trong mảng là: " . max($array);
    echo "<br>";
    echo "Giá trị nhỏ nhất trong mảng là: " . min($array);
}


checkMinMax(array(1,4,5,6,-9,29));
echo "<br>";

// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrangeArrayAsc($array) {
    echo "Sắp xếp mảng theo thứ tự tăng dần: ";
    sort($array);
    foreach ($array as $var) {
        echo "$var ";
    }
}

arrangeArrayAsc(array(1,3,5,7,8,-1,-9));
echo "<br>";

// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($number) {
    $fact = 1;
    for($i=1; $i<=$number; $i++) {
        $fact *= $i;
    }
    echo "Giai thừa của số $number là: $fact";
}

factorial(4);
echo "<br>";


// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function prime($min, $max){
    for($i=$min+1; $i<$max; $i++){
        $count = 0;
        for($j=1;$j<=$i ;$j++){
            if($i % $j == 0){
                $count++;
            } 
        }
        if($count <= 2){
            echo $i . ", ";
        }
    }
}

prime(1,20);
echo "<br>";

// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumArray($array){
    $sum = 0;
    for($i=0;$i<count($array);$i++){
        $sum += $array[$i];
    }
    echo "Tổng của mảng là: $sum";
}

sumArray(array(1,2,3,4,5));
echo "<br>";


// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci($min, $max){
    $array = [0,1];
    for($i = 2; $i < $max; $i++){
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $min && $array[$i] < $max){
            echo $array[$i] . " ";
        }
    }
}
printFibonacci(-1,100);
echo "<br>";

// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function amstrongNumber($number) {
    $array = [];
    $newNum = $number;
    for($i = 0; $i < strlen($newNum); $i++) {
        $array[$i] = $newNum % 10;
        $newNum /= 10;
    }
    $sum = 0;
    foreach($array as $eachNumber) {
        $sum += pow($eachNumber,strlen($number));
    }
    if($sum == $number) {
        echo "Số $number là số amstrong";
    } else {
        echo "Số $number không phải là số amstrong";
    } 
}

amstrongNumber(153);
echo "<br>";

// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array,$element,$position){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
        if($i == $position) {
            // Nếu không chỉ định key cho hàm, php tự động gán chỉ số tiếp theo cho phần tử 
            $newArray[] = $element;
        }
        $newArray[] = $array[$i]; 
    }
    return $newArray;
}
$resultEx12 = insertElement(array(1, 2, 3, 4, 5), 10, 4);

foreach($resultEx12 as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";


// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeElement($array){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
        if(in_array($array[$i], $newArray) === false){
            $newArray[] = $array[$i];
        }   
    }
    return $newArray;
}
$resultEx13 = removeElement(array(1,2,3,4,5,1,2,3,8,9,5));

foreach($resultEx13 as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";

// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function positionElement($array, $element) {
    $position = [];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $element) {
            $position[] = $i;
        }
    }
    return $position;
}

$resultEx14 = positionElement(array("S","o","m","e","t","h","i","n","g","w","e","n","t","w","r","o","n","g"), "o");
foreach($resultEx14 as $eachPosition) {
    echo $eachPosition . " ";
}
echo "<br>";

// 15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string){
    $reverseString = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reverseString = $reverseString . $string[$i];
    }
    echo $reverseString;
}
echo "Chuỗi đảo ngược: "; 
reverseString("Stand by me! you and me are inseparable");
echo "<br>";

// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElement($array){
    $count = 0;
    for($i = 0; $i < count($array); $i++){
        $count++;
    }
    return $count;
}

$resultEx16 = countElement([1,2,3,4,5]);
echo $resultEx16;
echo "<br>";

// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($string){
    $reverseString = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reverseString = $reverseString . $string[$i];
    }

    if($reverseString == $string) {
        echo "$string là chuỗi Palindrome";
    } else {
        echo "$string không phải là chuỗi Palindrome";
    }
}
checkPalindrome("madam");
echo "<br>";

// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] == $element) {
            $count++;
        }
    }
    return [$count, $element];
}

$resultEx18 = countOccurrences(["S","o","m","e","t","h","i","n","g","w","e","n","t","w","r","o","n","g"], "o");
echo "\"$resultEx18[1]\"". " xuất hiện " . $resultEx18[0] . " lần"; 
echo "<br>";

// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrangeArrayDesc($array){
    echo "Sắp xếp mảng theo thứ tự giảm dần: ";
    rsort($array);
    foreach ($array as $var) {
        echo "$var, ";
    }
}

arrangeArrayDesc(["z", "b", "c", "x", "a"]);