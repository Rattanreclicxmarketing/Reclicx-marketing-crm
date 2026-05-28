<!DOCTYPE html>
<html>
<head>

    <title>Agent Dashboard</title>

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
    linear-gradient(
    135deg,
    #020617,
    #0f172a,
    #111827,
    #1e293b
    );

    color:#fff;
    display:flex;
    min-height:100vh;
    overflow-x:hidden;
}

/* SIDEBAR */

.sidebar{
    width:210px;
    height:100vh;
    background:
    rgba(15,23,42,0.95);

    backdrop-filter:blur(20px);

    border-right:
    1px solid rgba(255,255,255,0.08);

    position:fixed;

    padding:30px 20px;

    overflow-y:auto;

    box-shadow:
    0 0 40px rgba(0,0,0,0.5);
}

.logo{
    font-size:18px;
    font-weight:800;
    margin-bottom:45px;

    background:
    linear-gradient(90deg,#60a5fa,#a855f7);

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

/* MENU */

.menu a{

    display:flex;
    align-items:center;

    gap:12px;

    text-decoration:none;

    color:#cbd5e1;

    padding:15px 14px;

    margin-bottom:15px;

    border-radius:16px;

    transition:0.35s;

    background:
    rgba(255,255,255,0.03);

    font-weight:500;
}

.menu a:hover{

    transform:translateX(6px);

    background:
    linear-gradient(90deg,#2563eb,#7c3aed);

    color:#fff;

    box-shadow:
    0 12px 30px rgba(37,99,235,0.35);

}

.menu a.active{

    background:
    linear-gradient(90deg,#2563eb,#7c3aed);

    color:#fff;

    box-shadow:
    0 10px 25px rgba(37,99,235,0.35);

}

/* MAIN */

.main{
    margin-left:210px;
    width:100%;
    padding:35px;
}

/* TOPBAR */

.topbar{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:35px;

    padding:15px 20px;

    border-radius:22px;

    background:
    rgba(255,255,255,0.03);

    backdrop-filter:blur(18px);

    border:
    1px solid rgba(255,255,255,0.06);
}

.topbar h1{

    font-size:28px;

    font-weight:800;

    background:
    linear-gradient(90deg,#ffffff,#60a5fa,#a855f7);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

.user-box{

    background:
    rgba(255,255,255,0.05);

    padding:15px 20px;

    border-radius:18px;

    border:
    1px solid rgba(255,255,255,0.08);

    text-align:center;

}

/* CARDS */

.cards{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(200px,1fr));

    gap:25px;
}

.card{

    background:
    rgba(255,255,255,0.05);

    border:
    1px solid rgba(255,255,255,0.08);

    backdrop-filter:blur(18px);

    padding:18px;

    border-radius:22px;

    transition:0.4s;

    box-shadow:
    0 10px 35px rgba(0,0,0,0.25);

    position:relative;

    overflow:hidden;

}

.card:hover{
    transform:translateY(-6px);
}

.card::before{

    content:'';

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:3px;

    background:
    linear-gradient(90deg,#2563eb,#7c3aed);

}

.card p{

    color:#94a3b8;

    font-size:15px;
}

.card h2{

    font-size:22px;

    margin-top:12px;

    color:#fff;

    font-weight:700;
}

/* TABLE BOX */

.table-box{

    margin-top:35px;

    background:
    rgba(255,255,255,0.05);

    border-radius:24px;

    padding:28px;

    border:
    1px solid rgba(255,255,255,0.08);

    backdrop-filter:blur(20px);

    overflow:auto;

    box-shadow:
    0 15px 40px rgba(0,0,0,0.25);

}

.table-box h2{

    margin-bottom:25px;

    font-size:28px;

    font-weight:700;
}

/* TABLE */

table{

    width:100%;

    border-collapse:collapse;
}

table th{

    background:
    rgba(255,255,255,0.08);

    color:#fff;

    padding:18px;

    font-size:13px;

    text-transform:uppercase;
}

table td{

    padding:18px;

    color:#e2e8f0;

    border-bottom:
    1px solid rgba(255,255,255,0.05);
}

table tr:hover{

    background:
    rgba(59,130,246,0.08);

    transition:0.3s;
}

/* STATUS */

.status{

    padding:8px 16px;

    border-radius:50px;

    color:#fff;

    font-size:12px;

    font-weight:700;

    display:inline-block;

    text-transform:uppercase;
}

.order_placed{
    background:linear-gradient(90deg,#2563eb,#60a5fa);
}

.ringing{
    background:linear-gradient(90deg,#0891b2,#06b6d4);
}

.call_back{
    background:linear-gradient(90deg,#f59e0b,#facc15);
    color:#111827;
}

.verified{
    background:linear-gradient(90deg,#16a34a,#22c55e);
}

.cancelled{
    background:linear-gradient(90deg,#dc2626,#ef4444);
}

.hold{
    background:linear-gradient(90deg,#f59e0b,#facc15);
    color:#111827;
}

.dispatch{
    background:linear-gradient(90deg,#7c3aed,#a855f7);
}

.rto{
    background:linear-gradient(90deg,#ea580c,#fb923c);
}

/* BUTTONS */

.btn,
button{

    background:
    linear-gradient(90deg,#2563eb,#7c3aed);

    color:#fff;

    border:none;

    padding:9px 16px;

    border-radius:14px;

    cursor:pointer;

    font-weight:600;

    transition:0.35s;

    box-shadow:
    0 10px 25px rgba(37,99,235,0.25);
}

.btn:hover,
button:hover{

    transform:translateY(-3px);

    box-shadow:
    0 18px 35px rgba(124,58,237,0.4);
}

/* INPUTS */

input,
select{

    width:100%;

    padding:12px 14px;

    border-radius:12px;

    border:
    1px solid rgba(255,255,255,0.08);

    background:
    rgba(255,255,255,0.05);

    color:white;

    outline:none;
}

select option{
    background:#111827;
}

input::placeholder{
    color:#94a3b8;
}

/* RESPONSIVE */

@media(max-width:991px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

    .main{
        margin-left:0;
    }

    body{
        flex-direction:column;
    }

    table{
        min-width:1300px;
    }

}

/* FILTER BAR */

.filter-bar{

    display:flex;

    gap:15px;

    margin-bottom:25px;

    flex-wrap:wrap;

}

.filter-bar input{
    width:220px;
}

.filter-bar select{
    width:180px;
}

</style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        RECLICX CRM
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

        <h1>Agent Dashboard</h1>

        <div class="user-box">

    <h3 style="margin-bottom:15px;">
        👋 Welcome Agent
    </h3>

            <br>

            <form method="POST"
                action="{{ route('logout') }}">

                @csrf

                <button type="submit" class="btn">

                    Logout

                </button>

            </form>

        </div>

    </div>

    <div class="cards">

    <div class="card">

        <p>Total Leads</p>

        <h2>{{ $totalLeads }}</h2>

    </div>

    <div class="card">

        <p>Orders</p>

        <h2>{{ $interested }}</h2>

    </div>

    <div class="card">

        <p>Delivered</p>

        <h2>{{ $delivered }}</h2>

    </div>

    <div class="card">

        <p>Revenue</p>

        <h2>₹{{ $revenue }}</h2>

    </div>

    <div class="card">

        <p>Hold</p>

        <h2>{{ $hold }}</h2>

    </div>

    <div class="card">

        <p>Cancelled</p>

        <h2>{{ $cancelled }}</h2>

    </div>

    <div class="card">

        <p>RTO</p>

        <h2>{{ $rto }}</h2>

    </div>

    <div class="card">

        <p>Verification Pending</p>

        <h2>{{ $verified }}</h2>

    </div>

    <div class="card">

        <p>Dispatch</p>

        <h2>{{ $dispatch }}</h2>

    </div>

</div>

    <div class="table-box">
    <form method="GET">

    <div class="filter-bar">

        <input
            type="text"
            name="search"
            placeholder="Search customer or phone"
            value="{{ request('search') }}"
        >

        <select
            name="status"
            
        >

            <option value="">
                All Status
            </option>

            <option value="order_placed">
    Order Placed
</option>

<option value="ringing">
    Ringing
</option>

<option value="call_back">
    Call Back
</option>

<option value="verified">
    Verified
</option>

<option value="hold">
    Hold
</option>

<option value="dispatch">
    Dispatch
</option>

<option value="delivered">
    Delivered
</option>

<option value="cancelled">
    Cancelled
</option>

<option value="rto">
    RTO
</option>

        </select>

        <input
            type="date"
            name="date"
            value="{{ request('date') }}"
        >

        <button
            type="submit"
            class="btn">

            Search

        </button>

    </div>

</form>

        <h2>My Leads</h2>

        <table>

            <tr>

                <th>Customer</th>

                <th>Phone</th>

                <th>Address</th>

                <th>Product</th>

                <th>Status</th>

                <th>Amount</th>

                <th>Courier</th>

<th>Tracking</th>

<th>AWB</th>

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
    {{ $lead->courier_name ?? '-' }}
</td>

<td>
    {{ $lead->tracking_id ?? '-' }}
</td>

<td>
    {{ $lead->awb_number ?? '-' }}
</td>

                    <a href="{{ route('leads.edit',$lead->id) }}"
                        class="btn">

                        Edit

                    </a>

</td>

                    <form
                        action="{{ route('leads.updateStatus',$lead->id) }}"
                        method="POST"
                        style="margin-top:10px;">

                        @csrf

                        <select name="status">

                            <option value="order_placed">
    Order Placed
</option>

<option value="ringing">
    Ringing
</option>

<option value="call_back">
    Call Back
</option>

<option value="verified">
    Verified
</option>

<option value="hold">
    Hold
</option>

<option value="dispatch">
    Dispatch
</option>

<option value="delivered">
    Delivered
</option>

<option value="cancelled">
    Cancelled
</option>

<option value="rto">
    RTO
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