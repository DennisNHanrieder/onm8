<!DOCTYPE html>
<html>
<head>
    <title>Create Pride Shark Subscriber</title>
    <style>
        body {
            background: linear-gradient(90deg, #e40303, #ff8c00, #ffed00, #008026, #004dff, #750787);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            text-shadow: 2px 2px #000;
        }

        form {
            background: rgba(0,0,0,0.4);
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: none;
            margin-top: 5px;
        }

        input[type="checkbox"] {
            margin-top: 10px;
        }

        button, a {
            background: #FFDC00;
            color: #001f3f;
            border: none;
            padding: 10px 15px;
            margin-top: 15px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s ease;
            display: inline-block;
        }

        button:hover, a:hover {
            background: #FF851B;
            cursor: pointer;
        }

        .error {
            color: #FFDC00;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>🦈🌈 Create a Pride Shark Subscriber</h1>

    @if($errors->any())
        <div class="error">
            <ul style="list-style: none; padding: 0;">
                @foreach($errors->all() as $error)
                    <li>🐟 {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('subscribers.store') }}">
        @csrf

        <label>Firstname:</label>
        <input type="text" name="firstname" value="{{ old('firstname') }}">

        <label>Lastname:</label>
        <input type="text" name="lastname" value="{{ old('lastname') }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>
            <input type="checkbox" name="newsletter" value="1" {{ old('newsletter') ? 'checked' : '' }}>
            Sign up for the pride shark newsletter!
        </label><br>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('subscribers.index') }}">Back to List</a>
</body>
</html>
