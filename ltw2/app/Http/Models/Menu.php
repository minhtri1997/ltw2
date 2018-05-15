<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
	protected $primaryKey = 'menu_id';

	// public function getParents()
	// {
	// 	$parents = self::where('menu_status',1)->orderBy('menu_name','asc') ->where('menu_id_parent',NULL)->get();
	// 	return $parents;
	// }

	public function getTree()
	{
		$parents = self::where('menu_status',1)->orderBy('menu_name','asc') ->where('menu_id_parent',NULL)->get();
		foreach ($parents as $key => $parent) {
			$parents[$key]->childs = $this->getChilds1($parent->menu_id);
		}
		return $parents;	
	}

	public function getChilds1($menu_id_parent){
		$childs = self::where('menu_id_parent', $menu_id_parent)->orderBy('menu_name','asc')->get();
		if ($childs) {
			foreach ($childs as $key => $child) {
				$childs[$key]->childs = $this->getChilds1($child->menu_id);
			}
		}
		
			return $childs;
	}
}