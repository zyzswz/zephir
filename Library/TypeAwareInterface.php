<?php

/*
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Zephir;

/**
 * Zephir\TypeAwareInterface.
 */
interface TypeAwareInterface
{
    /**
     * Returns the type name of the compiled expression.
     *
     * @return string
     */
    public function getType();
}
