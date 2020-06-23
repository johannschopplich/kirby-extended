<?php

use Kirby\Cms\Page;
use KirbyExtended\Adapters\MetaTagsAdapter;
use KirbyExtended\Env;
use KirbyExtended\HigherOrderTapProxy;

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return Env::get($key, $default);
    }
}

if (!function_exists('tap')) {
    /**
     * Call the given Closure with the given value then return the value
     *
     * @param mixed $value
     * @param callable|null $callback
     * @return mixed
     */
    function tap($value, ?callable $callback = null)
    {
        if (is_null($callback)) {
            return new HigherOrderTapProxy($value);
        }

        $callback($value);

        return $value;
    }
}

if (!function_exists('value')) {
    /**
     * Return the default value of the given value
     *
     * @param mixed $value
     * @return mixed
     */
    function value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}

if (!function_exists('metaTags')) {
    /**
     * Generate meta tags for a given page
     *
     * @param \Kirby\Cms\Page $page
     * @return \KirbyExtended\Adapters\MetaTagsAdapter
     */
    function metaTags(Page $page)
    {
        return MetaTagsAdapter::instance($page);
    }
}