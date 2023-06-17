<?php
include_once 'Model.php';
ob_start();

class mycontroller extends Model
{
  function __construct()
    {
        // echo "This is controller class";
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        
 
        // echo $url;

        switch($url)
        {
            case '/login':
              //include_once 'header.php';
             // echo $url;
            if(isset($_POST['login']))
            {
              $email=$_POST['email'];
              $pwd=$_POST['pwd'];
              $where=array('email'=>$email,'pwd'=>$pwd);

              $login=$this->select_where('admin',$where);
             $fetch=$login->num_rows;
              //echo $fetch;exit;
                if($fetch>0)
               {
                echo"<script>alert('login successfully');</script>";
               }
              else
               {
                  echo"<script>alert('invalid email or password');</script>";
               }
               //header ('location:users');
             
             }
               include_once 'login.php';
              //include_once 'footer.php';
              break; 
             
             
            case '/users':
              include_once 'header.php';
             $users=$this->join_two('register','country',"register.country=country.cid");
              include_once 'users.php';
                //include_once 'footer.php';
                break;
                
                case '/delete':
                  include_once 'header.php';
                  if(isset($_GET['id']))
                  {
                    $did=$_GET['id'];
                    $where=array('id'=>$did);
                    $del=$this->delete('register',$where);
                    if(isset($del))
                    {
                    
                        echo"<script>alert('record deleted');</script>";
                       }
                      else
                       {
                          echo"<script>alert('record not deleted');</script>";
                       }
                      }
                       header('location:users');
                       break;

                      case '/edit':
                        $data=$this->selectall('country');
                        include_once 'header.php';
                        if(isset($_GET['id']))
                        {
                         $id=$_GET['id'];
                          $where=array('id'=>$id);
                         $alldata=$this->select_where('register',$where);
                         $d = $alldata->fetch_object();
                        //  print_r($data);exit;

                        //update
                        if(isset($_POST['update']))
                        {
                          $name=$_POST['name'];
                          $email=$_POST['email'];
                          $add=$_POST['address'];
                          $gender=$_POST['gender'];
                          $lan=$_POST['chk'];
                          $l=implode(",",$lan);
                          $country=$_POST['country'];
                          
                          $data= array('name'=>$name,'email'=>$email,
                    'address'=>$add,'gender'=>$gender,'language'=>$l,'country'=>$country);
                    
                          $result=$this->update_data('register',$data,$where);
                         header('location:users');
                        }
                  
                        }
                        include_once 'edit_user.php';
                        break;

                  case '/add_product':
                   include_once 'header.php';
                   $data=$this->selectall('brand');
           
                   if(isset($_POST['submit']))
                   {
                    $pname=$_POST['pname'];
                    $pimg=$_FILES['pimg']['name'];
                    echo $pimg;
                    $price=$_POST['price'];
                    $pdesc=$_POST['pdesc'];
                    $brand=$_POST['brand'];
                    echo $_POST['brand'];
                    if($brand==1)
                    {
                    move_uploaded_file($_FILES['pimg']['tmp_name'],'upload/iphone/'.$pimg);
                    $bid=1;
                    }
                    elseif($brand==2)
                    {
                      move_uploaded_file($_FILES['pimg']['tmp_name'],'upload/oppo/'.$pimg);
                      $bid=2;
                    }
                    else
                    {
                      move_uploaded_file($_FILES['pimg']['tmp_name'],'upload/samsung/'.$pimg);
                      $bid=3;
                    }
                    $data=array('pname'=>$pname,'pimg'=>$pimg,'price'=>$price,'pdesc'=>$pdesc,'bid'=>$bid);
                    //print_r($data);exit;
                    $this->insert_data('product',$data);
                    
                  }
                    include_once 'add_product.php';
                   //include_once 'footer.php';
                  
                   break;  
                   case '/products':
                    $pdata=$this->join_two('product','brand',"product.bid=brand.brand_id");
                    include_once 'header.php';
                     include_once 'products.php';  
                    break;

                   case '/product_edit':
                    $brand=$this->selectall('brand');
                    include_once 'header.php';
                    if(isset($_GET['pid']))
                    {
                      $pid=$_GET['pid'];
                      //echo $pid;exit;
                    $where=array('pid'=>$pid);
                     $pdata=$this->select_where('product',$where);
                    $p = $pdata->fetch_object();
                   //print_r($p->pname);exit;
                    }
                    else
                    {
                      echo "not work";
                    }
                    include_once 'product_edit.php';
                     break;  
                     
                     case '/all_images':
                      //$all=$this->selectall('brand');
                      include_once 'header.php';
                      if(isset($_GET['imd']))
                      {
                        $imd=$_GET['imd'];
                       $where=array('pid'=>$imd);
                       $pr=$this->join_where('product','brand',"product.bid=brand.brand_id",$where);
                       $p=$pr->fetch_object();
                       echo "<pre>";
                       print_r($p);
                       }
                     
                      include_once 'images.php';
                      break;
                    

                    }

                  }
                 
             
             }
             
             
        
 
        
$obj=new mycontroller;
ob_flush();               
?>