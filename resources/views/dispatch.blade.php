<!DOCTYPE html>
<html>
<head>
   <h2>Dispatch Orders</h2>

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
            background:#16a34a;
            color:#fff;
        }

        .status{
            background:#16a34a;
            color:#fff;
            padding:6px 12px;
            border-radius:6px;
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

    <h2>Dispatch Orders</h2>

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

            <th>Courier</th>

<th>Tracking</th>

<th>AWB</th>

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

                <span class="status">

                    Verified

                </span>

            </td>

            <td>
                {{ $lead->teamLeader->name ?? 'Not Assigned' }}
            </td>

            <td>
                {{ $lead->agent->name ?? 'Not Assigned' }}
            </td>

            <td>
    {{ $lead->courier_name ?? '-' }}
</td>

<td>
    {{ $lead->tracking_id ?? '-' }}
</td>

<td>
    {{ $lead->awb_number ?? '-' }}
</td>

            <td>

                <td>

    <a href="{{ route('leads.show',$lead->id) }}"
        class="btn">

        View

    </a>

    <br><br>

    <form method="POST"
          action="/dispatch/{{ $lead->id }}">

        @csrf

        <select name="courier_name">

    <option value="Blue Dart">Blue Dart</option>

    <option value="Delhivery">Delhivery</option>

    <option value="Ecom Express">Ecom Express</option>

    <option value="Amazon Shipping">Amazon Shipping</option>

    <option value="Xpressbees">Xpressbees</option>

    <option value="Shadowfax">Shadowfax</option>

    <option value="Ekart">Ekart</option>

    <option value="DTDC">DTDC</option>

</select>

        <br><br>

        <input type="text"
               name="tracking_id"
               placeholder="Tracking Number">

        <br><br>

        <input type="text"
               name="awb_number"
               placeholder="AWB Number">

        <br><br>

        <button type="submit"
                class="btn">

            Dispatch

        </button>

    </form>

</td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>