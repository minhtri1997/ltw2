<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Student;

class StudentController extends Controller
{
    public function index() {
		$obj = new Student();
		$data = $obj::all();
		
		return view('hao.index', ['data' => $data]);
	}
}
