# ==== Menambahkan Judul (Page) diatas browser =====

Dua cara :
 1. `$title`
 = cara ini dimulai dengan memberi parameter pada controller dengan return `"title" => 'home'`. Lalu diikuti dengan child memberikan parameter atau memanggil parameter tersebut dengan `{{ $title }}`.
 + ini bisa mudah digunakan dan di terapkan karna tidak lagi menuliskan judul berulang kali di tiap" file. karna sudah di definisikan diawal yaitu di dalam controller.
 
 

 2. `@yield('title')`
 = dengan cara ini di file child akan diberikan `@section('title', 'Home')`.
 + cara ini efektif apabila kita ingin membuat controller lebih clean.


Model : 
ORM Eloquent model = Object relational mapper. Setiap tabel di dalam database memiliki sebuah "model".
model ini bisa kita petakan dalam tabel. hal ini membantu untuk memanipulasi tabel seperti `Insert`, `Update`, `Delete`.

Model Code :
`php artisan make::model Nama`
Cmmnd Pallete `Laravel Artisan` Extention
: Ctrl + Shift + P for command pallete. => Artisan: Make ModelP
