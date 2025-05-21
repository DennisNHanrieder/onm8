<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Form</title>

    </head>
    <body>

    <h1>Task Form</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{ url('/task') }}">
        @csrf

        <label>Task:<br>
            <input name="task" value="{{ old('task') }}"><br>
        </label>
        <label>Due Date:<br>
            <input type="date" name="dueDate" value="{{ old('dueDate') }}"><br>
        </label>
        <input type="submit">

    </form>
        
    </body>
</html>
