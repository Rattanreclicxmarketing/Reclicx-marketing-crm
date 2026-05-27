<!DOCTYPE html>
<html>
<head>

    <title>All Users</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:1100px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th,
        table td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        table th{
            background:#2563eb;
            color:#fff;
        }

        .btn{
            display:inline-block;
            background:#2563eb;
            color:#fff;
            padding:10px 18px;
            text-decoration:none;
            border-radius:6px;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>All Users</h2>

    <a href="{{ route('users.create') }}"
        class="btn">

        + Create User

    </a>

    <table>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Role</th>

            <th>Actions</th>

        </tr>

        @foreach($users as $user)

        <tr>

            <td>
                {{ $user->id }}
            </td>

            <td>
                {{ $user->name }}
            </td>

            <td>
                {{ $user->email }}
            </td>

            <td>

                {{ $user->roles->first()->name ?? 'No Role' }}

            </td>

            <td>

    <a href="{{ route('users.edit',$user->id) }}"
        class="btn"
        style="background:orange;">

        Edit

    </a>

    <a href="{{ route('users.delete',$user->id) }}"
        class="btn"
        style="background:red; margin-left:5px;">

        Delete

    </a>

</td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>