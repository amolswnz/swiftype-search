<?php

namespace Marcz\Swiftype\Modifiers;

use Object;
use Marcz\Search\Client\ModifyFilterable;

class LessThan extends Object implements ModifyFilterable
{
    public function apply($key, $value)
    {
        return [
            $key => [
                'type' => 'range',
                'to' => $value
            ]
        ];
    }
}
