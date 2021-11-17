<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //has to run in the order of the migrations

        User::factory(10)->create();

        $this->call([
            ContactSeeder::class,
            StoreTypeSeeder::class,
        ]);
        Store::factory(10)->create();


        $this->call([
            // StoreSeeder::Class,
            BannerSeeder::class,
            BrandSeeder::class,
            CategoryTypeSeeder::class,
            CategorySeeder::class,


        ]);

        Product::factory()->count(20000)->state(new Sequence(
            ['status' => 'active'],
            ['status' => 'inactive']
        ))->create();

        $this->call([
            RatingSeeder::class,
            CouponSeeder::class,
            UsedCouponSeeder::class,
            CartSeeder::class,
            SalesAssociateSeeder::class,
            SalesSeeder::class,
            InvoiceSeeder::class,
            CommissionSeeder::class,
            InboxSeeder::class,
        ]);


    }
}
