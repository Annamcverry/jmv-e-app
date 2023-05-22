<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    public function index(){
        $userId = Auth::id();
        $invoices = Invoice::where('user_id', $userId)->get();

    return view('invoices.index')->with('invoices', $invoices);
    }

    public function show(string $id){
        $invoice = Invoice::where('id', $id)
                ->where('user_id', Auth::id())
                ->firstOrFail();
        return view('invoices.show')->with('invoice', $invoice);
    }

    <div class="py-12">
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($invoices as $invoice )
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $invoice->week_beginning }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ $invoice->hours_worked }}
                </div>
            </div>
            @empty
            <p>No invoices yet</p>
            @endforelse
        </div>
        
    </div>
</x-app-layout>
