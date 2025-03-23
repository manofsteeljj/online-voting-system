<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Online Voting System</title>
    <style>
        /* General Page Styling */
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, #ffffff,rgb(56, 53, 112)); /* White gradient like login page */
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

/* Form Box */
.form-box {
    background: #ffffff; /* White background */
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    width: 350px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Lighter shadow */
    color: #000000;
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Form Inputs */
.input-group {
    text-align: left;
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    font-size: 16px;
}

/* Error Message */
.error {
    color: #ff4d4d;
    font-size: 12px;
    margin-top: 5px;
}

/* Buttons */
.btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    border: none;
    cursor: pointer;
    width: 100%;
}

.primary {
    background: #4a90e2;
    color: white;
}

.primary:hover {
    background: #357ae8;
}

.form-box label, 
.form-box p, 
.form-box a {
    color: #333333; /* Dark gray for better readability */
}

/* Input fields */
.form-box input {
    color: #000000; /* Black text in input fields */
    border: 1px solid #ccc;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Register</h1>
            <p>Create an account to start voting securely.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') <p class="error">{{ $message }}</p> @enderror
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <p class="error">{{ $message }}</p> @enderror
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password') <p class="error">{{ $message }}</p> @enderror
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation') <p class="error">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="btn primary">Register</button>

                <p class="switch-auth">
                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
