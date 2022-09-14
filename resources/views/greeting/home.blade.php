<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
    <style>
        ul {
            list-style: none
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li>
                <button>
                    <a href="{{ route('phone') }}">Phone</a>
                </button>
                <button>
                    <a href="{{ route('list') }}">Grocery</a>
                </button>
            </li>
        </ul>
    </header>
    <h1>{{ $saluto }}</h1>
</body>


</html>
