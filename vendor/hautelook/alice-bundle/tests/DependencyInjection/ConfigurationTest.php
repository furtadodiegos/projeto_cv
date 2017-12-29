<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Processor;

/**
 * @covers \Hautelook\AliceBundle\DependencyInjection\Configuration
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class ConfigurationTest extends TestCase
{
    public function testDefaultValues()
    {
        $configuration = new Configuration();
        $processor = new Processor();
        $expected = [
            'fixtures_path' => 'Resources/fixtures/orm',
        ];
        $actual = $processor->processConfiguration($configuration, []);
        $this->assertEquals($expected, $actual);
    }

    public function testDefaultValuesCanBeOverridden()
    {
        $configuration = new Configuration();
        $processor = new Processor();
        $expected = [
            'fixtures_path' => '/Resources/path/tofixtures',
        ];
        $actual = $processor->processConfiguration(
            $configuration,
            [
                'hautelook_alice' => [
                    'fixtures_path' => '/Resources/path/tofixtures',
                ],
            ]
        );
        $this->assertEquals($expected, $actual);
    }
}
