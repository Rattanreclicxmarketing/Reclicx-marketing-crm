<!DOCTYPE html>
<html>
<head>
    <title>Verification Orders</title>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:
    radial-gradient(circle at top left,#1e293b,#020617 60%);
    color:#fff;
    display:flex;
    min-height:100vh;
    overflow-x:hidden;
}

.container{

    width:100%;
    background:rgba(255,255,255,0.05);

    border:1px solid rgba(255,255,255,0.08);

    backdrop-filter:blur(20px);

    padding:30px;

    border-radius:24px;

    box-shadow:
    0 15px 40px rgba(0,0,0,0.3);

}

.container h2{

    font-size:34px;

    margin-bottom:25px;

    font-weight:800;

    background:
    linear-gradient(90deg,#fff,#60a5fa);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

/* TABLE */

table{

    width:100%;

    border-collapse:collapse;

    overflow:hidden;

}

table th{

    background:rgba(255,255,255,0.08);

    color:#fff;

    padding:18px;

    text-align:left;

    font-size:13px;

    text-transform:uppercase;

    letter-spacing:1px;

}

table td{

    padding:18px;

    color:#e2e8f0;

    border-bottom:
    1px solid rgba(255,255,255,0.05);

}

table tr{

    transition:0.3s;

}

table tr:hover{

    background:
    rgba(255,255,255,0.04);

}

/* STATUS */

.status{

    background:
    linear-gradient(90deg,#16a34a,#22c55e);

    color:#fff;

    padding:8px 16px;

    border-radius:50px;

    font-size:12px;

    font-weight:700;

    text-transform:uppercase;

    display:inline-block;

}

/* BUTTON */

.btn{

    display:inline-block;

    background:
    linear-gradient(90deg,#2563eb,#7c3aed);

    color:#fff;

    padding:11px 20px;

    text-decoration:none;

    border-radius:12px;

    font-weight:600;

    transition:0.3s;

    box-shadow:
    0 10px 25px rgba(37,99,235,0.25);

}

.btn:hover{

    transform:translateY(-3px);

    box-shadow:
    0 15px 35px rgba(124,58,237,0.35);

}

/* TRACKING BOXES */

td{

    font-size:14px;

}

/* RESPONSIVE */

@media(max-width:991px){

    body{
        padding:15px;
    }

    .container{
        overflow:auto;
    }

    table{
        min-width:1200px;
    }

}

/* SIDEBAR */

.sidebar{
    width:240px;
    height:100vh;
    background:rgba(15,23,42,0.95);
    backdrop-filter:blur(20px);
    border-right:1px solid rgba(255,255,255,0.08);
    position:fixed;
    padding:30px 20px;
    overflow-y:auto;
    box-shadow:0 0 40px rgba(0,0,0,0.5);
}

.logo{
    font-size:30px;
    font-weight:800;
    margin-bottom:45px;
    letter-spacing:1px;
    background:linear-gradient(90deg,#60a5fa,#a855f7);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.menu a{
    display:flex;
    align-items:center;
    gap:12px;
    text-decoration:none;
    color:#cbd5e1;
    padding:15px 18px;
    margin-bottom:15px;
    border-radius:16px;
    transition:0.35s;
    background:rgba(255,255,255,0.03);
    border:1px solid transparent;
    font-weight:500;
}

.menu a:hover{
    transform:translateX(6px);
    background:linear-gradient(90deg,#2563eb,#7c3aed);
    color:#fff;
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 12px 30px rgba(37,99,235,0.35);
}

.main{
    margin-left:240px;
    width:100%;
    padding:35px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.topbar h1{
    font-size:34px;
    font-weight:800;
}

</style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        RECLICX CRM
    </div>

    <div class="menu">

        <a href="/admin">📊 Dashboard</a>

        <a href="{{ route('leads.index') }}">📞 Leads</a>

        <a href="{{ route('users.create') }}">👨‍💼 Team Leaders</a>

        <a href="{{ route('users.index') }}">👥 Users</a>

        <a href="{{ route('verification') }}">✅ Verification</a>

        <a href="{{ route('dispatch') }}">🚚 Dispatch</a>

        <a href="{{ route('ndr') }}">📦 NDR</a>

        <a href="#">📈 Reports</a>
<a href="#">⚙ Settings</a>

    </div>

</div>

<div class="main">

<div class="topbar">

    <div>

    <h3>Welcome Admin</h3>

    <br>

    <form method="POST" action="{{ route('logout') }}">
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
    

<div class="container">

    <h2>✅ Verified Orders</h2>

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

</div>

</body>
</html>