# Factory Method

Factory Method adalah Creational Design Pattern yang menyediakan sebuah Interface untuk membuat objek pada Superclass, tapi juga mengizinkan tapi mengizinkan subclass untuk mengubah tipe objek yang akan dibuat.

## Permasalahan 

![current](https://raw.githubusercontent.com/taufiqtab/design-pattern/main/Creational%20Pattern/Factory%20Method/img/problem1.png)

ceritanya kita membuat sebuah aplikasi Logistik. <br />
pada versi pertama, aplikasi kita hanya membuat fitur pengiriman menggunakan Truck, sehingga, semua code kita masukan didalam class Truck, awalnya semua berjalan normal <br />

lalu mulai ada permintaan dari Client / User untuk menambahkan fitur pengiriman menggunakan Kapal...<br />
umumnnya, kita akan membuat Class baru dengan nama misal Ship, lalu kita duplikat semua code yang ada di class Truck kedalam class Ship, dan melakukan penyesuaian code sesuai kebutuhan dari Behavior Class Ship, lalu kita juga akan mengubah Class / Function pada main Apps yang memanggil class Truck agar bisa juga memanggil Class Ship, dengan demikian fitur pengiriman Ship dapat digunakan. <br />

namun, ketika ada rencana penambahan fitur pengiriman menuggunakan Pesawat, Motor, dan lain lain, hal ini akan membuat struktur code berantakan, karena jika menggunakan cara yang sama seperti sebelumnya, kita harus menduplikasi Class yang ada dan mengubah isinya sesuai kebutuhan dari Class / Fitur baru, lalu mengubah semua Function aplikasi yang berkaitan dengan fitur tsb agar dapat berjalan, dan kita melakukan hal ini terus menerus ketika ada penambahan fitur pengiriman lainnya.

## Solusi

![solusi](https://raw.githubusercontent.com/taufiqtab/design-pattern/main/Creational%20Pattern/Factory%20Method/img/solution1.png)



## Struktur