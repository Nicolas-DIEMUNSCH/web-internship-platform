<?php

require_once __DIR__ . '/Pagination.php';

class PaginationEntreprises extends Pagination
{
    public function getCurrentElements(): array
    {
        return $this->getCurrentItems();
    }
}