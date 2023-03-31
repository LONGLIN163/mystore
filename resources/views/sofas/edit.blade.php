@extends('layout')

@section('content')

<div>

  <form method="POST" 
        action="{{route('sofas.update',[ $sofa['id'] ])}}">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Sofa</h2>      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <div class="sm:col-span-6">

                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">name</label>
                <div class="mt-2">
                  <input 
                    type="text" 
                    name="name" 
                    value="{{$sofa->name}}" 
                    id="name" 
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                @error('name')
                  <div class="form-error">
                     {{$message}}
                  </div>
                @enderror

              </div>
      
              <div class="sm:col-span-6">

                <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">brand</label>
                <div class="mt-2">
                  <input 
                  type="text" 
                  name="brand" 
                  value="{{$sofa->brand}}" 
                  id="brand"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                @error('brand')
                <div class="form-error">
                   {{$message}}
                </div>
                @enderror

              </div>
      
              <div class="sm:col-span-6">
                <label for="year_made" class="block text-sm font-medium leading-6 text-gray-900">year</label>
                <div class="mt-2">
                  <input 
                  type="text" 
                  name="year_made" 
                  value="{{$sofa->year_made}}" 
                  id="year_made" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                @error('year_made')
                <div class="form-error">
                   {{$message}}
                </div>
                @enderror

              </div>
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
</div>

    
@endsection 