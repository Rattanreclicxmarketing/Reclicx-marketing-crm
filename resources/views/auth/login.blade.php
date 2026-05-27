<!DOCTYPE html>
<html>
<head>

    <title>RECLICX CRM LOGIN</title>

    <meta charset="UTF-8">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial;
            background:#111827;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-box{
            width:400px;
            background:#fff;
            padding:40px;
            border-radius:15px;
            box-shadow:0 0 25px rgba(0,0,0,0.3);
        }

        .logo{
            text-align:center;
            font-size:30px;
            font-weight:bold;
            color:#2563eb;
            margin-bottom:10px;
        }

        .sub{
            text-align:center;
            color:#666;
            margin-bottom:30px;
        }

        input{
            width:100%;
            padding:14px;
            border:1px solid #ddd;
            border-radius:8px;
            margin-bottom:18px;
            font-size:15px;
        }

        button{
            width:100%;
            padding:14px;
            border:none;
            background:#2563eb;
            color:#fff;
            border-radius:8px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#1d4ed8;
        }

        .remember{
            margin-bottom:18px;
            font-size:14px;
        }

        .forgot{
            display:block;
            text-align:right;
            margin-bottom:15px;
            color:#2563eb;
            text-decoration:none;
            font-size:14px;
        }

        .forgot:hover{
            text-decoration:underline;
        }

        .error{
            color:red;
            font-size:14px;
            margin-bottom:10px;
        }

    </style>

</head>
<body>

<div class="login-box">

    <div class="logo">
        RECLICX CRM
    </div>

    <div class="sub">
        Login To Continue
    </div>

    @if(session('status'))

        <div class="error">
            {{ session('status') }}
        </div>

    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <input
            type="email"
            name="email"
            placeholder="Enter Email"
            required
        >

        @error('email')

            <div class="error">
                {{ $message }}
            </div>

        @enderror

        <input
            type="password"
            name="password"
            placeholder="Enter Password"
            required
        >

        @error('password')

            <div class="error">
                {{ $message }}
            </div>

        @enderror

        <div class="remember">

            <input type="checkbox" name="remember">

            Remember Me

        </div>

        @if (Route::has('password.request'))

            <a class="forgot"
               href="{{ route('password.request') }}">

                Forgot Password?

            </a>

        @endif

        <button type="submit">

            LOGIN

        </button>

    </form>

</div>

</body>
</html>