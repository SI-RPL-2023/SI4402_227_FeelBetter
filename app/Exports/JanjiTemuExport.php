<?php

namespace App\Exports;

use App\Models\Appointment;
use Maatwebsite\Excel\Concerns\FromCollection;

class JanjiTemuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Appointment::all();
    }
}
