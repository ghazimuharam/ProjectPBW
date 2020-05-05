<?php

namespace App\Exports;

use App\Candidatem;
use Maatwebsite\Excel\Concerns\FromCollection;

class CandidateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Candidatem::all();
    }
}
