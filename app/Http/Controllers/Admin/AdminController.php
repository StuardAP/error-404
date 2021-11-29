<?php

namespace App\Http\Controllers\Admin;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      $clients=Client::all();
      return view('admin.clients.index',compact('clients'));
   }

}
