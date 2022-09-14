@extends('layouts.plantilla')

@section('title', 'DNV RP O501')

@section('content')
<style>
    div.input{

    float: left;
    width: 25%;
}
    div.output{

    float: right;
    width: 74%;   
    }
    </style>
    <div class="  bg-gray border-gray-200">
        <div class="mt-6 text-2xl">
        </div>
    </div>
    <div class="input p-2 sm:px-20 bg-gray border-b border-r border-gray-200 bg-white  grid grid-cols-1">
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Location:
        <input type="string" style="border-width:1px" value="{{$a}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Ubication:
        <input type="string" style="border-width:1px" value="{{$b}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Date:
        <input type="string" style="border-width:1px" value="{{$c}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Presion(psi):
        <input type="string" style="border-width:1px" value="{{$g}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Temperature(°F):
        <input type="string" style="border-width:1px" value="{{$h}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Oil flow(BOPD):
        <input type="string" style="border-width:1px" value="{{$i}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Gas flow(MMSCFD):
        <input type="string" style="border-width:1px" value="{{$j}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Water flow(BWPD):
        <input type="string" style="border-width:1px" value="{{$k}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;°API Oil:
        <input type="string" style="border-width:1px" value="{{$l}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;External diameter(In):
        <input type="string" style="border-width:1px" value="{{$m}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Thickness(In):
        <input type="string" style="border-width:1px" value="{{$n}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Gas Molecular weight:
        <input type="string" style="border-width:1px" value="{{$o}}" disabled>
    </div>
    </div>
    <div class="output border-b border-l border-gray-200 bg-white  grid grid-cols-1">
        <div class="bg-white  grid grid-cols-1 md:grid-cols-4">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion(PSIA):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$v}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Temperature(°R):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$w}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Mix density(lbs/fts^3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$aq}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;P.C(lbs/fts^3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$ar}}" disabled>
            </div>
        </div>
        <div class="bg-white  grid grid-cols-1 md:grid-cols-4">        
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;P.A(lbs/fts^3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$as}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;P.L(lbs/fts^3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$at}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vsc(Ft/s):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$au}}" disabled>
            </div>
            <div class="ml-4  text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vsa(Ft/s):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$av}}" disabled>
            </div>
        </div>      
        <div class="bg-white  grid grid-cols-1 md:grid-cols-4">      
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vsl(Ft/s):<br>
                <input type="string" style="border-width:1px"  size="10" value="{{$aw}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;P.G(Lb/Ft^3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$ax}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Erosional velocity(Ft/s):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$bb}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vf/Ve Relation (%):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$bd}}" disabled>
            </div>
        </div>    
    </div>
     <a href="/dnv0501"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 5H7V7H17V5Z" fill="currentColor" /><path d="M7 9H9V11H7V9Z" fill="currentColor" /><path d="M9 13H7V15H9V13Z" fill="currentColor" /><path d="M7 17H9V19H7V17Z" fill="currentColor" /><path d="M13 9H11V11H13V9Z" fill="currentColor" /><path d="M11 13H13V15H11V13Z" fill="currentColor" /><path d="M13 17H11V19H13V17Z" fill="currentColor" /><path d="M15 9H17V11H15V9Z" fill="currentColor" /><path d="M17 13H15V19H17V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C3 1.89543 3.89543 1 5 1H19C20.1046 1 21 1.89543 21 3V21C21 22.1046 20.1046 23 19 23H5C3.89543 23 3 22.1046 3 21V3ZM5 3H19V21H5V3Z" fill="currentColor"/>
    </svg>calculate</a>
    <a href="/dnv0501registry"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 6H3V8H15V6Z" fill="currentColor" /><path d="M15 10H3V12H15V10Z" fill="currentColor" /><path d="M3 14H11V16H3V14Z" fill="currentColor" /><path d="M11.9905 15.025L13.4049 13.6106L15.526 15.7321L19.7687 11.4895L21.1829 12.9037L15.526 18.5606L11.9905 15.025Z" fill="currentColor"/>
    </svg>Last registry</a>
@endsection
