<?php
namespace Shin1x1\ForceSecureUrlScheme\Test {
    /**
     * Class Helpers
     * @package Shin1x1\ForceSecureUrlSchemeTest
     */
    class Helpers
    {
        /**
         * @var string
         */
        static public $requestUri;
    }
}

namespace Shin1x1\ForceSecureUrlScheme {
    use Shin1x1\ForceSecureUrlScheme\Test\Helpers;

    /**
     * @return \Mockery\MockInterface
     */
    function redirect() {
        $mock = \Mockery::mock();
        $mock->shouldReceive('secure')->with(Helpers::$requestUri)->andReturn();

        return $mock;
    }
}


