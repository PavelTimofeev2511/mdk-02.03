<?php

use PHPUnit\Framework\TestCase;
use timofeev\MyLog;

final class MyLogTest extends TestCase {
    public function testMyLog(): void {
        $this->expectOutputString("Hello");
        MyLog::Instance()->log("Hello");
        MyLog::Instance()->write();
    }

    public function testInstance(): void {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}