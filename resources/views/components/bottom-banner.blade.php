{{-- 
    // Oreilly Training | Laravel from Scratch | Chapter 5: Components and Styling | Top & Bottom Banners
    // DONE : Videos named: CH-05 Mobile Menu Toggle | CH-05 Hero Component | CH-05 Top and Bottom Banners
    // TODO : New Chapter: CH-06 Mobile Menu Toggle | CH-05 Hero Component | CH-05 Top and Bottom Banners
--}}

@props([
    'heading' => 'Looking to hire?',
    'subheading' => 'Post your job listing now and find the perfect candidate.',
])

<section class="container mx-auto my-6">
    <div class="bg-blue-800 text-white rounded p-4 flex items-center justify-between flex-col md:flex-row gap-4">
        <div>
            <h2 class="text-xl font-semibold">{{ $heading }}</h2>
            <p class="text-gray-200 text-lg mt-2">
                {{ $subheading }}
            </p>
        </div>
        <x-button-link url="/jobs/create" icon="edit"> Create Job </x-button-link>
    </div>
</section>
