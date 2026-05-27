<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalLeads = Lead::count();

        $orders = Lead::where('status','order_confirmed')
            ->count();

        $delivered = Lead::where('status','delivered')
            ->count();

        $cancelled = Lead::where('status','cancelled')
            ->count();

        $hold = Lead::where('status','hold')
            ->count();

        $rto = Lead::where('status','rto')
            ->count();

        $verificationPending = Lead::where('status','verification_pending')
    ->count();

$dispatch = Lead::where('status','dispatch')
    ->count();

        $revenue = Lead::where('status','delivered')
            ->sum('amount');

        $search = request('search');
        
        $status = request('status');



$recentLeads = Lead::with('agent')

    ->when($search, function($query) use ($search){

        $query->where('customer_name','like',"%{$search}%")
              ->orWhere('phone','like',"%{$search}%");

    })

    ->when($status, function($query) use ($status){

        $query->where('status', $status);

    })

    ->latest()
    ->paginate(10);

    $chartLabels = [
    'Delivered',
    'Cancelled',
    'Hold',
    'RTO'
];

$chartData = [
    $delivered,
    $cancelled,
    $hold,
    $rto
];

        return view('admin', compact(

    'totalLeads',
    'orders',
    'delivered',
    'cancelled',
    'hold',
    'rto',
    'verificationPending',
    'dispatch',
    'revenue',
    'recentLeads',
    'chartLabels',
    'chartData'

));
    }
public function export()
{
    $fileName = 'leads.csv';

    $leads = Lead::with('agent')->get();

    $headers = [
        'Content-type' => 'text/csv',
        'Content-Disposition' => "attachment; filename=$fileName",
        'Pragma' => 'no-cache',
        'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
        'Expires' => '0'
    ];

    $columns = [
        'Customer',
        'Phone',
        'Status',
        'Agent',
        'Amount'
    ];

    $callback = function() use($leads, $columns){

        $file = fopen('php://output', 'w');

        fputcsv($file, $columns);

        foreach($leads as $lead){

            fputcsv($file, [

                $lead->customer_name,
                $lead->phone,
                $lead->status,
                $lead->agent->name ?? 'N/A',
                $lead->amount

            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

}
