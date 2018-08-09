<?php

namespace Xolura\InputModifier\Contracts;

interface ModifierAbstract {

    /*
     * Run modifier
     */
    public function modify();
    
    /*
     * Returns array of applicable modifiers
     */
    public function modifiers();
    
}
