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

namespace App\Github\Domain\Value;

use Webmozart\Assert\Assert;

/**
 * @author Oskar Stark <oskarstark@googlemail.com>
 */
final class Sha
{
    private string $value;

    private function __construct(string $value)
    {
        $value = trim($value);
        Assert::stringNotEmpty($value);

        $this->value = $value;
    }

    public static function fromString(string $value): self
    {
        Assert::stringNotEmpty($value);

        return new self($value);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
