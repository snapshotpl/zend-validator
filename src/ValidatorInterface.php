<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Validator;

interface ValidatorInterface
{
    /**
     * @param  mixed $value
     *
     * @return Result
     *
     * @throws Exception\RuntimeException If validation of $value is impossible
     */
    public function validate($value): Result;
}
