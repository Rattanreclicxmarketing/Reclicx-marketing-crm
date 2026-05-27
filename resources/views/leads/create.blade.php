<!DOCTYPE html>
<html>
<head>
    <title>Add Lead</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:700px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h2{
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:6px;
        }

        button{
            background:#2563eb;
            color:#fff;
            border:none;
            padding:12px 20px;
            border-radius:6px;
            cursor:pointer;
        }

        button:hover{
            background:#1d4ed8;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Add New Lead</h2>

    <form action="{{ route('leads.store') }}" method="POST">

        @csrf

        <input type="text" name="customer_name" placeholder="Customer Name" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <input type="email" name="email" placeholder="Email">

        <input type="text" name="product" placeholder="Product">

        <input type="number" name="amount" placeholder="Amount">

        <button type="submit">Save Lead</button>

    </form>

</div>

</body>
</html>