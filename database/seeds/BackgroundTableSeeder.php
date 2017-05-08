<?php

use Illuminate\Database\Seeder;
use App\Background as Background;

class BackgroundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Background::truncate();

        Background::create( [
            'type' => 'news',
            'ico' => 'asd'
        ] );

        Background::create( [
            'type' => 'partners',
            'ico' => 'asd'
        ] );

        Background::create( [
            'type' => 'expeditions',
            'ico' => 'asd'
        ] );

        Background::create( [
            'type' => 'support',
            'ico' => 'asd'
        ] );

        Background::create( [
            'type' => 'we',
            'ico' => 'asd'
        ] );

        Background::create( [
            'type' => 'contact',
            'ico' => 'asd'
        ] );
    }
}
