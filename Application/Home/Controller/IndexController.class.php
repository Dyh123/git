<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$a = '11';
		$this->assign( 'a',$a );
		$this->display();
    }
}