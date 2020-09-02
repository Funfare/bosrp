@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   @foreach($organizations as $organization)
                        <a href="{{ route('organizations.show', [$organization]) }}">
                            {{ $organization->name }}
                        </a> <br />
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
