<?php

use Illuminate\Database\Seeder;

class SeederTbNews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i<10  ;$i++){
            DB::table('tb_news')->insert([
                'news_title' => str_random(200),
                'news_short_desc' => str_random(200) ,
                'news_contents' => str_random(200),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
