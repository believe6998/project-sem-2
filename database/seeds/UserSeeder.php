<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id' => 1,
                'firstName' => 'Phan',
                'lastName' => 'Hoài Nam',
                'phone' => '09123688762',
                'gender' => 1,
                'email' => 'phannam123@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'firstName' => 'Lê',
                'lastName' => 'Văn Đạt',
                'phone' => '0349872712',
                'gender' => 1,
                'email' => 'beledat@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'firstName' => 'Lã',
                'lastName' => 'Thanh Phong',
                'phone' => '09191283721',
                'gender' => 1,
                'email' => 'phongla@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'firstName' => 'Lương',
                'lastName' => 'Anh Ngọc',
                'phone' => '0919123892',
                'gender' => 1,
                'email' => 'anhngoc@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'firstName' => 'Lê',
                'lastName' => 'Tuấn Anh',
                'phone' => '09128391283',
                'gender' => 1,
                'email' => 'anhtuan@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'firstName' => 'Phan',
                'lastName' => 'Vũ Anh',
                'phone' => '0192318782',
                'gender' => 1,
                'email' => 'vuanh@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'firstName' => 'Hoàng',
                'lastName' => 'Thanh Nga',
                'phone' => '023891237372',
                'gender' => 1,
                'email' => 'thanhnga91238@gmail.com',
                'password' => '9123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'firstName' => 'Vũ',
                'lastName' => 'Phương Ly',
                'phone' => '09123688762',
                'gender' => 1,
                'email' => 'hely92139@gmail.com',
                'password' => '456',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'firstName' => 'Nguyễn',
                'lastName' => 'Hương Dương',
                'phone' => '098123767312',
                'gender' => 0,
                'email' => 'huong98123@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'firstName' => 'Nguyễn',
                'lastName' => 'Hoàng Nam',
                'phone' => '03517238992',
                'gender' => 1,
                'email' => 'hoangnam19827@gmail.com',
                'password' => '987',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'firstName' => 'Phan',
                'lastName' => 'Hoài Nam',
                'phone' => '09123688762',
                'gender' => 1,
                'email' => 'phan123@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 12,
                'firstName' => 'Đào',
                'lastName' => 'Phương Anh',
                'phone' => '091238193104',
                'gender' => 0,
                'email' => 'phuonganh12673@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 13,
                'firstName' => 'Nguyễn',
                'lastName' => 'Hoàng Phương Ly',
                'phone' => '0128378123',
                'gender' => 0,
                'email' => 'lyphuong1188@gmail.com',
                'password' => '1923',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 14,
                'firstName' => 'Dương',
                'lastName' => 'Phương Anh',
                'phone' => '0918213662144',
                'gender' => 0,
                'email' => 'duongpa998877@gmail.com',
                'password' => '123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 15,
                'firstName' => 'Trần',
                'lastName' => 'Nam Anh',
                'phone' => '0987121616',
                'gender' => 1,
                'email' => 'namanhdabe82@gmail.com',
                'password' => '9123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
