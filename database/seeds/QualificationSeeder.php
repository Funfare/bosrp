<?php

use App\Models\Organization;
use App\Models\QualificationType;
use App\Models\User;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preset = [
            [
                'short_name' => 'EH',
                'name' => 'Erste Hilfe',
                'priority' => 7,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'SanH',
                'name' => 'Sanitätshelfer',
                'priority' => 49,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'RDH',
                'name' => 'Rettungsdiensthelfer',
                'priority' => 6,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'RS',
                'name' => 'Rettungssanitäter',
                'priority' => 5,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'RA',
                'name' => 'Rettungsassistent',
                'priority' => 4,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'NotSan',
                'name' => 'Notfallsanitäter',
                'priority' => 3,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'Arzt',
                'name' => 'Arzt',
                'priority' => 2,
                'qualification_type_id' => QualificationType::MEDICAL
            ],
            [
                'short_name' => 'NA',
                'name' => 'Notarzt',
                'priority' => 1,
                'qualification_type_id' => QualificationType::MEDICAL
            ],

            [
                'short_name' => 'H',
                'name' => 'Helfergrundausbildung',
                'priority' => 4,
                'qualification_type_id' => QualificationType::TACTICAL
            ],
            [
                'short_name' => 'TF',
                'name' => 'Truppführer',
                'priority' => 3,
                'qualification_type_id' => QualificationType::TACTICAL
            ],
            [
                'short_name' => 'GF',
                'name' => 'Gruppenführer',
                'priority' => 2,
                'qualification_type_id' => QualificationType::TACTICAL
            ],
            [
                'short_name' => 'ZF',
                'name' => 'Zugführer',
                'priority' => 1,
                'qualification_type_id' => QualificationType::TACTICAL
            ],

            [
                'short_name' => 'ELRD',
                'name' => 'Einsatzleiter Rettungsdienst',
                'priority' => 2,
                'qualification_type_id' => QualificationType::TACTICAL
            ],
            [
                'short_name' => 'OrgL',
                'name' => 'Organisatorischer Leiter',
                'priority' => 1,
                'qualification_type_id' => QualificationType::TACTICAL
            ],
            [
                'short_name' => 'LNA',
                'name' => 'Leitender Notarzt',
                'priority' => 1,
                'qualification_type_id' => QualificationType::TACTICAL
            ],

            [
                'short_name' => 'B',
                'name' => 'PKW bis 3,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'BE',
                'name' => 'PKW mit Anhänger bis 3,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'A1',
                'name' => 'Motorrad 125',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'A2',
                'name' => 'Motorrad was auch immer',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'A',
                'name' => 'Motorrad',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'H4,75',
                'name' => 'Helferführerschein bis 4,75t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'H7,5',
                'name' => 'Helferführerschein bis 7,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'C1',
                'name' => 'LKW bis 7,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'C1E',
                'name' => 'LKW mit Anhänger bis 7,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'C',
                'name' => 'LKW über 7,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'CE',
                'name' => 'LKW mit Anhänger über 7,5t',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'KTW',
                'name' => 'KTW Fahrerlaubnis',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
            [
                'short_name' => 'RTW',
                'name' => 'RTW Fahrerlaubnis',
                'priority' => 10,
                'qualification_type_id' => QualificationType::LICENSE
            ],
        ];


        Organization::chunk(100, function($organizations) use ($preset) {
            foreach($organizations as $organization) {
                $organization->qualifications()->createMany($preset);
            }
        });
    }
}
