<?php

namespace Egulias\EmailValidator\Validation;

class DNSRecords
{
    private array $records;

    private bool $error;
    
    /**
     * @param list<array<array-key, mixed>> $records
     * @param bool $error
     */
    public function __construct(array $records, bool $error = false)
    {
        $this->records = $records;
        $this->error = $error;
    }

    /**
     * @return list<array<array-key, mixed>>
     */
    public function getRecords(): array
    {
        return $this->records;
    }

    public function withError(): bool
    {
        return $this->error;
    }
}
