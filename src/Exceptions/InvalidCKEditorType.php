<?php

namespace Tanthammar\TallForms\Exceptions;

class InvalidCKEditorType extends \Exception
{
    public function __construct($lookup, $fieldName, $editorType)
    {

        parent::__construct(
            "Error for field: [$fieldName]. Unsupported editor type [$editorType]. Available types are: ".implode(', ', array_keys($lookup))
        );
    }
}
