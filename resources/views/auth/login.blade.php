<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login - Online Voting System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Styles -->
        <style>
            body {
                background: linear-gradient(135deg, #3b82f6, #9333ea);
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                font-family: 'Instrument Sans', sans-serif;
            }
            .login-container {
                background: white;
                color: black;
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 350px;
            }
            .login-container h2 {
                margin-bottom: 10px;
                font-weight: 600;
            }
            .login-container input {
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .login-container .options {
                display: flex;
                justify-content: space-between;
                font-size: 14px;
                margin-top: 10px;
            }
            .login-container button {
                width: 100%;
                background: #3b82f6;
                color: white;
                padding: 10px;
                margin-top: 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .login-container button:hover {
                background: #2563eb;
            }
            .login-container .signup-link {
                margin-top: 15px;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Sign In</h2>
            <p>Welcome back, you've been missed!</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="password" name="password" placeholder="Create Password" required>
                <div class="options">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="signup-link">Don't Have an Account? <a href="{{ route('register') }}">Sign Up</a></div>
        </div>
    </body>
</html>
