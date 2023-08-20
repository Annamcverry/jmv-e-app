<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JMV EVACUATIONS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;} </style> -->
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <body>
    <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="{{route('admintimesheets') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16 bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Payslips</h2>

                                <p 
                                class="mt-4 text-gray-900 dark:text-gray-900 text-sm leading-relaxed" style="font-size: large;">
                                    View all employee payslips
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{route('timesheets') }}"  class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16 bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Timesheet</h2>

                                <p class="mt-4 text-gray-900 dark:text-gray-900 text-sm leading-relaxed" style="font-size: large;">
                                    View all timesheet and wages
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{route('jobs') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16  bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Jobs and Enquiries</h2>

                                <p class="mt-4 text-gray-900 dark:text-gray-900 text-sm leading-relaxed" style="font-size: large;"">
                                Post an open job role
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                        <a href="{{route('employees') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16  bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Employees</h2>

                                <p class="mt-4 text-gray-900 dark:text-gray-900 text-sm leading-relaxed" style="font-size: large;"">
                                View all employeees
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{route('contractorinvoices') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16  bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Earnings and Outgoings</h2>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUUAAACbCAMAAADC6XmEAAAAe1BMVEX///9jnd1Xl9temtz8/Px8pdff6fdUldt0puCWuub2+f3E2PGyzO3w8PFlnt2jwum40O7n6Ovh4ubLzdTa3OHV19zKzNP09fa8v8jr7O7R09mlqbXCxc3e3+N0oda5vcbu8/vM3fKQt+atsbzC0ea1yeOIrNnV3uufu97PyKsOAAAD8ElEQVR4nO3dD3eTOhiAcbax6XRR35AQoLB67fXP9/+EtyUXpVsHJM3W2T2P53h2PNI0P1lpc1jMMiIiInrtKadypU79LJ6124tPYV3ehA7R1HZlC5PlebbgV5q/8qKPs1W8ughrpzg52KO00dJ1LsW/+WstSvE1dvc5sNsP6QY/G8X3V4G9Q/Fx7wPncYHigVBM0XGKX+++BPbPeHAU+27ehb6qfhsPjmLfzWXg0Ve348FR7EPRh2KKUEzRuStqKW1TyNFO0527oi1125SycHkkcpklTvH30TGK6dd0xl8+6tCfJe/cz8WXCcUUoZgiFFOEYopQTBGKKUIxRSimCMUUnbuiU1Lr7rk/Bp67Ymvsyjazd5jEdGarEVN3mGRS53U9K/Ix9I6hT1/Gh5/7ubiwj6ETubxD8XjFKxRRRBHFIRT9RFBEEUUUh1D0E3lTiv9/QkRxVMQdJqZoi7KbW42IUXxDqxG6EWPs7A9fcS6mCEUUAw9H0Q+OYh+KfiIooogiikMo+omgiCKKp1iNUFr0/L4RKE5WW7tq5vcwYU1nck1HyaL9dDgXU4QiioGHo+gHR7EPRT8RFFFE8YUVm3bxxosoPpkrF+8YiOLTii2KhwpUrCRzmcu5w2S/QMVNnumu4Q6TB4WtRqjt1aUx0hnLyti4sHPROK7RhwpTLCquLofiXbcfHMU+FP1EUEQRRRSHUPQTQRFFFE+yo6ppbDO7cQSKk5Vdsy5azZrOqIg9TJZ9lOZcTBGKKAYejqIfHMU+FP1EUEQRRRSHUPQTQRHFwFQuSmT2FhMUJzNOrxfsqMpqxORqRG2041zcj9dFPziKfSj6iaCIIoooDqHoJ4IiiiiiOISin8ibUmycvzfid69nNWJ4PtGrEccojie/18HVCG0t9+k8iO9oPziKfSj6iaCIIoooDqHoJ4IiiiiiOISin8gbU+yEfSP2i1E0m6LkDpNxET/vsttRZ/5nXjgXU4QiioGHo+gHR7EPRT8RFFFEEcUhFP1EUEQxpmf4PzUu9xVDJ3Kk4rdTKJYmU9P9e38d1v139+do9yPw6Ot7GQ3+M3Tw61/jwX8FD/5zGuOJZQfjFpyONJTSypndA+bOze+wfLha+icUe7jSx8xGqbrfTzZ29FRpWTdtW7S2rIou5gEKqWxVrNvIiZTSFOti+fb3DwbfNNXucIk7PFnOqLpTtWzroiBq3YktpY5UVFqLqLihd+ei07KRmlcyomer2N3TK2530bGjb3SreQsR0MZW7XpdbS9arl3ZdrOpilzarMxWVdGu23b7+6mf4l+QbC8ZtZVOi6qV3l23+ktop42I3hhTu6g3A0RE9BL9Bx4nxfVvotw9AAAAAElFTkSuQmCC"/>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="font-size: large;">
                                Hours worked for each week
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{route('hours') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                            <div>
                                <div class="h-16 w-16  bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Hours worked Week over Week</h2>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUUAAACbCAMAAADC6XmEAAAAe1BMVEX///9jnd1Xl9temtz8/Px8pdff6fdUldt0puCWuub2+f3E2PGyzO3w8PFlnt2jwum40O7n6Ovh4ubLzdTa3OHV19zKzNP09fa8v8jr7O7R09mlqbXCxc3e3+N0oda5vcbu8/vM3fKQt+atsbzC0ea1yeOIrNnV3uufu97PyKsOAAAD8ElEQVR4nO3dD3eTOhiAcbax6XRR35AQoLB67fXP9/+EtyUXpVsHJM3W2T2P53h2PNI0P1lpc1jMMiIiInrtKadypU79LJ6124tPYV3ehA7R1HZlC5PlebbgV5q/8qKPs1W8ughrpzg52KO00dJ1LsW/+WstSvE1dvc5sNsP6QY/G8X3V4G9Q/Fx7wPncYHigVBM0XGKX+++BPbPeHAU+27ehb6qfhsPjmLfzWXg0Ve348FR7EPRh2KKUEzRuStqKW1TyNFO0527oi1125SycHkkcpklTvH30TGK6dd0xl8+6tCfJe/cz8WXCcUUoZgiFFOEYopQTBGKKUIxRSimCMUUnbuiU1Lr7rk/Bp67Ymvsyjazd5jEdGarEVN3mGRS53U9K/Ix9I6hT1/Gh5/7ubiwj6ETubxD8XjFKxRRRBHFIRT9RFBEEUUUh1D0E3lTiv9/QkRxVMQdJqZoi7KbW42IUXxDqxG6EWPs7A9fcS6mCEUUAw9H0Q+OYh+KfiIooogiikMo+omgiCKKp1iNUFr0/L4RKE5WW7tq5vcwYU1nck1HyaL9dDgXU4QiioGHo+gHR7EPRT8RFFFE8YUVm3bxxosoPpkrF+8YiOLTii2KhwpUrCRzmcu5w2S/QMVNnumu4Q6TB4WtRqjt1aUx0hnLyti4sHPROK7RhwpTLCquLofiXbcfHMU+FP1EUEQRRRSHUPQTQRFFFE+yo6ppbDO7cQSKk5Vdsy5azZrOqIg9TJZ9lOZcTBGKKAYejqIfHMU+FP1EUEQRRRSHUPQTQRHFwFQuSmT2FhMUJzNOrxfsqMpqxORqRG2041zcj9dFPziKfSj6iaCIIoooDqHoJ4IiiiiiOISin8ibUmycvzfid69nNWJ4PtGrEccojie/18HVCG0t9+k8iO9oPziKfSj6iaCIIoooDqHoJ4IiiiiiOISin8gbU+yEfSP2i1E0m6LkDpNxET/vsttRZ/5nXjgXU4QiioGHo+gHR7EPRT8RFFFEEcUhFP1EUEQxpmf4PzUu9xVDJ3Kk4rdTKJYmU9P9e38d1v139+do9yPw6Ot7GQ3+M3Tw61/jwX8FD/5zGuOJZQfjFpyONJTSypndA+bOze+wfLha+icUe7jSx8xGqbrfTzZ29FRpWTdtW7S2rIou5gEKqWxVrNvIiZTSFOti+fb3DwbfNNXucIk7PFnOqLpTtWzroiBq3YktpY5UVFqLqLihd+ei07KRmlcyomer2N3TK2530bGjb3SreQsR0MZW7XpdbS9arl3ZdrOpilzarMxWVdGu23b7+6mf4l+QbC8ZtZVOi6qV3l23+ktop42I3hhTu6g3A0RE9BL9Bx4nxfVvotw9AAAAAElFTkSuQmCC"/>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="font-size: large;">
                               Barchart showing sum of hours worked each week.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                 
                    </div>
                </div>



    </body> 

</x-app-layout>

</html>