<?php

use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            'name' => 'Standard',
            'slug' => 'STD',
            'description' => ''
        ]);
        DB::table('room_types')->insert([
            'name' => 'Superior',
            'slug' => 'SUP',
            'description' => ''
        ]);
        DB::table('room_types')->insert([
            'name' => 'Delux',
            'slug' => 'DLX',
            'description' => 'Tại tất cả các phòng Deluxe nằm từ tầng 40 đến tầng 53 của toà nhà Lotte, khách hàng đều có thể tận hưởng tầm nhìn tuyệt đẹp bao quát thành phố Hà Nội. Các tiện nghi cao cấp bao gồm hệ thống điều hoà độc đáo với 4 ống sẽ bảo đảm cho khách hàng những giờ phút nghỉ ngơi thoải mái tại khách sạn.'
        ]);
    }
}
