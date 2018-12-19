<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return About::create([
            'missao' => ' ',
            'visao' => ' ',
            'valores' => ' ',
            'body' => ' '
        ]);
    }
}
