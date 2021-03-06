<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Github\Domain\Value\IncomingWebhook;

use App\Github\Domain\Value\IncomingWebhook\Event;
use PHPUnit\Framework\TestCase;

final class EventTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider \App\Tests\Util\DataProvider\StringProvider::blank()
     * @dataProvider \App\Tests\Util\DataProvider\StringProvider::empty()
     */
    public function throwsExceptionFor(string $value): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Event::fromString($value);
    }

    /**
     * @test
     *
     * @dataProvider \App\Tests\Util\DataProvider\StringProvider::arbitrary()
     */
    public function fromString(string $value): void
    {
        self::assertSame(
            $value,
            Event::fromString($value)->toString()
        );
    }
}
