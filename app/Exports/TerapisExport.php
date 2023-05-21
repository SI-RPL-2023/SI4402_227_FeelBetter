<?php

namespace App\Exports;

use App\Models\Therapist;
use Maatwebsite\Excel\Concerns\FromCollection;

class TerapisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Therapist::all();
    }
}
