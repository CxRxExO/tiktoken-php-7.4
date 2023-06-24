<?php

declare(strict_types=1);

namespace CxRxExO\Tiktoken\Tests\Vocab;

use CxRxExO\Tiktoken\Util\EncodeUtil;
use CxRxExO\Tiktoken\Vocab\Vocab;
use PHPUnit\Framework\TestCase;

final class VocabTest extends TestCase
{
    public function testLoadFromFile(): void
    {
        $vocab = Vocab::fromFile(__DIR__ . '/Fixtures/test.tiktoken');

        self::assertCount(47, $vocab);
        self::assertSame(285, $vocab->getRank(EncodeUtil::toBytes('is')));
        self::assertSame('is', $vocab->getToken(285));
        self::assertSame(18, $vocab->getRank([51]));
        self::assertSame('3', $vocab->getToken(18));
    }
}
