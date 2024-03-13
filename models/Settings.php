<?php namespace Renick\Robots\Models;

use Arr;
use Cache;
use Model;
use Renick\Robots\Plugin;
use System\Behaviors\SettingsModel;
use Url;

/**
 * Model
 */
class Settings extends Model
{
    public $implement = [SettingsModel::class];
    public string $settingsCode = 'renick_robots_settings';
    public string $settingsFields = 'fields.yaml';

    /**
     * The rules to be applied to the data.
     *
     * @var array
     */
    public array $rules = [];

    public function beforeSave(): void
    {
        $disallow = $this->value['disallow_page'] ?? null;
        if ($disallow) {
            $path = parse_url(Url::to($disallow), PHP_URL_PATH);
            $this->appendCustomContent("Disallow: {$path}");
            $this->setSingleValue('disallow_page', null);
        }
    }

    public function afterSave(): void
    {
        Cache::forget(Plugin::CACHE_KEY . $this->value['site_mode'] ?? '');
    }

    public function appendCustomContent($content): void
    {
        $this->setSingleValue('custom_content', Arr::join([
            $this->value['custom_content'] ?? '',
            $content,
            ''
        ], PHP_EOL));
    }

    protected function setSingleValue(string $key, mixed $value): void
    {
        $newValue = $this->value ?? [];
        $newValue[$key] = $value;
        $this->setAttribute('value', $newValue);
    }

    public function getDefaultCustomContentAttribute(): string
    {
        return Arr::join(['User-agent: *', 'Allow: /', ''], PHP_EOL);
    }
}
