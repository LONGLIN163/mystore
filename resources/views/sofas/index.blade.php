@extends('layout')

@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">
  <div class="text-2xl">
    <a 
      style="text-decoration: underline; color:crimson"
      href="{{route('sofas.create')}}"
    >create a sofa</a></div>
  <div>--------------------------------------</div>
  @if (count($sofas))
    @foreach ($sofas as $sofa)
      <div> 
        <h1 class="text-2xl text-blue-600">
          <a 
             href="{{route('sofas.show',[$sofa['id']])}}"
             style="text-decoration: underline;"
          > {{$sofa['name']}}</a>
        </h1>
        <ul>
          <li>Made By: {{$sofa['brand']}}</li>
          <li>Made On: {{$sofa['year_made']}}</li>
          <li>
            <a 
              href="{{route('sofas.edit', [$sofa['id']])}}" 
              style="text-decoration: underline;"
            >edit</a></li>
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