<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Voting System</title>
    <style>
        /* General Page Styling */
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, #4a90e2, #1a237e);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
}

/* Centered Container */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Welcome Box */
.welcome-box {
    background: rgba(0, 0, 0, 0.8);
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    width: 350px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

/* Heading */
h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Buttons */
.buttons {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    width: 120px;
    padding: 10px;
    text-align: center;
    font-size: 16px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.login {
    background: #4a90e2;
    color: white;
}

.login:hover {
    background: #357ae8;
}

.register {
    background: #1a237e;
    color: white;
    margin-left: 10px;
}

.register:hover {
    background: #151b63;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <h1>Welcome to Online Voting System</h1>
            <p>Secure and easy voting at your fingertips.</p>
            <div class="buttons">
                <a href="{{ route('login') }}" class="btn login">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn register">Register</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
