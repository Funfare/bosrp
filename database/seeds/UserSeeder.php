<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Nicholas Sterk',
            'email' => 'info@funfare.de',
        ]);

        factory(User::class, 19)->create();
    }
}
