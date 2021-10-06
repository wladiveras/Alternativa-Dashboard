<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;
use DB;



HeadingRowFormatter::default('none');

class OrdersImport implements ToModel, WithStartRow
{
    private $orderid;

    public function __construct($orderid)
    {
        $this->orderid = $orderid;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        DB::table('alt_orders_data')->insert([
            'order_id'      => $this->orderid,
            'code'          => 0,
            'created_at'   =>  Carbon::now(),

            'front_input1'  => $row[0],
            'front_input2'  => $row[1],
            'front_input3'  => $row[2],
            'front_input4'  => $row[3],
            'front_input5'  => $row[4],
            'front_input6'  => $row[5],
            'front_input7'  => $row[6],
            'front_input8'  => $row[7],

            'back_input1'   => $row[8],
            'back_input2'   => $row[9],
            'back_input3'   => $row[10],
            'back_input4'   => $row[11],
            'back_input5'   => $row[12],
            'back_input6'   => $row[13],
            'back_input7'   => $row[14],
            'back_input8'   => $row[15],

        ]);

    }
}
