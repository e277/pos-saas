<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inbox;

class InboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $inbox=[
            [
                'user_id'=>'1',
                'store_id'=>'1',
                'sales_associate_id'=>'1',
                'product_id'=>'1',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'2',
                'store_id'=>'2',
                'sales_associate_id'=>'2',
                'product_id'=>'2',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'3',
                'store_id'=>'3',
                'sales_associate_id'=>'3',
                'product_id'=>'3',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'4',
                'store_id'=>'4',
                'sales_associate_id'=>'4',
                'product_id'=>'4',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'5',
                'store_id'=>'5',
                'sales_associate_id'=>'5',
                'product_id'=>'5',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'6',
                'store_id'=>'6',
                'sales_associate_id'=>'6',
                'product_id'=>'6',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'7',
                'store_id'=>'7',
                'sales_associate_id'=>'7',
                'product_id'=>'7',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'8',
                'store_id'=>'8',
                'sales_associate_id'=>'8',
                'product_id'=>'8',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'9',
                'store_id'=>'9',
                'sales_associate_id'=>'9',
                'product_id'=>'9',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
            [
                'user_id'=>'10',
                'store_id'=>'10',
                'sales_associate_id'=>'10',
                'product_id'=>'10',
                'message'=>'Your Message Here',
                'is_seen'=>'0'
            ],
        ];


        foreach ($inbox as $key => $value) {
            # code...
            Inbox::create($value);
        }
    }
}
