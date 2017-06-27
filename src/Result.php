<?php

namespace Zend\Validator;

final class Result
{
    /**
     * @var bool
     */
    private $isValid;

    /**
     * @var Message[]
     */
    private $messages;

    public function __construct(bool $isValid, array $messages)
    {
        $this->isValid = $isValid;
        $this->messages = $messages;
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}
