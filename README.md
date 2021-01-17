# PHP 8 Enum
Minimalistic PHP 8 Enum implementation using Attributes.

Creating enums:

```php
use \Walnut\Lib\Enum\{Enum, EnumValues};

#[EnumValues('Hearts', 'Clubs', 'Spades', 'Diamonds')]
class Suit extends Enum {}

#[EnumValues('Ace', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight',
    'Nine', 'Ten', 'Jack', 'Queen', 'King')]
class Rank extends Enum {}
```

Additional @method DocBlocks can be added for code completion.

Usage:

```php
use \Walnut\Lib\Enum\{Enum, EnumValues};

#[EnumValues('Hearts', 'Clubs', 'Spades', 'Diamonds')]
class Suit extends Enum {}

#[EnumValues('Ace', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight',
    'Nine', 'Ten', 'Jack', 'Queen', 'King')]
class Rank extends Enum {}

class Card {
    public function __construct(
        public Rank $rank,
        public Suit $suit
    ) {}
}

// ...

$card = new Card(Rank::Queen(), Suit::Spades());
```

Have fun!