<!DOCTYPE html>
<html>
<head>
    <title>Pride Shark Subscribers</title>
    <style>
        body {
            background: linear-gradient(90deg, #e40303, #ff8c00, #ffed00, #008026, #004dff, #750787);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #fff;
            padding: 10px;
        }

        th {
            background: rgba(0,0,0,0.5);
        }

        a, button {
            background: #FFDC00;
            color: #001f3f;
            border: none;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        a:hover, button:hover {
            background: #FF851B;
            cursor: pointer;
        }

        .success {
            color: #2ECC40;
            margin: 10px 0;
        }

        .pride-shark {
            font-size: 3em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>🏳️‍🌈🦈 Shark Subscribers</h1>
    <div class="pride-shark"></div>
    <a href="{{ route('subscribers.create') }}">+ Create New Subscriber</a>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Newsletter</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber->firstname }}</td>
                    <td>{{ $subscriber->lastname }}</td>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->newsletter ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('subscribers.edit', $subscriber) }}">Edit</a>
                        <form action="{{ route('subscribers.destroy', $subscriber) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this pride shark?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
