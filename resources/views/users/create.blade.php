<!DOCTYPE html>
<html>
<head>

    <title>Create User</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:600px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
        }

        input,
        select{
            width:100%;
            padding:12px;
            margin-bottom:15px;
        }

        button{
            background:#2563eb;
            color:#fff;
            border:none;
            padding:12px 20px;
            border-radius:6px;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Create User</h2>

    <form action="{{ route('users.store') }}"
        method="POST">

        @csrf

        <input type="text"
            name="name"
            placeholder="Name">

        <input type="email"
            name="email"
            placeholder="Email">

        <input type="password"
            name="password"
            placeholder="Password">

        <select name="role">

            <option value="team_leader">
                Team Leader
            </option>

            <option value="agent">
                Agent
            </option>

            <option value="verification">
                Verification
            </option>

            <option value="dispatch">
                Dispatch
            </option>

            <option value="ndr">
                NDR
            </option>

        </select>

        <button type="submit">

            Create User

        </button>

    </form>

</div>

</body>
</html>