<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Brac Bank',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
        DB::table('banks')->insert([
            'name' => 'Bank Alfalah',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
        DB::table('banks')->insert([
            'name' => 'Markentile Bank Limited',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
        DB::table('banks')->insert([
            'name' => 'Prime Bank Limited',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
        DB::table('banks')->insert([
            'name' => 'Monarch',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
        DB::table('banks')->insert([
            'name' => 'HSBC',
            'address' => 'address',
            'email' => 'bank',
            'phone' => '2',
        ]);
      
    }
}
