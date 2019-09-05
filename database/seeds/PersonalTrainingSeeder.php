<?php

use Illuminate\Database\Seeder;

class PersonalTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('personal_trainings')->truncate();
        \Illuminate\Support\Facades\DB::table('personal_trainings')->insert([
            [
                'id' => 1,
                'name' => 'Phạm Văn Dung',
                'service' => 'Personal Training',
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
                'service' => 'Personal Training, KickBoxing',
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
                'service' => 'Personal Training',
                'description' => 'Kinh niệm 2 năm giảng dạy tại trung tâm và tự do. Giúp rất nhiều khách hàng đat đc mục tiêu. Tận tình và chuyên nghiệp',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'https://2.bp.blogspot.com/-Z7zY0AKDqzQ/XCcIDB_yQMI/AAAAAAAACWA/f_Jo6REK6roxVqc6u3buMMXS57sefnewACLcBGAs/s1600/IMG_9899.jpg',
                'rating' => '50%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Roxy Ted',
                'service' => 'Personal Training',
                'description' => 'Theo nữ huấn luyện viên thể hình online, sự quyết tâm là chìa khóa giúp vượt qua chán nản, có động lực tiếp tục nghiên cứu, tìm hiểu về tập luyện và chế độ dinh dưỡng phù hợp với thể trạng.',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 07/2011 - 09/2018 )',
                'image' => 'http://timesoft.vn/Images/huan-luyen-vien-the-hinh-online_11eca093002.jpg',
                'rating' => '100%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'name' => 'Tula Nguyễn',
                'service' => 'Personal Training',
                'description' => 'Huấn luyện viên thể hình Online chia sẻ đã từng trải qua nhiều thất bại, nhưng sự thất bại lớn nhất đó là để bản thân quá bị lệ thuộc và ám ảnh về vấn đề cân nặng thay vì sức khoẻ", Tula Nguyễn chia sẻ.',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình quốc tế, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2016 - 09/2018 )',
                'image' => 'https://www.witseducation.com/fit/wp-content/uploads/2014/12/lifestyle-wellness-coaching-trainer.jpg',
                'rating' => '70%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => 'Trang Lê',
                'service' => 'Personal Training',
                'description' => 'KTheo huấn luyện viên thể hình online 23 tuổi, để có cơ bụng chắc khỏe, cô thường chọn các bài pilates kết hợp cùng hít thở. Đối với vòng 3, cô tập các bài lunges, squat, deadlift, tập gym với mức tạ nặng tăng dần theo thời gian để kích thích phần cơ mông phát triển.',
                'qualification' => 'Chứng chỉ huấn luyện viên cấp quốc gia',
                'experience' => 'Personal trainer ( 03/2014- 09/2018 )',
                'image' => 'http://timesoft.vn/Images/huan-luyen-vien-the-hinh-online-6_a7419095032.jpg',
                'rating' => '80%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'name' => 'Trần Bích Hạnh',
                'service' => 'Personal Training',
                'description' => 'Với những nỗ lực của bản thân và kinh nghiệm giảm cân của mình, nếu bạn cần thuê huấn luyện viên online giảm cân thì Trần Bích Hạnh là 1 cái tên đáng để lưu lại. Các giáo án, lịch tập sẽ được thiết kế riêng cho từng người để đảm bảo là bạn có thể đạt được hiệu quả cao nhất khi theo học. Trần Bích Hạnh có nhiều gói tập khác nhau với giá cả từ 16 buổi với 2 triệu cho đến 5.5 triệu cho 48 buổi tập luyện.',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'https://cdn.pose.com.vn/legacy/images/baiviet/201711/hanh.jpg',
                'rating' => '100%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'name' => 'Hana Giang Anh',
                'service' => 'Personal Training',
                'description' => 'Qua kinh nghiệm của chính mình và với tư cách là một huấn luyện viên thể hình lâu năm, Hana Giang Anh khuyến khích mọi phụ nữ (đặc biệt là các bà mẹ) nên tập luyên thể thao để có một sức khỏe tốt hơn để luôn sẵn sàng đón nhận những gì sẽ xảy ra trong tương lai: những kỉ niệm, những thử thách,…',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'https://media.doisongvietnam.vn/u/rootimage/editor/2017/04/27/00/35/w825/han1493206531_6925.jpg',
                'rating' => '100%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'name' => 'Trà Li',
                'service' => 'Personal Training',
                'description' => 'Kinh niệm 2 năm giảng dạy tại trung tâm và tự do. Giúp rất nhiều khách hàng đat đc mục tiêu. Tận tình và chuyên nghiệp',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2014 - 09/2018 )',
                'image' => 'https://cdn.pose.com.vn/legacy/images/baiviet/201711/trali2.jpg',
                'rating' => '100%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'name' => 'Ryan Long Fitness',
                'service' => 'Personal Training',
                'description' => 'Sức khỏe là điều quan trọng nhất trong cuộc sống, tập GYM làm sao để giữ vững sức khỏe và thay đổi vóc dáng hiệu quả là điều mọi người mong muốn. Tuy nhiên không phải ai cũng có đủ kiến thức chuyên môn cho việc này, là một HLV chuyên nghiệp, RYAN LONG mong muốn mang lại cho tất cả mọi người cách thức tập luyện, chia sẻ kinh nghiệm và vốn hiểu biết của mình để giúp mọi người khỏe mạnh hơn, đẹp hơn và tận hưởng cuộc sống tốt đẹp hơn. SỨC KHỎE CỦA BẠN - TƯƠNG LAI CỦA BẠN.',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'http://img.youtube.com/vi/IPNoSTw6YTg/hqdefault.jpg',
                'rating' => '90%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'name' => ' An Nguyen Fitness',
                'service' => 'Personal Training',
                'description' => 'Đừng đi theo 1 lỗi mòn mãi, đừng sợ sự khác biệt, hãy thử trải nghiệm. Đặc biệt là hãy luôn in từong vào quyết định bản thân bạn. Thất bại cũng không sao hết, chúng ta vấp ngã thì sẽ đứng lên ở chỗ đấy và đi tiếp. Chúng ta dám chấp nhận những điều chúng ta chưa từng làm thì mới có thể nhận được những điều chúng ta chưa từng có.',
                'qualification' => 'Chứng chỉ huấn luyện viên - Liên đoàn thể hình, Certificate of Nutrifort - American',
                'experience' => 'Personal trainer ( 12/2015 - 09/2018 )',
                'image' => 'http://timesoft.vn/Images/huan-luyen-vien-the-hinh-online-21_8da8c104735.jpg',
                'rating' => '86%',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
