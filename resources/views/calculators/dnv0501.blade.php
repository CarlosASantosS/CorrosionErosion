@extends('layouts.plantilla')

@section('title', 'DNV RP O501')

@section('content')
   
<form action="{{Route("calculators.storednv0501")}}" method="POST">

    @csrf
    <div class="p-2 sm:px-20 bg-gray border-b border-gray-200 shadow overflow-hidden sm:rounded-md">
        <div class="mt-2 text-2xl">
            Welcome to your DNV RP O501 application!
        </div>
        <div class="mt-6 text-gray-500">
            Please input your information for work.
        </div>
    </div>
    <div class="bg-white  grid grid-cols-1 md:grid-cols-4 ">
        <div class="p-6 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Location:
                <input type="string" name="a" style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Ubication:
                <input type="string" name="b" style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Date:
                <br>
                <input type="date" name="c" style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Presion(psi):
                <input type="number" name="g" style="border-width:1px">
            </label>
        </div>
    </div>
    <div class="bg-white grid grid-cols-1 md:grid-cols-4">
        <div class="p-6 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Temperature(°F):
                <input type="number" name="h" style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Oil flow(BOPD):
                <input type="number"  step="0.001" name="i"  style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Gas flow(MMSCFD):
                <input type="number"  step="0.001" name="j"  style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Water flow(BWPD):
                <input type="number"  step="0.1" name="k"  style="border-width:1px">
            </label>
        </div>
    </div>
    <div class="bg-white grid grid-cols-1 md:grid-cols-4">
        <div class="p-6 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;°API Oil:
                <input type="number"  step="0.1" name="l"  style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;External diameter(In):
                <input type="number"  step="0.001" name="m"  style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Thickness(In):
                <input type="number"  step="0.001" name="n"  style="border-width:1px">
            </label>
        </div>
        <div class="p-6 border-t border-gray-200 md:border-l ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <label>
                &nbsp;Gas Molecular weight(g/mol):
                <input type="number"  step="0.001" name="o"  style="border-width:1px">
            </label>
        </div>
    </div>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 5H7V7H17V5Z" fill="currentColor" /><path d="M7 9H9V11H7V9Z" fill="currentColor" /><path d="M9 13H7V15H9V13Z" fill="currentColor" /><path d="M7 17H9V19H7V17Z" fill="currentColor" /><path d="M13 9H11V11H13V9Z" fill="currentColor" /><path d="M11 13H13V15H11V13Z" fill="currentColor" /><path d="M13 17H11V19H13V17Z" fill="currentColor" /><path d="M15 9H17V11H15V9Z" fill="currentColor" /><path d="M17 13H15V19H17V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C3 1.89543 3.89543 1 5 1H19C20.1046 1 21 1.89543 21 3V21C21 22.1046 20.1046 23 19 23H5C3.89543 23 3 22.1046 3 21V3ZM5 3H19V21H5V3Z" fill="currentColor"/>
                              </svg>calculate</button>
    </form>
@endsection
