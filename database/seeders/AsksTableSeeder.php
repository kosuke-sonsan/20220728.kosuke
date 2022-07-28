<?php

namespace Database\Seeders;

use App\Models\Ask;
use Illuminate\Database\Seeder;

class AsksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ask::factory()->count(35)->create();//seederの作成データ数
    }
}
