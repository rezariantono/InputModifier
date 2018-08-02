<?php

return [
    'trim' => \Xolura\InputModifier\Modifiers\Trim::class,
    'capitalize' => Xolura\InputModifier\Modifiers\Capitalize::class,
    'uppercase' => Xolura\InputModifier\Modifiers\Uppercase::class,
    'lowercase' => Xolura\InputModifier\Modifiers\Lowercase::class,
    'passthrough' => \Xolura\InputModifier\Modifiers\Passthrough::class,
    'removeSpaces' => \Xolura\InputModifier\Modifiers\RemoveSpaces::class,
    'phoneNumber' => \Xolura\InputModifier\Modifiers\PhoneNumber::class,
    'boolean' => \Xolura\InputModifier\Modifiers\Boolean::class,
    'email' => \Xolura\InputModifier\Modifiers\Email::class,
];
