<?php

namespace App\JsonFiles;

class DataProviderTestY extends AbstractDataProvider
{
    protected $storageFolder = "dataproviders/tests";
    protected $fileName = "DataProviderTestY.json";
    protected $filters = [];
    protected $statusCodes = [
        'authorised' => 100,
        'decline' => 200,
        'refunded' => 300
    ];

    public function filterByStatus(string $status)
    {
        $this->filters[] = [
            'name' => 'status',
            'value' => $this->statusCodes[$status],
            'operator' => '='
        ];
    }

    public function filterByBalanceMin(int $from)
    {
        $this->filters[] = [
            'name' => 'balance',
            'value' => $from,
            'operator' => '>='
        ];
    }

    public function filterByBalanceMax(int $to)
    {
        $this->filters[] = [
            'name' => 'balance',
            'value' => $to,
            'operator' => '<='
        ];
    }

    public function filterByCurrency(string $currency)
    {
        $this->filters[] = [
            'name' => 'currency',
            'value' => $currency,
            'operator' => '='
        ];
    }
}
