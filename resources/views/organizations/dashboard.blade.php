@extends('layouts.organization')

@section('content')
<div class="flex-container m-3">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Mitglieder
            <div class="d-flex flex-column">
                <x-member :member="$organization->members->first()"></x-member>
                <x-member :member="$organization->members->first()"></x-member>
                <x-member :member="$organization->members->first()"></x-member>
            </div>
        </div>
        <div class="col-md-2">
            Anwesend
        </div>
        <div class="col-md-8">
            Einteilung
        </div>
    </div>
</div>


@endsection
