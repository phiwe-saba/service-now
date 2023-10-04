<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Status;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        return view('ticket.index');
    }

    public function create(){
        $users = User::all();
        $departments = Department::all();
        $statuses = Status::all();

        return view('ticket.create', compact('users', 'statuses', 'departments'));
    }

    public function store(Request $request){
        $viewData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'dep_id' => 'required|exists:departments,id',
            'status_id' => 'required|exists:statuses,id',
            'description' => 'required',
            'date_logged' => 'required'
        ]);

        $user = User::where('email', $viewData['email'])->first();

        dd($user);
        //creating a new ticket
        $ticket = new Ticket([
            'name' => $viewData['name'],
            'surname' => $viewData['surname'],
            'email' => $viewData['email'],
            'dep_id' => $viewData['dep_id'],
            'status_id' => $viewData['status_id'],
            'description' => $viewData['description'],
            'date_logged' => $viewData['date_logged'],
        ]);

        dd($ticket);
        $user->ticket()->save($ticket);

        return redirect()->route('ticket.index')->with('success', 'Ticket successfully logged');
    }
}
