<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PodlovePublisher_Vendor\Twig\Sandbox;

/**
 * Interface that all security policy classes must implements.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface SecurityPolicyInterface
{
    /**
     * @throws SecurityError
     */
    public function checkSecurity($tags, $filters, $functions);
    /**
     * @throws SecurityNotAllowedMethodError
     */
    public function checkMethodAllowed($obj, $method);
    /**
     * @throws SecurityNotAllowedPropertyError
     */
    public function checkPropertyAllowed($obj, $method);
}
@\class_alias('PodlovePublisher_Vendor\\Twig\\Sandbox\\SecurityPolicyInterface', 'PodlovePublisher_Vendor\\Twig_Sandbox_SecurityPolicyInterface');
