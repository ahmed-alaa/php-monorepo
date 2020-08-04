<?php

declare(strict_types=1);

namespace YourMonorepo\SecondPackage;

require "vendor/autoload.php";

use Carbon\Carbon;

final class SecondClass
{
    public function test()
    {
        echo Carbon::today();
    }
}

(new SecondClass())->test();