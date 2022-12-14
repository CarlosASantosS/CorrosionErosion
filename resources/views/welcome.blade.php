<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corrosion & Erosion Projects</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="813.000000pt" height="180.000000pt" viewBox="0 0 813.000000 196.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,196.000000) scale(0.100000,-0.100000)"
fill="#094275" stroke="none">
<path d="M850 1939 c-35 -4 -104 -20 -153 -35 l-88 -27 33 -14 c142 -60 395
-76 561 -35 48 12 100 28 115 36 26 14 25 14 -55 39 -134 43 -270 55 -413 36z"/>
<path d="M526 1832 c-36 -19 -63 -38 -60 -43 3 -5 32 -23 65 -39 57 -30 60
-30 96 -14 21 8 80 25 131 38 l93 22 -66 13 c-36 6 -95 22 -130 35 l-63 23
-66 -35z"/>
<path d="M1276 1834 c-38 -13 -92 -27 -120 -31 l-51 -6 80 -18 c44 -9 104 -27
133 -38 l53 -21 59 30 c32 16 61 34 64 38 7 12 -105 72 -130 71 -11 0 -50 -11
-88 -25z"/>
<path d="M835 1775 c-44 -6 -113 -23 -153 -36 -68 -22 -71 -24 -49 -35 13 -7
61 -23 108 -35 70 -19 109 -23 239 -23 158 -1 216 9 329 51 l44 17 -69 23
c-81 28 -236 53 -314 52 -30 -1 -91 -7 -135 -14z"/>
<path d="M392 1748 c-23 -18 -42 -35 -42 -38 0 -3 20 -20 44 -37 l42 -33 68
36 68 37 -63 33 c-35 19 -66 34 -69 34 -4 0 -25 -14 -48 -32z"/>
<path d="M1447 1745 l-59 -32 67 -37 67 -37 44 33 c24 18 44 35 44 38 0 9 -83
70 -94 69 -6 -1 -37 -16 -69 -34z"/>
<path d="M300 1665 l-34 -35 34 -35 33 -34 26 19 c72 54 69 48 36 75 -56 47
-59 47 -95 10z"/>
<path d="M518 1669 c-32 -16 -58 -33 -58 -37 0 -5 28 -23 63 -41 l62 -34 70
25 c39 14 90 29 115 33 69 11 78 21 26 28 -26 4 -80 18 -121 32 -42 14 -81 25
-88 25 -6 -1 -38 -14 -69 -31z"/>
<path d="M1285 1675 c-38 -13 -92 -27 -118 -31 -26 -4 -46 -9 -43 -11 2 -2 33
-11 67 -19 35 -8 92 -24 125 -36 l61 -21 62 34 c33 18 61 37 61 41 0 10 -115
68 -132 67 -7 -1 -44 -12 -83 -24z"/>
<path d="M1582 1669 c-23 -17 -42 -34 -42 -37 1 -4 20 -21 43 -39 l42 -32 35
34 35 35 -35 35 -36 35 -42 -31z"/>
<path d="M226 1586 c-29 -38 -27 -54 11 -88 18 -17 21 -16 53 17 l34 35 -35
36 -36 35 -27 -35z"/>
<path d="M392 1589 c-24 -17 -41 -36 -39 -42 1 -5 21 -23 44 -39 l41 -30 61
34 c33 18 61 35 61 38 0 5 -114 70 -122 70 -2 0 -23 -14 -46 -31z"/>
<path d="M781 1605 c-83 -19 -161 -45 -161 -54 0 -9 110 -44 188 -60 68 -14
261 -14 338 0 71 12 194 50 194 60 0 9 -122 46 -194 58 -82 15 -288 12 -365
-4z"/>
<path d="M1458 1587 c-32 -18 -58 -35 -58 -38 0 -4 14 -12 31 -19 17 -7 36
-19 43 -25 27 -27 51 -25 94 6 23 17 42 34 42 39 0 8 -79 70 -89 70 -4 -1 -32
-15 -63 -33z"/>
<path d="M1670 1585 l-34 -35 35 -36 34 -35 28 31 c15 16 27 34 27 38 0 4 -13
22 -28 40 l-27 33 -35 -36z"/>
<path d="M296 1503 l-37 -36 34 -35 35 -35 46 33 c25 19 46 36 46 40 0 4 -20
21 -43 38 l-44 31 -37 -36z"/>
<path d="M518 1509 c-32 -18 -58 -36 -58 -41 0 -4 29 -23 65 -40 l64 -32 63
22 c35 12 92 28 128 36 59 12 62 14 35 21 -16 3 -68 18 -115 31 -47 14 -94 27
-105 30 -11 2 -46 -10 -77 -27z"/>
<path d="M1337 1529 c-10 -6 -61 -21 -114 -35 -53 -13 -98 -26 -100 -28 -2 -2
15 -6 37 -9 23 -3 80 -17 129 -32 l87 -27 62 31 c34 17 62 35 62 40 0 10 -113
71 -131 71 -8 0 -22 -5 -32 -11z"/>
<path d="M1585 1509 c-22 -16 -41 -33 -43 -38 -1 -4 18 -22 44 -40 l46 -34 34
34 34 35 -37 36 -38 37 -40 -30z"/>
<path d="M162 1499 c-20 -32 -20 -32 0 -65 11 -19 21 -34 23 -34 1 0 15 16 29
35 l27 35 -23 30 c-13 16 -26 29 -30 29 -3 1 -15 -13 -26 -30z"/>
<path d="M1742 1500 l-23 -30 27 -35 c14 -19 28 -35 29 -35 2 0 12 15 23 34
20 33 20 33 0 65 -11 17 -23 31 -26 30 -4 0 -17 -13 -30 -29z"/>
<path d="M395 1429 c-22 -16 -41 -34 -43 -38 -3 -10 71 -71 85 -71 5 0 37 15
72 34 l63 33 -66 37 c-37 20 -68 36 -69 36 -1 0 -20 -14 -42 -31z"/>
<path d="M845 1453 c-56 -9 -189 -44 -213 -57 -22 -12 -18 -14 65 -39 191 -58
375 -58 567 0 l89 27 -34 14 c-87 37 -177 53 -309 57 -74 2 -148 1 -165 -2z"/>
<path d="M1452 1423 l-64 -36 63 -33 c35 -19 67 -34 72 -34 12 0 87 60 87 69
0 7 -84 72 -92 70 -1 0 -32 -16 -66 -36z"/>
<path d="M117 1415 c-16 -33 -16 -38 -1 -66 l16 -31 23 33 c23 34 22 43 -7 82
-13 17 -15 16 -31 -18z"/>
<path d="M221 1421 c-26 -36 -26 -40 5 -75 l25 -29 35 34 34 33 -32 33 c-18
18 -35 33 -39 33 -4 0 -17 -13 -28 -29z"/>
<path d="M1672 1417 l-32 -33 34 -33 35 -34 25 29 c14 16 26 33 26 37 0 12
-40 67 -49 67 -4 0 -21 -15 -39 -33z"/>
<path d="M1802 1419 l-21 -33 21 -30 c12 -17 23 -33 24 -34 1 -2 10 10 19 27
14 29 14 33 -3 67 l-19 36 -21 -33z"/>
<path d="M296 1341 l-36 -37 33 -32 c18 -18 37 -32 42 -32 6 0 27 15 49 33
l38 33 -44 36 -45 37 -37 -38z"/>
<path d="M526 1347 c-33 -18 -59 -36 -59 -42 1 -5 28 -24 60 -42 l58 -32 67
24 c37 13 97 30 133 36 l66 13 -93 22 c-51 13 -110 30 -130 38 -21 9 -39 16
-40 16 -2 0 -30 -15 -62 -33z"/>
<path d="M1285 1350 c-44 -16 -102 -32 -130 -36 l-50 -7 80 -18 c44 -9 105
-26 135 -38 l54 -21 59 33 c32 17 59 37 60 42 0 9 -111 76 -123 74 -3 -1 -41
-14 -85 -29z"/>
<path d="M1581 1341 l-44 -37 41 -32 c22 -18 44 -32 49 -32 5 0 23 15 41 33
l32 33 -38 36 -37 37 -44 -38z"/>
<path d="M162 1340 c-21 -34 -20 -43 10 -83 13 -18 16 -17 41 17 l27 35 -29
33 -29 32 -20 -34z"/>
<path d="M1746 1339 l-26 -30 26 -35 c15 -19 28 -34 29 -34 2 0 12 14 23 32
18 29 19 35 6 59 -21 41 -30 42 -58 8z"/>
<path d="M80 1336 c-11 -30 -5 -86 10 -86 4 0 13 13 20 29 9 24 9 34 -3 58
l-15 28 -12 -29z"/>
<path d="M1851 1332 c-9 -22 -9 -35 0 -55 16 -35 26 -34 34 1 5 25 -8 82 -19
82 -2 0 -9 -13 -15 -28z"/>
<path d="M793 1279 c-51 -11 -114 -28 -140 -38 l-47 -18 67 -22 c198 -66 416
-66 614 0 l68 22 -55 19 c-166 58 -344 71 -507 37z"/>
<path d="M115 1258 c-16 -33 -16 -37 0 -68 l17 -33 19 29 c23 36 23 42 0 78
l-20 29 -16 -35z"/>
<path d="M221 1261 c-26 -37 -26 -39 3 -76 l24 -30 36 34 36 35 -32 33 c-18
18 -35 33 -39 33 -4 0 -17 -13 -28 -29z"/>
<path d="M384 1256 c-21 -19 -37 -36 -34 -38 3 -2 24 -19 46 -36 l42 -32 65
38 65 38 -62 32 c-33 18 -66 32 -72 32 -6 0 -28 -15 -50 -34z"/>
<path d="M1449 1257 l-56 -32 65 -38 65 -37 45 37 45 37 -38 33 c-21 18 -45
33 -54 32 -9 0 -41 -15 -72 -32z"/>
<path d="M1672 1257 l-32 -33 36 -35 36 -34 24 30 c13 17 24 34 24 38 0 12
-40 67 -49 67 -4 0 -21 -15 -39 -33z"/>
<path d="M1805 1256 c-18 -33 -18 -35 2 -66 l21 -33 17 33 c14 27 15 37 4 61
-17 42 -24 43 -44 5z"/>
<path d="M47 1244 c-2 -15 -1 -38 3 -53 l7 -26 12 28 c11 28 6 77 -9 77 -4 0
-10 -12 -13 -26z"/>
<path d="M1886 1246 c-3 -14 -1 -37 5 -53 l12 -28 7 26 c8 30 2 79 -10 79 -4
0 -11 -11 -14 -24z"/>
<path d="M162 1178 c-18 -29 -19 -35 -6 -59 20 -40 28 -41 59 -9 l27 28 -27
36 c-15 20 -29 36 -30 36 -2 0 -12 -14 -23 -32z"/>
<path d="M292 1177 l-32 -33 38 -36 37 -37 25 21 c14 11 34 27 45 34 19 14 19
16 -20 49 -22 19 -45 34 -51 35 -5 0 -24 -15 -42 -33z"/>
<path d="M517 1179 c-32 -16 -55 -34 -52 -40 4 -5 33 -23 66 -39 l59 -31 73
25 c39 14 99 31 132 37 l60 12 -65 13 c-36 6 -92 21 -125 33 -75 26 -78 26
-148 -10z"/>
<path d="M1290 1188 c-30 -11 -84 -25 -120 -32 l-65 -12 64 -13 c36 -7 95 -24
132 -37 l68 -25 60 30 c33 17 62 35 66 40 7 12 -106 72 -132 70 -10 -1 -43
-10 -73 -21z"/>
<path d="M1575 1175 c-22 -18 -37 -35 -35 -37 3 -2 23 -18 46 -36 l41 -31 36
37 37 38 -33 32 c-18 18 -37 32 -42 32 -6 -1 -28 -16 -50 -35z"/>
<path d="M1746 1175 l-29 -37 31 -31 30 -30 21 33 c20 34 19 43 -11 83 -13 18
-16 17 -42 -18z"/>
<path d="M4303 1202 c-25 -4 -63 -46 -63 -69 0 -8 8 -31 17 -51 14 -30 15 -36
3 -40 -8 -3 -27 -18 -42 -33 -39 -39 -38 -90 1 -130 25 -24 37 -29 81 -29 31
0 61 7 77 17 24 16 26 16 38 -1 8 -11 23 -16 40 -14 l26 3 -30 40 -29 40 23
58 24 57 -24 0 c-18 0 -26 -8 -35 -35 -6 -19 -15 -35 -18 -35 -11 0 -102 131
-102 146 0 7 10 20 21 28 20 13 25 13 51 0 30 -15 48 -12 48 10 0 22 -63 45
-107 38z m40 -240 c31 -43 32 -44 12 -59 -13 -9 -32 -13 -55 -9 -58 9 -78 58
-39 97 28 28 46 22 82 -29z"/>
<path d="M80 1181 c-12 -24 -6 -91 9 -91 5 0 14 13 21 29 9 24 9 34 -3 57
l-14 28 -13 -23z"/>
<path d="M1851 1173 c-9 -23 -9 -35 0 -56 15 -33 25 -34 33 -4 9 34 7 51 -7
71 -13 17 -14 16 -26 -11z"/>
<path d="M2032 1171 c-38 -25 -72 -76 -72 -111 0 -20 -2 -22 -11 -10 -11 16
-8 -6 13 -85 13 -49 67 -102 114 -111 43 -8 122 0 136 14 5 5 7 19 4 30 -7 19
-9 20 -42 6 -126 -53 -224 106 -128 207 35 36 73 44 118 25 36 -15 37 -15 45
7 13 33 -2 41 -77 45 -54 2 -73 -1 -100 -17z"/>
<path d="M4710 1020 l0 -170 115 0 115 0 0 25 c0 25 -1 25 -90 25 l-90 0 0 50
0 50 80 0 c73 0 80 2 80 20 0 17 -8 19 -77 22 l-78 3 -3 48 -3 47 90 0 c90 0
91 0 91 25 l0 25 -115 0 -115 0 0 -170z"/>
<path d="M28 1159 c-2 -13 -1 -35 2 -49 6 -24 7 -23 13 8 4 19 3 41 -2 49 -7
13 -9 11 -13 -8z"/>
<path d="M1917 1165 c-4 -11 -3 -33 1 -50 8 -30 9 -30 13 -5 3 14 2 36 -1 50
-6 23 -7 23 -13 5z"/>
<path d="M7216 1137 c-22 -16 -14 -37 14 -37 26 0 35 19 18 36 -12 12 -17 12
-32 1z"/>
<path d="M877 1129 c-114 -12 -272 -57 -256 -73 2 -3 45 -17 94 -32 106 -31
318 -44 420 -25 80 15 205 52 205 61 0 10 -122 48 -190 59 -89 15 -189 19
-273 10z"/>
<path d="M3390 1120 c0 -16 5 -21 23 -18 12 2 22 10 22 18 0 8 -10 16 -22 18
-18 3 -23 -2 -23 -18z"/>
<path d="M5660 1121 c0 -23 23 -34 39 -18 19 19 12 37 -14 37 -18 0 -25 -5
-25 -19z"/>
<path d="M115 1098 c-16 -33 -16 -37 0 -68 l17 -33 19 24 c24 30 23 41 0 80
l-20 32 -16 -35z"/>
<path d="M223 1100 c-29 -36 -29 -42 3 -80 l26 -31 36 36 36 35 -34 35 c-19
19 -36 35 -39 34 -4 0 -16 -13 -28 -29z"/>
<path d="M392 1099 c-23 -17 -42 -34 -42 -38 0 -4 20 -22 45 -40 l45 -32 66
37 66 37 -63 33 c-35 19 -66 34 -69 34 -3 0 -25 -14 -48 -31z"/>
<path d="M1446 1095 l-58 -32 66 -37 66 -37 45 32 c25 18 45 36 45 40 0 10
-82 69 -94 68 -6 -1 -37 -16 -70 -34z"/>
<path d="M1670 1095 l-34 -35 36 -35 36 -36 26 31 c14 17 26 37 26 43 -1 11
-44 67 -53 67 -1 0 -18 -16 -37 -35z"/>
<path d="M1807 1098 c-21 -37 -21 -47 2 -77 l19 -24 17 32 c14 28 15 38 4 62
-16 41 -22 42 -42 7z"/>
<path d="M7830 1089 c0 -32 -4 -42 -20 -46 -11 -3 -20 -11 -20 -18 0 -7 9 -15
20 -18 18 -5 20 -14 20 -81 0 -74 1 -76 25 -76 25 0 25 1 25 80 0 79 0 80 25
80 18 0 25 5 25 20 0 15 -7 20 -25 20 -22 0 -25 4 -25 40 0 36 -2 40 -25 40
-23 0 -25 -4 -25 -41z"/>
<path d="M46 1087 c-3 -15 -3 -39 0 -54 7 -25 8 -25 20 -8 8 11 14 26 14 35 0
9 -6 24 -14 35 -12 17 -13 17 -20 -8z"/>
<path d="M1890 1088 c-11 -23 -11 -33 0 -55 l13 -28 9 28 c6 17 6 37 0 55 l-9
27 -13 -27z"/>
<path d="M11 1044 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M163 1015 l-23 -34 22 -37 21 -37 28 34 c16 19 28 36 28 39 0 3 -12
19 -27 37 l-27 32 -22 -34z"/>
<path d="M296 1013 l-36 -37 22 -24 c41 -43 52 -44 97 -9 22 17 41 34 41 37 0
4 -20 21 -44 38 l-43 31 -37 -36z"/>
<path d="M518 1017 c-32 -17 -58 -35 -58 -38 0 -4 29 -22 63 -40 l64 -33 82
27 c45 15 102 30 126 34 55 7 50 18 -11 28 -26 4 -79 18 -118 31 -39 13 -75
24 -81 24 -5 0 -36 -15 -67 -33z"/>
<path d="M1324 1036 c-18 -8 -65 -22 -105 -31 -105 -24 -109 -27 -59 -36 25
-5 84 -21 131 -35 l87 -26 61 32 c33 18 61 36 61 39 0 9 -115 71 -131 71 -8
-1 -28 -7 -45 -14z"/>
<path d="M1585 1019 c-22 -17 -40 -34 -40 -39 0 -4 17 -22 39 -39 41 -33 53
-32 93 11 20 22 21 24 4 43 -46 55 -52 56 -96 24z"/>
<path d="M1747 1014 l-28 -34 27 -35 c14 -19 28 -35 29 -35 2 0 12 16 24 36
l21 35 -23 34 -23 34 -27 -35z"/>
<path d="M2308 1020 c-26 -26 -29 -36 -27 -77 4 -62 40 -93 110 -93 81 0 125
61 98 138 -14 41 -49 62 -104 62 -38 0 -52 -5 -77 -30z m117 -25 c14 -13 25
-33 25 -45 0 -23 -42 -70 -62 -70 -8 0 -24 7 -36 16 -37 26 -26 101 18 117 26
9 30 8 55 -18z"/>
<path d="M2637 1030 c-30 -24 -37 -25 -37 -5 0 8 -9 15 -20 15 -19 0 -20 -7
-20 -95 0 -94 0 -95 25 -95 23 0 24 4 27 62 3 58 5 64 35 83 18 11 32 28 33
38 0 22 -11 22 -43 -3z"/>
<path d="M2816 1025 c-24 -22 -26 -23 -26 -5 0 13 -7 20 -20 20 -19 0 -20 -7
-20 -95 0 -88 1 -95 20 -95 17 0 20 7 20 45 0 58 16 91 51 106 17 7 29 19 29
30 0 26 -22 24 -54 -6z"/>
<path d="M2941 1024 c-27 -22 -31 -32 -31 -75 0 -68 30 -99 94 -99 82 0 116
31 116 106 0 84 -110 126 -179 68z m110 -22 c15 -13 22 -30 22 -52 0 -34 -30
-70 -60 -70 -21 0 -63 46 -63 70 0 24 42 70 63 70 8 0 25 -8 38 -18z"/>
<path d="M3196 1035 c-19 -19 -21 -68 -3 -82 6 -6 26 -15 42 -20 20 -6 30 -16
30 -29 0 -23 -39 -31 -61 -13 -13 10 -17 10 -25 -2 -13 -21 17 -39 66 -39 51
0 78 25 73 67 -2 22 -12 32 -45 48 -57 26 -60 58 -5 53 28 -2 37 1 37 12 0 22
-87 26 -109 5z"/>
<path d="M3529 1021 c-21 -21 -29 -39 -29 -65 0 -75 34 -106 116 -106 65 0 94
31 94 100 0 70 -31 100 -102 100 -41 0 -54 -5 -79 -29z m116 -26 c14 -13 25
-33 25 -45 0 -24 -42 -70 -63 -70 -30 0 -60 36 -60 70 0 22 7 39 22 52 31 24
47 23 76 -7z"/>
<path d="M3846 1033 c-13 -13 -20 -15 -23 -5 -3 6 -13 12 -24 12 -17 0 -19 -8
-19 -95 0 -86 2 -95 19 -95 15 0 19 10 24 61 6 70 28 101 66 97 25 -3 26 -6
29 -80 3 -75 4 -78 27 -78 25 0 25 1 25 84 0 64 -4 88 -16 100 -21 22 -85 20
-108 -1z"/>
<path d="M5092 1030 c-25 -24 -32 -25 -32 -5 0 8 -9 15 -20 15 -19 0 -20 -7
-20 -95 0 -88 1 -95 20 -95 17 0 20 7 20 45 0 58 16 91 51 106 17 7 29 19 29
30 0 25 -21 24 -48 -1z"/>
<path d="M5209 1021 c-24 -24 -29 -38 -29 -76 0 -67 31 -95 103 -95 70 0 107
32 107 91 0 76 -33 109 -111 109 -31 0 -47 -7 -70 -29z m112 -19 c15 -13 22
-30 22 -52 0 -22 -7 -39 -22 -52 -31 -24 -47 -23 -77 8 -30 29 -27 67 8 97 26
22 40 22 69 -1z"/>
<path d="M5466 1034 c-17 -16 -21 -51 -8 -71 4 -7 24 -19 45 -28 47 -19 53
-55 9 -55 -15 0 -34 6 -40 12 -10 10 -15 10 -22 -2 -14 -22 16 -40 65 -40 51
0 78 25 73 67 -2 22 -12 32 -46 48 -52 24 -53 50 -2 49 37 0 57 15 37 28 -22
14 -95 9 -111 -8z"/>
<path d="M5799 1021 c-23 -23 -29 -38 -29 -71 0 -62 41 -100 107 -100 59 0 88
18 103 65 15 44 -1 97 -35 119 -13 9 -45 16 -70 16 -38 0 -52 -5 -76 -29z
m116 -26 c14 -13 25 -33 25 -45 0 -23 -42 -70 -62 -70 -8 0 -24 7 -36 16 -37
26 -26 101 18 117 26 9 30 8 55 -18z"/>
<path d="M6120 1033 c-17 -12 -25 -13 -28 -5 -2 7 -12 12 -23 12 -17 0 -19 -8
-19 -95 0 -95 0 -95 25 -95 24 0 25 2 25 63 0 71 19 101 62 95 22 -3 23 -8 26
-80 3 -75 4 -78 27 -78 25 0 25 1 25 84 0 64 -4 88 -16 100 -20 21 -73 20
-104 -1z"/>
<path d="M6470 900 l0 -150 25 0 c24 0 25 3 25 60 0 57 1 60 19 50 36 -19 98
-12 128 14 24 21 28 32 28 76 0 44 -4 55 -28 76 -33 28 -91 32 -125 8 -20 -14
-23 -14 -28 0 -3 9 -15 16 -25 16 -18 0 -19 -9 -19 -150z m165 87 c22 -32 18
-63 -11 -86 -33 -26 -58 -27 -84 -1 -36 36 -20 96 30 112 24 7 49 -3 65 -25z"/>
<path d="M6837 1030 c-30 -24 -37 -25 -37 -5 0 8 -9 15 -20 15 -19 0 -20 -7
-20 -95 0 -95 0 -95 25 -95 24 0 25 3 25 55 0 46 4 60 25 80 13 14 29 25 35
25 5 0 10 9 10 20 0 11 -4 20 -9 20 -4 0 -20 -9 -34 -20z"/>
<path d="M6967 1039 c-24 -14 -47 -62 -47 -99 0 -21 9 -41 29 -61 25 -24 38
-29 80 -29 74 0 106 30 106 100 0 69 -33 100 -103 100 -26 0 -55 -5 -65 -11z
m97 -40 c26 -20 35 -61 18 -85 -8 -13 -46 -34 -61 -34 -21 0 -51 41 -51 69 0
27 37 71 60 71 4 0 19 -9 34 -21z"/>
<path d="M7349 1021 c-24 -24 -29 -38 -29 -76 0 -65 31 -95 97 -95 60 0 82 12
64 34 -9 10 -19 12 -34 7 -24 -9 -67 3 -67 18 0 5 32 20 70 32 79 26 88 42 45
84 -37 37 -106 35 -146 -4z m107 -15 c24 -18 14 -28 -48 -49 -55 -18 -62 -8
-27 37 23 29 46 33 75 12z"/>
<path d="M7618 1034 c-33 -18 -48 -43 -48 -83 0 -40 17 -76 44 -91 32 -16 121
-9 121 10 0 11 -12 15 -44 16 -49 0 -71 20 -71 64 0 40 32 64 74 57 47 -8 71
18 31 33 -36 14 -75 12 -107 -6z"/>
<path d="M7997 1037 c-13 -9 -18 -23 -15 -47 3 -30 9 -38 46 -54 23 -11 42
-26 42 -33 0 -20 -29 -28 -61 -16 -19 8 -31 8 -35 1 -11 -18 23 -40 64 -42 53
-1 84 26 80 68 -2 25 -11 35 -45 51 -28 13 -43 26 -43 38 0 15 6 18 38 15 28
-2 37 1 37 12 0 20 -83 26 -108 7z"/>
<path d="M82 1023 c-16 -29 -15 -65 1 -87 13 -17 14 -16 27 13 11 27 11 37 -2
64 -15 31 -15 31 -26 10z"/>
<path d="M1851 1011 c-11 -25 -11 -37 0 -62 12 -29 13 -30 26 -13 7 10 13 30
13 44 0 14 -6 34 -13 44 -13 17 -14 16 -26 -13z"/>
<path d="M3390 945 c0 -88 1 -95 20 -95 19 0 20 7 20 95 0 88 -1 95 -20 95
-19 0 -20 -7 -20 -95z"/>
<path d="M5660 945 c0 -88 1 -95 20 -95 19 0 20 7 20 95 0 88 -1 95 -20 95
-19 0 -20 -7 -20 -95z"/>
<path d="M7210 938 c0 -72 -5 -112 -15 -132 -23 -44 5 -65 38 -28 14 15 17 41
17 140 0 115 -1 122 -20 122 -19 0 -20 -7 -20 -102z"/>
<path d="M28 1006 c-3 -15 -2 -40 1 -55 l8 -26 6 25 c3 14 3 39 -2 55 l-8 30
-5 -29z"/>
<path d="M1917 1004 c-3 -17 -3 -42 0 -55 l7 -24 7 28 c4 15 4 39 0 55 l-7 27
-7 -31z"/>
<path d="M419 957 c-8 -7 -28 -23 -45 -35 l-29 -24 40 -34 c22 -18 46 -34 52
-34 7 0 40 15 73 34 l61 33 -66 37 c-36 20 -67 36 -68 36 -1 0 -9 -6 -18 -13z"/>
<path d="M815 959 c-76 -15 -183 -48 -190 -59 -6 -10 81 -39 180 -61 102 -22
294 -15 407 14 54 14 105 30 115 36 16 8 15 11 -12 22 -94 37 -175 51 -310 55
-77 1 -162 -2 -190 -7z"/>
<path d="M1452 933 l-63 -36 60 -33 c34 -19 66 -34 72 -34 13 0 89 59 89 68
-1 7 -84 73 -91 71 -2 0 -32 -16 -67 -36z"/>
<path d="M115 929 c-16 -34 -16 -38 0 -69 l17 -33 19 29 c24 36 24 52 0 84
l-19 24 -17 -35z"/>
<path d="M221 934 c-27 -34 -26 -43 5 -78 l26 -29 35 35 36 36 -34 31 c-19 17
-37 31 -41 31 -4 0 -16 -12 -27 -26z"/>
<path d="M1671 929 l-34 -31 36 -36 35 -35 26 29 c14 16 26 34 26 40 0 13 -38
64 -48 64 -4 0 -22 -14 -41 -31z"/>
<path d="M1806 935 c-21 -31 -20 -44 3 -79 l19 -29 17 33 c14 27 15 37 4 61
-16 40 -24 43 -43 14z"/>
<path d="M46 925 c-4 -14 -3 -37 0 -51 l7 -27 17 23 c15 20 16 26 3 51 -18 35
-19 35 -27 4z"/>
<path d="M1891 925 c-9 -23 -9 -35 0 -55 l12 -25 9 28 c6 17 6 37 0 55 l-10
27 -11 -30z"/>
<path d="M11 914 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M1941 914 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M296 851 l-36 -37 33 -32 c18 -18 36 -32 40 -32 4 0 27 15 51 33 l43
34 -47 35 -48 36 -36 -37z"/>
<path d="M528 860 c-31 -16 -59 -34 -62 -39 -4 -5 22 -26 57 -45 l63 -36 55
21 c30 12 92 29 139 39 l85 17 -50 7 c-40 7 -119 28 -219 62 -6 1 -37 -10 -68
-26z"/>
<path d="M1295 864 c-38 -13 -98 -30 -133 -36 l-63 -12 83 -17 c46 -9 107 -26
136 -37 l53 -21 60 32 c33 18 60 37 61 42 1 9 -109 75 -122 74 -3 0 -36 -11
-75 -25z"/>
<path d="M1579 852 l-46 -35 43 -34 c24 -18 48 -33 52 -33 4 0 22 15 40 33
l32 33 -38 35 -37 36 -46 -35z"/>
<path d="M161 850 c-20 -33 -20 -35 -3 -65 22 -36 30 -36 60 3 l23 30 -29 33
-30 33 -21 -34z"/>
<path d="M1746 849 l-26 -31 20 -29 c31 -42 38 -43 59 -8 18 29 18 35 5 60
-21 41 -29 42 -58 8z"/>
<path d="M75 836 c-4 -20 -2 -43 5 -57 l13 -23 14 28 c12 23 12 33 3 57 -16
38 -28 37 -35 -5z"/>
<path d="M1850 841 c-9 -24 -9 -34 3 -57 l14 -28 13 23 c12 24 6 91 -9 91 -5
0 -14 -13 -21 -29z"/>
<path d="M29 844 c-3 -10 -2 -32 1 -49 l6 -30 7 27 c4 14 3 37 -1 49 -8 21 -9
21 -13 3z"/>
<path d="M1916 837 c-3 -15 -3 -35 2 -44 8 -13 10 -11 14 9 2 13 2 33 -2 43
-6 17 -8 16 -14 -8z"/>
<path d="M401 780 c-21 -16 -42 -33 -45 -39 -3 -5 13 -26 38 -45 l43 -36 65
38 65 37 -63 37 -64 36 -39 -28z"/>
<path d="M821 795 c-41 -7 -106 -24 -145 -36 l-70 -23 34 -14 c180 -73 421
-79 630 -16 l84 26 -33 14 c-128 54 -358 76 -500 49z"/>
<path d="M1454 771 l-61 -36 65 -38 64 -37 42 32 c22 18 43 33 45 35 7 5 -36
47 -66 64 -27 15 -30 15 -89 -20z"/>
<path d="M114 768 c-15 -32 -15 -37 1 -67 l17 -33 23 33 23 34 -21 30 c-11 17
-22 32 -23 34 -2 2 -11 -12 -20 -31z"/>
<path d="M219 767 l-27 -33 28 -34 c30 -37 39 -35 82 15 16 19 15 21 -15 53
-17 17 -33 32 -36 32 -4 0 -18 -15 -32 -33z"/>
<path d="M1672 767 l-32 -33 36 -35 35 -34 28 34 29 35 -27 33 c-14 18 -28 33
-32 33 -3 0 -19 -15 -37 -33z"/>
<path d="M1804 766 l-21 -32 23 -33 22 -33 17 32 c14 27 15 37 4 61 -16 41
-22 42 -45 5z"/>
<path d="M48 765 c-6 -30 1 -75 12 -75 14 0 20 48 10 74 -12 32 -16 33 -22 1z"/>
<path d="M1891 767 c-11 -28 -6 -77 9 -77 12 0 18 49 10 79 l-7 26 -12 -28z"/>
<path d="M529 695 c-34 -17 -61 -35 -62 -40 0 -6 27 -24 59 -42 l60 -32 90 29
c49 15 112 32 139 36 l50 8 -52 8 c-28 4 -90 20 -137 36 l-85 28 -62 -31z"/>
<path d="M1283 698 c-45 -15 -106 -32 -135 -36 l-53 -8 50 -8 c28 -4 90 -21
139 -36 l89 -29 58 29 c32 16 60 34 63 39 6 9 -63 54 -106 69 -16 5 -48 -1
-105 -20z"/>
<path d="M163 689 c-19 -30 -20 -36 -7 -60 19 -38 33 -44 50 -23 33 42 33 49
5 83 l-27 33 -21 -33z"/>
<path d="M292 687 l-32 -33 38 -36 37 -37 25 21 c14 11 34 27 45 34 19 14 19
16 -20 49 -22 19 -45 34 -51 35 -5 0 -24 -15 -42 -33z"/>
<path d="M1575 685 c-22 -18 -37 -35 -35 -37 3 -2 23 -18 46 -36 l41 -31 36
37 37 38 -33 32 c-18 18 -37 32 -42 32 -6 -1 -28 -16 -50 -35z"/>
<path d="M1746 686 l-27 -36 23 -30 c13 -16 26 -29 31 -29 16 -2 46 62 37 78
-30 54 -34 55 -64 17z"/>
<path d="M81 691 c-12 -22 -7 -76 9 -86 4 -3 13 8 20 24 9 24 9 34 -3 57 l-14
28 -12 -23z"/>
<path d="M1851 682 c-11 -25 -10 -35 2 -59 l15 -28 11 28 c14 37 14 49 -2 71
-13 17 -14 16 -26 -12z"/>
<path d="M900 644 c-108 -12 -280 -57 -280 -73 0 -10 122 -46 204 -61 138 -24
369 -3 481 44 35 15 38 19 22 27 -64 37 -323 75 -427 63z"/>
<path d="M117 610 c-17 -28 -17 -31 1 -66 l19 -36 21 33 21 33 -21 30 c-12 17
-22 32 -23 33 0 1 -9 -11 -18 -27z"/>
<path d="M223 610 c-29 -36 -29 -42 2 -78 l25 -30 36 35 37 34 -34 35 c-18 19
-35 34 -38 33 -4 0 -16 -13 -28 -29z"/>
<path d="M391 609 c-23 -16 -41 -35 -39 -41 2 -6 22 -24 44 -40 l41 -29 67 37
68 37 -63 33 c-35 19 -66 34 -70 34 -3 0 -25 -14 -48 -31z"/>
<path d="M1447 605 l-59 -32 68 -37 67 -37 41 29 c22 16 42 34 44 40 4 12 -75
73 -92 71 -6 -1 -37 -16 -69 -34z"/>
<path d="M1671 606 l-34 -35 37 -34 36 -35 25 30 c14 16 25 35 25 41 -1 11
-44 67 -53 67 -1 0 -18 -15 -36 -34z"/>
<path d="M1803 606 l-21 -33 21 -33 20 -32 19 37 c19 35 19 37 1 65 l-18 29
-22 -33z"/>
<path d="M163 526 l-21 -33 20 -31 c11 -18 22 -32 24 -32 6 0 53 53 53 60 0 3
-12 19 -27 37 l-27 32 -22 -33z"/>
<path d="M302 534 c-40 -31 -40 -47 -2 -85 l30 -30 45 32 c25 18 45 35 45 39
0 4 -19 21 -43 38 l-43 30 -32 -24z"/>
<path d="M518 528 c-32 -17 -58 -34 -58 -38 0 -4 28 -22 61 -40 l62 -33 81 26
c44 15 100 29 124 33 55 8 54 20 -3 28 -25 4 -77 18 -117 32 -39 13 -76 24
-82 24 -6 0 -37 -15 -68 -32z"/>
<path d="M1287 535 c-37 -13 -88 -27 -112 -31 -56 -8 -58 -20 -5 -27 22 -3 77
-17 123 -32 l84 -28 62 33 c33 18 61 36 61 40 0 10 -114 70 -131 69 -8 0 -44
-11 -82 -24z"/>
<path d="M1585 529 c-22 -17 -41 -33 -43 -38 -1 -4 17 -22 42 -39 l44 -32 32
30 c37 35 36 54 -5 86 l-30 23 -40 -30z"/>
<path d="M1746 525 l-27 -35 23 -30 c27 -34 33 -34 58 5 18 30 18 30 -5 63
l-22 32 -27 -35z"/>
<path d="M225 448 c-14 -16 -25 -33 -25 -37 0 -4 12 -22 28 -40 l27 -32 33 34
33 34 -35 35 -36 36 -25 -30z"/>
<path d="M395 449 c-22 -16 -41 -34 -43 -38 -3 -9 76 -71 89 -71 10 0 119 64
119 70 0 4 -97 59 -119 67 -3 1 -24 -11 -46 -28z"/>
<path d="M830 474 c-43 -9 -164 -42 -195 -54 l-30 -12 40 -15 c146 -53 359
-72 500 -44 93 17 207 53 198 62 -4 4 -48 20 -98 35 -77 23 -112 27 -240 30
-82 1 -161 0 -175 -2z"/>
<path d="M1458 447 c-32 -18 -58 -34 -58 -37 0 -6 109 -70 119 -70 11 0 91 61
91 69 0 7 -84 72 -92 70 -1 0 -29 -15 -60 -32z"/>
<path d="M1672 441 l-33 -34 34 -35 34 -34 27 35 c29 38 27 56 -11 87 -17 14
-21 13 -51 -19z"/>
<path d="M299 364 l-33 -34 36 -36 36 -37 41 33 c23 19 41 36 41 39 -1 3 -20
20 -44 38 l-43 32 -34 -35z"/>
<path d="M523 367 c-35 -17 -63 -34 -63 -38 0 -10 81 -56 112 -64 15 -4 50 2
89 15 35 12 93 28 129 34 l65 12 -64 13 c-35 7 -96 23 -135 37 -39 13 -71 24
-71 23 0 0 -28 -14 -62 -32z"/>
<path d="M1296 375 c-37 -14 -95 -30 -129 -36 l-60 -12 84 -17 c46 -10 104
-26 128 -35 37 -16 48 -16 79 -5 52 19 103 51 96 61 -5 8 -119 70 -126 68 -2
0 -34 -11 -72 -24z"/>
<path d="M1583 367 c-23 -18 -42 -35 -43 -38 0 -3 18 -20 41 -39 l41 -33 36
37 37 36 -35 34 -35 34 -42 -31z"/>
<path d="M393 287 c-23 -18 -41 -36 -40 -41 2 -5 22 -22 45 -39 l42 -31 65 35
64 34 -32 18 c-18 10 -45 26 -62 37 -16 10 -32 19 -35 19 -3 0 -24 -15 -47
-32z"/>
<path d="M813 305 c-39 -7 -102 -23 -139 -35 -80 -27 -77 -30 64 -67 174 -47
431 -33 581 30 l34 14 -67 23 c-146 48 -326 62 -473 35z"/>
<path d="M1454 281 l-62 -37 64 -34 64 -34 42 31 c23 17 43 34 45 39 2 8 -81
76 -89 73 -2 0 -31 -18 -64 -38z"/>
<path d="M527 207 c-32 -17 -59 -36 -60 -41 -1 -5 26 -24 61 -42 l63 -33 52
20 c29 12 88 29 132 38 l80 18 -46 7 c-41 6 -166 42 -209 60 -8 3 -41 -9 -73
-27z"/>
<path d="M1315 218 c-27 -11 -86 -28 -129 -37 l-79 -17 69 -13 c38 -7 96 -23
129 -35 l60 -22 70 34 c65 32 68 35 50 49 -21 15 -112 64 -117 62 -2 -1 -25
-10 -53 -21z"/>
<path d="M835 146 c-45 -7 -112 -23 -150 -36 -68 -23 -68 -23 -42 -36 112 -59
396 -77 560 -36 48 12 100 28 114 35 26 14 26 14 -38 36 -76 26 -232 51 -309
50 -30 -1 -91 -7 -135 -13z"/>
</g>
</svg>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Corrosion & erosion projects has thorough documentation covering every aspect of the web application.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">about us</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                We are a company that offers web applications related to the field of the hydrocarbon industry, in order to analyze and predict erosive and corrosive processes.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                In our news section you will find our technological advances and other news of the site.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Contact us</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                  If you are interested in our services, do not hesitate to contact us for more information.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Corrosion & Erosion Projects 2021.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
