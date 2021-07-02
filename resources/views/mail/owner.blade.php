<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    	<div class="w-screen h-screen bg-gray-400 p-36">
    		<div class="w-full h-full bg-white text-center rounded-xl p-10 space-y-10 overflow-y-scroll">
    			<h1 class="text-center font-bold text-2xl">You Have a Message!</h1>
                <div class="w-1/2 space-y-5 ml-auto mr-auto">
                    <span class="block">{{ $messageData->name }} has sent you a message at {{ date('Y-m-d', time()) }}</span>
                    <span class="block">Message Body:</span>
                    <div>
                        {{ $messageData->contact_body }}
                    </div>
                    <div>
                        You can contact {{ $messageData->name }} at {{ $messageData->email }} and {{ $message->phone }}.
                    </div>
                </div>
    		</div>
    	</div>
    </body>
</html>