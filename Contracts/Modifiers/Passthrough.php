<?php

namespace Xolura\InputModifier\Modifiers;

use Xolura\InputModifier\Contracts\Modifier;

class Passthrough implements Modifier {
    /*
     * The value provided in request
     */

    protected $value;

    /*
     * Create a new modifier instance
     */

    public function __construct($value) {
        $this->value = $value;
    }

    /*
     * Return the formatted value 
     */

    public function modify() {

        return $this->value;
    }

}
