<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::truncate();

        Content::create( [
            'type' => 'we',
            'title' => 'O nas'
        ] );
        Content::create( [
            'type' => 'support',
            'title' => 'Wesprzyj nas'
        ] );
        Content::create( [
            'type' => 'contact',
            'title' => 'Kontakt'
        ] );
        Content::create( [
            'type' => 'media',
            'title' => 'W mediach'
        ] );
    }
}
