<?php

/*
 * This file is part of Eloquent UUID.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Uuid;

use Exception;

class InvalidOption extends Exception
{
    public static function missingUuidField()
    {
        return new static('Could not determinate in which field the uuid should be saved');
    }
}
