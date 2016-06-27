<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\InvoiceProduct;
use App\Invoice;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Invoice::truncate();
        InvoiceProduct::truncate();

        foreach(range(1, 20) as $i) {
            $products = collect();
            foreach(range(1, mt_rand(2, 10)) as $j) {
                $unitPrice = $faker->numberBetween(100, 1000);
                $qty = $faker->numberBetween(1, 20);
                $products->push(new InvoiceProduct([
                    'name' => $faker->sentence,
                    'price' => $unitPrice,
                    'qty' => $qty,
                    'total' => ($qty  * $unitPrice)
                ]));

            }

            $subTotal = $products->sum('total');
            $discount = $faker->numberBetween(10, 20);
            $total = $subTotal - $discount;

            $invoice = Invoice::create([
                'client' => $faker->name,
                'client_address' => $faker->address,
                'title' => $faker->sentence,
                'invoice_no' => $faker->numberBetween(1000, 2000),
                'invoice_date' => $faker->date(),
                'due_date' => $faker->date(),
                'discount' => $discount,
                'sub_total' => $subTotal,
                'grand_total' => $total
            ]);

            $invoice->products()->saveMany($products);
        }
    }
}
