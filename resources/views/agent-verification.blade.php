<!DOCTYPE html>
<html>
<head>

    <title>Verification Leads</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#f3f4f6;
            display:flex;
        }

        .sidebar{
            width:260px;
            height:100vh;
            background:#111827;
            color:#fff;
            padding:30px 20px;
            position:fixed;
        }

        .logo{
            font-size:24px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .menu a{
            display:block;
            color:#d1d5db;
            text-decoration:none;
            padding:14px 15px;
            margin-bottom:10px;
            border-radius:8px;
            transition:0.3s;
        }

        .menu a:hover{
            background:#2563eb;
            color:#fff;
        }

        .main{
            margin-left:260px;
            width:100%;
            padding:30px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }

        .card{
            background:#fff;
            padding:25px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .card h2{
            font-size:30px;
            margin-top:10px;
            color:#111827;
        }

        .card p{
            color:#6b7280;
        }

        .table-box{
            background:#fff;
            margin-top:30px;
            padding:20px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th,
        table td{
            padding:14px;
            border-bottom:1px solid #e5e7eb;
            text-align:left;
        }

        table th{
            background:#f9fafb;
        }

        .status{
            padding:7px 14px;
            border-radius:30px;
            color:#fff;
            font-size:12px;
            font-weight:bold;
            display:inline-block;
            text-transform:capitalize;
        }

        .assigned_to_agent{
            background:#2563eb;
        }

        .order_placed{
    background:#2563eb;
}

.ringing{
    background:#0ea5e9;
}

.call_back{
    background:#f59e0b;
}

        .verified{
            background:#16a34a;
        }

        .cancelled{
            background:#dc2626;
        }

        .hold{
            background:#f59e0b;
        }

        .dispatch{
            background:#0891b2;
        }

        .delivered{
    background:#16a34a;
}

        .rto{
            background:#ea580c;
        }

        .btn{
            display:inline-block;
            background:#2563eb;
            color:#fff;
            padding:8px 14px;
            text-decoration:none;
            border-radius:6px;
            border:none;
            cursor:pointer;
        }

        select{
            padding:8px;
            border:1px solid #ddd;
            border-radius:6px;
            width:100%;
            margin-top:8px;
        }

    </style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        AGENT PANEL
    </div>

   <div class="menu">

    <a href="/public/agent">
        Dashboard
    </a>

    <a href="/public/agent/leads">
        Leads
    </a>

    <a href="/public/agent/verification">
        Verification
    </a>

    <a href="/public/agent/dispatch">
        Dispatch
    </a>

    <a href="/public/agent/hold">
        Hold
    </a>

    <a href="/public/agent/ndr">
        NDR
    </a>

    <a href="#">
        Settings
    </a>

</div>

</div>

<div class="main">

    <div class="topbar">

        <h2>Verification Leads</h2>

        <div>

            <h3>
                Welcome Agent
            </h3>

            <br>

            <form method="POST"
                action="{{ route('logout') }}">

                @csrf

                <button type="submit"
                    style="
                        background:red;
                        color:white;
                        border:none;
                        padding:10px 15px;
                        border-radius:6px;
                        cursor:pointer;
                    ">

                    Logout

                </button>

            </form>

        </div>

    </div>

    <div class="table-box">
    <form method="GET">

    <div style="
        display:flex;
        gap:10px;
        margin-bottom:20px;
    ">

        <input
            type="text"
            name="search"
            placeholder="Search customer or phone"
            value="{{ request('search') }}"
            style="
                padding:10px;
                width:220px;
                border:1px solid #ddd;
                border-radius:6px;
            "
        >

        <select
            name="status"
            style="
                width:180px;
                border:1px solid #ddd;
                border-radius:6px;
            "
        >

            <option value="">
    All Status
</option>

<option value="verified">
    Verified
</option>

<option value="dispatch">
    Dispatch
</option>

<option value="delivered">
    Delivered
</option>

        </select>

        <input
            type="date"
            name="date"
            value="{{ request('date') }}"
            style="
                padding:10px;
                border:1px solid #ddd;
                border-radius:6px;
            "
        >

        <button
            type="submit"
            class="btn">

            Search

        </button>

    </div>

</form>

        <h2>Verification Leads</h2>

        <table>

            <tr>

                <th>Customer</th>

                <th>Phone</th>

                <th>Address</th>

                <th>Product</th>

                <th>Status</th>

                <th>Amount</th>

                <th>Action</th>

            </tr>

            @foreach($leads as $lead)

            <tr>

                <td>{{ $lead->customer_name }}</td>

                <td>{{ $lead->phone }}</td>

                <td>{{ $lead->address }}</td>

                <td>{{ $lead->product }}</td>

                <td>

                    <span class="status {{ $lead->status }}">

                        {{ str_replace('_',' ',$lead->status) }}

                    </span>

                </td>

                <td>₹{{ $lead->amount }}</td>

                <td>

                    <a href="{{ route('leads.edit',$lead->id) }}"
                        class="btn">

                        Edit

                    </a>

                    <form
                        action="{{ route('leads.updateStatus',$lead->id) }}"
                        method="POST"
                        style="margin-top:10px;">

                        @csrf

                        <select name="status">

                       <option value="verified">
    Verified
</option>

<option value="dispatch">
    Dispatch
</option>

<option value="delivered">
    Delivered
</option>

</select>



                        <button
                            type="submit"
                            class="btn"
                            style="margin-top:8px; width:100%;">

                            Update

                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>