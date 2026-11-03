<?php
include ("../inc/connect.inc");
$lop=$_GET['lop'];  //lay gtri bien lop

$sql="Select * from sinhvien where lop='$lop'";  //lay tat ca cac ban ghi trong bang sinhvien co lop = gia tri bien lop
$rs=mysqli_query($con,$sql);  //biến tắt cho hàm mysqliquery(kết nối,thực thi lệnh)
$str="<table>                 
    <tr class=hd> 
        <th>TT</th>
        <th>Mã số</th>
        <th>Họ tên</th>
        <th>Địa chỉ</th>
    </tr>"; 
$tt=1;  
while($row=mysqli_fetch_array($rs))  //lấy từng bản ghi trong bảng sinhvien
{
    $str.="<tr>
        <td>$tt</td>
        <td>$row[masv]</td>
        <td>$row[hoten]</td>
        <td>$row[diachi]</td>
    </tr>";
    $tt++;
}
$str.="</table>";
echo $str;  //in bảng
?>
