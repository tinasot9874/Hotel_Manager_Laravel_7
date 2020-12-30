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
            'name' => 'Standard - STD',
            'slug' => 'standart-std',
            'common_price' => 2000000,
            'description' => 'Phòng Standard, được thiết kế theo phong cách đương đại mới trang nhã, có cửa sổ kính bố trí suốt từ sàn lên trần đem đến quang cảnh thành phố tuyệt đẹp hay quang cảnh sông thơ mộng.
Mỗi phòng đều có khu làm việc và khu thư giãn riêng biệt với ti vi truyền hình cáp/vệ tinh màn hình LCD, và một giường cỡ lớn hoặc hai giường đôi được trang bị gối sợi cực mịn và chăn cao cấp.Phòng tắm bằng đá cẩm thạch rộng rãi có một bồn tắm, bàn trang điểm lớn và bồn vệ sinh bidet điện có điện thoại. Du khách có thể lựa chọn tầng hút thuốc hoặc không hút thuốc.'
        ]);
        DB::table('room_types')->insert([
            'name' => 'Superior - SUP',
            'slug' => 'superior-sup',
            'common_price' => 3500000,
            'description' => 'Phòng Superior, được thiết kế theo phong cách đương đại mới trang nhã, có cửa sổ kính bố trí suốt từ sàn lên trần đem đến quang cảnh thành phố tuyệt đẹp hay quang cảnh sông thơ mộng.
Mỗi phòng đều có khu làm việc và khu thư giãn riêng biệt với ti vi truyền hình cáp/vệ tinh màn hình LCD, và một giường cỡ lớn hoặc hai giường đôi được trang bị gối sợi cực mịn và chăn cao cấp.Phòng tắm bằng đá cẩm thạch rộng rãi có một bồn tắm, bàn trang điểm lớn và bồn vệ sinh bidet điện có điện thoại. Du khách có thể lựa chọn tầng hút thuốc hoặc không hút thuốc.'
        ]);
        DB::table('room_types')->insert([
            'name' => 'Delux - DLX',
            'slug' => 'delux-dlx',
            'common_price' => 4500000,
            'description' => 'Phòng Deluxe, được thiết kế theo phong cách đương đại mới trang nhã, có cửa sổ kính bố trí suốt từ sàn lên trần đem đến quang cảnh thành phố tuyệt đẹp hay quang cảnh sông thơ mộng.
Mỗi phòng đều có khu làm việc và khu thư giãn riêng biệt với ti vi truyền hình cáp/vệ tinh màn hình LCD, và một giường cỡ lớn hoặc hai giường đôi được trang bị gối sợi cực mịn và chăn cao cấp.Phòng tắm bằng đá cẩm thạch rộng rãi có một bồn tắm, bàn trang điểm lớn và bồn vệ sinh bidet điện có điện thoại. Du khách có thể lựa chọn tầng hút thuốc hoặc không hút thuốc.']);
    }
}
