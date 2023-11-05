<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
      $users = User::get();
      return view('home', compact('users'));
    }
    public function removeData(Request $request,$id)
    {
      User::where('id',$id)->delete();
      return back();
    }
}
