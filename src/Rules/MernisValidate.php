<?php

namespace DigitalCoreHub\Mernis\Rules;

use Illuminate\Contracts\Validation\Rule;
use DigitalCoreHub\Mernis\Mernis;

class MernisValidate implements Rule
{
    public function __construct(
        protected string $name,
        protected string $surname,
        protected int|string $identificationNumber,
        protected int|string $dateBirth,
    ) {
    }

    public function pass($attribute, $value): bool
    {
        return Mernis::mernis(
            $this->name,
            $this->surname,
            $this->identificationNumber,
            $this->dateBirth
        );
    }

    public function message(): string
    {
        return 'Geçerli bir tc kimlik alanı olmalıdır.';
    }
}
