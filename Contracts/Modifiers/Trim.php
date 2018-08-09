<?php

namespace Xolura\InputModifier\Modifiers;

use Xolura\InputModifier\Contracts\Modifier;

class Trim implements Modifier {
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

        return is_string($this->value) ? trim($this->value) : $this->value;
    }

    /*
     * Optional function that will set options for modify function
     */

    public function setOptions(Array $options) {
        
    }

}
