@extends('layout')

@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <h1>
        {{$sofa['name']}}:
    </h1>
    <ul>
        <li>Made By: {{$sofa['brand']}}</li>
        <li>Made On: {{$sofa['year_made']}}</li>
    </ul>
</div>

    
@endsection 