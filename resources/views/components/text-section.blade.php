<div class="p-8">
    <div class="flex flex-col-reverse justify-between md:flex-row">
        <div class="text-center md:text-left">
            <h2 class="inline-block font-bold text-3xl mb-3 mr-5">{{ $section->title ?? 'Default Title' }}</h2>
            @auth
            <modal class="inline" button_classes="p-1.5 bg-red-400 rounded-lg border-blue-800 text-center">
                <template #button_text>
                    Edit Section
                </template>
                <template #header>
                    Edit Section
                </template>
                <template #content>
                    @component('components.edit-section-form', ['section' => $section])
                    @endcomponent
                </template>
            </modal>
            @endauth
            <hr class="border-blue-800 w-full md:w-1/4">
            <div class="w-full defaultCSS">
                {!! $section->body ?? 'This is the default text for a section.' !!}
            </div>
        </div>
        <img src="{{ isset($section->img_src) ? asset($section->img_src) : asset('/images/default.jpg') }}"
         alt="{{ $section->img_alt ?? '' }}" class="w-56 h-72 block ml-auto mr-auto rounded-lg border-blue-800 border-4">
    </div>
</div>