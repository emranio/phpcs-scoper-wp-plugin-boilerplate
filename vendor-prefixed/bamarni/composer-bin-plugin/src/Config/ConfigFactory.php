<?php

declare (strict_types=1);
namespace MyVendorPrefix\Bamarni\Composer\Bin\Config;

use MyVendorPrefix\Composer\Config as ComposerConfig;
use MyVendorPrefix\Composer\Factory;
use MyVendorPrefix\Composer\Json\JsonFile;
use MyVendorPrefix\Composer\Json\JsonValidationException;
use MyVendorPrefix\Seld\JsonLint\ParsingException;
final class ConfigFactory
{
    /**
     * @throws JsonValidationException
     * @throws ParsingException
     */
    public static function createConfig(): ComposerConfig
    {
        $config = Factory::createConfig();
        $file = new JsonFile(Factory::getComposerFile());
        if (!$file->exists()) {
            return $config;
        }
        $file->validateSchema(JsonFile::LAX_SCHEMA);
        $config->merge($file->read());
        return $config;
    }
    private function __construct()
    {
    }
}
