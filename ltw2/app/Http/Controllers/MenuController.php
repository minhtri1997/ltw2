<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Student;
use App\Http\Models\Menu;
class MenuController extends Controller
{
    public function index() {
    	$objMenu = new Menu();
    	$obj = new Student();
		$dataStudent = $obj::all();
		$dataMenuAll = $objMenu->getTree();
		return view('menu.main',['dataStudent' => $dataStudent],['dataMenuAll'=>$dataMenuAll]);
	}
}
