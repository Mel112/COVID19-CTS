<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'firstname', 
            'lastname', 
            'status',
            'age',
            'gender',
            'phonenumber', 
            'region',
        ];
    }

    public function collection()
    {

        return collect(Patient::getSuspects());

    }
}


