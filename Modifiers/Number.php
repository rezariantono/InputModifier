<?php

namespace Xolura\InputModifier\Modifiers;

use Xolura\InputModifier\Contracts\Modifier;

class Number implements Modifier {
    /*
     * The value provided in request
     */

    protected $value;
    
    protected $decimalPlaces = 1;

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

        return round($this->value, $this->decimalPlaces);
    }

    /*
     * Optional function that will set options for modify function
     */

    public function setOptions(Array $options) {
        
        /*
         * 0 : decimal places
         */

        if (isset($options[0])) {
            $this->decimalPlaces = $options[0];
        }
    }

}
