<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$model=D("Postmeta");
		$this->assign("pics",$model->getPicUrl());
		
		$this->display();
    }
	public function news(){
		$news=new \Org\Api\News();
		$this->assign("wynews",$news->getWyNews());
		$this->assign("fhnews",$news->getFhNews());
		$this->assign("txnews",$news->getTxNews());
		$this->assign("bdnews",$news->getBdNews());
		
		$this->display();
	}
	public function moves(){
		$moves=D("Moves");
		if(!empty($_GET["film"])){
			$this->assign("moves",$moves->getMoves_full($_GET["film"]));
		}else{
			$this->assign("moves",$moves->getMoves_short());
		}
		$this->display();
	}
	public function blog(){
		$this->display();
	}
	public function weather(){
		$ip=get_client_ip();
		$this->assign("ip",$ip);
		$weather=new \Org\Api\Weather();
		$this->assign("weather",$weather->getweather());
		$this->display();
	}
	public function addmove(){
		$this->display();
	}
}