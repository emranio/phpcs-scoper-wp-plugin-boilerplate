<?php

namespace MyVendorPrefix;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use MyVendorPrefix\Symfony\Polyfill\Ctype as p;
if (!\function_exists('ctype_alnum') && !\function_exists('MyVendorPrefix\ctype_alnum')) {
    function ctype_alnum(mixed $text): bool
    {
        return p\Ctype::ctype_alnum($text);
    }
}
if (!\function_exists('ctype_alpha') && !\function_exists('MyVendorPrefix\ctype_alpha')) {
    function ctype_alpha(mixed $text): bool
    {
        return p\Ctype::ctype_alpha($text);
    }
}
if (!\function_exists('ctype_cntrl') && !\function_exists('MyVendorPrefix\ctype_cntrl')) {
    function ctype_cntrl(mixed $text): bool
    {
        return p\Ctype::ctype_cntrl($text);
    }
}
if (!\function_exists('ctype_digit') && !\function_exists('MyVendorPrefix\ctype_digit')) {
    function ctype_digit(mixed $text): bool
    {
        return p\Ctype::ctype_digit($text);
    }
}
if (!\function_exists('ctype_graph') && !\function_exists('MyVendorPrefix\ctype_graph')) {
    function ctype_graph(mixed $text): bool
    {
        return p\Ctype::ctype_graph($text);
    }
}
if (!\function_exists('ctype_lower') && !\function_exists('MyVendorPrefix\ctype_lower')) {
    function ctype_lower(mixed $text): bool
    {
        return p\Ctype::ctype_lower($text);
    }
}
if (!\function_exists('ctype_print') && !\function_exists('MyVendorPrefix\ctype_print')) {
    function ctype_print(mixed $text): bool
    {
        return p\Ctype::ctype_print($text);
    }
}
if (!\function_exists('ctype_punct') && !\function_exists('MyVendorPrefix\ctype_punct')) {
    function ctype_punct(mixed $text): bool
    {
        return p\Ctype::ctype_punct($text);
    }
}
if (!\function_exists('ctype_space') && !\function_exists('MyVendorPrefix\ctype_space')) {
    function ctype_space(mixed $text): bool
    {
        return p\Ctype::ctype_space($text);
    }
}
if (!\function_exists('ctype_upper') && !\function_exists('MyVendorPrefix\ctype_upper')) {
    function ctype_upper(mixed $text): bool
    {
        return p\Ctype::ctype_upper($text);
    }
}
if (!\function_exists('ctype_xdigit') && !\function_exists('MyVendorPrefix\ctype_xdigit')) {
    function ctype_xdigit(mixed $text): bool
    {
        return p\Ctype::ctype_xdigit($text);
    }
}