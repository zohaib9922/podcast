<?php

namespace PodlovePublisher_Vendor;

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Tests_Grammar_TagTest extends \PodlovePublisher_Vendor\PHPUnit\Framework\TestCase
{
    public function testMagicToString()
    {
        $grammar = new Twig_Extensions_Grammar_Tag(new Twig_Extensions_Grammar_Constant('foo'), new Twig_Extensions_Grammar_Number('bar'), new Twig_Extensions_Grammar_Optional(new Twig_Extensions_Grammar_Constant('foo'), new Twig_Extensions_Grammar_Number('bar')));
        $this->assertEquals('foo <bar:number> [foo <bar:number>]', (string) $grammar);
    }
}
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
@\class_alias('PodlovePublisher_Vendor\\Twig_Tests_Grammar_TagTest', 'Twig_Tests_Grammar_TagTest', \false);
