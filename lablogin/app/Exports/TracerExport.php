<?php

namespace App\Exports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TracerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'firstname', 
            'lastname', 
            'age',
            'gender',
            'region',
            'phonenumber', 
        ];
    }

    public function collection()
    {
        return collect(Doctor::getTracers());
    }
}
