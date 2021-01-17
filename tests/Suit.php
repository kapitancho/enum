<?php

namespace Walnut\Lib\Enum\Test;

use Walnut\Lib\Enum\{Enum, EnumValues};

/**
 * @method static Hearts()
 * @method static Clubs()
 * @method static Spades()
 * @method static Diamonds()
 *
 * @method static FakeValue()
 */
#[EnumValues('Hearts', 'Clubs', 'Spades', 'Diamonds')]
class Suit extends Enum {}
