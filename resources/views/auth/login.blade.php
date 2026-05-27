<!DOCTYPE html>
<html>
<head>

    <title>RECLICX CRM</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            font-family:'Poppins',sans-serif;

            height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

            overflow:hidden;

            background:
            linear-gradient(
            135deg,
            #020617,
            #0f172a,
            #111827,
            #1e293b
            );

        }

        body::before{

            content:'';

            position:absolute;

            width:500px;

            height:500px;

            background:#2563eb;

            border-radius:50%;

            top:-150px;

            left:-120px;

            filter:blur(120px);

            opacity:0.5;

        }

        body::after{

            content:'';

            position:absolute;

            width:400px;

            height:400px;

            background:#7c3aed;

            border-radius:50%;

            bottom:-120px;

            right:-100px;

            filter:blur(120px);

            opacity:0.4;

        }

        .login-box{

            width:420px;

            padding:45px;

            border-radius:25px;

            backdrop-filter:blur(18px);

            background:rgba(255,255,255,0.08);

            border:1px solid rgba(255,255,255,0.15);

            box-shadow:
            0 0 40px rgba(0,0,0,0.5);

            position:relative;

            z-index:10;

        }

        .logo{

            text-align:center;

            font-size:38px;

            font-weight:700;

            color:#fff;

            margin-bottom:8px;

            letter-spacing:1px;

        }

        .logo span{

            color:#3b82f6;

        }

        .sub{

            text-align:center;

            color:#cbd5e1;

            margin-bottom:35px;

            font-size:14px;

        }

        .input-box{

            margin-bottom:20px;

        }

        input{

            width:100%;

            padding:16px 18px;

            border:none;

            outline:none;

            border-radius:14px;

            background:rgba(255,255,255,0.09);

            color:#fff;

            font-size:15px;

            border:1px solid rgba(255,255,255,0.08);

            transition:0.3s;

        }

        input:focus{

            border:1px solid #3b82f6;

            box-shadow:
            0 0 15px rgba(59,130,246,0.5);

        }

        input::placeholder{

            color:#cbd5e1;

        }

        .remember{

            display:flex;

            justify-content:space-between;

            align-items:center;

            margin-top:10px;

            margin-bottom:25px;

            color:#e2e8f0;

            font-size:14px;

        }

        .remember a{

            color:#60a5fa;

            text-decoration:none;

        }

        .remember a:hover{

            text-decoration:underline;

        }

        button{

            width:100%;

            padding:16px;

            border:none;

            border-radius:14px;

            background:
            linear-gradient(
            135deg,
            #2563eb,
            #7c3aed
            );

            color:#fff;

            font-size:16px;

            font-weight:600;

            cursor:pointer;

            transition:0.3s;

        }

        button:hover{

            transform:translateY(-2px);

            box-shadow:
            0 10px 20px rgba(37,99,235,0.4);

        }

        .footer{

            text-align:center;

            margin-top:25px;

            color:#94a3b8;

            font-size:13px;

        }

        .error{

            color:#f87171;

            margin-top:5px;

            font-size:13px;

        }

    </style>

</head>
<body>

<div class="login-box">

    <div class="logo">

        RECLIC<span>X</span>

    </div>

    <div class="sub">

        Enterprise CRM Dashboard Access

    </div>

    <form method="POST"
          action="{{ route('login') }}">

        @csrf

        <div class="input-box">

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

        </div>

        <div class="input-box">

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

        </div>

        <div class="remember">

            <label>

                <input type="checkbox"
                       name="remember">

                Remember

            </label>

            @if (Route::has('password.request'))

            <a href="{{ route('password.request') }}">

                Forgot Password?

            </a>

            @endif

        </div>

        <button type="submit">

            ACCESS CRM

        </button>

    </form>

    <div class="footer">

        Secure CRM Environment • RECLICX

    </div>

</div>

</body>
</html>