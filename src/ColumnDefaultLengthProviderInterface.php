<?php

declare(strict_types=1);

namespace Aeliot\DoctrineEncrypted\Contracts;

use Doctrine\DBAL\Platforms\AbstractPlatform;

interface ColumnDefaultLengthProviderInterface
{
    public function getDefaultColumnLength(AbstractPlatform $platform): ?int;
}
