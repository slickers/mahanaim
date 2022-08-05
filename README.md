# mahanaim
Database for Church Based on PHP-MYSQL-AdminLTE 

Preview (Dashboard- guest+admin)
![dashboard](https://user-images.githubusercontent.com/9815234/183091313-94b5e54b-bb60-4fe0-81a2-42570dbd8a52.png)

Login
![login](https://user-images.githubusercontent.com/9815234/183091547-d08e5ec3-a2c3-404c-ab02-fc77f9d4a529.png)

People Records (readonly-guest)
![peoples-db-readonly](https://user-images.githubusercontent.com/9815234/183091456-9e0fb355-67c2-47ae-a9f3-836d140a7cf6.png)

Family Records
![family-db-readonly](https://user-images.githubusercontent.com/9815234/183091496-b97eed1f-fc50-4bbd-9d44-a24fad970a33.png)

Add-Data (modal popup)
![modal-add-data](https://user-images.githubusercontent.com/9815234/183091632-d1f547db-7e57-407b-993a-5b3110a97c7c.png)

Different Menu and Button for admin/operator
![operator-diif-rights](https://user-images.githubusercontent.com/9815234/183091940-cc1e4833-2170-4b9a-a930-f90f96b6fb4b.png)

Administrator Page (add-edit-delete)
![admin-page](https://user-images.githubusercontent.com/9815234/183092003-de39fc05-abca-4c4e-b3a1-3a9da8b1086a.png)


GUIDES:
1. Copy to web-server folder
2. create new DB then import from cms_db_empty.sql
3. query > create new admin user on admindb table. User level is [admin] or [operator]
4. update/copy "PLUGINS" and "DIST" folder from AdminLte 3.1 to "APPS" folder.
5. edit "conf/config.php --> sql connection
6. many SQL queries are scatered on phps file, if you got error, check the related file for SQL query command, and change user/pass for connection

PETUNJUK:
1. Copy ke folder htdoc / web server
2. Buka mysql > db bar, lalu import file cms_db_empty.sql
3. query di table "admindb", buat user baru dengan level [admin] atau [operator]
4. copy/update folder "apps/plugins" dan "apps/dist". ambil dari AdminLte ver.3.1 
5. edit file "config/config.php", ganti informasi untuk koneksi ke mysql nya
6. didalam file (terutama folder "apps/manage" masih banyak manual-query.. belum sempat di bersihkan, jadi bisa di update sesuai info point diatas

credit : (belajarnya di mari)<br>
Herianto Saputra (youtube)<br>petanikode.com<br>malasngoding.com<br>www.fusioncharts.com
