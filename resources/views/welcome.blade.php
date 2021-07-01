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
                <nav class="flex justify-around p-5 font-bold">
                    <a href="#about" class="hover:text-gray-800 text-xl duration-300">About</a>
                    <a href="#experience" class="hover:text-gray-800 text-xl duration-300">Experience</a>
                    <a href="#education" class="hover:text-gray-800 text-xl duration-300">Education</a>
                    <a href="#skills" class="hover:text-gray-800 text-xl duration-300">Skills</a>
                    <a href="#contact" class="hover:text-gray-800 text-xl duration-300">Contact</a>
                    @guest
                    <modal class="inline" button_classes="hover:text-gray-800 text-xl font-bold duration-300">
                        <template #button_text>
                            Login
                        </template>
                        <template #header>
                            Log In
                        </template>
                        <template #content>
                            <x-login-form />
                        </template>
                    </modal>
                    @endguest
                    @auth
                    <a href="/logout" class="hover:text-gray-800 text-xl duration-300">Log Out</a>
                    @endauth
                </nav>
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
