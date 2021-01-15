<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'nickname', 
            'doctor_id', 
            'patient_id',
            'created_at',
        ];
    }
    public function collection()
    {
        return collect(Contact::getSuspectTracer());
    }
}
