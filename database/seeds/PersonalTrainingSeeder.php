<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.x
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Illuminate\Support\Facades\DB::table('personal_trainings')->truncate();
        \Illuminate\Support\Facades\DB::table('personal_trainings')->insert([
            [
                'id' => 1,
                'name' => 'Phạm Văn Dung',
                'description' => 'Tập thể hình thay đổi chính bạn',
                'qualification' => 'Đại học thể dục thể thao tphcm',
                'experience' => 'Olympus gym, Green garden fitness center, Vinhomes central park',
                'image' => 'https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png',
                'rating' => '80%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Nguyễn Văn Tư',
                'description' => 'Cao 1m79 - nặng 74kg - PT Gym - PT Boxing, Kickboxing',
                'qualification' => 'Cử nhân chuyên ngành Huấn luyện viên Thể dục thể thao trường Đại học Thể dục Thể Thao TP.HCM, Huấn luyện viên Kickboxing quóc gia, Huấn luyện viên Võ cổ truyền, HCV Vô địch thế giới Võ cổ truyền 2018',
                'experience' => '3 năm',
                'image' => 'https://huonganhyoga.vn/Data/upload/images/Banner/fitness/65924059_270076713843517_153033129320251392_n.jpg',
                'rating' => '100%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Trần Khả Đạt',
                'description' => 'Kinh niệm 2 năm giảng dạy tại trung tâm và tự do. Giúp rất nhiều khách hàng đat đc mục tiêu. Tận tình và chuyên nghiệp',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'https://2.bp.blogspot.com/-Z7zY0AKDqzQ/XCcIDB_yQMI/AAAAAAAACWA/f_Jo6REK6roxVqc6u3buMMXS57sefnewACLcBGAs/s1600/IMG_9899.jpg',
                'rating' => '50%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
