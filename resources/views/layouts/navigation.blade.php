<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex" style="font-size: larger;">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @can('is_employee')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-xl text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-xl text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('admindashboard')" :active="request()->routeIs('admindashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_employee')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-xl text-gray-900 font-weight: 600;"  style="font-size: larger;">
                    <x-nav-link :href="route('timesheet')" :active="request()->routeIs('timesheet')">
                        {{ __('Timesheets') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-xl text-gray-900 font-weight: 600;"  style="font-size: larger;">
                    <x-nav-link :href="route('timesheets')" :active="request()->routeIs('timesheets')">
                        {{ __('Timesheets') }}
                    </x-nav-link>
                </div>
                @endcan


                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-xl text-gray-900 font-weight: 600;" style="font-size: larger;">
                    <x-nav-link :href="route('admintimesheets')" :active="request()->routeIs('admintimesheets')">
                        {{ __('Payslips') }}
                    </x-nav-link>
                </div>
                @endcan
                
                @can('is_employee')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('myinvoices')" :active="request()->routeIs('myinvoices')">
                        {{ __('Payslips') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_employee')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')">
                        {{ __('Jobs') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('enquiries')" :active="request()->routeIs('enquiries')">
                        {{ __('Jobs') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('employees')" :active="request()->routeIs('employee')">
                        {{ __('Employees') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('contractors')" :active="request()->routeIs('contractors')">
                        {{ __('Contractors') }}
                    </x-nav-link>
                </div>
                @endcan

                @can('is_admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-gray-900 font-weight: 600;">
                    <x-nav-link :href="route('contractorinvoice')" :active="request()->routeIs('contractorinvoice')">
                        {{ __('Invoices') }}
                    </x-nav-link>
                </div>
                @endcan

              
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 ">
            
            @can('is_employee')
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('admindashboard')" :active="request()->routeIs('admindashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_employee')
            <x-responsive-nav-link :href="route('timesheet')" :active="request()->routeIs('timesheet')">
                {{ __('Timesheets') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('timesheets')" :active="request()->routeIs('timesheets')">
                {{ __('Timesheets') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_employee')
            <x-responsive-nav-link :href="route('myinvoices')" :active="request()->routeIs('myinvoices')">
                {{ __('Payslips') }}
            </x-responsive-nav-link>
            @endcan
            <!-- <x-responsive-nav-link :href="route('invoices')" :active="request()->routeIs('invoices')">
                {{ __('Invoices') }}
            </x-responsive-nav-link> -->
            <!-- <x-responsive-nav-link :href="route('myinvoices')" :active="request()->routeIs('myinvoices')">
                {{ __('My Invoices') }}
            </x-responsive-nav-link> -->
            @can('is_employee')
            <x-responsive-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')">
                {{ __('Jobs') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('enquiries')" :active="request()->routeIs('enquiries')">
                {{ __('Jobs & Enquiries') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('employees')" :active="request()->routeIs('employees')">
                {{ __('Employees') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('contractors')" :active="request()->routeIs('contractors')">
                {{ __('Contractors') }}
            </x-responsive-nav-link>
            @endcan

            @can('is_admin')
            <x-responsive-nav-link :href="route('contractorinvoice')" :active="request()->routeIs('contractorinvoice')">
                {{ __('Invoices') }}
            </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
