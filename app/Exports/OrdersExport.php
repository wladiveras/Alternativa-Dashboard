<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

use Auth;

class OrdersExport implements FromView
{
    use Exportable;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('exports.xml', [
            'data' => $this->data
        ]);
    }
}