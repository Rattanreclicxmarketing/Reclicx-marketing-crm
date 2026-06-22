    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RECLICX CRM</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
    }

    body{
    background:
    linear-gradient(135deg,#020817,#04132c,#061a3d);
    color:#fff;
    overflow-x:hidden;
    }

    /* SIDEBAR */

    .sidebar{
position:fixed;
left:0;
top:0;
width:280px;
height:100vh;
overflow-y:auto;
overflow-x:hidden;

background:
linear-gradient(
180deg,
rgba(6,20,45,.98),
rgba(2,8,23,.98)
);

border-right:1px solid rgba(255,255,255,.05);
padding:25px;
z-index:999;
}

    .logo-box{
padding-bottom:25px;
margin-bottom:25px;
border-bottom:1px solid rgba(255,255,255,.08);
}
    .logo-box img{
    width:110px;
    margin-bottom:15px;
    }

    .logo-box h2{
    font-size:18px;
    font-weight:800;
    line-height:1.3;
    }

    .logo-box span{
    color:#2563eb;
    }

    .menu{
    margin-top:20px;
    }
.menu a{
    display:flex;
    align-items:center;
    gap:14px;
    padding:16px 20px;
    margin-bottom:12px;
    border-radius:18px;
    text-decoration:none;
    color:#cbd5e1;
    font-size:15px;
    font-weight:600;
    transition:.3s;

    background:rgba(255,255,255,.02);
    border:1px solid rgba(255,255,255,.04);
}

.menu a i{
    width:22px;
    text-align:center;
    font-size:16px;
}

.menu a:hover{

    transform:translateX(6px);

    background:
    linear-gradient(
    90deg,
    rgba(255,43,69,.20),
    rgba(255,43,69,.05)
    );

    border-color:
    rgba(255,43,69,.30);

    color:#fff;
}

.menu a.active{

    background:
    linear-gradient(
    90deg,
    #ff2b45,
    #ff5a6b
    );

    color:#fff;

    border:none;

    box-shadow:
    0 0 20px rgba(255,43,69,.45),
    0 0 40px rgba(255,43,69,.20);
}

    /* MAIN */

    .main{
    margin-left:280px;
    padding:25px;
    }

    /* TOPBAR */

    .topbar{
    height:86px;
    border-radius:22px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:0 25px;

    background:
    rgba(255,255,255,.04);

    backdrop-filter:blur(20px);

    border:
    1px solid rgba(255,255,255,.05);

    margin-bottom:30px;
    }

    .top-left{
    display:flex;
    align-items:center;
    gap:20px;
    }

    .menu-btn{
    font-size:24px;
    cursor:pointer;
    }

    .search-box{
    width:450px;
    height:52px;
    position:relative;
    }

    .search-box input{
    width:100%;
    height:100%;
    background:
    rgba(255,255,255,.04);

    border:
    1px solid rgba(255,255,255,.08);

    border-radius:50px;

    padding-left:55px;
    padding-right:20px;

    color:white;
    outline:none;
    }

    .search-box i{
    position:absolute;
    left:20px;
    top:18px;
    color:#94a3b8;
    }

    .top-right{
    display:flex;
    align-items:center;
    gap:15px;
    }

    .icon-btn{
    width:50px;
    height:50px;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    background:
    rgba(255,255,255,.04);

    border:
    1px solid rgba(255,255,255,.08);

    cursor:pointer;

    transition:.3s;
    }

    .icon-btn:hover{
    background:#ff2b45;
    }

    .profile{
    display:flex;
    align-items:center;
    gap:15px;
    }

    .profile-info h4{
    font-size:18px;
    }

    .profile-info p{
    font-size:13px;
    color:#94a3b8;
    }

    .profile-avatar{
    width:52px;
    height:52px;
    border-radius:50%;

    background:
    linear-gradient(
    135deg,
    #ff2b45,
    #ef4444
    );

    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    }

    /* PAGE TITLE */

    .page-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    }

    .page-header h1{
    font-size:42px;
    font-weight:800;
    }

    .page-header p{
    color:#94a3b8;
    margin-top:6px;
    }

    .date-box{
    padding:15px 20px;
    border-radius:16px;

    background:
    rgba(255,255,255,.04);

    border:
    1px solid rgba(255,255,255,.08);

    }

    /* STATS CARDS */

    .stats-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:30px;
    }

    .stat-card{
    background:rgba(255,255,255,.04);
    border:1px solid rgba(255,255,255,.08);
    backdrop-filter:blur(20px);
    border-radius:24px;
    padding:25px;
    position:relative;
    overflow:hidden;
    transition:.3s;
    }

    .stat-card:hover{
    transform:translateY(-5px);
    box-shadow:0 0 30px rgba(255,43,69,.25);
    }

    .stat-card::before{
    content:'';
    position:absolute;
    right:-40px;
    top:-40px;
    width:120px;
    height:120px;
    background:rgba(255,43,69,.12);
    border-radius:50%;
    }

    .card-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
    }

    .card-icon{
    width:55px;
    height:55px;
    border-radius:16px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    background:linear-gradient(135deg,#ff2b45,#ef4444);
    }

    .card-title{
    color:#94a3b8;
    font-size:14px;
    }

    .card-value{
    font-size:34px;
    font-weight:800;
    margin-top:8px;
    }

    /* DASHBOARD GRID */

    .dashboard-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    margin-bottom:25px;
    }

    .chart-box,
    .team-box,
    .table-box{
    background:rgba(255,255,255,.04);
    border:1px solid rgba(255,255,255,.08);
    backdrop-filter:blur(20px);
    border-radius:24px;
    padding:25px;
    }

    .chart-box h2,
    .team-box h2,
    .table-box h2{
    margin-bottom:20px;
    font-size:22px;
    }

    /* TEAM */

    .team-member{
    margin-bottom:18px;
    }

    .team-member span{
    display:flex;
    justify-content:space-between;
    margin-bottom:8px;
    }

    .progress{
    height:10px;
    background:rgba(255,255,255,.08);
    border-radius:50px;
    overflow:hidden;
    }

    .progress div{
    height:100%;
    background:linear-gradient(90deg,#ff2b45,#ef4444);
    border-radius:50px;
    }

    /* TABLE */

    .table-box{
    margin-top:20px;
    }

    table{
    width:100%;
    border-collapse:collapse;
    }

    table th{
    text-align:left;
    padding:15px;
    color:#94a3b8;
    border-bottom:1px solid rgba(255,255,255,.08);
    }

    table td{
    padding:15px;
    border-bottom:1px solid rgba(255,255,255,.05);
    }

    .status-badge{
    padding:6px 12px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
    background:#ff2b45;
    }

    #crmChart{
height:350px !important;
width:100% !important;
}
.chart-box{
min-height:450px;
}

