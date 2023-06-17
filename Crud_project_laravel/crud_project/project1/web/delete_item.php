<?php
if ($_SESSION['uid'])
{
    $dit=$_GET['dit'];
   
   $where=array('pro_id'=>$dit);
   $del=$this->delete('cart',$where);
   if(isset($del))
   {
   
       echo"<script>alert('record deleted');</script>";
      }
     else
      {
         echo"<script>alert('record not deleted');</script>";
      }

   
}
?>
