<div class="p-8">
    <a name="{{ $section->name ?? 'default' }}"></a>
    <h2 class="inline-block font-bold text-3xl mb-3 mr-5">{{ $section->title ?? 'Default Title' }}</h2>
    <modal class="inline" button_classes="p-1.5 bg-red-400 rounded-lg border-purple-800 text-center">
        <template #button_text>
            Edit Section
        </template>
        <template #header>
            Edit Section
        </template>
        <template #content>
            <x-edit-section-form anchor="{{ $section->name }}" /> 
        </template>
    </modal>
    <hr class="border-purple-800 w-1/4">
    <div class="flex justify-between">
        <p class="w-2/3">
            {{ $section->body ?? 'This is the default text for a section.' }}
        </p>
        <img src="{{ isset($section->img_src) ? asset($section->img_src) : asset('/images/default.jpg') }}"
         alt="{{ $section->img_alt ?? '' }}" class="w-56 h-72 block ml-auto mr-auto rounded-lg border-purple-800 border-4">
    </div>
</div>