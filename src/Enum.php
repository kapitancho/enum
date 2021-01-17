<?php

namespace Walnut\Lib\Enum;

use DomainException;
use ReflectionClass;
use UnexpectedValueException;

abstract class Enum {
	final private function __construct(private string $name) {}

	final public static function __callStatic(string $name, array $arguments): static {
		return static::getValue($name)
			?? throw new UnexpectedValueException("The option [$name] is not a part of the Enum: " . static::class);
	}

	/**
	 * @return array<string, static>
	 */
	private static function generateValues(): array {
		$values = [];
		$class = new ReflectionClass(static::class);
		$attribute = $class->getAttributes(EnumValues::class)[0]
			?? throw new DomainException("No Enum values defined for class: " . static::class);
		/**
		 * @var EnumValues $t
		 */
		$t = $attribute->newInstance();
		foreach($t->values as $value) {
			$values[$value] = new static($value);
		}
		return $values;
	}

	private static function getValue(string $name): ?static {
		/**
		 * @var null|array<string, static>
		 */
		static $values = null;
		$values ??= static::generateValues();
		return $values[$name] ?? null;
	}

	final public function __toString(): string {
		return $this->name;
	}
}

