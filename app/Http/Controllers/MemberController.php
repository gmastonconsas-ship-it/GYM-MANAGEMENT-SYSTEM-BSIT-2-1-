<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        // Hahatak ng data mula sa HeidiSQL table na 'members'
        $members = Member::all(); 
        
        // Ipapadala ang data sa view na 'resources/views/members/index.blade.php'
        return view('members.index', compact('members'));
    }
}