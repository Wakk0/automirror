<html>
<body>
<?php
switch ($_GET["generate"]) {
case "LINSTANET386": echo "Se ha comenzado a generar la iso Linux Stable Netinstall i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-i386-netinst > /dev/null 2>&1 &'); break;
case "LINSTANET64": echo "Se ha comenzado a generar la iso Linux Stable Netinstall AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-amd64-netinst > /dev/null 2>&1 &'); break;
case "LINSTANETMA": echo "Se ha comenzado a generar la iso Linux Stable Netinstall Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-multi_arch-netinst > /dev/null 2>&1 &'); break;
case "LINTESNET386": echo "Se ha comenzado a generar la iso Linux Testing Netinstall i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-i386-netinst > /dev/null 2>&1 &');  break;
case "LINTESNET64": echo "Se ha comenzado a generar la iso Linux Testing Netinstall AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-amd64-netinst > /dev/null 2>&1 &'); break;
case "LINTESNETMA": echo "Se ha comenzado a generar la iso Linux Testing Netinstall Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-multi_arch-netinst > /dev/null 2>&1 &'); break;
case "BSDSTANET386": echo "Se ha comenzado a generar la iso KFreeBSD Stable Netinstall i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-i386-netinst > /dev/null 2>&1 &'); break;
case "BSDSTANET64": echo "Se ha comenzado a generar la iso KFreeBSD Stable Netinstall AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-amd64-netinst > /dev/null 2>&1 &'); break;
case "BSDTESNET386": echo "Se ha comenzado a generar la iso KFreeBSD Testing Netinstall i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-i386-netinst > /dev/null 2>&1 &'); break;
case "BSDTESNET64": echo "Se ha comenzado a generar la iso KfreeBSD Testing Netinstall AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-amd64-netinst > /dev/null 2>&1 &'); break;

case "LINSTACD1386": echo "Se ha comenzado a generar la iso Linux Stable CD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-i386 > /dev/null 2>&1 &');  break;
case "LINSTACD164": echo "Se ha comenzado a generar la iso Linux Stable CD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-amd64 > /dev/null 2>&1 &'); break;
case "LINSTACD1MA": echo "Se ha comenzado a generar la iso Linux Stable CD#1 Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-multi_arch-netinst > /dev/null 2>&1 &'); break;
case "LINTESCD1386": echo "Se ha comenzado a generar la iso Linux Testing CD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-i386 > /dev/null 2>&1 &'); break;
case "LINTESCD164": echo "Se ha comenzado a generar la iso Linux Testing CD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-amd64 > /dev/null 2>&1 &'); break;
case "LINTESCD1MA": echo "Se ha comenzado a generar la iso Linux Testing CD#1 Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-multi_arch > /dev/null 2>&1 &'); break;
case "BSDSTACD1386": echo "Se ha comenzado a generar la iso KFreeBSD Stable CD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-i386 > /dev/null 2>&1 &'); break;
case "BSDSTACD164": echo "Se ha comenzado a generar la iso KFreeBSD Stable CD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-amd64 > /dev/null 2>&1 &'); break;
case "BSDTESCD1386": echo "Se ha comenzado a generar la iso KFreeBSD Testing CD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-i386 > /dev/null 2>&1 &'); break;
case "BSDTESCD164": echo "Se ha comenzado a generar la iso KfreeBSD Testing CD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-amd64 > /dev/null 2>&1 &'); break;

case "LINSTADVD1386": echo "Se ha comenzado a generar la iso Linux Stable DVD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-i386-dvd > /dev/null 2>&1 &'); break;
case "LINSTADVD164": echo "Se ha comenzado a generar la iso Linux Stable DVD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-amd64-dvd > /dev/null 2>&1 &'); break;
case "LINSTADVD1MA": echo "Se ha comenzado a generar la iso Linux Stable DVD#1 Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-multi_arch-dvd > /dev/null 2>&1 &'); break;
case "LINTESDVD1386": echo "Se ha comenzado a generar la iso Linux Testing DVD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-i386-dvd > /dev/null 2>&1 &'); break;
case "LINTESDVD164": echo "Se ha comenzado a generar la iso Linux Testing DVD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-amd64-dvd > /dev/null 2>&1 &'); break;
case "LINTESDVD1MA": echo "Se ha comenzado a generar la iso Linux Testing DVD#1 Multi Arch<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-multi_arch-dvd > /dev/null 2>&1 &'); break;
case "BSDSTADVD1386": echo "Se ha comenzado a generar la iso KFreeBSD Stable DVD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-i386-dvd > /dev/null 2>&1 &'); break;
case "BSDSTADVD164": echo "Se ha comenzado a generar la iso KFreeBSD Stable DVD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/stable-kfreebsd-amd64-dvd > /dev/null 2>&1 &'); break;
case "BSDTESDVD1386": echo "Se ha comenzado a generar la iso KFreeBSD Testing DVD#1 i386<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-i386-dvd > /dev/null 2>&1 &'); break;
case "BSDTESDVD164": echo "Se ha comenzado a generar la iso KfreeBSD Testing DVD#1 AMD64<br>"; exec('nohup /bin/bash /srv/www/wwwcd/testing-kfreebsd-amd64-dvd > /dev/null 2>&1 &'); break;
}
?>
</body>
</html>
