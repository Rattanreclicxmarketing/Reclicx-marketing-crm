<!DOCTYPE html>
<html>
<head>
    <title>Verification Orders</title>

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

    <h2>Verified Orders</h2>

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

                <a href="{{ route('leads.show',$lead->id) }}"
                    class="btn">

                    View

                </a>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>