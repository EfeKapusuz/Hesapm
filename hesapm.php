<head>
<meta charset="utf-8">
</head>
<center>
HESAP MAKİNESİ
<form action="" method="post">
<table border="0">
<tr>
<td>Sayı 1:</td>
<td><input type="number" name="s1" value="0"></td>
</tr>
<tr>
<td>Sayı 2:</td>
<td><input type="number" name="s2" value="0"></td>
</tr>
<tr>
<td>İşlem:</td>
<td>
<select name="islem">
<option value="1">Topla</option>
<option value="2">Çıkar</option>
<option value="3">Çarp</option>
<option value="4">Böl</option>
<option value="5">Mod(Kalan)</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="gonder" value="İşlem Yap"></td>
</tr>
<table>
</form>
</center>

<?php
//Formdan gelen veri alma
if(isset($_POST["gonder"]))
{
		$sayi1=$_POST["s1"];
		$sayi2=$_POST["s2"];
		$islem=$_POST["islem"];
		if($islem==1)
			$sonuc=$sayi1+$sayi2;
		else if($islem==2)
			$sonuc=$sayi1-$sayi2;
		else if($islem==3)
			$sonuc=$sayi1*$sayi2;
		else if($islem==4)
			$sonuc=$sayi1/$sayi2;
		else if($islem==5)
			$sonuc=$sayi1%$sayi2;
		echo "Seçtiğiniz işlemin sonucu: $sonuc";
}
?>