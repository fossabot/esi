<?php

namespace AGrimes94\Esi\Tests\HttpClient\Util;

use AGrimes94\Esi\HttpClient\Util\QueryStringBuilder;
use PHPUnit\Framework\TestCase;

class QueryStringBuilderTest extends TestCase
{
    /**
     * Ensure query strings are constructed correctly with proper encoding.
     *
     * @dataProvider queryStringProvider
     *
     * @param mixed  $query
     * @param string $expected
     */
    public function testBuild($query, $expected)
    {
        $this->assertEquals($expected, QueryStringBuilder::build($query));
    }

    public function queryStringProvider()
    {
        // Scalar value.
        yield [
            'test 123',
            'test%20123',
        ];

        // Indexed array.
        yield [
            ['id' => [88, 86]],
            'id%5B%5D=88&id%5B%5D=86',
        ];

        // Non indexed array with only numeric keys.
        yield [
            ['ids' => [0 => 88, 2 => 86]],
            'ids%5B0%5D=88&ids%5B2%5D=86',
        ];

        // Boolean encoding
        yield [
            ['strict' => false, 'flag' => 1],
            'strict=0&flag=1',
        ];

        // A deeply nested array.
        yield [
            [
                'search' => 'test 123',

                'strict' => 'true',

                'id' => [88, 86],

                'assoc' => [
                    'a' => 'b',
                    'c' => [
                        'd' => 'e',
                        'f' => 'g',
                    ],
                ],

                'nested' => [
                    'a' => [
                        [
                            'b' => 'c',
                        ],
                        [
                            'd' => 'e',
                            'f' => [
                                'g' => 'h',
                                'i' => 'j',
                                'k' => [87, 89],
                            ],
                        ],
                    ],
                ],
            ],
            'search=test%20123' .
            '&strict=true' .
            '&id%5B%5D=88&id%5B%5D=86' .
            '&assoc%5Ba%5D=b&assoc%5Bc%5D%5Bd%5D=e&assoc%5Bc%5D%5Bf%5D=g' .
            '&nested%5Ba%5D%5B%5D%5Bb%5D=c&nested%5Ba%5D%5B%5D%5Bd%5D=e' .
            '&nested%5Ba%5D%5B%5D%5Bf%5D%5Bg%5D=h&nested%5Ba%5D%5B%5D%5Bf%5D%5Bi%5D=j' .
            '&nested%5Ba%5D%5B%5D%5Bf%5D%5Bk%5D%5B%5D=87&nested%5Ba%5D%5B%5D%5Bf%5D%5Bk%5D%5B%5D=89',
        ];
    }
}
