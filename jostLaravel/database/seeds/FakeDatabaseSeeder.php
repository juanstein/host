<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 250)->create();
        factory(App\Owner::class, 20)->create();
        factory(App\Space::class, 200)->create();
        factory(App\Location::class, 20)->create();
        factory(App\Transaction::class, 2000)->create();
        //factory(App\Spec::class, 20)->create();

    }
}
