<?php

namespace PodlovePublisher_Vendor;

use PodlovePublisher_Vendor\Twig\RuntimeLoader\RuntimeLoaderInterface;
\class_exists('PodlovePublisher_Vendor\\Twig\\RuntimeLoader\\RuntimeLoaderInterface');
@\trigger_error(\sprintf('Using the "Twig_RuntimeLoaderInterface" class is deprecated since Twig version 2.7, use "Twig\\RuntimeLoader\\RuntimeLoaderInterface" instead.'), \E_USER_DEPRECATED);
if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\RuntimeLoader\RuntimeLoaderInterface" instead */
    class Twig_RuntimeLoaderInterface extends RuntimeLoaderInterface
    {
    }
}