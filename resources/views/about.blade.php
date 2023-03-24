@extends('layout')

@section('title','about')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1>About Us</h1>
    </div>

    <div class="mt-16">
        <p>This is the about page!</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    alert('about')
</script>
@endsection