<?php
    require_once '../configs.php';
    require_once '../models/students.php';

    $obj = new students();
    $students = $obj->connect();

    //them du lieu
    $ten = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten"])) { $ten = $_POST['ten']; }
    	$pattern = '/^[A-Z]{1}[A-Za-z\s]*/';
    	if (preg_match($pattern, $ten)) {
    		if ($obj->insertData($ten)) {
    		echo "Thêm thành công";
	    	}
	    	else {
	    		echo "Thất bại";
	    	}
    	}
    	else{
	    	echo "Nhập tên không đúng định dạng xin nhập lại.";	
    	}
    	
    }
    //Xóa dữ liệu
    if (isset($_GET['id'])){
	    $id = $_GET['id'];
	    if ($obj->deleteById($id)) {
			echo "Xóa thành công";
		}
			else {
				echo "Xóa thất bại";
			}
	}
    
?>
<?php require_once '../view/students.php'; ?>
