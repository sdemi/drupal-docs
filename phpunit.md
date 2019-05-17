# PHPUnit Testing

- Unit tests are designed for confirming functions and classes in the modules. 
- They don't load the database and so also don't load a full Drupal site, which greatly limits what can be used to run the tests. 
- It's worth noting, however, that they are super fast to run and can complete in mere seconds, so after getting the hang of writing them it can make the testing process a little less time intensive. 
- Tests of this type are built using the UnitTestCase class.

## Testing Sample Code

```
<?php

class Email
{
    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}
```

## Testing Code

```
<?php

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
```

## Test Execution
Run the command in terminal as per below:

```vendor/bin/phpunit -c core modules/custom/custom_module/tests/src/Email```

## Refernce

* https://www.drupal.org/docs/8/phpunit
* https://phpunit.de/getting-started/phpunit-6.html