.team-box{
min-height:450px;
}

@media(max-width:1200px){

.stats-grid{
grid-template-columns:repeat(2,1fr);
}

.dashboard-grid{
grid-template-columns:1fr;
}

}

@media(max-width:768px){

.sidebar{
display:none;
}

.main{
margin-left:0;
}

.stats-grid{
grid-template-columns:1fr;
}

.search-box{
width:100%;
}

}

.sidebar::-webkit-scrollbar{
width:6px;
}

.sidebar::-webkit-scrollbar-track{
background:transparent;
}

.sidebar::-webkit-scrollbar-thumb{
background:#ff2b45;
border-radius:20px;
}

.sidebar-user{
margin-top:30px;
padding:18px;
background:rgba(255,255,255,.04);
border:1px solid rgba(255,255,255,.08);
border-radius:18px;

display:flex;
align-items:center;
gap:15px;
}

.user-avatar{
width:50px;
height:50px;
border-radius:50%;
background:#ff2b45;

display:flex;
align-items:center;
justify-content:center;
}

.logo-box{
display:flex;
align-items:center;
gap:12px;
margin-bottom:35px;
padding-bottom:25px;
border-bottom:1px solid rgba(255,255,255,.08);
}

.logo-box img{
width:70px;
}

.logo-text h2{
font-size:26px;
font-weight:800;
color:#ff2b45;
margin:0;
}

.logo-text span{
font-size:26px;
font-weight:800;
color:#fff;
}

.logout-btn{
    width:100%;
    margin-top:20px;
    padding:15px;

    border:none;
    border-radius:16px;

    background:linear-gradient(
        90deg,
        #dc2626,
        #ef4444
    );

    color:white;
    font-size:15px;
    font-weight:600;
    cursor:pointer;

    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;

    transition:.3s;
}

.logout-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 0 20px rgba(239,68,68,.4);
}

    </style>

    </head>

    <body>

    <div class="sidebar">

    <div class="logo-box">

<img src="{{ asset('images/reclicx-logo.png') }}">

<div class="logo-text">
<h2>RECLICX</h2>
<span>CRM</span>
</div>

</div>

    <div class="menu">

<a href="/admin" class="active">
<i class="fas fa-chart-pie"></i>
Dashboard
</a>

<a href="{{ route('leads.index') }}">
<i class="fas fa-phone"></i>
Leads
</a>

<a href="#">
<i class="fas fa-user-tie"></i>
Team Leaders
</a>

<a href="{{ route('users.index') }}">
<i class="fas fa-users"></i>
Users
</a>

<a href="{{ route('verification') }}">
<i class="fas fa-check-circle"></i>
Verification
</a>

