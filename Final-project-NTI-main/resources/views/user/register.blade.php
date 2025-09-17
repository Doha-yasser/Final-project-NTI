<!-- Hello regist -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form input {
            width: 90%;
        }

        .form {
            width: 30%;
            margin: auto;
            background-color: lightgray;
            justify-content: center;
            align-items: center;
            padding: 9px;
        }

        .btn {
            background-color: green;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <form action="{{ route('user.store') }}" method="post" class="form">
        @csrf
        <div>
            <input type="text" placeholder="Name" name="name"><br><br>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="email" placeholder="Email" name="email"><br><br>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="password" placeholder="Password" name="password"><br><br>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="Confirm Password"><br><br>
            @error('password_confirmation')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="student">Student</label>
            <input type="radio" name="type" id="type" value="student">
            <label for="instractor">Instractor</label>
            <input type="radio" name="type" id="instractor" value="instractor">
        </div>
        <input type="submit" value="Register" class="btn">
    </form>
</body>

</html>