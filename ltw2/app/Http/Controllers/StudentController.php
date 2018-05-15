<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use App\Http\Models\Student;

class StudentController extends Controller
{
    public function index() {
		$objStudent = new Student();
		$dataStudent = $objStudent->readAllData();
		return view('student.index', ['dataStudent' => $dataStudent]);
	}
	public function createStudent()
	{
		$objStudent = new Student();
		$data = array('name' =>'Hoang' ,'email' =>'Hoang@gmail.com','phone' =>'0754644333','info' =>'abcxyz' );
		$value = $objStudent->createModel($data);
		$dataStudent = $objStudent->readAllData();
		return redirect()->action('StudentController@index');
	}

	public function deleteStudent($id)
	{
		$objStudent = new Student();
		$value = $objStudent->deleteModelWrong($id);
		// var_dump($value);
		
		if (is_int($value))
		{
			return view('student.deletewrong',['dataStudentById'=>$value]);
		}
		else
		{
			return redirect()->action('StudentController@index');
		}
	}

	public function getStudentByID($id)
	{
		$objStudent = new Student();
		//Lay ra student theo id
		$value = $objStudent->getStudentByIDModelWrong($id);
		if (is_int($value))
		{
			return view('student.updatewrong',['dataStudentById'=>$value]);
		}
		else
		{
			return view('student.editupdate',['dataStudentById'=>$value]);		
		}
	}

	public function updateStudent(Request $request)
	{
		$objStudent = new Student();

		$allRequest = $request->all();
		//Nhận dữ liệu từ form
		$id = $allRequest["id"];
		$name = $allRequest["usr"];
		$email = $allRequest["email"];
		$phone = $allRequest["phone"];
		$info = $allRequest["info"];
		// Lấy ra sinh viên theo id
		$getStudentByID = $objStudent->find($id);
		//Sửa thông tin
		$getStudentByID->student_name = $name; 
		$getStudentByID->student_email = $email; 
		$getStudentByID->student_phone = $phone; 
		$getStudentByID->student_info = $info;
		$getStudentByID->save();
		return redirect()->action('StudentController@index'); 
		
		// $info = $request->textarea('info');
		
	}

	public function insertStudent (Request $request)
	{
		$objStudent = new Student();

		$allRequest = $request->all();
		//Nhận dữ liệu từ form
		$name = $allRequest["usr"];
		$email = $allRequest["email"];
		$phone = $allRequest["phone"];
		$info = $allRequest["info"];

		$data = array('name' => $name ,'email' => $email,'phone' => $phone,'info' => $info );
		$value = $objStudent->createModel($data);
		return redirect()->action('StudentController@index');
	}
}
