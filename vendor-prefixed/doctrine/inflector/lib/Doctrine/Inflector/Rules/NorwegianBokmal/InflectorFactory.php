<?php

declare (strict_types=1);
namespace MyVendorPrefix\Doctrine\Inflector\Rules\NorwegianBokmal;

use MyVendorPrefix\Doctrine\Inflector\GenericLanguageInflectorFactory;
use MyVendorPrefix\Doctrine\Inflector\Rules\Ruleset;
final class InflectorFactory extends GenericLanguageInflectorFactory
{
    protected function getSingularRuleset(): Ruleset
    {
        return Rules::getSingularRuleset();
    }
    protected function getPluralRuleset(): Ruleset
    {
        return Rules::getPluralRuleset();
    }
}
