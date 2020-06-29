<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Logic;

use Hyperf\Di\Annotation\Inject;

class B {
    /**
     * @Inject(lazy=true)
     * @var A
     */
    public $a;
}