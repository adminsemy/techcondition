<?php

namespace App\Interfaces;

interface EditRecordInterface
{
    public function isEditAllowedRecord($id);
}