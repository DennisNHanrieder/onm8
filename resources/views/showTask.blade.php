<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show Task</title>

    </head>
    <body>

    <h1>Show Task</h1>

    <p>
        Task: {{ $task }}<br>
        Due Date: {{ $dueDate }}
    </p>
        
    </body>
</html>
