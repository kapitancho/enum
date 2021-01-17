<?php

namespace Walnut\Lib\Enum\Test;

use DomainException;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

class EnumTest extends TestCase {

	public function testInvalidEnum(): void {
		$this->expectException(DomainException::class);

		InvalidEnum::Value();
	}

	public function testInvalidValues(): void {
		$this->expectException(UnexpectedValueException::class);

		Suit::FakeValue();
	}

	public function testValidValues(): void {
		self::assertInstanceOf(Suit::class, Suit::Hearts());
		self::assertEquals(Suit::Clubs(), Suit::Clubs());
		self::assertNotEquals(Suit::Clubs(), Suit::Spades());
		self::assertEquals('Clubs', (string)Suit::Clubs());
	}

}