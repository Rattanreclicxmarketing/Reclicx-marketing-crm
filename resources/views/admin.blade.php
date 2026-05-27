<!DOCTYPE html>
<html>
<head>

    <title>Admin Dashboard</title>

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

/* SIDEBAR */

.sidebar{
    width:270px;
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

/* MENU */

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

/* MAIN */

.main{
    margin-left:270px;
    width:100%;
    padding:35px;
}

/* TOPBAR */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.topbar h1{
    font-size:42px;
    font-weight:800;
    background:linear-gradient(90deg,#fff,#93c5fd);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:15px;
}

/* BUTTONS */

.btn,
button{
    background:linear-gradient(90deg,#2563eb,#7c3aed);
    color:#fff;
    border:none;
    padding:13px 24px;
    border-radius:14px;
    cursor:pointer;
    font-weight:600;
    transition:0.35s;
    box-shadow:0 10px 25px rgba(37,99,235,0.25);
}

.btn:hover,
button:hover{
    transform:translateY(-3px) scale(1.03);
    box-shadow:0 18px 35px rgba(124,58,237,0.4);
}

/* CARDS */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
    gap:25px;
}

.card{
    position:relative;
    overflow:hidden;
    background:rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.08);
    backdrop-filter:blur(18px);
    padding:28px;
    border-radius:24px;
    transition:0.4s;
    box-shadow:0 10px 35px rgba(0,0,0,0.25);
}

.card::before{
    content:'';
    position:absolute;
    width:120px;
    height:120px;
    background:rgba(255,255,255,0.08);
    border-radius:50%;
    top:-40px;
    right:-40px;
}

.card:hover{
    transform:translateY(-8px);
    border:1px solid rgba(96,165,250,0.4);
    box-shadow:0 20px 40px rgba(37,99,235,0.3);
}

.card p{
    color:#94a3b8;
    font-size:15px;
    font-weight:500;
}

.card h2{
    font-size:42px;
    margin-top:14px;
    color:#fff;
    font-weight:700;
}

/* TABLE BOX */

.table-box{
    margin-top:35px;
    background:rgba(255,255,255,0.05);
    border-radius:24px;
    padding:28px;
    border:1px solid rgba(255,255,255,0.08);
    backdrop-filter:blur(20px);
    overflow:auto;
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

.table-box h2{
    margin-bottom:20px;
    font-size:28px;
    font-weight:700;
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
    font-size:14px;
    text-transform:uppercase;
    letter-spacing:1px;
    border-bottom:1px solid rgba(255,255,255,0.08);
}

table td{
    padding:18px;
    color:#e2e8f0;
    border-bottom:1px solid rgba(255,255,255,0.05);
    transition:0.3s;
}

table tr{
    transition:0.3s;
}

table tr:hover{
    background:rgba(255,255,255,0.04);
}

/* INPUTS */

input,
select{
    width:100%;
    padding:14px 16px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:14px;
    color:#fff;
    outline:none;
    transition:0.3s;
}

input:focus,
select:focus{
    border:1px solid #60a5fa;
    box-shadow:0 0 15px rgba(96,165,250,0.3);
}

input::placeholder{
    color:#94a3b8;
}

/* STATUS BADGES */

.status{
    padding:9px 16px;
    border-radius:50px;
    color:#fff;
    font-size:12px;
    font-weight:700;
    display:inline-block;
    text-transform:uppercase;
    letter-spacing:0.5px;
}

/* STATUS COLORS */

.assigned_to_agent{
    background:linear-gradient(90deg,#2563eb,#60a5fa);
}

.order_confirmed{
    background:linear-gradient(90deg,#7c3aed,#a855f7);
}

.delivered{
    background:linear-gradient(90deg,#16a34a,#22c55e);
}

.cancelled{
    background:linear-gradient(90deg,#dc2626,#ef4444);
}

.hold{
    background:linear-gradient(90deg,#f59e0b,#facc15);
    color:#111827;
}

.rto{
    background:linear-gradient(90deg,#ea580c,#fb923c);
}

.dispatch{
    background:linear-gradient(90deg,#0891b2,#06b6d4);
}

.verification_pending{
    background:linear-gradient(90deg,#475569,#94a3b8);
}

/* SCROLLBAR */

::-webkit-scrollbar{
    width:8px;
    height:8px;
}

::-webkit-scrollbar-thumb{
    background:#334155;
    border-radius:20px;
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

    .cards{
        grid-template-columns:1fr;
    }

}

</style>

</head>
<body>

    <div class="sidebar">

        <div class="logo">
            RECLICX CRM
        </div>

        <div class="menu">

            <a href="#">📊 Dashboard</a>

<a href="{{ route('leads.index') }}">
    📞 Leads
</a>

<a href="{{ route('users.create') }}">
    👨‍💼 Team Leaders
</a>

<a href="{{ route('users.index') }}">
    👥 Users
</a>

<a href="{{ route('verification') }}">
    ✅ Verification
</a>

<a href="{{ route('dispatch') }}">
    🚚 Dispatch
</a>

<a href="{{ route('ndr') }}">
    📦 NDR
</a>

<a href="#">
    📈 Reports
</a>

<a href="#">
    ⚙ Settings
</a>

        </div>

    </div>

    <div class="main">

        <div class="topbar">

            <h1>Admin Dashboard</h1>

            <div>

    <h3>
        Welcome Admin
    </h3>

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

        <div class="cards">

            <div class="card">

                <p>Total Leads</p>

                <h2>{{ $totalLeads }}</h2>

            </div>

            <div class="card">

                <p>Orders</p>

                <h2>{{ $orders }}</h2>

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

    <h2>{{ $verificationPending }}</h2>

</div>

<div class="card">

    <p>Dispatch</p>

    <h2>{{ $dispatch }}</h2>

</div>

        </div>

        <div class="table-box">

    <form method="GET" style="margin-bottom:20px;">

    <input
        type="text"
        name="search"
        placeholder="Search customer or phone..."
        value="{{ request('search') }}"
        style="
            width:300px;
            padding:12px;
            border:1px solid #d1d5db;
            border-radius:8px;
        "
    >

    <select
        name="status"
        style="
            padding:12px;
            border:1px solid #d1d5db;
            border-radius:8px;
            margin-left:10px;
        "
    >

        <option value="">All Status</option>

        <option value="delivered">Delivered</option>

        <option value="hold">Hold</option>

        <option value="cancelled">Cancelled</option>

        <option value="dispatch">Dispatch</option>

        <option value="rto">RTO</option>

    </select>

    <button
        type="submit"
        style="
            padding:12px 18px;
            background:#2563eb;
            color:#fff;
            border:none;
            border-radius:8px;
            cursor:pointer;
        "
    >
        Search
    </button>

</form>

<a href="/export-leads"
   style="
        display:inline-block;
        margin-bottom:20px;
        padding:12px 18px;
        background:#16a34a;
        color:white;
        text-decoration:none;
        border-radius:8px;
   ">

    Export CSV

</a>

    <h2>Recent Leads</h2>

    <table>

        <tr>
            <th>Customer</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Agent</th>
            <th>Amount</th>
        </tr>

        @foreach($recentLeads as $lead)

        <tr>

            <td>{{ $lead->customer_name }}</td>

            <td>{{ $lead->phone }}</td>

            <td>

    <span class="status {{ $lead->status }}">

        {{ str_replace('_',' ',$lead->status) }}

    </span>

</td>

            <td>{{ $lead->agent->name ?? 'N/A' }}</td>

            <td>₹{{ $lead->amount }}</td>

        </tr>

        @endforeach

    </table>

<div style="margin-top:20px;">

    {{ $recentLeads->links() }}

</div>  

</div>

<div class="table-box">

    <h2>Lead Analytics</h2>

    <canvas id="crmChart"></canvas>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('crmChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: @json($chartLabels),

        datasets: [{
            label: 'Lead Analytics',
            data: @json($chartData),
            borderWidth: 1
        }]
    },

    options: {

        responsive: true,

        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>

</body>
</html>