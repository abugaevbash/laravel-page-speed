<?php

namespace RenatoMarinho\LaravelPageSpeed\Middleware;

class RemoveComments extends PageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            '/<!--[^]><!\[](.*?)[^\]]-->/s' => '',
            '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/s' => '',
        ];

        return $this->replace($replace, $buffer);
    }
}
