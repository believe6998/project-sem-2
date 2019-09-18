<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Illuminate\Support\Facades\DB::table('homes')->truncate();
        \Illuminate\Support\Facades\DB::table('homes')->insert([
            [
                'id' => 1,
                'title' => 'Tiết Kiệm Tiền',
                'description' => 'Nhiều hơn cho ít hơn',
                'content' => 'Đào tạo 1 kèm 1 với huấn luyện viên cá nhân trong phòng tập thể hình hoặc phòng thu rất tốn kém, đặc biệt nếu bạn muốn tập luyện nhiều hơn một lần một tuần để có kết quả tối ưu. Một tháng đào tạo trực tuyến tốn ít hơn hai giờ đào tạo 1 kèm 1 với huấn luyện viên cá nhân trung bình.',
                'image' => 'http://127.0.0.1:8000/image/pt.jpg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'title' => 'Tiết Kiệm Tiền',
                'description' => 'Nhiều hơn cho ít hơn',
                'content' => 'Đào tạo 1 kèm 1 với huấn luyện viên cá nhân trong phòng tập thể hình hoặc phòng thu rất tốn kém, đặc biệt nếu bạn muốn tập luyện nhiều hơn một lần một tuần để có kết quả tối ưu. Một tháng đào tạo trực tuyến tốn ít hơn hai giờ đào tạo 1 kèm 1 với huấn luyện viên cá nhân trung bình.',
                'image' => 'http://127.0.0.1:8000/image/pt.jpg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'title' => 'Tiết Kiệm Tiền',
                'description' => 'Nhiều hơn cho ít hơn',
                'content' => 'Đào tạo 1 kèm 1 với huấn luyện viên cá nhân trong phòng tập thể hình hoặc phòng thu rất tốn kém, đặc biệt nếu bạn muốn tập luyện nhiều hơn một lần một tuần để có kết quả tối ưu. Một tháng đào tạo trực tuyến tốn ít hơn hai giờ đào tạo 1 kèm 1 với huấn luyện viên cá nhân trung bình.',
                'image' => 'http://127.0.0.1:8000/image/pt.jpg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'title' => 'Tiết Kiệm Tiền',
                'description' => 'Nhiều hơn cho ít hơn',
                'content' => 'Đào tạo 1 kèm 1 với huấn luyện viên cá nhân trong phòng tập thể hình hoặc phòng thu rất tốn kém, đặc biệt nếu bạn muốn tập luyện nhiều hơn một lần một tuần để có kết quả tối ưu. Một tháng đào tạo trực tuyến tốn ít hơn hai giờ đào tạo 1 kèm 1 với huấn luyện viên cá nhân trung bình.',
                'image' => 'http://127.0.0.1:8000/image/pt.jpg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'title' => 'Tiết Kiệm Tiền',
                'description' => 'Nhiều hơn cho ít hơn',
                'content' => 'Đào tạo 1 kèm 1 với huấn luyện viên cá nhân trong phòng tập thể hình hoặc phòng thu rất tốn kém, đặc biệt nếu bạn muốn tập luyện nhiều hơn một lần một tuần để có kết quả tối ưu. Một tháng đào tạo trực tuyến tốn ít hơn hai giờ đào tạo 1 kèm 1 với huấn luyện viên cá nhân trung bình.',
                'image' => 'http://127.0.0.1:8000/image/pt.jpg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
