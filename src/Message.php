<?php

namespace Zend\Validator;

final class Message
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string|int|float
     */
    private $variables;

    public function __construct(string $key, string $template, array $variables = [])
    {
        $this->key = $key;
        $this->template = $template;
        $this->variables = $variables;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getVariables(): array
    {
        return $this->variables;
    }
}
