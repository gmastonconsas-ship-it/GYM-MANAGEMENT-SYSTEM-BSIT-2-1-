<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function analytics() 
    {
        $totalMembers = Member::count();
        $activePlans = Member::where('payment_status', 'Paid')->count();
        $pendingPayments = Member::where('payment_status', 'Pending')->count();
        
        return view('analytics.index', compact('totalMembers', 'activePlans', 'pendingPayments'));
    }

    public function billing() 
    {
        $members = Member::all();
        return view('billing.index', compact('members'));
    }

    public function settings() 
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login');
        }

        return view('settings.index', compact('user'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members',
            'phone' => 'required',
            'plan_type' => 'required',
            'payment_status' => 'required'
        ]);

        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'plan_type' => $request->plan_type,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }

    // --- EDIT & UPDATE SECTION ---

    public function edit($id)
    {
        $member = Member::find($id);
        
        if (!$member) {
            return redirect()->route('members.index')->with('error', 'Member not found.');
        }

        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email,' . $id,
            'phone' => 'required',
            'plan_type' => 'required',
            'payment_status' => 'required'
        ]);

        $member = Member::find($id);
        
        if ($member) {
            $member->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'plan_type' => $request->plan_type,
                'payment_status' => $request->payment_status,
            ]);

            return redirect()->route('members.index')->with('success', 'Member updated successfully!');
        }

        return redirect()->route('members.index')->with('error', 'Update failed.');
    }

    // --- DESTROY SECTION ---

    public function destroy($id)
    {
        $member = Member::find($id);

        if ($member) {
            $member->delete();
            return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
        }

        return redirect()->route('members.index')->with('error', 'Member not found.');
    }
}