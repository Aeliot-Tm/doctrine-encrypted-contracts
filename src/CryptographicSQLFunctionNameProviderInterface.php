<?php

declare(strict_types=1);

/*
 * This file is part of the Doctrine Encrypted Contracts.
 *
 * (c) Anatoliy Melnikov <5785276@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aeliot\DoctrineEncrypted\Contracts;

interface CryptographicSQLFunctionNameProviderInterface
{
    public function getDecryptFunctionName(): string;

    public function getEncryptFunctionName(): string;
}
