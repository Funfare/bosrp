@props(['member'])

<div class="member-card">
   <div class="card m-1">
        <div class="card-header p-1 text-center">
            {{ $member->highestQualification(App\Models\QualificationType::TACTICAL)->short_name }}
        </div>
        <div class="card-body p-2 text-center">
            {{ $member->name }}
        </div>
        <div class="card-footer p-1">
            <div class="d-flex justify-content-between">
                <div>
                {{ $member->highestQualification(App\Models\QualificationType::MEDICAL)->short_name }}
                </div>
                <div>
                {{ $member->orderedQualifications(App\Models\QualificationType::LICENSE)->implode('short_name', ', ') }}
                </div>
            </div>
        </div>
   </div>
</div>
