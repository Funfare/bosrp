<?php

use App\Models\Member;
use App\Models\Organization;
use App\Models\QualificationType;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::with('qualifications')->chunk(100, function($organizations) {
            foreach($organizations as $organization) {
                $members = factory(Member::class, rand(10, 20))->create([
                    'organization_id' => $organization->id
                ]);

                $medical = $organization->qualifications->where('qualification_type_id', QualificationType::MEDICAL);
                $tactical = $organization->qualifications->where('qualification_type_id', QualificationType::TACTICAL);
                $license = $organization->qualifications->where('qualification_type_id', QualificationType::LICENSE);


                $members->each(function(Member $member) use ($medical, $tactical, $license) {
                    $member->qualifications()->attach($medical->random(rand(1,3)));
                    $member->qualifications()->attach($tactical->random(rand(1,3)));
                    $member->qualifications()->attach($license->random(rand(1,5)));
                });
            }
        });
    }
}
