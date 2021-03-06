<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/03/04 0004
 * Time: 14:07
 */
//模型不能和其他本项目模型打交到，只能new数据库里面的方法和分页方法；
class NodeModel{

    //下面方法是用作添加
       public function  add(){
           $obj = Db::getInstance();//做添加首先要连接到数据库，而Db::getInstance则表示一个已经被实例化的类调到这里用
           $node =htmlentities(addslashes($_POST['node'])); //addslashes函数表示转义值的符号，htmlentities函数表示转义值里面的html实体标签，让值成为实体而不是标签，
           $cname =htmlentities(addslashes($_POST['name']));
           $pid = $_POST['pid'];
           $level = $_POST['level'];
           $sql = "insert into bhs_node(node,name,pid,level) values('{$node}','{$cname}','{$pid}','{$level}')";//这行表示是一个设置sql语句
           return $obj->query($sql);  //obj属于Db类库了，调用里面的query方法，在吧sql语句传给query，最后return给add；
       }


    //下面这个方法是方便这个模型里面的方法使用，简洁代码量
    public function select($sql){   //设置一个控制器来调用的方法
        $db = Db::getInstance();    //先调用Db类 给到变量db
        $res = $db->query($sql); //在取db里面的query方法，设置参数，给到变量brandRes，得到的是资源
        if(is_resource($res)) {    //判断一下变量brandRes是不是资源集，如果是就执行里面的代码
            return $db->fetchAll($res);    //在调用变量db里面的fetchAll方法将 资源brandRes转换成二维数组给到$arr
        }//就把arr数组返还给select方法
    }

    //下面是selectPage方法，表示需要显示多少条记录
    public function selectPage(){
        $total = $this->getTotal();//首先要拿到总记录数有多少条，在自己类里的gettotal方法里面已经处理完了，就直接调用过来，给到变量total
        $page = new Page($total,7); //实例化page类
        $sql = "select * from bhs_node order by id desc limit {$page->limitpage},{$page->show}";//这是设置一个sql语句，单这里经常出错，所以以后要经常检查sql语句是否有错误的；
        $arr = $this->select($sql);//调用自己类里面的select方法 <—里面的$sql就是上一行代码传过来的语句，给到$arr
        return $arr;    //arr里面的值: 选到bhs_brand的表里面，根据条件显示多少条记录的所有字段；
    }

  //下面是getTotal方法，表示需要查出某个表的总记录数
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_node order by id desc");
        if(!empty($count)) {
            $arrcount = $db->fetchAll($count);
            $total = $arrcount[0]['total'];
        }
        return $total;
    }

    //下面是page方法，是用来处理分页的
    public function page(){//设置一个方法
        $total = $this->getTotal();//首先要拿到总记录数有多少条，在自己类里的gettotal方法里面已经处理完了，就直接调用过来，给到变量total
        $page = new Page($total,7);//在实例化Page类库，而Page需要传参数，所以才需要上面一行代码，拿到之后；给到page变量
        $pageData = $page->showpage('&c=node&a=select');   //在调用page里面的showpage方法，showpage需要传参数，这个参数也就是在前台点击 《上一页》 或者 《下一页》~~里面要跳转的文件个方法
        return $pageData;   //上面一行代码已经把值给到pageData， 这里直接把值返回给page；
    }

    //下面是updataselect方法，是根据前台传过来的id选到相对应的记录
    public function updataselect(){
       $obj = $this->select('select * from bhs_node where id='.$_GET['id']);
        return $obj;
    }

    //下面的updata方法，是用来处理修改的
    public function updata(){
        $obj = Db::getInstance();  //还是老套路，先连接到数据库，如果不连接到数据库是无法做处理的
        $pid = $_POST['pid']; // addslashes函数表示转义值的符号，htmlentities函数表示转义值里面的html实体标签，让值成为实体而不是标签，
        $level = $_POST['level'];// 根据前台post传过来的id
        $id = $_POST['id'];
        $node = htmlentities(addslashes($_POST['node']));
        $name = htmlentities(addslashes($_POST['name']));
        $sql = $obj->query("update bhs_node set pid='{$pid}',level='{$level}',node='{$node}',name='{$name}' where id='{$id}'");//根据id修改到相对应的记录
        return $sql; //sql变量已经获得一条记录，把这sql返回到updata里
    }

    //下面是delect方法，是用来删除的
   public function delete($sql){
       $obj = Db::getInstance();//不说了 继续连接到数据库 类
        //在把上面的语句放到obj里面的query方法，最后直接打回这里面的值，
       return $obj->query($sql);
   }



}