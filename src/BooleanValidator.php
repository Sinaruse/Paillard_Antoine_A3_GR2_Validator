<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 24/11/14
 * Time: 19:32
 */

namespace OKLM\Validator;


class BooleanValidator {

    public function __construct()
    {
    }

    public static function isTrue($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('The parameter must be a boolean.');

        return $boolean;
    }

} 