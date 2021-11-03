# iotests
how to do all the stuff

## instructions
1. start Apache and MySQL in XAMPP
2. go to C:\xampp\htdocs and create folder
3. clone repo there
4. go to localhost/phpmyadmin/, konta użytkowników, root localhost i zmiana hasła na <i>localhost</i>
5. go to C:\xampp\phpMyAdmin\config.inc.php and change password in line 21 to <i>localhost</i>
6. go to localhost/phpmyadmin/ and import file tabela.sql

7. check if everything is ok:
- on localhost/test/test.php you should have colorful tile
- on localhost/test/index.php you should have list of elements from database
- note: if google opens try with http://

8. check pushing a commit
