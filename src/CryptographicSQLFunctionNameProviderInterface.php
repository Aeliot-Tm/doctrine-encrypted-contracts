<?php

declare(strict_types=1);

namespace Aeliot\DoctrineEncrypted\Contracts;

interface CryptographicSQLFunctionNameProviderInterface
{
    public function getDecryptFunctionName(): string;

    public function getEncryptFunctionName(): string;
}
