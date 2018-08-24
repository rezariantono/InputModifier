<?php

namespace Xolura\InputModifier\Modifiers;

use Xolura\InputModifier\Contracts\Modifier;

class PhoneNumber implements Modifier {
    /*
     * The value provided in request
     */

    protected $value;
    protected $countryCode;

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

        $this->value = str_replace('-', '', $this->value);
        $this->value = str_replace(' ', '', $this->value);
        
        if (is_string($this->value) && substr($this->value, 0, 1) == '0') {
            return $this->countryCode . substr($this->value, 1);
        }
        
        return $this->value;
    }

    /*
     * Optional function that will set options for modify function
     */

    public function setOptions(Array $options) {

        /*
         * 0 : country code
         */

        if (isset($options[0])) {
            $this->countryCode = $options[0];
        }
    }

}
