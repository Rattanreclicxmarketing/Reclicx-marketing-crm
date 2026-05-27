<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\User;
use App\Models\LeadRemark;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::with([
    'teamLeader',
    'agent'
])->latest()->get();

        $teamLeaders = User::role('team_leader')->get();

        $agents = User::role('agent')->get();

        return view('leads.index', compact(
            'leads',
            'teamLeaders',
            'agents'
        ));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        Lead::create([
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'product' => $request->product,
            'amount' => $request->amount,
        ]);

        return redirect()->route('leads.index')
            ->with('success','Lead Added Successfully');
    }

    public function assignTL(Request $request, $id)
    {
        $lead = Lead::find($id);

        $lead->team_leader_id = $request->team_leader_id;

        $lead->status = 'assigned_to_tl';

        $lead->save();

        return redirect()->back()
            ->with('success','Lead Assigned To Team Leader');
    }

        public function assignAgent(Request $request, $id)
    {
        $lead = Lead::find($id);

        $lead->agent_id = $request->agent_id;

        $lead->status = 'assigned_to_agent';

        $lead->save();

        return redirect()->back()
            ->with('success','Lead Assigned To Agent');
    }

    public function show($id)
{
    $lead = Lead::with('leadRemarks')->find($id);

    if(
        auth()->user()->hasRole('agent')
        &&
        $lead->agent_id != auth()->id()
    ){
        abort(403);
    }

    return view('leads.show', compact('lead'));
}

    public function addRemark(Request $request, $id)
    {
        LeadRemark::create([

            'lead_id' => $id,

            'user_id' => auth()->id(),

            'remark_type' => $request->remark_type,

            'remark' => $request->remark,

'followup_date' => $request->followup_date,

'followup_time' => $request->followup_time

        ]);

        return redirect()->back()
    ->with('success','Remark Added');
}

public function updateStatus(Request $request, $id)
{
    $lead = Lead::find($id);

    $lead->status = $request->status;

    $lead->save();

    return redirect()->back()
        ->with('success','Lead Status Updated');
}

public function edit($id)
{
    $lead = Lead::find($id);

    if(
        auth()->user()->hasRole('agent')
        &&
        $lead->agent_id != auth()->id()
    ){
        abort(403);
    }

    return view('leads.edit', compact('lead'));
}

public function update(Request $request, $id)
{
    $lead = Lead::find($id);

    $lead->update([

        'customer_name' => $request->customer_name,
        'phone' => $request->phone,
        'address' => $request->address,
        'product' => $request->product,
        'amount' => $request->amount,
        'status' => $request->status,

    ]);

    return redirect()->route('leads.index')
        ->with('success','Lead Updated Successfully');
}
public function delete($id)
{
    $lead = Lead::find($id);

    $lead->delete();

    return redirect()->back()
        ->with('success','Lead Deleted Successfully');
}

public function verification()
{
    $leads = Lead::where('status','verified')->latest()->get();

    return view('verification', compact('leads'));
}

public function landingLead(Request $request)

{
    dd($request->all());  
    Lead::create([

        'customer_name' => $request->name,

        'phone' => $request->phone,

        'address' => $request->address,

        'product' => $request->product,

        'status' => 'pending',

    ]);

    return response()->json([
        'success' => true
    ]);
}

}
