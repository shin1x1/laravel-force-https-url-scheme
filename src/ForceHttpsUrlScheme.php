<?php
namespace Shin1x1\ForceHttpsUrlScheme;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

/**
 * Class ForceHttpsUrlScheme
 * @package Shin1x1\ForceHttpsUrlScheme
 */
class ForceHttpsUrlScheme
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->app->environment() === 'production') {
            // for Proxies
            Request::setTrustedProxies([$request->getClientIp()], Request::HEADER_X_FORWARDED_ALL);
            if (!$request->isSecure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}
