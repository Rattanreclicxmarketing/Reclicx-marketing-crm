<!DOCTYPE html>
<html>
<head>
    <title>All Leads</title>

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

        .success{
            background:#16a34a;
            color:#fff;
            padding:10px;
            border-radius:6px;
            margin-bottom:20px;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>All Leads</h2>

    <a href="{{ route('leads.create') }}" class="btn">
        + Add Lead
    </a>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <table>

        <tr>

    <th>Date</th>

    <th>Name</th>

    <th>Phone</th>

    <th>Address</th>

    <th>Product</th>

    <th>Price</th>

    <th>Status</th>

    <th>Team Leader</th>

    <th>Agent</th>

    <th>Actions</th>

</tr>

        @foreach($leads as $lead)

<tr>

    <td>
        {{ $lead->created_at->format('d M Y') }}
    </td>

    <td>
        {{ $lead->customer_name }}
    </td>

    <td>
        {{ $lead->phone }}
    </td>

    <td>
        {{ $lead->address }}
    </td>

    <td>
        {{ $lead->product }}
    </td>

    <td>
        ₹{{ $lead->amount }}
    </td>

    <td>

<form action="{{ route('leads.updateStatus',$lead->id) }}"
    method="POST">

    @csrf

    <select name="status"
        onchange="this.form.submit()">

        <option value="new_lead"
            {{ $lead->status == 'new_lead' ? 'selected' : '' }}>

            New Lead

        </option>

        <option value="interested"
            {{ $lead->status == 'interested' ? 'selected' : '' }}>

            Interested

        </option>

        <option value="verified"
            {{ $lead->status == 'verified' ? 'selected' : '' }}>

            Verified

        </option>

        <option value="hold"
            {{ $lead->status == 'hold' ? 'selected' : '' }}>

            Hold

        </option>

        <option value="cancelled"
            {{ $lead->status == 'cancelled' ? 'selected' : '' }}>

            Cancelled

        </option>

        <option value="rto"
            {{ $lead->status == 'rto' ? 'selected' : '' }}>

            RTO

        </option>

        <option value="dispatched"
            {{ $lead->status == 'dispatched' ? 'selected' : '' }}>

            Dispatched

        </option>

        <option value="delivered"
            {{ $lead->status == 'delivered' ? 'selected' : '' }}>

            Delivered

        </option>

    </select>

</form>

</td>

    <td>
        {{ $lead->teamLeader->name ?? 'Not Assigned' }}
    </td>

    <td>
       {{ $lead->agent->name ?? 'Not Assigned' }}
    </td>
<td>

    <a href="{{ route('leads.show',$lead->id) }}"
        class="btn">

        View

    </a>

    <a href="{{ route('leads.edit',$lead->id) }}"
        class="btn"
        style="background:orange; margin-left:5px;">

        Edit

    </a>

    <a href="{{ route('leads.delete',$lead->id) }}"
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