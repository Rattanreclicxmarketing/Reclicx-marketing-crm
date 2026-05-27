<!DOCTYPE html>
<html>
<head>
    <title>Lead Details</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
        }

        .timeline{
            margin-top:30px;
        }

        .card{
            background:#f9fafb;
            padding:15px;
            border-left:4px solid #2563eb;
            margin-bottom:15px;
            border-radius:6px;
        }

        textarea,
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

    <h2>{{ $lead->customer_name }}</h2>

    <p><b>Phone:</b> {{ $lead->phone }}</p>

    <p><b>Status:</b> {{ $lead->status }}</p>

    <hr>

    <h3>Add Remark</h3>

    <form action="{{ route('leads.addRemark',$lead->id) }}" method="POST">

        @csrf

        <select name="remark_type">

            <option>Interested</option>
            <option>Call Back</option>
            <option>Busy</option>
            <option>Not Interested</option>
            <option>Wrong Number</option>
            <option>Order Confirmed</option>

        </select>

        <textarea name="remark"
            placeholder="Write Remark"></textarea>
        
        <input type="date" name="followup_date">

<br><br>

<input type="time" name="followup_time">

<br><br>

        <button type="submit">
            Save Remark
        </button>

    </form>

    <hr>

<h3>Update Lead Status</h3>

<form action="{{ route('leads.updateStatus',$lead->id) }}"
      method="POST">

    @csrf

    <select name="status">

        <option value="interested">
            Interested
        </option>

        <option value="hold">
            Hold
        </option>

        <option value="cancelled">
            Cancelled
        </option>

        <option value="order_confirmed">
            Order Confirmed
        </option>

        <option value="verified">
            Verified
        </option>

        <option value="dispatched">
            Dispatched
        </option>

        <option value="delivered">
            Delivered
        </option>

        <option value="rto">
            RTO
        </option>

    </select>

    <button type="submit">
        Update Status
    </button>

</form>

    <div class="timeline">

        <h3>Lead Timeline</h3>

        @foreach($lead->leadRemarks as $remark)

            <div class="card">

                <strong>
                    {{ $remark->remark_type }}
                </strong>

                <p>
                    {{ $remark->remark }}
                </p>

                <small>

    {{ $remark->created_at }}

    <br>

    Follow Up:
    {{ $remark->followup_date }}
    {{ $remark->followup_time }}

</small>

            </div>

        @endforeach

    </div>

</div>

</body>
</html>