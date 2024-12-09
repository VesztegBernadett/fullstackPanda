<?php

namespace Database\Seeders;

use App\Models\Panda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pandas")->insert([
            ['id' => '1','name' => 'Bai Yun','sex' => 'F','birth' => '1991-09-07','created_at' => NULL,'updated_at' => NULL],
            ['id' => '2','name' => 'Bao Bao','sex' => 'F','birth' => '2013-08-23','created_at' => NULL,'updated_at' => NULL],
            ['id' => '3','name' => 'Bei Bei','sex' => 'M','birth' => '2015-08-22','created_at' => NULL,'updated_at' => NULL],
            ['id' => '4','name' => 'Da Mao','sex' => 'M','birth' => '2008-09-01','created_at' => NULL,'updated_at' => NULL],
            ['id' => '5','name' => 'Er Shun','sex' => 'F','birth' => '2007-08-10','created_at' => NULL,'updated_at' => NULL],
            ['id' => '6','name' => 'Gu Gu','sex' => 'M','birth' => '1999-09-25','created_at' => NULL,'updated_at' => NULL],
            ['id' => '7','name' => 'Hua Mei','sex' => 'F','birth' => '1999-08-21','created_at' => NULL,'updated_at' => NULL],
            ['id' => '8','name' => 'Jia Panpan','sex' => 'M','birth' => '2015-10-13','created_at' => NULL,'updated_at' => NULL],
            ['id' => '9','name' => 'Jia Yueyue','sex' => 'F','birth' => '2015-10-13','created_at' => NULL,'updated_at' => NULL],
            ['id' => '10','name' => 'Lin Bing','sex' => 'F','birth' => '2009-05-27','created_at' => NULL,'updated_at' => NULL],
            ['id' => '11','name' => 'Lin Hui','sex' => 'F','birth' => '2001-09-28','created_at' => NULL,'updated_at' => NULL],
            ['id' => '12','name' => 'Lun Lun','sex' => 'F','birth' => '1997-08-25','created_at' => NULL,'updated_at' => NULL],
            ['id' => '13','name' => 'Mei Lan','sex' => 'M','birth' => '2006-09-06','created_at' => NULL,'updated_at' => NULL],
            ['id' => '14','name' => 'Mei Sheng','sex' => 'M','birth' => '2003-08-03','created_at' => NULL,'updated_at' => NULL],
            ['id' => '15','name' => 'Mei Xiang','sex' => 'F','birth' => '1998-07-22','created_at' => NULL,'updated_at' => NULL],
            ['id' => '16','name' => 'Po','sex' => 'F','birth' => '2010-11-03','created_at' => NULL,'updated_at' => NULL],
            ['id' => '17','name' => 'Su Lin','sex' => 'F','birth' => '2005-08-02','created_at' => NULL,'updated_at' => NULL],
            ['id' => '18','name' => 'Tai Shan','sex' => 'M','birth' => '2005-07-09','created_at' => NULL,'updated_at' => NULL],
            ['id' => '19','name' => 'Tian Tian','sex' => 'M','birth' => '1997-08-27','created_at' => NULL,'updated_at' => NULL],
            ['id' => '20','name' => 'Tian Tian','sex' => 'F','birth' => '2003-08-24','created_at' => NULL,'updated_at' => NULL],
            ['id' => '21','name' => 'Wang Wang','sex' => 'M','birth' => '2005-08-31','created_at' => NULL,'updated_at' => NULL],
            ['id' => '22','name' => 'Xi Lan','sex' => 'M','birth' => '2008-08-30','created_at' => NULL,'updated_at' => NULL],
            ['id' => '23','name' => 'Xiao Liwu','sex' => 'M','birth' => '2012-07-29','created_at' => NULL,'updated_at' => NULL],
            ['id' => '24','name' => 'Xian Xian','sex' => 'F','birth' => '2017-06-12','created_at' => NULL,'updated_at' => NULL],
            ['id' => '25','name' => 'Xin Xin','sex' => 'F','birth' => '1990-07-01','created_at' => NULL,'updated_at' => NULL],
            ['id' => '26','name' => 'Yang Yang','sex' => 'M','birth' => '1997-09-09','created_at' => NULL,'updated_at' => NULL],
            ['id' => '27','name' => 'Yang Guang','sex' => 'M','birth' => '2003-08-14','created_at' => NULL,'updated_at' => NULL],
            ['id' => '28','name' => 'Yuan Zai','sex' => 'F','birth' => '2013-07-06','created_at' => NULL,'updated_at' => NULL],
            ['id' => '29','name' => 'Yun Zi','sex' => 'M','birth' => '2009-08-05','created_at' => NULL,'updated_at' => NULL]
        ]);
    }
}
