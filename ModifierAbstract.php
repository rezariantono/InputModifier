<?php

namespace Xolura\InputModifier;

abstract class ModifierAbstract {
    /*
     * Request data (in dot notation) and format modifiers the modification should be converted into
     * 
     * @var array
     */

    protected $requestDataFormat = [];

    /*
     * Request injected when construction this
     * 
     */
    protected $request;

    /*
     * Modified data
     */
    protected $modified = [];

    public function __construct(Array $request) {
        $this->request = $request;
    }

    /*
     * The function that will run on modification triggered
     */

    final public function modify() {

        $modified = [];

        foreach ($this->modifiers() as $key => $modifiersString) {

            $modifiers = $this->generateModifierClasses($modifiersString);

            if (isset($this->request[$key])) {

                $value = $this->request[$key];

                foreach ($modifiers as $modifier) {

                    $value = $this->applyModifier($value, $modifier['class'], $modifier['options']);
                }

                $modified[$key] = $value;
            }
        }

        $this->modified = $modified;
        return $this->modified;
    }

    /*
     * Return modifiers as array of modifiers classes
     * 
     */

    protected function generateModifierClasses(string $modifiers) {

        $modifiersClassesConfig = (include __DIR__ . '/Config/Modifiers.php');
        $modifierClasses = [];

        foreach (explode('|', $modifiers) as $modifierString) {

            $modifierStrings = explode(':', $modifierString);
            $modifierName = $modifierStrings[0];

            $modifierClass = $modifiersClassesConfig[$modifierName];

            $modifierOptions = isset($modifierStrings[1]) ? explode(',', $modifierStrings[1]) : [];

            $modifierClasses[] = [
                'class' => $modifierClass,
                'options' => $modifierOptions
            ];
        }

        return $modifierClasses;
    }

    /*
     * Run modfiier
     */

    protected function applyModifier($value, $class, $options = []) {

        $modifier = new $class($value);

        if (!empty($options) && method_exists($modifier, 'setOptions')) {
            $modifier->setOptions($options);
        }

        return $modifier->modify();
    }

}
