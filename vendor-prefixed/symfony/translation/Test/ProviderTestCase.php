<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MyVendorPrefix\Symfony\Component\Translation\Test;

use MyVendorPrefix\PHPUnit\Framework\MockObject\MockObject;
use MyVendorPrefix\PHPUnit\Framework\TestCase;
use MyVendorPrefix\Psr\Log\LoggerInterface;
use MyVendorPrefix\Symfony\Component\HttpClient\MockHttpClient;
use MyVendorPrefix\Symfony\Component\Translation\Dumper\XliffFileDumper;
use MyVendorPrefix\Symfony\Component\Translation\Loader\LoaderInterface;
use MyVendorPrefix\Symfony\Component\Translation\Provider\ProviderInterface;
use MyVendorPrefix\Symfony\Component\Translation\TranslatorBagInterface;
use MyVendorPrefix\Symfony\Contracts\HttpClient\HttpClientInterface;
/**
 * A test case to ease testing a translation provider.
 *
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
abstract class ProviderTestCase extends TestCase
{
    protected HttpClientInterface $client;
    protected LoggerInterface|MockObject $logger;
    protected string $defaultLocale;
    protected LoaderInterface|MockObject $loader;
    protected XliffFileDumper|MockObject $xliffFileDumper;
    protected TranslatorBagInterface|MockObject $translatorBag;
    abstract public static function createProvider(HttpClientInterface $client, LoaderInterface $loader, LoggerInterface $logger, string $defaultLocale, string $endpoint): ProviderInterface;
    /**
     * @return iterable<array{0: ProviderInterface, 1: string}>
     */
    abstract public static function toStringProvider(): iterable;
    /**
     * @dataProvider toStringProvider
     */
    public function testToString(ProviderInterface $provider, string $expected)
    {
        $this->assertSame($expected, (string) $provider);
    }
    protected function getClient(): MockHttpClient
    {
        return $this->client ??= new MockHttpClient();
    }
    protected function getLoader(): LoaderInterface
    {
        return $this->loader ??= $this->createMock(LoaderInterface::class);
    }
    protected function getLogger(): LoggerInterface
    {
        return $this->logger ??= $this->createMock(LoggerInterface::class);
    }
    protected function getDefaultLocale(): string
    {
        return $this->defaultLocale ??= 'en';
    }
    protected function getXliffFileDumper(): XliffFileDumper
    {
        return $this->xliffFileDumper ??= $this->createMock(XliffFileDumper::class);
    }
    protected function getTranslatorBag(): TranslatorBagInterface
    {
        return $this->translatorBag ??= $this->createMock(TranslatorBagInterface::class);
    }
}
