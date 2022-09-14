@extends('layouts.plantilla')

@section('title', 'Salama & Venkatesh')

@section('content')
<div class="p-2 sm:px-20 bg-gray border-b border-gray-200">
    <div class="mt-2 text-2xl">
        Here is your last registry!
    </div>
    <div class="mt-6 text-gray-500">
        
    </div>
</div>
<div class="bg-white  grid grid-cols-1 md:grid-cols-8">
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Location
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Ubication
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Date
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Sand flow rate(lb/d)
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Velocity(ft/s)
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Diameter(Inch) 
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Geometry
        <br>
    </div>
    <div class=" text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Erosion rate(mpy)
        <br>
    </div>
</div>
@foreach ($table as $tabla)
    <div class="bg-gray-200  grid grid-cols-1 md:grid-cols-8">
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->a}}
        </div>
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->b}}
        </div>
        <div class="text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->c}}
        </div>
        <div class="  text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->w}}
        </div>
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->v}}
        </div>
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            {{$tabla->d}}
        </div>
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            &nbsp;{{$tabla->sm}}
        </div>
        <div class=" text-lg text-gray-600 leading-none font-semibold">
            &nbsp;{{$tabla->er}}
        </div>
    </div>
@endforeach
{{$table->links()}}
<a href="/salamaandvenkatesh"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 5H7V7H17V5Z" fill="currentColor" /><path d="M7 9H9V11H7V9Z" fill="currentColor" /><path d="M9 13H7V15H9V13Z" fill="currentColor" /><path d="M7 17H9V19H7V17Z" fill="currentColor" /><path d="M13 9H11V11H13V9Z" fill="currentColor" /><path d="M11 13H13V15H11V13Z" fill="currentColor" /><path d="M13 17H11V19H13V17Z" fill="currentColor" /><path d="M15 9H17V11H15V9Z" fill="currentColor" /><path d="M17 13H15V19H17V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C3 1.89543 3.89543 1 5 1H19C20.1046 1 21 1.89543 21 3V21C21 22.1046 20.1046 23 19 23H5C3.89543 23 3 22.1046 3 21V3ZM5 3H19V21H5V3Z" fill="currentColor"/>
</svg>calculate</a>
@endsection