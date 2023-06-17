<?php
class Model
{
    public $con;
    function __construct()
    {
        $this->con =new mysqli("localhost","root","","30th_nov");
    }
     function insert_data($tbl,$data)
     {
        $key =array_keys($data);
        $dk= implode(',',$key);
        $val=array_values($data);
        $dv=implode("','",$val);
        $sql="INSERT INTO $tbl($dk) VALUES ('$dv')";
        $q=$this->con->query($sql);
        // echo $sql;exit;
        return $q;
     }
    function selectall($tbl)
    {
        $sql="select * from $tbl";
        $q=$this->con->query($sql);
        while($fetch=$q->fetch_object())
        {
            $res[]=$fetch;
        }
        return $res;
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
    function join_two($tbl1,$tbl2,$on)
    {
        $sql="SELECT * FROM $tbl1 JOIN $tbl2 ON $on";
        //echo $sql;exit;
        $q=$this->con->query($sql);
        while ($fetch=$q->fetch_object())
        {
            $res[]=$fetch;
        }
        return $res;
    }
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
        echo $sql;exit;
        return $q;
       
     }
}
?>