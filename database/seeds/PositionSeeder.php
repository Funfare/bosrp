<?php

use App\Models\Organization;
use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::chunk(100, function($organizations) {
            foreach($organizations as $organization) {
                factory(Position::class, rand(1,8))->create([
                    'organization_id' => $organization->id
                ]);
            }
        });
    }
}
