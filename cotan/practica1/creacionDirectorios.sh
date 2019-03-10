#!/bin/bash

ruta="/var/www/html"

mkdir $ruta/info $ruta/privado $ruta/publico
echo "<?php phpinfo(); ?>" > $ruta/info/phpinfo.php
mv $ruta/index.html $ruta/info
> $ruta/privado/claves.html
> $ruta/privado/nuevasclaves.php
> $ruta/publico/index.html
> $ruta/publico/index.php
> $ruta/publico/usuarios.html
mkdir $ruta/publico/protegido
> $ruta/publico/protegido/claves.html
> $ruta/publico/protegido/nuevasclaves.php
