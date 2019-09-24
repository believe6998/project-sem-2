<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('personal_training_category')->truncate();
        DB::table('personal_training_category')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'personal_training_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'personal_training_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => 4,
                'personal_training_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'personal_training_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => 3,
                'personal_training_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
