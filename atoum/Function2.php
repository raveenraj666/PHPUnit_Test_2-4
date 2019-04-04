<?php

class MyClass
{
    protected $value;

    public function setValue($value)
    {
        if (in_array($value, ['foo', 'bar'])) {
            $this->value = $value;
            return $this;
        }

        throw new RuntimeException("{$value} is not a valid value.");
    }
}
?>
