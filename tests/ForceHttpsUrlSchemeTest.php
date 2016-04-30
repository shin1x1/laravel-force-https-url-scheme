<?php
namespace Shin1x1\ForceHttpsUrlScheme\Test;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Mockery;
use PHPUnit_Framework_TestCase;
use Shin1x1\ForceHttpsUrlScheme\ForceHttpsUrlScheme;

/**
 * Class ForceHttpsUrlSchemeTest
 * @package Shin1x1\ForceHttpsUrlScheme\Test
 */
class ForceHttpsUrlSchemeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    protected $app;
    /**
     * @var ForceHttpsUrlScheme
     */
    protected $sut;

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();

        $this->app = Mockery::mock('Illuminate\Contracts\Foundation\Application');
        $this->app->shouldReceive('environment')->andReturn('production');

        $this->sut = new ForceHttpsUrlScheme($this->app);
        Helpers::$requestUri = '/path';
    }

    /**
     * @test
     * @dataProvider getDataFor_handle_redirect
     */
    public function handle_redirect($headers)
    {
        $request = Mockery::mock('Illuminate\Http\Request[getClientIp, getRequestUri]', [[], [], [], [], [], $headers]);
        $request->shouldReceive('getClientIp')->andReturn('127.0.0.1');
        $request->shouldReceive('getRequestUri')->andReturn('/path');

        $next = function () {
            throw new Exception();
        };

        $this->sut->handle($request, $next);
    }

    /**
     *
     */
    public function getDataFor_handle_redirect()
    {
        return [
            [[]],
            [['HTTP_X_FORWARDED_PROTO' => 'http', 'REMOTE_ADDR' => '127.0.0.1']],
        ];
    }

    /**
     * @test
     * @dataProvider getDataFor_handle_no_redirect
     * @param array $headers
     */
    public function handle_no_redirect(array $headers)
    {
        $request = Mockery::mock('Illuminate\Http\Request[[getClientIp, getRequestUri]', [[], [], [], [], [], $headers]);
        $request->shouldReceive('getClientIp')->andReturn('127.0.0.1');
        $request->shouldReceive('getRequestUri')->andThrow(new Exception());

        $next = function () {
            $this->assertTrue(true);
        };

        $this->sut->handle($request, $next);
    }

    /**
     *
     */
    public function getDataFor_handle_no_redirect()
    {
        return [
            [['HTTPS' => 'on']],
            [['HTTP_X_FORWARDED_PROTO' => 'https', 'REMOTE_ADDR' => '127.0.0.1']],
        ];
    }
}
