<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    	<div>
            <h1 class="text-lg font-bold">You have recieved a message</h1>
                <span class="block">{{ $messageData->name }} has sent you a message at {{ date('Y-m-d', time()) }}</span>
                <span class="block">Message Body:</span>
                <div class="block">
                    {{ $messageData->contact_body }}
                </div>
                <div class="block">
                    You can contact {{ $messageData->name }} at {{ $messageData->email }} and {{ $message->phone }}.
                </div>
            </div>
		</div>
    </body>
</html>