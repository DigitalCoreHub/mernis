# Republic of Turkey Authentication Service developed for Laravel 🪪

Republic of Turkey Identity Verification Service developed for Laravel Library

## Installation 🚀
```JSON
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/DigitalCoreHub/mernis.git"
    }
],
```
```bash
composer require digitalcorehub/mernis
```

```php
use DigitalCoreHub\Mernis\Mernis;

Mernis::dogrula('123123'); //false
Mernis::dogrula('12345671231') // true

Mernis::mernis('digitalcore','hub','28/06/2023','12345678911'); // false && true
```
## Working Status 🚀
* ID number verification ✓
* Authentication check ✓