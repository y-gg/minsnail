<?php
namespace Home\Model;
use Think\Model;
class PostmetaModel extends Model{
	public function getPicUrl(){
		$map="meta_key='_wp_attached_file'";
		$re=$this->field("meta_value")->where($map)->order("meta_id DESC")->select();
		for($i=0;$i<count($re);$i++){
			$re[$i]["meta_value"]="/Blog/wp-content/uploads/".$re[$i]["meta_value"];
		}
		return $re;
	}
}


?>