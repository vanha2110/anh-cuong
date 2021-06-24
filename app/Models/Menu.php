<?php

namespace App\Models;

class Menu
{
    /**
     * @var string
     */
    private $current;

    public function __construct(string $current)
    {
        $this->current = $current;
    }

    /**
     * @param string $name
     * @return string
     */
    public function active(string $name): string
    {
        return $this->current === $name ? 'active' : '';
    }


    /**
     * @param string $name
     * @return string
     */
    public function open(string $name): string
    {
        switch ($name) {
            case 'user':
                break;
            default:
                $is_collapsed = false;
                break;
        }
        return $is_collapsed ? 'is-block' : '';
    }

    /**
     * @param string $current
     * @return static
     */
    public static function create(string $current)
    {
        return new static($current);
    }
}
