<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class InitialRule implements Rule, DataAwareRule
{
    protected $data = [];
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(
        private string $attributeName
    ) {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return strtoupper(substr($this->data[$this->attributeName], 0, 1)) === strtoupper(substr($value, 0, 1));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The first character does not match the given name.';
    }

    public function setData($data): InitialRule|static
    {
        $this->data = $data;

        return $this;
    }
}
