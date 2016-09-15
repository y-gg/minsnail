<?php
namespace Home\Model;
use Think\Model;
class MovesModel extends Model{
	public function getMoves_short($p=1){
		$data=$this->field("id,film_name_zh,film_pic,film_source")->page($p)->select();
		return $data;
	}
	public function getMoves_full($fid){
		$data=$this->where("id=%d",array($fid))->find();
		return $data;
	}
}	
?>