<x-success-message class='mb-4'/>
@if (session('success'))
<div {{ $attributes->merge(['class' => 'flashmessage alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 py-5']) }}>
<div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
    <span class="text-green-500">
        <svg fill="cuurentColor"
        viewBox="0 0 20 20"
        class="h-6 w-6">
        <path fill-rule="evenodd"
        d="M0 26.016v-20q0-2.496 1.76-4.256t4.256-1.76h20q2.464 0 4.224 1.76t1.76 4.256v20q0 2.496-1.76 4.224t-4.224 1.76h-20q-2.496 0-4.256-1.76t-1.76-4.224zM4 26.016q0 0.832 0.576 1.408t1.44 0.576h20q0.8 0 1.408-0.576t0.576-1.408v-20q0-0.832-0.576-1.408t-1.408-0.608h-20q-0.832 0-1.44 0.608t-0.576 1.408v20zM7.584 16q0-0.832 0.608-1.408t1.408-0.576 1.408 0.576l2.848 2.816 7.072-7.040q0.576-0.608 1.408-0.608t1.408 0.608 0.608 1.408-0.608 1.408l-8.48 8.48q-0.576 0.608-1.408 0.608t-1.408-0.608l-4.256-4.256q-0.608-0.576-0.608-1.408z">
        clip-rule="evenodd"></path>
        </svg>

    </span>
</div>
<div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
        {{__('Success') }}
    </div>
    <div class="alert-description text-sm text-green-600">
        {{ session('success') }}
    </div>
</div>

</div>
    
@endif

<!-- @if (session('success'))
<div class="flashmessage alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 py-5 mb-4">
<div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
<span class="text-green-500">
<svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
<path fill-rule="evenodd"
d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
clip-rule="evenodd"></path>
</svg>
</span>
</div>
<div class="alert-content ml-4">
<div class="alert-title font-semibold text-lg text-green-800">
{{ __('Success') }}
</div>
<div class="alert-description text-sm text-green-600">
{{ session('success') }}
</div>
</div>
</div>

@endif -->