<!DOCTYPE html>
<html>
<head>

    <title>Edit Lead</title>

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

    <h2>Edit Lead</h2>

    <form action="{{ route('leads.update',$lead->id) }}"
        method="POST">

        @csrf

        <input type="text"
            name="customer_name"
            value="{{ $lead->customer_name }}"
            placeholder="Customer Name">

        <input type="text"
            name="phone"
            value="{{ $lead->phone }}"
            placeholder="Phone">

        <input type="text"
            name="address"
            value="{{ $lead->address }}"
            placeholder="Address">

        <input type="text"
            name="product"
            value="{{ $lead->product }}"
            placeholder="Product">

        <input type="number"
            name="amount"
            value="{{ $lead->amount }}"
            placeholder="Amount">

        <select name="status">

            <option value="new_lead">New Lead</option>

            <option value="interested">Interested</option>

            <option value="verified">Verified</option>

            <option value="dispatched">Dispatched</option>

            <option value="delivered">Delivered</option>

        </select>

        <button type="submit">

            Update Lead

        </button>

    </form>

</div>

</body>
</html>