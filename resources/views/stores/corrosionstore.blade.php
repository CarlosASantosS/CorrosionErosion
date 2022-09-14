@extends('layouts.plantilla')

@section('title', 'Corrosion')


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
        &nbsp;°API:
        <input type="string" style="border-width:1px" value="{{$c4}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;%BS&W:
        <input type="string" style="border-width:1px" value="{{$c5}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Densidad del agua (kg/m3):
        <input type="string" style="border-width:1px" value="{{$c7}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Longitud del pozo (ft):
        <input type="string" style="border-width:1px" value="{{$c9}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Presion de cabeza (psi):
        <input type="string" style="border-width:1px" value="{{$c11}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Contenido de CO2 [%v/v]:
        <input type="string" style="border-width:1px" value="{{$c17}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Presion de cabeza (psi):
        <input type="string" style="border-width:1px" value="{{$c18}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Temperatura de Fondo (°C):
        <input type="string" style="border-width:1px" value="{{$c26}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Temperatura de Fondo (°C):
        <input type="string" style="border-width:1px" value="{{$f4}}" disabled>
    </div>
    <div class=" -ml-4 text-lg text-gray-600 leading-none font-semibold">
        &nbsp;Velocidad de Flujo (m/s):
        <input type="string" style="border-width:1px" value="{{$f20}}" disabled>
    </div>
    </div>
    <div class="output border-b border-l border-gray-200 bg-white  grid grid-cols-1">
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Gravedad especifica:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c6}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Densidad del fluido (kg/m3):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c8}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Longitud del pozo (m):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c10}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Presion de Fondo (Kpa):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c12}}" disabled>
            </div> 
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Presion de Fondo (psi):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c13}}" disabled>
            </div> 
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                &nbsp;Fraccion molar CO2 cabeza:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c19}}" disabled>
            </div> 
        </div>
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Cabeza (psi):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c20}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion de Fondo (psi):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c21}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Fondo (psi):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c22}}" disabled>
            </div>
            <div class="ml-4  text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Calculo de Constante de Henry CO2 (mol/atm.L):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c27}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Fondo (psi):<br>
                <input type="string" style="border-width:1px"  size="10" value="{{$c28}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Fondo (atm):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c29}}" disabled>
            </div>
        </div>  
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concentracion de CO2 disuelto (mol/L):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c30}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concetracion de CO2 (g/L):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c31}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concetracion de CO2 (mg/L) en Fondo:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c32}}" disabled>
            </div>
            <div class="ml-4  text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;pH real de Fondo:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$c33}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Calculo de Constante de Henry CO2 (mol/atm.L):<br>
                <input type="string" style="border-width:1px"  size="10" value="{{$f5}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Cabeza (psi):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f6}}" disabled>
            </div>
        </div>  
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Presion Parcial de CO2 Cabeza (atm):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f7}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concentracion de CO2 disuelto (mol/L):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f8}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concetracion de CO2 (g/L):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f9}}" disabled>
            </div>
            <div class="ml-4  text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Concetracion de CO2 (mg/L) en Cabeza:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f10}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;pH real de Fondo:<br>
                <input type="string" style="border-width:1px"  size="10" value="{{$f11}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Temperatura K:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f15}}" disabled>
            </div>
        </div> 
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Velocidad de  Corrosion (mpy):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f16}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Temperatura K:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f17}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Velocidad de  Corrosion (mpy):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f18}}" disabled>
            </div>
            <div class="ml-4  text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Punto de ruptura de la Emulsión:<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f19}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Foil:<br>
                <input type="string" style="border-width:1px"  size="10" value="{{$f21}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vel. Corr ajustada Cabeza (mpy):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f22}}" disabled>
            </div>
        </div>   
        <div class="bg-white  grid grid-cols-1 md:grid-cols-6">
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
                <br>
                &nbsp;Vel. Corr ajustada Fondo (mpy):<br>
                <input type="string" style="border-width:1px" size="10" value="{{$f23}}" disabled>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
            <a href="/corrosion"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 5H7V7H17V5Z" fill="currentColor" /><path d="M7 9H9V11H7V9Z" fill="currentColor" /><path d="M9 13H7V15H9V13Z" fill="currentColor" /><path d="M7 17H9V19H7V17Z" fill="currentColor" /><path d="M13 9H11V11H13V9Z" fill="currentColor" /><path d="M11 13H13V15H11V13Z" fill="currentColor" /><path d="M13 17H11V19H13V17Z" fill="currentColor" /><path d="M15 9H17V11H15V9Z" fill="currentColor" /><path d="M17 13H15V19H17V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C3 1.89543 3.89543 1 5 1H19C20.1046 1 21 1.89543 21 3V21C21 22.1046 20.1046 23 19 23H5C3.89543 23 3 22.1046 3 21V3ZM5 3H19V21H5V3Z" fill="currentColor"/>
    </svg>calculate</a>
            </div>
            <div class="ml-4 text-lg text-gray-600 leading-none font-semibold">
            <a href="/apirp14eregistry"><svg width="54" height="54" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 6H3V8H15V6Z" fill="currentColor" /><path d="M15 10H3V12H15V10Z" fill="currentColor" /><path d="M3 14H11V16H3V14Z" fill="currentColor" /><path d="M11.9905 15.025L13.4049 13.6106L15.526 15.7321L19.7687 11.4895L21.1829 12.9037L15.526 18.5606L11.9905 15.025Z" fill="currentColor"/>
    </svg>Last registry</a>
            </div>
        </div>   
    </div>
     
    
@endsection
