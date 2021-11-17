<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $invoices = [
            [
                'sale_id' => 1,
                'product_id' => 1,
                'invoice_nbr' => 1,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 2,
                'product_id' => 2,
                'invoice_nbr' => 2,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 3,
                'product_id' => 3,
                'invoice_nbr' => 3,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 4,
                'product_id' => 4,
                'invoice_nbr' => 4,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 5,
                'product_id' => 5,
                'invoice_nbr' => 5,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 6,
                'product_id' => 6,
                'invoice_nbr' => 6,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 7,
                'product_id' => 7,
                'invoice_nbr' => 7,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 8,
                'product_id' => 8,
                'invoice_nbr' => 8,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 9,
                'product_id' => 9,
                'invoice_nbr' => 9,
                'date' => '2021-4-11'
            ],
            [
                'sale_id' => 10,
                'product_id' => 10,
                'invoice_nbr' => 10,
                'date' => '2021-4-11'
            ],
        ];


        foreach ($invoices as $key => $value) {
            # code...
            Invoice::Create($value);
        }
    }
}
