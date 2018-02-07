<?php

namespace validator\interfaces;
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 01:26 AM
 */

interface ValidatorInterface
{
    /**
     * Validates a value against a constraint or a list of constraints.
     *
     * @param $value
     *
     * @return bool
     */
    public function validate($value);
}