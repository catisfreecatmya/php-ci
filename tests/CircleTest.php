<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Project\Circle;

class CircleTest extends TestCase {

  public function test_area() {
    $obj1 = new Circle(10);
    $this->assertEquals( 314, $obj->area() );

    $obj2 = new Circle(0);
    $this->assertEquals( 0, $obj->area() );
  }

}
