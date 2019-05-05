create database libreria;
create user 'tw'@'localhost' identified by 'aprobandoTW';
grant all privileges on * . * to 'tw'@'localhost';
flush privileges;
use libreria;
\. ../model/autor.sql
\. ../model/libro.sql
\. ../model/publicado.sql
\. ../model/usuario.sql
