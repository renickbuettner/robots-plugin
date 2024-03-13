<?php namespace Renick\Robots;

use Renick\Robots\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    public const CACHE_KEY = 'robots.txt';


    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name' => 'renick.robots::lang.plugin.name',
            'description' => 'renick.robots::lang.plugin.description',
            'author' => 'Renick Büttner',
            'icon' => 'icon-globe'
        ];
    }

    public function register(): void
    {
        parent::register();
    }


    public function boot(): void
    {
        parent::boot();
    }

    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => 'renick.robots::lang.plugin.name',
                'description' => 'renick.robots::lang.plugin.description',
                'category' => SettingsManager::CATEGORY_CMS,
                'icon' => 'icon-globe',
                'order' => 600,
                'keywords' => 'robots seo',
                'class' => Settings::class,
                'permissions' => ['renick.robots.permissions.manage_settings'],
            ]
        ];
    }

    public function registerPermissions(): array
    {
        return [
            'renick.robots.permissions.manage_settings' => [
                'tab'   => 'renick.robots::lang.permissions.tab',
                'label' => 'renick.robots::lang.permissions.manage_settings.label',
                'roles' => ['developer'],
            ],
        ];
    }
}
