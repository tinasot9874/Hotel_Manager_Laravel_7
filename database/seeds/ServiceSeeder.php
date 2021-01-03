<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Phòng tập thể hình',
            'hotline' => 842838233333,
            'type' => 'Fitness',
            'status' => '1',
            'description' => '',
            'excerpt' => 'Tập luyện toàn cơ thể với thiết bị thể dục hiện đại trong Fitness Club ấm cúng, trang nhã và rộng rãi mới được tân trang lại. Ngoài ra còn có tắm hơi thư giãn. Có Bể bơi dành cho Trẻ em.',
            'start_time' => date('06:00'),
            'end_time' => date('22:00'),
        ]);
        DB::table('services')->insert([
            'name' => 'Phòng Spa',
            'hotline' => 842838234444,
            'type' => 'Spa',
            'status' => '0',
            'description' => '',
            'excerpt' => 'Tọa lạc tại tầng trệt của khách sạn Lotte Legend Saigon, Spa là sự kết hợp tinh tế giữa kiến trúc hiện đại của phương Tây và nét hài hòa, quyến rũ đậm chất của Phương Đông',
            'start_time' => date('10:00'),
            'end_time' => date('22:00'),
        ]);
        DB::table('services')->insert([
            'name' => 'Bể bơi',
            'hotline' => 842838235555,
            'type' => 'Fitness',
            'status' => '1',
            'description' => '',
            'excerpt' => 'Hồ bơi và Trung tâm thể thao phục vụ cho cả khách không lưu trú tại khách sạn.',
            'start_time' => date('06:00'),
            'end_time' => date('21:00'),
        ]);
        DB::table('services')->insert([
            'name' => 'Dịch vụ Đưa đón',
            'hotline' => 842838236666,
            'type' => 'Service',
            'status' => '0',
            'description' => '',
            'excerpt' => 'Lái xe của khách sạn có nhiều kinh nghiệm và chuyên cung cấp dịch vụ đi lại tốt nhất hiện có tại thành phố Hồ Chí Minh.Dù là ra sân bay, hoặc tham quan thành phố cả ngày; họ sẽ giúp quý vị đến địa điểm nhanh và đúng giờ nhất! Quý Vị sẽ được những bàn tay chuyên nghiệp chăm sóc.',
            'start_time' => date('13:00'),
            'end_time' => date('18:00'),
        ]);
        DB::table('services')->insert([
            'name' => 'Tiệc cưới',
            'hotline' => 842838237777,
            'type' => 'Service',
            'status' => '1',
            'description' => '',
            'excerpt' => 'Tổ chức một đám cưới trong mơ tại một trong những phòng khiêu vũ của chúng tôi hoặc bên bể bơi ngoài trời tuyệt đẹp. Gói dịch vụ đám cưới của chúng tôi được thiết kế phù hợp với nhiều thị hiếu và phong cách.',
            'start_time' => date('09:00'),
            'end_time' => date('18:00'),
        ]);
        DB::table('services')->insert([
            'name' => 'Hội nghị',
            'hotline' => 842838238888,
            'type' => 'Service',
            'status' => '1',
            'description' => '',
            'excerpt' => 'Phòng có diện tích 405 m² là phòng đơn không có cột, với không gian rộng lớn, phòng này cũng có thể được chia thành 3 khu vực riêng biệt, mỗi khu đều có các tiện nghi đáp ứng những nhu cầu đặc biệt dành cho hội nghị và tiệc',
            'start_time' => date('09:00'),
            'end_time' => date('18:00'),
        ]);
    }
}
