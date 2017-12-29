<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Locator;

use Hautelook\AliceBundle\FixtureLocator\FakeFixtureLocator;
use Hautelook\AliceBundle\FixtureLocatorInterface;
use Hautelook\AliceBundle\Locator\EnvFilesLocator;
use Hautelook\AliceBundle\Locator\EnvFilesLocator\DummyBundle;
use Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;

/**
 * @covers \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class EnvironmentlessFilesLocatorTest extends TestCase
{
    public function testIsAFixtureLocator()
    {
        $this->assertTrue(is_a(EnvironmentlessFilesLocator::class, FixtureLocatorInterface::class, true));
    }

    /**
     * @expectedException \DomainException
     */
    public function testIsNotClonable()
    {
        clone new EnvironmentlessFilesLocator(new FakeFixtureLocator());
    }

    public function testConcateneAllLocatorFiles()
    {
        $bundles = ['ABdundle', 'BBundle'];
        $env = 'dev';

        /** @var FixtureLocatorInterface|ObjectProphecy $decoratedLocatorProphecy */
        $decoratedLocatorProphecy = $this->prophesize(FixtureLocatorInterface::class);
        $decoratedLocatorProphecy
            ->locateFiles($bundles, $env)
            ->willReturn(['/path/to/file1.yml', '/path/to/file2.yml'])
        ;
        $decoratedLocatorProphecy
            ->locateFiles($bundles, '')
            ->willReturn(['/path/to/file2.yml', '/path/to/file3.yml'])
        ;
        /** @var FixtureLocatorInterface $decoratedLocator */
        $decoratedLocator = $decoratedLocatorProphecy->reveal();

        $expected = [
            '/path/to/file1.yml',
            '/path/to/file2.yml',
            '/path/to/file3.yml',
        ];

        $locator = new EnvironmentlessFilesLocator($decoratedLocator);
        $actual = $locator->locateFiles($bundles, $env);

        $this->assertEquals($expected, $actual);

        $decoratedLocatorProphecy->locateFiles(Argument::cetera())->shouldHaveBeenCalledTimes(2);
    }
}
