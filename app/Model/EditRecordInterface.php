<?php

namespace App\Model;

interface EditRecordInterface
{
    public function isEditAllowedRecord($id);
}