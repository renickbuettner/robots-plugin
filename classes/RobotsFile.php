<?php namespace Renick\Robots\Classes;

use Cache;
use Renick\Robots\Models\Settings;
use Renick\Robots\Plugin;
use Response;

class RobotsFile
{
    public static function get(): \Illuminate\Http\Response
    {
        $mode = env('ROBOTS_FORCE_MODE', Settings::instance()->site_mode);
        $content = Cache::rememberForever(Plugin::CACHE_KEY . $mode, function () use ($mode) {
            return static::getContent($mode);
        });

        return Response::make($content, 200, ['Content-Type' => 'text/plain']);
    }

    protected static function getContent(string $mode): string
    {
        return match ($mode) {
            'deny_all' => "User-agent: *\nDisallow: /",
            'custom' => Settings::instance()->custom_content,
            default => "User-agent: *\nAllow: /"
        };
    }
}
