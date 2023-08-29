<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$param = [
        //    'first_name' => '田中',
        //    'last_name' => '雅美',
        //    'gender' => '女性',
        //    'email' => 'masami@coachtech.co.jp',
        //    'postcode' => '123-4567',
        //    'address' => '東京都千代田区丸の内1-2-3',
        //    'building_name' => '丸の内ビル',
        //    'option' => '特になし'
        //];
        //DB::table('contacts')->insert($param);
        Contact::factory()->count(8)->create();
    }
}

