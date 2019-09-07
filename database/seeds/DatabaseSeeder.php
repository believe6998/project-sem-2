<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

//        $this->call(UsersTableSeeder::class);
//        $this->call(RolesTableSeeder::class);
//        $this->call(PermissionsTableSeeder::class);
//        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PersonalTrainingSeeder::class);
        $this->call(CategoryPTSeeder::class);
        $this->call(BlogSeeder::class);
        Model::reguard();
    }
}
