@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="{{ route('organizations.dashboard', [$currentOrganization]) }}">Dashboard</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('organizations.members.index', [$currentOrganization]) }}">Mitglieder</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('organizations.positions.index', [$currentOrganization]) }}">Positionen</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('organizations.qualifications.index', [$currentOrganization]) }}">Qualifikationen</a>
</li>
@endsection



