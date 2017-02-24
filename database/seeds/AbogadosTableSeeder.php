<?php

use Illuminate\Database\Seeder;

class AbogadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Abogado::class, 30)->create();
    }
}
