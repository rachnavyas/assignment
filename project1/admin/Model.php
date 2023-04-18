<?php
class Model
{
    public $con;
    function __construct()
    {
        $this->con =new mysqli("localhost","root","","30th_nov");
    }
    
    function select_where($tbl,$where)
    {
        $keys=array_keys($where);
        $val=array_values($where);
        $sql="SELECT * FROM $tbl WHERE 1=1 ";
        $i=0;
        foreach($where as $d)
        {
            $sql.= " and $keys[$i]='$val[$i]'";
            $i++;
        }
     //echo $sql;exit;
        $q=$this->con->query($sql);
        return $q;

    }
    function selectall($tbl)
    {
        $sql="SELECT * FROM $tbl";
        $q=$this->con->query($sql);
        while($fetch=$q->fetch_object())
        {
            $res[]=$fetch;
        }
        return $res;
        
        
    }
    // function select_where2($tbl,$eid)
    // {
    //     $sql="SELECT * FROM $tbl where id=$eid";
    // //echo $sql;exit;
    // $q= $q=$this->con->query($sql);
    // $fetch=$q->fetch_object();
    // $res[]=$fetch;
    // return $res;

    // }
    function delete($tbl,$where)
    {
        $key=array_keys($where);
        $val=array_values($where);
        $sql="DELETE FROM $tbl where 1=1";
        $i=0;
        foreach($where as $d)
        {
            $sql.= " and $key[$i]='$val[$i]'";
            $i++;
        }
        $q=$this->con->query($sql);
        //echo $sql;exit;
        return $q;
       
     }
   function join_two($tbl1,$tbl2,$on)
   {
    $sql="SELECT * FROM $tbl1 JOIN $tbl2 ON $on";
    //echo $sql;exit;
    $q=$this->con->query($sql);
    while($fetch=$q->fetch_object())
    {
        $res[]=$fetch;
    }
    return $res;
   }

function update_data($tbl,$data,$where)
{
    $sql="UPDATE $tbl  SET ";
    $keys=array_keys($data);
    $vals=array_values($data);
    $count=count($data);
    $i=0;
    foreach($data as $d)
    {
        if($count==$i+1)
        {
            $sql.="$keys[$i] ='$vals[$i]'";
        }
        else{
            $sql.="$keys[$i] ='$vals[$i]',";
        }
        $i++;
    }
    $sql.=" WHERE 1=1";
    $wk=array_keys($where);
    $wv=array_values($where);
    $j=0;
    foreach($where as $t)
    {
        $sql.=" AND $wk[$j]='$wv[$j]'";
        $j++;
    }
   //echo $sql;exit;
    $q=$this->con->query($sql);
    return $q;

}
function insert_data($tbl,$data)
{
   $key =array_keys($data);
   $dk= implode(',',$key);
   $val=array_values($data);
   $dv=implode("','",$val);
   $sql="INSERT INTO $tbl($dk) VALUES ('$dv')";
   //echo $sql;exit;
   $q=$this->con->query($sql);
   //echo $sql;exit;
   return $q;
}

function join_where($tbl1,$tbl2,$on,$where)
{
    $keys=array_keys($where);
        $val=array_values($where);
        $sql="SELECT * FROM $tbl1 JOIN $tbl2 ON $on  WHERE 1=1 ";
        $i=0;
        foreach($where as $d)
        {
            $sql.= " and $keys[$i]='$val[$i]'";
            $i++;
        }
       
    //echo $sql;exit;
    $q=$this->con->query($sql);
    return $q;
   
}
} 