<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'apartment';
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table($tableName)->truncate();
        DB::table($tableName)->insert([
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 1,
            ],
            [
            'name' => 'QuangHuy1',
            'address' => 'Số 8 Tôn Thất Thuyết',
            'price' => (10000000/m2),
            'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
            'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
            'status' => 2,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 3,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 4,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 5,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 5,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 6,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 7,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 8,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 9,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 10,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 11,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 12,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 13,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 14,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 15,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 16,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 17,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 18,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 19,
            ],
            [
                'name' => 'QuangHuy1',
                'address' => 'Số 8 Tôn Thất Thuyết',
                'price' => (10000000/m2),
                'generalInformation' & 'detailInformation' => 'đẹp vs chất lượng',
                'avatar' => 'https://file4.batdongsan.com.vn/crop/640x430/2021/07/08/20210708114949-b79a_wm.jpg',
                'status' => 20,
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
}
