<form action="" method="post">
    pelanggan:
    <input type="text" name="namapelanggan" placeholder="nama pelanggan">
    <br>
    harga:
    <input type="text" name="alamat" placeholder="alamat">
    <br>
    stok:
    <input type="number" name="telepon" placeholder="nomor telepon">
    <br>

    <input type="submit" name="simpan" value="simpan">
    
</form>

<?php

$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";
$koneksi=new mysqli($host,$user,$password,$db);

if(isset($_POST["simpan"])){
$nama_pelanggan=$_POST["namapelanggan"];
$alamat=$_POST["alamat"];
$nomor_telepon=$_POST["telepon"];


$sql="INSERT INTO pelanggan (nama_pelanggan,alamat,nomor_telepon) VALUES ('$nama_pelanggan','$alamat',$nomor_telepon)";
$hasil=mysqli_query($koneksi,$sql);
}


$sql="SELECT * FROM pelanggan";
$hasil=mysqli_query($koneksi, $sql,);
var_dump ($hasil);

echo "<table border=1px >
<thead>
        <tr>
            <th>
                NAMA
            </th>
            <th>
                ALAMAT
            </th>
            <th>
                NOMOR
            </th>
        </tr>
</thead>
<tbody>
";


while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}

echo "</tbody>
</table>";


?>