<!DOCTYPE html>
<html>
<head>
    <title>Shark Newsletter</title>
    <style>
        body {
            background: linear-gradient(to bottom, #001f3f, #0074D9);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 40px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #7FDBFF;
        }

        form {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 15px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px #0074D9;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-top: 10px;
        }

        button {
            margin-top: 20px;
            padding: 12px 25px;
            border: none;
            background-color: #39CCCC;
            color: #001f3f;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #3D9970;
        }

        .error {
            color: #FFDC00;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .success {
            color: #2ECC40;
            margin-bottom: 20px;
        }

        .shark {
            margin-top: 20px;
            font-size: 4em;
        }
    </style>
</head>
<body>
    <h1>🦈 Shark Newsletter</h1>
    <p>Make your shark account</p>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
        <pre>{{ print_r(session('data'), true) }}</pre>
    @endif

    <form method="POST" action="{{ route('form.submit') }}">
        @csrf

        <label>Sharks Firstname:</label>
        <input type="text" name="firstname" value="{{ old('firstname') }}">
        @error('firstname')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Sharks Lastname:</label>
        <input type="text" name="lastname" value="{{ old('lastname') }}">
        @error('lastname')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Sharks Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>
            <input type="checkbox" name="newsletter" value="1" {{ old('newsletter') ? 'checked' : '' }}>
            Sign up for shark alerts
        </label>
        @error('newsletter')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Shark friendly submit button 🦈</button>
    </form>

    @if($errors->any())
        <div class="error" style="margin-top: 20px;">
            <strong>Something's fishy:</strong>
            <ul style="list-style: none; padding-left: 0;">
                @foreach($errors->all() as $error)
                    <li>🐟 {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="shark">🌊</div>
</body>
</html>
