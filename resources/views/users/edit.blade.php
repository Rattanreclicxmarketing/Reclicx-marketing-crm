<!DOCTYPE html>
<html>
<head>

    <title>Edit User</title>

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
            margin-top:15px;
            border:1px solid #ddd;
            border-radius:6px;
        }

        button{
            background:#2563eb;
            color:#fff;
            padding:12px 20px;
            border:none;
            border-radius:6px;
            margin-top:20px;
            cursor:pointer;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Edit User</h2>

    <form action="{{ route('users.update',$user->id) }}"
        method="POST">

        @csrf

        <input
            type="text"
            name="name"
            value="{{ $user->name }}"
            placeholder="Name"
        >

        <input
            type="email"
            name="email"
            value="{{ $user->email }}"
            placeholder="Email"
        >

        <select name="role">

            <option value="admin">Admin</option>

            <option value="team_leader">Team Leader</option>

            <option value="agent">Agent</option>

            <option value="verification">Verification</option>

            <option value="dispatch">Dispatch</option>

            <option value="ndr">NDR</option>

        </select>

        <button type="submit">

            Update User

        </button>

    </form>

</div>

</body>
</html>