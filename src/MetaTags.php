<?php

namespace KirbyExtended;

/**
 * PHP Meta Tags
 *
 * @version 0.0.2
 * @author Pedro Borges <oi@pedroborg.es>
 * @copyright Pedro Borges <oi@pedroborg.es>
 * @link https://github.com/pedroborges/meta-tags
 * @license MIT
 */
class MetaTags
{
    protected string $indentation;
    protected array $order;
    protected array $tags = [];

    /**
     * Create a new instance
     *
     * @param string $indentation
     * @param array $order
     * @return void
     */
    public function __construct(string $indentation = null, array $order = null)
    {
        $this->indentation = $indentation ?? '    ';
        $this->order = $order ?? ['title', 'meta', 'og', 'twitter', 'link', 'json-ld'];
    }

    /**
     * Build an HTML link tag
     *
     * @param string $key
     * @param array|string|null $value
     * @return string|null
     */
    public function link(string $key, $value): ?string
    {
        if (empty($value)) {
            return null;
        }

        $attributes = ['rel' => $key];

        if (is_array($value)) {
            foreach ($value as $key => $v) {
                $attributes[$key] = $v;
            }
        } else {
            $attributes['href'] = $value;
        }

        $tag = $this->createTag('link', $attributes);
        $this->addToTagsGroup('link', $key, $tag);

        return $tag;
    }

    /**
     * Build an HTML meta tag
     *
     * @param string $key
     * @param array|string|null $value
     * @return string|null
     */
    public function meta(string $key, $value): ?string
    {
        if (empty($value)) {
            return null;
        }

        $attributes = ['name' => $key];

        if (is_array($value)) {
            foreach ($value as $key => $v) {
                $attributes[$key] = $v;
            }
        } else {
            $attributes['content'] = $value;
        }

        $tag = $this->createTag('meta', $attributes);
        $this->addToTagsGroup('meta', $key, $tag);

        return $tag;
    }

    /**
     * Build an Open Graph meta tag
     *
     * @param string $key
     * @param string|null $value
     * @param bool $prefixed
     * @return string|null
     */
    public function og(string $key, ?string $value, bool $prefixed = true): ?string
    {
        if (empty($value)) {
            return null;
        }

        $key = $prefixed ? "og:{$key}" : $key;
        $tag = $this->createTag('meta', [
            'property' => $key,
            'content' => $value
        ]);

        $this->addToTagsGroup('og', $key, $tag);

        return $tag;
    }

    /**
     * Build an JSON linked data meta tag
     *
     * @param array|null $schema
     * @return string|null
     */
    public function jsonld(?array $schema): ?string
    {
        if (empty($schema)) {
            return null;
        }

        $json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        $script = "<script type=\"application/ld+json\">\n" . $json . "\n</script>";

        // Fix schema indentation
        $this->tags['json-ld'][] = implode(
            "\n" . $this->indentation,
            explode("\n", $script)
        );

        return $script;
    }

    /**
     * Build a Title HTML tag
     *
     * @param string|null $value
     * @return string|null
     */
    public function title(?string $value): ?string
    {
        if (empty($value)) {
            return null;
        }

        $tag = "<title>{$this->escapeAll($value)}</title>";
        $this->tags['title'][] = $tag;

        return $tag;
    }

    /**
     * Build a Twitter Card meta tag
     *
     * @param string $key
     * @param string|null $value
     * @param bool $prefixed
     * @return string|null
     */
    public function twitter(string $key, ?string $value, bool $prefixed = true): ?string
    {
        if (empty($value)) {
            return null;
        }

        $key = $prefixed ? "twitter:{$key}" : $key;
        $tag = $this->createTag('meta', [
            'name' => $key,
            'content' => $value
        ]);

        $this->addToTagsGroup('twitter', $key, $tag);

        return $tag;
    }

    /**
     * Render all or a specific group of HTML meta tags
     *
     * @param array|string|null $groups
     * @return string
     */
    public function render($groups = null): string
    {
        $groups = $groups !== null ? (array)$groups : $this->order;
        $html = [];

        foreach ($groups as $group) {
            $html[] = $this->renderGroup($group);
        }

        $html = implode('', $html);

        // Remove first indentation
        return preg_replace("/^{$this->indentation}/", '', $html, 1);
    }

    /**
     * Render all HTML meta tags from a specific group
     *
     * @param string $group
     * @return string
     */
    protected function renderGroup(string $group): ?string
    {
        if (!isset($this->tags[$group])) {
            return null;
        }

        $html = [];

        foreach ($this->tags[$group] as $tag) {
            if (is_array($tag)) {
                foreach ($tag as $t) {
                    $html[] = $t;
                }
            } else {
                $html[] = $tag;
            }
        }

        return count($html) > 0
            ? $this->indentation . implode("\n" . $this->indentation, $html) . "\n"
            : '';
    }

    /**
     * Add single HTML element to tags group
     *
     * @param string $group
     * @param string $key
     * @param string $tag
     * @return void
     */
    protected function addToTagsGroup(string $group, string $key, string $tag): void
    {
        if (isset($this->tags[$group][$key])) {
            $existingTag = $this->tags[$group][$key];

            if (is_array($existingTag)) {
                $this->tags[$group][$key][] = $tag;
            } else {
                $this->tags[$group][$key] = [$existingTag, $tag];
            }
        } else {
            $this->tags[$group][$key] = $tag;
        }
    }

    /**
     * Build an HTML attribute string from an array
     *
     * @param array $attributes
     * @return string
     */
    protected function attributes(array $attributes): string
    {
        $html = [];

        foreach ($attributes as $key => $value) {
            $element = $this->attributeElement($key, $value);

            if ($element !== null) {
                $html[] = $element;
            }
        }

        return count($html) > 0 ? ' ' . implode(' ', $html) : '';
    }

    /**
     * Build a single attribute element
     *
     * @param string $key
     * @param string|null $value
     * @return string|null
     */
    protected function attributeElement(string $key, ?string $value): ?string
    {
        if (is_null($value)) {
            return null;
        }

        return $key . '="' . $this->escapeAll($value) . '"';
    }

    /**
     * Build an HTML tag
     *
     * @param string $tagName
     * @param array $attributes
     * @return string
     */
    protected function createTag(string $tagName, array $attributes): string
    {
        return "<{$tagName}{$this->attributes($attributes)}>";
    }

    /**
     * Replace special characters with HTML entities
     *
     * @param string $value
     * @return string
     */
    protected function escapeAll(string $value): string
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8');
    }
}
