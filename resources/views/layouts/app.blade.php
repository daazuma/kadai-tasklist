<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.10/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>task list</title>
    </head>
    <body>
            {{-- nav_bar --}}
            @include("commons.navbar")

            <div class="container mx-auto">
                {{-- error_message --}}
                @include("commons.error_messages")

                @yield("content")
            </div>

    </body>
</html>
