<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    public function test_1_prime_factors()
    {
        $this->assertEquals([2], primeFactors(2));
    }
    public function test_2_prime_factors() {
        $this->assertEquals([3], primeFactors(3));
    }
    public function test_3_prime_factors() {
        $this->assertEquals([2,2], primeFactors(4));
    }
     public function test_4_prime_factors() {
        $this->assertEquals([2,3], primeFactors(6));
    }
     public function test_5_prime_factors() {
        $this->assertEquals([3,3], primeFactors(9));
    }
    public function test_6_prime_factors() {
        $this->assertEquals([2,2,3], primeFactors(12));
    }
    public function test_7_prime_factors() {
        $this->assertEquals([3,5], primeFactors(15));
    }
}
?>
