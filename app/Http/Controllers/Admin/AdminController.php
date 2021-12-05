<?php

namespace App\Http\Controllers\Admin;
use App\Models\Client;
use App\Models\Developer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      $clients=Client::all();
      return view('admin.clients.index',compact('clients'));
      $developer=Developer::all();
      return view('admin.develops.index',compact('developers'));
   }

}
