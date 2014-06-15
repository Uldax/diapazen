<?php

namespace Bdls\userBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class userBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
