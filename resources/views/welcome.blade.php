<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div id="app">
            <error-message-list :errors='@json($errors->all())'>
            </error-message-list>
            <header class="w-full h-screen bg-header-bg bg-cover bg-fixed">
                @auth
                <navbar-menu :user="true"></navbar-menu>
                @endauth
                @guest
                <navbar-menu :user="false"></navbar-menu>
                @endguest
                <div class="flex flex-col w-full h-full justify-center mr-auto ml-auto items-center">
                    <div class="flex flex-col justify-around w-1/3 h-1/3 bg-white bg-opacity-80 rounded-xl p-5 text-center">
                        <h1 class="block font-bold text-4xl underline">Page Header</h1>
                        <h2 class="block font-bold text-3xl underline">Page Subheader</h2>
                    </div>
                </div>
            </header>
            <main class="w-full bg-white border-t-4 border-purple-600">
                @if (sizeof($sections) >= 1)
                    <a name="about"></a>
                    @component('components.text-section', ['section' => $sections[0]])
                    @endcomponent
                @else
                    <div class="p-5 w-full">
                        <modal class="inline" button_classes="block p-1.5 bg-purple-200 rounded-lg border border-purple-800 text-center ml-auto mr-auto">
                            <template #button_text>
                                Add About Section
                            </template>
                            <template #header>
                                Add "About" Section
                            </template>
                            <template #content>
                                <x-edit-section-form anchor="about" /> 
                            </template>
                        </modal>
                    </div>
                @endif
                <experience-slideshow></experience-slideshow>
                @if (sizeof($sections) >= 2)
                    <a name="education"></a>
                    @component('components.text-section', ['section' => $sections[1]])
                    @endcomponent
                @else
                    <div class="p-5 w-full">
                        <modal class="inline" button_classes="block p-1.5 bg-purple-200 rounded-lg border border-purple-800 text-center ml-auto mr-auto">
                            <template #button_text>
                                Add Education Section
                            </template>
                            <template #header>
                                Add "Education" Section
                            </template>
                            <template #content>
                                <x-edit-section-form anchor="education" /> 
                            </template>
                        </modal>
                    </div>
                @endif
                <a name="skills"></a>
                <skillset-showcase></skillset-showcase>
                <a name="contact"></a>
                <contact-section></contact-section>
            </main>
        </div>
    </body>
</html>
