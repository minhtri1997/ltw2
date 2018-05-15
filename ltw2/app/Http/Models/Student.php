<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
	protected $primaryKey = 'student_id';
	protected $fillable = array(
        'student_name',
        'student_email',
        'student_phone',
        'student_info'
    );
    public $timestamps = false;
	
	public function readAllData()
	{
		$data = self::all();
		return $data ;
	}

	public function createModel($data)
	{
		$fields = ['student_name'=>$data['name'],'student_email'=>$data['email'],'student_phone'=>$data['phone'],'student_info'=>$data['info']];
		// var_dump($fields);
		self::create($fields);
	}

	public function deleteModel($id)
	{
		$item = self::where("student_id",$id)->get();
			if ($item[0]->delete()) {
				echo('Xóa thành công.');	
			}else{
				echo('Xóa thất bại.');
			}
			
	}
	public function deleteModelWrong($id)
	
	{
		$item = self::find($id);
		if (is_null($item))
		{
			return 0;
		}
		else
		{
			$item = $item->delete();
			return $item;
		}
	}
	public function getStudentByIDModel($id)
	{
		$item = self::where("student_id",$id)->get();
		return $item;
	}
	public function getStudentByIDModelWrong($id)
	{
		$item = self::find($id);
		if (is_null($item))
		{
			return 0;
		}
		else
		{
			$item = $item->get();
			return $item;
		}
}

}