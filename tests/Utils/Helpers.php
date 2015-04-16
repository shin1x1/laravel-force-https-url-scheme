<?php
namespace Shin1x1\ForceHttpsUrlScheme\Test {
    /**
     * Class Helpers
     * @package Shin1x1\ForceHttpsUrlScheme\Test
     */
    class Helpers
    {
        /**
         * @var string
         */
        static public $requestUri;
    }
}

namespace Shin1x1\ForceHttpsUrlScheme {
    use Shin1x1\ForceHttpsUrlScheme\Test\Helpers;

    /**
     * @return \Mockery\MockInterface
     */
    function redirect() {
        $mock = \Mockery::mock();
        $mock->shouldReceive('secure')->with(Helpers::$requestUri)->andReturn();

        return $mock;
    }
}


