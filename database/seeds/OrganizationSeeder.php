<?php

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funfare = User::find(1);
        $organizations = factory(Organization::class, 5)->create();

        $organizations->each(function(Organization $organization) use ($funfare) {
            $users = User::inRandomOrder()->take(rand(5,10));
            $organization->users()->sync([$funfare->id, ...$users->pluck('id')]);
        });
    }
}
