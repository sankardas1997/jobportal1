<?php
class connection
{
var $con,$res;

function getconnect()
{
$this->con=mysqli_connect("localhost","root","1");
mysqli_select_db($this->con,"jobportal");
}

function execute($q)
{
$this->getconnect();
$this->res=mysqli_query($this->con,$q);
return $this->res;
}

}
?>
