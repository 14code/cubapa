<?php
declare(strict_types=1);

namespace I4code\CuBaPa;

interface Factory
{
    public function create($data = null);
    public function createFromArray(array $data);
    public function createFromObject(object $data);
}