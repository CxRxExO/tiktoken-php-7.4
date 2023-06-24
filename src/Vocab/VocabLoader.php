<?php

declare(strict_types=1);

namespace CxRxExO\Tiktoken\Vocab;

interface VocabLoader
{
    /** @param non-empty-string $uri */
    public function load(string $uri): Vocab;
}
