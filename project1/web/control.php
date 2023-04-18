<?php
include_once 'Model.php';
ob_start();

class mycontroler extends Model
{
  function __construct()
    {
        // echo "This is controller class";
        parent::__construct();
        session_start();
        //include_once 'header.php';
        $url=$_SERVER['PATH_INFO'];
        //echo $url;
        switch($url)
        {
            case '/register':
              include_once 'header1.php';
          $data=$this->selectall('country');
           
        //echo $url;
                  if(isset($_POST['submit']))
                  {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $pwd=$_POST['pwd'];
                    $add=$_POST['address'];
                    $gender=$_POST['gender'];
                    $lan=$_POST['chk'];
                    $l=implode(",",$lan);
                    $country=$_POST['country'];
                    
                    $data= array('name'=>$name,'email'=>$email,'pwd'=>$pwd,
                    'address'=>$add,'gender'=>$gender,'language'=>$l,'country'=>$country);
                    $this->insert_data('register',$data);
                  }
               
                include_once 'register.php';
                include_once 'footer.php';
                break;

                case '/login':
                   include_once 'header1.php';
                   
                   if(isset($_POST['login']))
                  {   
                    //echo "login successfully";exit; 
                   $email=$_POST['email'];
                   $pwd=$_POST['pwd'];
                  
                 $where=array('email'=>$email,'pwd'=>$pwd);
                   $login=$this->select_where('register',$where);
                   $fetch=$login->num_rows;
                     if($fetch>0)
                    {
                      if(isset($_POST['remember']))
                      {
                      $fdata=$login->fetch_object();
                      $user=$fdata->name;
                      $uid=$fdata->id;
                      $_SESSION['user']=$user;
                      $_SESSION['uid']=$uid;
                   setcookie("user",$email,time()+3600);
                    setcookie("pwd",$pwd,time()+3600);
                    echo"<script>alert('login success');</script>";
                    header('location:home');
              }}
                   else
                    {
                       echo"<script>alert('invalid data');</script>";
                    }
                  }
                   include_once 'login.php';
                   include_once 'footer.php';
                  break;
                 
                  case '/home':
                //  echo $_SESSION['user'];
                  // if(isset($_SESSION['user']))
                  //   {
                      $all_data=$this->selectall('product');
                    include_once 'index_old.php';
                    
                    // }
                    // else
                    // {
                    //   header('location:home');
                    // }
                    break;
                    case '/logout':
                      session_destroy();
                      header('location:login');
                      break;
                      
                      case '/products':
                        include_once 'header.php';
                        $all_data=$this->selectall('product');
                         
                        if(isset($_POST['submit']))
                        {
                          $uid=$_SESSION['uid'];
                          $pid=$_POST['pid'];
                          $qty=$_POST['qty'];
                          $data=array('user_id'=>$uid,'pro_id'=>$pid,'qty'=>$qty);
                          $this->insert_data('cart',$data);
                          header('location:cart');
                        }
                          
                        include_once 'product.php';
                        include_once 'footer.php';
                        break;

                        case '/cart':
                          include_once 'header1.php';
                          if(isset($_SESSION ['uid']))
                          {
                           $cart=$this->join_two('cart','product','cart.pro_id=product.pid');
                            include_once 'cart.php';
                            
                          }
                          else
                          {
                            header('location:login');
                          }
                          //include_once 'footer.php';  
                          break;
                          case '/paytm-payment':
                            if(isset($_SESSION['uid']))
                            {
                              include_once 'header1.php';
                              $cart=$this->join_two('cart','product','cart.pro_id=product.pid');
                              include_once 'paytm_payment.php';
                            }
                            else{
                              header('location:login');
                            }
    
                            break;
                            case '/state':
                              if(isset($_POST['sid']))
                              {$sid=$POST['sid'];
                                $where=array('cid'=>$sid);
                                $se_data=$this->select_where('state',$where);
                                while($s=$se_data->fetch_object())
                                {
                                  $res_state[]=$s;
                                }
                              }
                                include_once 'state.php';
                                break;

                          
                            }           

    }
  }
    
$obj= new mycontroler;
ob_flush();
  
?>
        