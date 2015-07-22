<html>
<body>
<strong>
Los ISOs multi arquitectura, pueden ser instalados tanto en 64 bits como en 32 bits.<br>
Los kfreebsd aun no soportan este formato, por eso existe uno por cada arquitectura.
</strong><br><br>
Puede generar a pedido cualquiera de las isos soportadas solo presionando el boton correspondiente:
<form action="generate_iso.php" method="get">
<table border="1">
<tr>
<th></th>
<th>Linux Stable</th>
<th>Linux Testing</th>
<th>KFreeBSD Stable</th>
<th>KFreeBSD Testing</th>
</tr>
<tr style="text-align:center">
<th>NetInstall</th>
<td><table>
        <td><input name="generate" type="radio" value="LINSTANET386">I386</td>
        <td><input name="generate" type="radio" value="LINSTANET64">AMD64</td>
        <td><input name="generate" type="radio" value="LINSTANETMA">Multi Arch</td>
</td></table>
</td>
<td><table>
        <td><input name="generate" type="radio" value="LINTESNET386">I386</td>
        <td><input name="generate" type="radio" value="LINTESNET64">AMD64</td>
        <td><input name="generate" type="radio" value="LINTESNETMA">Multi Arch</td>
</td></table>

<td><table>
	<td><input name="generate" type="radio" value="BSDSTANET386">I386</td>
	<td><input name="generate" type="radio" value="BSDSTANET64">AMD64</td>
</td></table>
<td><table>
        <td><input name="generate" type="radio" value="BSDTESNET386">I386</td>
        <td><input name="generate" type="radio" value="BSDTESNET64">AMD64</td>
</td></table>
</tr>

<tr style="text-align:center">
<th>CD #1</th>
<td><table>
        <td><input name="generate" type="radio" value="LINSTACD1386">I386</td>
        <td><input name="generate" type="radio" value="LINSTACD164">AMD64</td>
        <td><input name="generate" type="radio" value="LINSTACD1MA">Multi Arch</td>
</td></table>
</td>
<td><table>
        <td><input name="generate" type="radio" value="LINTESCD1386">I386</td>
        <td><input name="generate" type="radio" value="LINTESCD164">AMD64</td>
        <td><input name="generate" type="radio" value="LINTESCD1MA">Multi Arch</td>
</td></table>

<td><table>
        <td><input name="generate" type="radio" value="BSDSTACD1386">I386</td>
        <td><input name="generate" type="radio" value="BSDSTACD164">AMD64</td>
</td></table>
<td><table>
        <td><input name="generate" type="radio" value="BSDTESCD1386">I386</td>
        <td><input name="generate" type="radio" value="BSDTESCD164">AMD64</td>
</td></table>
</tr>

<tr style="text-align:center">
<th>DVD #1</th>
<td><table>
        <td><input name="generate" type="radio" value="LINSTADVD1386">I386</td>
        <td><input name="generate" type="radio" value="LINSTADVD164">AMD64</td>
        <td><input name="generate" type="radio" value="LINSTADVD1MA">Multi Arch</td>
</td></table>
</td>
<td><table>
        <td><input name="generate" type="radio" value="LINTESDVD1386">I386</td>
        <td><input name="generate" type="radio" value="LINTESDVD164">AMD64</td>
        <td><input name="generate" type="radio" value="LINTESDVD1MA">Multi Arch</td>
</td></table>

<td><table>
        <td><input name="generate" type="radio" value="BSDSTADVD1386">I386</td>
        <td><input name="generate" type="radio" value="BSDSTADVD164">AMD64</td>
</td></table>
<td><table>
        <td><input name="generate" type="radio" value="BSDTESDVD1386">I386</td>
        <td><input name="generate" type="radio" value="BSDTESDVD164">AMD64</td>
</td></table>
</tr>
</table>
<br><input value="Generar" type="submit">
</form>
<strong>Disponibles actualmente:</strong><br>
<ul>
<?php
if ($handle = opendir('iso')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
              echo "<li><a href=\"iso/$entry\"\>$entry<a\><li\>" ;
						}
							}
		closedir($handle);
				}
?>
</ul>
</body>
</html>
