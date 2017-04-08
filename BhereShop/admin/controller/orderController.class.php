<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 12:14
 */
require "./controller/Controller.php";
require './model/orderModel.class.php';
 class OrderController extends Controller{
 	     public function like(){
         if(!empty($_POST)){
             $ppo = $_POST['ordercode'];
             $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=8;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=select";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id  where order_num LIKE '%$ppo%'";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/orderlist.html");
         }
     }
 public function select(){

             $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=7;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=select";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id order by o.id desc limit "."$nowpage".","."$show";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/orderlist.html");

     }
 //δ����
 public function unpay(){
 	    $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order where order_status=0";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=7;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=unpay";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id where o.order_status=0 order by o.id desc limit "."$nowpage".","."$show";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/unpay.html");
 	}    
 	//δ����
 	public function unsend(){
 		 $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order where order_status=1";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=7;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=unsend";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id where o.order_status=1  order by o.id desc limit "."$nowpage".","."$show";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/unsend.html");
 		
 		}
 	//�ѷ���	
 		public function sent(){
 		 $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order where order_status=6";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=7;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=sent";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id where o.order_status=6 order by o.id desc limit "."$nowpage".","."$show";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/send.html");
 		
 		}
 		
 //	�����
   public function finish(){
   	 $obj = new OrderModel();
             $sql1="select count(order_num) sum from bhs_order where order_status=2";
             $total=$obj->select($sql1)[0]['sum'];//�ܼ�¼��
             $show=7;//��������
             $obj1=new Page($total,$show);//��ҳ��
             $nowpage=$obj1->limitpage;
             $url="&c=order&a=finish";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "SELECT o.*,g.artnum,g.title,g.price,g.num,u.username FROM `bhs_order` o
INNER JOIN bhs_goods g on o.goods_id=g.id
INNER JOIN bhs_user u on u.id=o.user_id where o.order_status=2   order by o.id desc limit "."$nowpage".","."$show";
             $arr = $obj->select($sql);//��ȡ��Ʒ��������
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("order/finish.html");
   	
   	}	
    public function editororder(){
        if(!empty($_GET['order'])){
            $obj= new OrderModel();
            $sql ="select o.*,u.username,u.address,g.title,g.price from bhs_order o INNER JOIN bhs_user u on o.user_id = u.id INNER JOIN bhs_goods g on g.id=o.goods_id where o.order_num={$_GET['order']}";
            $arr = $obj->select($sql);
            $GLOBALS['smarty']->assign("arr", $arr);
            $GLOBALS['smarty']->display("order/editororder.html");
            if(!empty($_POST)){
              $bool = $obj->editor();
                if($bool){
                    $this->skip('?c=order&a=select',1);
                }else{
                    $this->skip('?c=order&a=select',0);
                }
            }
        }
    }

 public function kd(){
         if(!empty($_GET['order'])) {
             $order = $_GET['order'];
             $obj=new OrderModel();
             $lgt = $obj->select("select * from bhs_lgt");
             $GLOBALS['smarty']->assign("lgt", $lgt);
             $GLOBALS['smarty']->assign("order", $order);
             $GLOBALS['smarty']->display("order/kd.html");
         }
     }

      public function saveKd(){
         /*����ݱ���ӱ������ݣ�������Ϊ����*/
         if(!empty($_POST['lcode'])&&!empty($_POST['api'])) {
             $obj=new OrderModel();
             $lcode = addslashes(trim($_POST['lcode']));
             $api = addslashes(trim($_POST['api']));
             $orderCode = addslashes(trim($_POST['ordercode']));
             $addtime = date('Y-m-d H:m:s');
             $arr = $obj->select("select id from bhs_kd where ordernum='{$orderCode}'");
             if(empty($arr)) {
                 $bool1 = $obj->query("insert into bhs_kd values(null,'{$orderCode}',
'{$lcode}','{$api}','{$addtime}')");
             }else{
                 $bool1 = $obj->query("update bhs_kd set ordernum='{$orderCode}',kdnum='{$lcode}',kdcode='{$api}',addtime='{$addtime}' where ordernum='{$orderCode}'");
             }
            
             //���¶�����Ķ���״̬��״̬Ϊ6ʱ����ʾ�Ѿ�������
             $bool2 = $obj->query("update bhs_order set order_status='6' where order_num='{$orderCode}'");

             if($bool1&&$bool2){
                 $this->skip('?c=order&a=select',1);

             }else{
                 $this->skip('?c=order&a=select',0);
             }
         }


     }
    public function deletex(){
        if(!empty($_GET['order'])){
           $obj=new OrderModel();
            $bool = $obj->delete($_GET['order']);
            if($bool){
                $this->skip('?c=order&a=select',1);

            }else{
                $this->skip('?c=order&a=select',0);
            }
        }
    }
     public function skip($url,$bool){
         if($bool){
             $skip = array(
                 'result'=>'成功!',
                 'url'=>$url
             );
         }
         else{
             $skip = array(
                 'result'=>'失败!',
                 'url'=>$url
             );
         }
         $GLOBALS['smarty']->assign("skip",$skip);
         $GLOBALS['smarty']->display("skip/skip.html");
     }
 }
