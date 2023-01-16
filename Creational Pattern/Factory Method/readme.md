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

Pattern Factory Method membuat kita mengubah yang tadinya membuat object secara direct call (seperti "new" operator) diganti dengan memanggil factory method khusus, jangan khawatir, object akan tetap dibuat melalui oprator "new", tapi yang membedakan adalah kini dia dipanggil dalam factory method. <br />

objek yang dikembalikan dari Factory Method sering disebut "Product".

![solusi](https://raw.githubusercontent.com/taufiqtab/design-pattern/main/Creational%20Pattern/Factory%20Method/img/solution2.png)

sekilas, perubahan ini terlihat sia sia / sama aja, kita hanya memindahkan pemanggilan constructor dari satu tempat ke tempat lainnya, namun yang menjadi pertimbangan saat ini adalah, sekarang kita bisa mengganti / melakukan override Factory Method pada subclass dan mengubah class product yang dibuat pada method.<br/>

namun ada batasan, yaitu Subclass bisa mengembalikan jenis produk yang berbeda jika produk ini memiliki Base Class atau Interface yang sama, dan juga Factory Method pada Base Class harus memiliki tipe return yang di deklarasikan sebagai Interface nya.

![solusi](https://raw.githubusercontent.com/taufiqtab/design-pattern/main/Creational%20Pattern/Factory%20Method/img/solution3.png)

Sebagai contoh, kedua Class Truck dan Ship harus mengimplementasikan interface Transport, yangmana ia harus mendeklarasikan
method yang bernama "deliver". setiap Class mengimplementasi method ini dengan cara yang berbeda, Truck mengirim cargo melalui Daratan, sedangkan Ship mengirim cargo melalui lautan. Factory method pada class RoadLogistics mengembalikan objek Truck, dan begitupula Factory Method pada class SeaLogsitic mengembalikan objek Ships.

Sebuah Code yang menggunakan Factory Method (sering juga disebut sebagai Client) tidak melihat perbedaan antara "Product" yang dikembalikan oleh macam-macam Subclass. Class Client ini memperlakukan semua "Produk" sebagai abstract class dari "Transport". Client Class mengetahui bahwa semua object dari hasil Transport memiliki method "deliver", tapi Class Client tidak peduli seperti apa detailnya method tsb bekerja.

## Struktur

![solusi](https://raw.githubusercontent.com/taufiqtab/design-pattern/main/Creational%20Pattern/Factory%20Method/img/structure1.png)
