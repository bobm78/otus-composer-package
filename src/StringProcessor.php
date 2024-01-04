<?php

declare(strict_types=1);

namespace Salenko\OtusComposerPackage;

class StringProcessor
{
    public function getLength(string $inString): int
    {
        return strlen($inString);
    }
}
