@extends('layout')

@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">
  @if (count($sofas))
    @foreach ($sofas as $sofa)
      <div> 
        <h1 class="text-2xl text-blue-600">
          <a href="{{
              route('sofas.show',[$sofa['id']])
            }}"> {{$sofa['name']}}</a>
        </h1>
        <ul>
          <li>Made by: {{$sofa['brand']}}</li>
        </ul>
      </div>
    @endforeach
  @else
    <div>No sofas found.</div>
  @endif

    <div>
        Usre input: {{$userInput}}
    </div>
</div>

    
@endsection