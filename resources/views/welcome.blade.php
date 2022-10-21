<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>
    </head>
    <body>
       <div class="text-gray-500 font-bold text-3xl">
           Hello
       </div>

       <div class="flex space-x-2 justify-center">
           <button class="text-gray-500">Button</button>
       </div>
    </body>
</html>
