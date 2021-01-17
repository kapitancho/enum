<?php

namespace Walnut\Lib\Enum;

use Attribute;

#[Attribute]
final class EnumValues {
	/**
	 * @var string[]
	 */
	public array $values;

	public function __construct(string ... $values) {
		$this->values = $values;
	}
}