<a href="{{ route('dispatch') }}">
<i class="fas fa-truck"></i>
Dispatch
</a>

<a href="{{ route('ndr') }}">
<i class="fas fa-box"></i>
NDR
</a>

<a href="#">
<i class="fas fa-chart-line"></i>
Reports
</a>

<a href="#">
<i class="fas fa-gear"></i>
Settings
</a>

</div>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="logout-btn">
        <i class="fas fa-right-from-bracket"></i>
        Logout
    </button>
</form>

<div class="sidebar-user">

<div class="user-avatar">
<i class="fas fa-user"></i>
</div>

<div>
<h4>Admin</h4>
<p>Super Administrator</p>
</div>

</div>

    </div>

    <div class="main">

    <div class="topbar">

    <div class="top-left">

    <div class="menu-btn">
    <i class="fas fa-bars"></i>
    </div>

    <div class="search-box">

    <i class="fas fa-search"></i>

    <input
    type="text"
    placeholder="Search anything...">

    </div>

    </div>

    <div class="top-right">

    <div class="icon-btn">
    <i class="fas fa-bell"></i>
    </div>

    <div class="icon-btn">
    <i class="fas fa-calendar"></i>
    </div>

    <div class="icon-btn">
    <i class="fas fa-moon"></i>
    </div>

    <div class="profile">

    <div class="profile-info">
    <h4>Welcome, Admin</h4>
    <p>Super Administrator</p>
    </div>

    <div class="profile-avatar">
    <i class="fas fa-user"></i>
    </div>

    </div>

    </div>

    </div>

    <div class="page-header">

    <div>
    <h1>Dashboard</h1>
    <p>Overview of your CRM performance</p>
    </div>

    <div class="date-box">
    {{ now()->format('F d, Y') }}
    </div>

    </div>

    <!-- PART 2 yahan se start hoga -->

    <div class="stats-grid">

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Total Leads</div>
    <div class="card-value">{{ $totalLeads }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-users"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Orders</div>
    <div class="card-value">{{ $orders }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-cart-shopping"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Delivered</div>
    <div class="card-value">{{ $delivered }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-truck"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Revenue</div>
    <div class="card-value">₹{{ $revenue }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-indian-rupee-sign"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Hold</div>
    <div class="card-value">{{ $hold }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-pause"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Cancelled</div>
    <div class="card-value">{{ $cancelled }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-xmark"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">RTO</div>
    <div class="card-value">{{ $rto }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-rotate-left"></i>
    </div>
    </div>
    </div>

    <div class="stat-card">
    <div class="card-top">
    <div>
    <div class="card-title">Dispatch</div>
    <div class="card-value">{{ $dispatch }}</div>
    </div>
    <div class="card-icon">
    <i class="fas fa-box"></i>
    </div>
    </div>
    </div>

    </div>

    <div class="dashboard-grid">

<div class="chart-box">

<h2>Lead Analytics</h2>

<canvas id="crmChart"></canvas>

</div>

<div class="team-box">

<h2>Team Performance</h2>

<div class="team-member">

<span>
<b>Admin Team</b>
<b>92%</b>
</span>

<div class="progress">
<div style="width:92%"></div>
</div>

</div>

<div class="team-member">

<span>
<b>Team Leaders</b>
<b>78%</b>
</span>

<div class="progress">
<div style="width:78%"></div>
</div>

</div>

<div class="team-member">

<span>
<b>Agents</b>
<b>67%</b>
</span>

<div class="progress">
<div style="width:67%"></div>
</div>

</div>

</div>

</div>

<div class="table-box">

<h2>Recent Leads</h2>

<table>

<thead>

<tr>

<th>Lead ID</th>
<th>Date</th>
<th>Name</th>
<th>Phone</th>
<th>City</th>
<th>Product</th>
<th>Amount</th>
<th>Source</th>
<th>Team Leader</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($recentLeads as $lead)

<tr>

<td>{{ $lead->id }}</td>

<td>
{{ $lead->created_at->format('d M Y') }}
</td>

<td>{{ $lead->customer_name }}</td>

<td>{{ $lead->phone }}</td>

<td>{{ $lead->city ?? '-' }}</td>

<td>{{ $lead->product }}</td>

<td>₹{{ $lead->amount }}</td>

<td>{{ $lead->lead_source ?? 'Website' }}</td>

<td>
{{ $lead->teamLeader->name ?? 'Not Assigned' }}
</td>

<td>
<span class="status-badge">
{{ $lead->status }}
</span>
</td>

<td>

<a href="{{ route('leads.show',$lead->id) }}"
class="btn">
View
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

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
            label: 'Lead Status',
            data: @json($chartData),
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});
</script>

    </body>
    </html>