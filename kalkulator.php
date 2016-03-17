<html>
<title>Kalkulator Sederhana </title>
<SCRIPT LANGUAGE="JavaScript">
function tambah()
{
m=eval(form.m.value)
n=eval(form.n.value)
q=m+n
form.hasil.value =q
}

function kurang()
{
m=eval(form.m.value)
n=eval(form.n.value)
q=m-n
form.hasil.value=q
}

function kali()
{
m=eval(form.m.value)
n=eval(form.n.value)
q=m*n
form.hasil.value=q
}

function bagi()
{
m=eval(form.m.value)
n=eval(form.n.value)
q=m/n
form.hasil.value =q
}


function kosong()
{
form.a.focus()
form.a.value=""
form.b.value=""
form.hasil.value=""

}

</SCRIPT>

<body bgcolor=grey>

<table width="850" align="center" >
  <tr>
    <td bgcolor=grey><font size="+10">
     Kalkulator Sederhana Menggunakan PHP
    </font></td>
  </tr>
</table>
<FORM name="form">
  <h1><pre>Masukkan Angka 1 : <input type="text" name="m"></h1>
  <h2>     Masukkan Angka 2 : </font><input type="text" name="n"></h2>

<h2><font color="#000000">Hasil:</font>    <font color="#FFFF00"><input type "text" name="hasil" disabled="true"></font></h2>
</pre>
<p>
      <input type="button" value=" + " onClick="tambah()">
      <input type="button" value=" - " onClick="kurang()">
      <input type="button" value=" x " onClick="kali()">
      <input type="button" value=" / " onClick="bagi()">
</p>
<marquee>
<h1><p><em><font face="sans-serif, sans-serif, sans-serif, sans-serif">("D4 TEKNIK INFORMATIKA POLITEKNIK TEGAL")</font></em></p></h1>
</marquee>
</FORM>

<p>&nbsp;</p>


</body>
</html>