<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'lastname',
            'status',
            'age',
            'gender',
            'phonenumber',
            'region',
            'created_at',
            'updated_at',
        ];
    }

    public function collection()
    {

        return collect(Patient::getPatients());

    }
}


