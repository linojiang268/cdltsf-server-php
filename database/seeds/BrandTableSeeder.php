<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['千屿', 'qianyu', '/assets/images/brand-qianyu.jpg'],
            ['川府雪', 'chuanfuxue', '/assets/images/brand-chuanfuxue.jpg'],
            ['麦夏', 'maixia', '/assets/images/brand-maixia.jpg'],
        ];
        foreach ($brands as $brand) {
            list($name, $type, $poster) = $brand;
            DB::table('brands')->insert([
                'id'         => Uuid::uuid4()->toString(),
                'name'       => $name,
                'type'       => $type,
                'poster'     => $poster,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            sleep(1);
        }
    }
}
