<?php

namespace Xolura\InputModifier\Modifiers;

use Xolura\InputModifier\Contracts\Modifier;

class Date implements Modifier {
    /*
     * The value provided in request
     */

    protected $value;
    protected $dateFormat = 'Y-m-d';

    /*
     * Create a new modifier instance
     */

    public function __construct($value) {
        $this->value = $value;
    }

    /*
     * Return the formatted value
     * If not valid return null
     */

    public function modify() {
       
        if ($this->validateDate($this->value)) {
            return \Carbon\Carbon::createFromFormat($this->dateFormat, $this->value);
        }
        
        return null;
    }
    
    /*
     * Validate if date is set correctly
     * 
     */
    
    protected function validateDate($value) {
        
        $d = \DateTime::createFromFormat($this->dateFormat, $value);
        
        return $d && $d->format($this->dateFormat) === $value;
    }

    /*
     * Optional function that will set options for modify function
     */

    public function setOptions(Array $options) {
        
        /*
         * 0 : date format
         * 
         * If not set, default to Y-m-d
         * Example: 2018-12-25
         */

        if (isset($options[0])) {
            $this->dateFormat = $options[0];
        }
    }

}
