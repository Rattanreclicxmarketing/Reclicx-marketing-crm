<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if($user->hasRole('admin'))
        {
            return redirect('/admin');
        }

        elseif($user->hasRole('team_leader'))
        {
            return redirect('/teamleader');
        }

        elseif($user->hasRole('agent'))
        {
            return redirect('/agent');
        }

        elseif($user->hasRole('verification'))
        {
            return redirect('/verification');
        }

        return redirect('/');
    }
}