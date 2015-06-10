<?php

//主页
class indexAction extends Action{


	//显示主页
	public function index(){

		$this->assign('note',$this->travelNote());
		$this->assign('season',$this->discountSeason());
		$this->display();
	}


	//搜索功能
	public function searchHotel(){

	}

	//旅游志
	public function travelNote(){
		$note = M('travelnote')->limit("5")->select();
		return $note;
	}

	//优惠季
	public function discountSeason(){
		$season= M('travelscency')->where(array('ifdiscount'=>1))->order("id DESC")->select();
		return $season;
	}

	//搜索旁边的酒店信息
	public function discountHotel(){
		
	}

}



?>