# Belajar PHP Dasar
Belajar kali ini kita tidak membutuhkan web browser untuk membuka file php tersebut, melainkan menjalankan di *terminal*.

## File Php
1. File php dibuat dengan extension `.php` .
2. sintak PHP dibuat dengan awalan `<?php` kemudian diakhiri dengan `?>`.
3. Tidak boleh menggnakan _spasi_ dalam penamaan berkas php.
4. Untuk menampilkan tulisan menggunakan perintah `echo`.
5. Menjalankan file php di terminal menggunakan perintah `php <file-name>.php`.

## Tipe Data Number
Terdapat 2 jenis tipe data number di php.
- (int) => Desimal/base 10, Hexadesimal base 16, octa/ base 8, binary/ base 2.
- (Float ) => Belangan pecahan.
- Untuk memudahkan dalam membaca angkka, gunakan _underscore_ ( _ ) misalkan 10_ 000_000.
- (Integer OverFlow) => beda tipe mesin komputer beda hasil antar 32 dan 64 bit, jka jumlah angka melebihi kapasitas dari mesin tersebut akan menjadi floating point.

***Silahkan buka file*** `TypeDataNumber.php`.

## Tipe Data Boolean
- Tipe dengan nilai ***benar*** atau ***salah***.
- Nilainya bersifat _case insensitive_ (TrUe | tRue | fAlsE | FalsE | true | false).

***Silahkan buka file*** `TypeDataBool.php`

## Tipe Data String
- Tipe data ini merupakan representasi dari teks.
- String bisa mengandung _kosong_ " " atau banyak karakter "karakter".
- Bisa menggunakan _single quote_ 'str'.
- Bisa menggunakan _double quote_ "str",kelebihan dari dobel quot ini adalah bisa mneggunakan _escape sequence_  seperti `\n` untuk ENTER, `\t` untuk TAB dan yang lainnya.

### Multiline String
Ketika membuat sebuah tipe data string kita bisa menggunakan cara _heredoc_ _nowdoc_
- _heredoc_

```php
	echo <<<t
	halo saya belajar $variable
	Sekarang lagi belajar Typedata String
	dan menggunkan heredoc
	keren kan?
	t; 
```

- _nowdoc_

```php

	echo <<<'t' //menggunakan kutip
	halo saya belajar PHP
	Sekarang lagi belajar Typedata String
	dan menggunkan heredoc
	keren kan?
	t;

```
_nowdoc_ tidak bisa memparsing data variable
***Silahkan buka file*** `TypeDataString.php`

## Variable
- Variable merupakan untukk menyinpan data sehingga kita dapat menggunbakan lagi kode programnya.
- Data dari nilai variable tersebut dapat berubah, misalkan dari _string_ bisa dibah ke _integer_.
- Dimulai dengan tanda $ (dolar) kemudian diikuti nama variable `$var = "string"`.
- Tidak boleh mengandung _spasi_ di variablenya ~$var able = "string"~.


###  Variable Variables
Membuat nama variabel dari nilai variable, fitur ini sangat membingungkan saat mode development nanti, jadi tidak disarankan menggunakan jika tidak diperlukan.
Penggunaan sintak ini meggunakan tanda dolar 2 kali `$$` . Contoh:
```php
$name = 'han';
$$name = 'hanasa';

```
`$$name` itu sebenarnya `$han`

***Silahkan buka file*** `variabel.php`

## Constant
Kata lain dari variable yang mana nilai tidak bisa dirubah _(immutable)_ dan disranakn dalam best practicenya menggunakan capital _(UPPER_CASE)_
contoh sintak
```php
define('NAMA_VAR', 'STRING');
echo NAMA_VAR;
```

## Null
Nilai `NULL` merepresentasikan sebuah variable tanpa nilai, kita bisa menggunakan `null` untuk menghapus data sebuah variable, `NULL` sendiri bersifat _case insesitive_ atau boleh kapital boleh huruf kecil tulisannya.
```php
$name = "Hanasa";
$name = null;

echo "Name : $name";
```

### mengecek data null atau tidak
Kadang kita ingin menegcek apakah data tersebut kosong alias `null`, kita bisa meggunakan function `is_null($var)` dan hasilnya `boolean`
```php
$name = null;
echo is_null($name); // 1 atau true
```

### Menghapus Variable
Selain bisa menghapus nilai dari variable, `php` juga bisa menghapus variable itu sendiri dengan function `unset($var)`
```php
$age = 23;
unset($age);

echo $age; //error karena sudah dihapus
```

### Mengecek variable
Untuk mengecek variabel apakah ada dan ada nilainya (tidak `null`) kita bisa menggunakan function `isset($var)`
```php
$age = 23;
$age = null;
isset($age); //false

$age = "24";
isset($age); //true
```

## Array
Tipe data ini bisa menampung beberapa jenis data dalam satu variable. Bisa itu int, str, bool.
### Operasi Array
|Operasi| Keterangan|
| ---- | -----|
|$array[index] | Mengakses data di array pada nomor index |
|$array[index] = value | Mengubah data di array pada nomor index dengan value baru |
|$array[] = value | Menambah data array|
|unset($array[index]) | menghapus data di array, index otomatis hilang|
|count($array) | menghitung jumlah data pada array |

### Array map
Ketika kita membuat array nilai dari array tersebut mempunyai nilai yang berhubungan yaitu key dan value, key didalam sebuah array secara default berupa anggak dimulai dari 0, tetapi di php kita bisa membuat sesuai yang kita inginkan pada key-nya.

```php
$name = [
	"id" => "IDXuy56",
	"name" => "Hanasa",
	"address" => [
		"city" => "Ciamis",
		 "country" => "Indonesia"
	]
]
```

## Aritmatika
|Operator | Keterangan |
|---------| -------------|
| +$var | Positif |
| -$var | Negatif |
| $vara + $varb | Penambahan |
| $vara - $varb | Pengurangan |
| $vara * $varb | Perkalian |
| $vara / $varb | Pembagian |
| $vara % $varb | Faktorial atau sisa bagi |
| $vara ** $varb | Perpangkatan |

### Penugasan Pada Aritmatika
|Operator | Keterangan |
|---------| -------------|
| $a += $b | $a = $a + $b |
| $a -= $b | $a = $a - $b |
| $a *\= $b | $a = $a * $b |
| $a %= $b | $a = $a % $b |
| $a /= $b | $a = $a / $b |


```php
$total = 0;
$buah = 12000;
$sayuran = 23000;

$total += $buah;
$total += $sayuran;

echo $total; //35000;
```

## Operator Logika
|Operator | Nama | Hasil |
|---------|------|-------|
|$a && $b | And | _true_ Jika $a dan $b keduanya _true_ |
|$a and $b | And | _true_ Jika $a dan $b keduanya _true_ |
|$a \|\| $b | Or | _true_ Jika $a dan $b salah satunya _true_ |
|$a or $b | Or | _true_ Jika $a dan $b salah satunya _true_ |
|!$a  | Not | _true_ Jika $a berniai _false_ atau disebut kebalikan |
|$a Xor $b | Xor | _true_ Jika  $a dan $b salah satunya _true_, tapi tidak keduanya|

```php
var_dump(true && true); //true
var_dump(true && false); //false
```

## Operator Perbandingan
|Operator | Nama | Keterangan |
|---------|------|-------|
|$a !== $b | Tidak Identik | _true_ jika $a dan $b tidak sama dengan atau tidak sama tipe data |
|$a < $b | Kurang Dari | _true_ jika $a kurang dari $b |
|$a <= $b | Kurang dari atau sama dengan | _true_ jika $a kurang dari atau sama dengan dari $b|
|$a > $b | Lebih Dari | _true_ jika $a lebih dari $b |
|$a >= $b | Lebih dari atau sama dengan | _true_ jika $a lebih dari atau sama dengan dari $b|

```php
var_dump(10 !== "10"); //true
var_dump(10 == 10); //true
var_dump("10" == 10); //true

```

## Operator Increment dan Decrement
|Operator | Nama | Keterangan |
|---------|------|-------|
|$a++ | Post Increment | Kembalikan $a lalu naikkan 1 |
|++$a | Pre Increment | naikan 1 lalu kembalika $a|
|$a-- | Post Decrement | Kembalikan $a lalu turunkan 1 |
|++$a | Pre Decrement | turunkan 1 lalu kembalika $a|

```php
$a = 2;
$c = $a++;
echo $c; // 2

```
Maksud dari hasil dari c menjadi 2 bukan 3 adalah karena sintaknya bisa sama seperti:
```php
$c = $a; //$a simpan ke $c
$a = $a + 1 //kemudian
```
## Operator Array
|Operator | Nama | Keterangan |
|---------|------|-------|
|$a + $b| Union | Menggabungkan array $a + $b|
|$a == $b| Equality | `true` jika $a dan $b memiliki key-value sama| 
|$a === $b| Identity | `true` jika $a dan $b memiliki key-value sama dan posisi sama | 
|$a != $b| Inequality | `true` jika $a dan $b tidak sama|
|$a <> $b| Inequality | `true` jika $a dan $b tidak sama|
|$a !== $b| Nonidentity | `true` jika $a dan $b tidak identik|

***Contoh***
```php
$first = [
	"first" => "Han Han" // sama
];
$last = [
	"first" => "Sofari", //bentrok / sama
	"last" => "Hanasa"
];
$full = $first + $last;

var_dump($full); 

```

jika itu bentrok _key_ nya dengan variable sebelumnya maka nilainya akan diabaikan dan hasilnya akan menjadi seperti ini:
```bash
//result
array(2) {
  'first' =>
  string(7) "Han Han"
  'last' =>
  string(6) "Hanasa"
}
```
## Manipulasi String
### Dot Operator
Ini digunakan untuk menambahkan antara `string` dengan type data yang lain, sebenarnya bisa saja menggunakan tanda plus (+) tetapi tidak disarankan karean tanda plus (+) hanya dignakan untuk operasi matematika. Seperti Contoh berikut:
```php
$name = "Hanasa";
echo "nama saya " . $name . PHP_EOL;

$nilai = 100;
echo "nilai tugas: ". $nilai . PHP_EOL;
```

_Catatan_ : `PHP_EOL` => kependekan dari *PHP End Of Line* sintak pengganti `"\n"` untuk membuat garis baru.

### Mengganti type data
Terkadang kita mau mengubah type data dari inputan user misalkan user meninput data dengan type string "100" kita harus mengubahnya ke type number (int/float), kita cukup menggunakan dengan formula `(typedata)value` contoh:
```php
$valueStr = (string)100;
var_dump($valueStr); // string(3) "100"

$valueName = (int)"Hanasa";
var_dump($valueName); // int(0)
```

Kalau kita mengubah nilai yang salah, misal dari `(int)"Hanasa"` maka mengembalikan `int(0)`

### Mengakses Karakter
Untuk mengakses karakter sama seperti array menggunakan kurung siku dan indexnya dimulai dari 0.
```php
$name = "Hanasa";
echo $name[2]; // n

```

### menambahkan karakter pada nilai variable
Jika kalian ingin menambahkan karakter string tanpa mengubahkan nilai variable, bisa kalian gunakan kurung kriwil `{}` 
```php
$myDonut = "Donut";
echo "i have 3 {$myDonut}'s"; //i have 3 Donut's

```

## Percabangan
Hampir semuanya bahasa pemograman memppunyai fitur percabangan
### `if statement`
- `if statement` digunakan untuk mengembalikan statement jika suatu nilai terpenuhi (bernilai true).
- `else` digunakan untuk mengembalikan statement jika nilai berkondisi (false).
- sedangkan `else if` atau `elseif` digunakan jika kita mempunyai suatu kondisi bernilai (true) lebih dari satu.

### Switch
- `switch statement` digunakan jika hanya membandingkan nilai dengan `==`.
- penggunaan lebih sederhana.

### Ternary Operator
- Sintak ini merupakan hasil sintak lebih singkat dibanding `if statement`. 
- penggunaanya hanya dengan formula `$var ? statement1 : statement2`.

### Null Coalescing Operator
- cara ini digunakan untuk mengecek apakah sebuah data itu null atau tidak.
- coaliscing null menggunakan tanda '??'.

## Perulangan

### For Loop
- Syntak `for` digunakan untuk melalukan perulangan.
- Blok kode yang ada didalam `For` akan terus diulangi selagi kondisi terpenuhi.

```php
for (init statement; kondisi;  post statement){
	//block perulangan
}
```

contoh
```php
for ($nilai = 1; $nilai <= 10; $nilai++){
	echo "nilai saya $nilai".PHP_EOL;
}
```

### While Loop
- `while loop` perulangan versi sederhana dibanding `for`.
- di `while loop`, hanya terdapat **kondisi** perulangan tanpa **init statement** dan **post statement**.

```php
$counter = 1; //init statement

while($counter <= 10){ //kondisi
	echo "ini penghitung ke-$counter" . PHP_EOL;
	$counter++; // post statement
}
```

### Do While Loop
- `Do While Loop` mirip sekali dengan perulangan dengan `while loop`. Namun perbedaanya pada pengecekan kondisi.
- Pengecekan kondisi dilakukan setelah **perulangan** dilakukan.
- `Do while loop` akan melakukan hasil perulangan minimal 1 kali meski kondisi bersifat false.
```php
$counter = 1; //init statement

do{
	echo "Ini penghitung ke-$counter" . PHP_EOL;
	$counter++; //post statement
} while($counter <= 10); //kondisi

```

### Break & Continue
**Break** itu untuk menghentikan seluruh perulangan. Sedangkan **Continue** itu untuk menghentikan perulangan saat ini kemudian melanjutkan perulangan selanjutnya (skip).

Contoh untuk `break`
```php
for($i = 1; true; $i++){
	echo "ini i yang ke-$i".PHP_EOL;
	if ($i >= 23 ){
		break; //berhenti perulangannya jika lebih sama dengan 23
	}
}

```

Contoh untuk `Continue`
```php
for ($i = 0; $i < 10; $i++){
		if($i % 2 == 0){
		continue;
	}
	echo "Bilangan ke-$i".PHP_EOL;
}

```

### Foreach
`foreach` sering digunakan untuk melakukan iterasi array dari pada menggunakan `for`.
```php
$barang = ["Tepung", "Gula", "Garam"];
for($i = 0; $i < count($barang); $i++){
	echo "barang $barang[$i] masih ada dengan index ke-$i" .PHP_EOL;
}

```
## GoTo Operator
`goto` merupakan fitur untuk melocati sebuah kode program yang ada dibawahnya. Fitur Goto ini **jarang sekali digunakan** karena sangat membingungkan.
Kode `goto` menggunakan sintakdengan menambahkan tanda (:) colon.
```php
goto a;
echo "Hello Dunia". PHP_EOL; // diloncati

a: 
echo "Hello A". PHP_EOL;
```

## Function
Function merupakan blok kode program yang akan berjalan saat ketiak nama function tersebut dipanggil.
formula dari function:
```php
function name(){ 
	//lakukan sesuatu
}

name() //menjalankan function name

```

### Function argument/ parameter
cara membuat argument dalam function sama seperti membuat sebuah `$variable`, argument bisa lebih dari satu dan harus dipisah dengan koma (,).
```php
function sayHello($name){
	echo "halo $name" . PHP_EOL;
}

sayHello("Hanasa"); // halo Hanasa

```

### Default Argument
Fitur ini memungkinkan kamu untuk membuat parameternya tidak diisi ketika dipanggil functionnya akan berjalan dengan baik karena memiliki nilai default.

```php
function beli($sayur = "kol"){ 
	echo "saya telah membeli $sayur" .PHP_EOL;
}
beli("Tahu"); //saya telah membeli Tahu
beli(); // saya telah membeli kol => karena ini mengambil nilai default

```

**Catatan**
ketika membuat sebauh default parameter, ini harus disimpan di index terakhir.
```php
// SALAH
function beli($sayur = "Kol", $buah, $bumbu){
	echo "saya telah membeli $sayur $buah dan $bumbu" .PHP_EOL;
}

// BENAR
function beli($sayur, $buah, $bumbu = "merica"){
	echo "saya telah membeli $sayur $buah dan $bumbu" .PHP_EOL;
}
```

### Type Decalaration
Nilai pada Argument itu type datanya bersifat dinamis, kalian bisa memperlakukan secara bebas, bisa `string, int,` ataupun `bool`. Tetapi di PHP kita bisa menentukan nilainya dengan secara ketat.
Cara ini dapat mengubah sebuah type data dari type data yang lain ke type data yang sudah ditentukan. 
```php
function totalBelanja(int $pasar, int $transport){ // type integer/number
	$total = $pasar + $transport;
	echo "total belanja saya adalah $total" .PHP_EOL;
}

totalBelanja(20000, 5000); // total 25000
totalBelanja("20000", "5000"); // ini akan diubah dari string ke int
```

### Variable-length Argument List
Variable-length Argument List ini memiliki kemmapuan untuk menyimpan banyak nilai, kemudian akan diubah menjadi array. Cara menggunakan dengan tanda titik tiga kali (...).
```php
function belanja(...$items){
	foreach($items as $item){
		echo "saya belanja $item" .PHP_EOL;
	}
}
//tanpa membuat array
belanja("kable", "monitor", "pulsa");

//menggunakan array 
$buah = ["anggur", "apel", "lengkeng", "tomat"];

//paggil
belanja(...$buah);

```

## Function Return
Secara default function tidak mengembalikan nilai apapun tetapi jika kita mau mengembalikan nilai kita bisa mengembalikan nilai dengan `return` dan dalam sebuah function kita hanya dapat mengembalikan satu nilai saja.
```php
function totalBelanja(int $pasar, int $parkir, int $bensin){
	return $pasar + $parkir + $bensin;
}
$total = totalBelanja(24000, 3000, 5000);
var_dump($total);


```
Selain itu dalam sebuah function kiat bisa menentukan typedata apa yang akan dikembalikan mau itu `string, int ataupun bool` dengan menggunakn titik dua (:).
```php
function sum($ang, $ka): int{ // menentukan typedata integer
	return $ang + $ka;
}

```

## Variable Function
Vraibale function merupakan kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable.
```php
function sayHalo(){
	echo "Halo Semuanya" . PHP_EOL;
}

$halo = "sayHalo"; //menyimpannya ke variable
$halo(); // memanggil dengan variable

```

Ada lagi selain menyimpan ke dalam variable yaitu menyimpan sebagai parameter.
```php
//buat function 1
function filterFunc(string $name, $filter){
	echo $filter($name) .PHP_EOL;
}

//buat function 2
function sapa(string $name){
	echo "halo $name".PHP_EOL;
}	

//panggil function 1 kemudian masukan sapa() sebagai parameter
filterFunc("Han Han", "sapa");

```

## Anonimous Function
Anonymous Function memrupakan function tanpa nama (disebut juga closure)
```php
$sayhello = function (string $name) {
	echo "Helo $name" .PHP_EOL;
}; //jangannlupa titik komanya ";"

$sayhello("Hanasa");

```

Selain itu kita bisa mengirim function sebagai argument/parameter
```php
//buat function anonym
$sapa = function ($name, $filter){
	echo $filter($name) .PHP_EOL;
};

//panggil dan masukan function sebagai argument
$sapa("Han Han", function (string $name) {
	echo "Halooo $name";
});

```

Kemudian untuk memanggil sebuah variable dari luar, kita harus memanggil secara `explicite` jangan lupa gunakan method `use()`.

```php
$fullName = "Han Han Hanasa";
$sayBye = function () use($fullName){ //gunakan method use
	echo "Good bye $fullName" .PHP_EOL;
};

```


SILAKAN BUKA FILE `anonym-function.php`

## Arrow Function
Arrow function diperkenalkan pada php versi  7.4, Pada dasarnya sama seperti `anonymouse function` namun penulisannya lebih singkat dan juga kalau memanggil sebuah variable dari luar tanpa menggunakan `use()`.

```php

$firstName = "Hanasa";
$lastName = "Sofari";


$sayHallo = fn() => "Halo $firstName $lastName" .PHP_EOL;
echo $sayHallo();

```
## Callback Function
Callback merupakan sebuah cara untuk memanggil function sesuai yang yang diberikan di argument. Ada 2 cara untuk menggunakan callback yaitu:
1. menggunakan `callable` dan `call_user_func`.

```php

function sayHello(string $name, callable $func){ //callable
	$getName = call_user_func($func, $name); //call_user_func
	echo "Hello $getName" .PHP_EOL;
}

```
2. Menggunakan secara langsung.

```php
function sayHello(string $name, $func){
	$getName = $func($name); //langsung panggil
	echo "Helo $getName" .PHP_EOL;
}

```

## Recursive Function
Recursive function adalah kemampuan untuk memanggil functionnya sendiri, contohnya digunakan pada kasus factorial.
```php
function loop($val){
	if ($val == 1 ){
		return 1;
	} else {
		return $val * loop($val - 1); //memanggil function sendirinya
	}
}
var_dump(loop(5)); 

```
Tapi harus hati-hati saat menggunakan recursive function yaitu akan mengakibatkan kehabisan memory jika melakukan perulangan yang sangat banyak.

## String Function
Ada banyak sekali function atau method untuk memanipulasi sebuah string, kalian bisa lihat referensinya di [String Function](https://www.php.net/manual/en/ref.strings.php)
```php
$arr = [1,2,3,4,5];
//menggabungkan string dari array
var_dump(join(",",$arr));

```

## Array Function
[Array Function](https://www.php.net/manual/en/ref.array.php)

## Is Function
Function ini digunakan untuk menengecek tipe data dari data. [Is Function](https://www.php.net/manual/en/ref.var.php).

```php
$arr = [12,"ahan", 7878];
var_dump(is_array($arr)); // is_array()
```

## Require and Include
PHP memiliki method untuk mengambil file php dari yang lain, ini supaya tidak bertumpuk pada satu file php.
- `require` jika dipanggil filenya tidak ada maka terjadi error dan terhenti programnya.
```php
require "./lib/getName.php";

echo getName("Hanasa");
```

- sedangkan `include` jika filenya tidak ada program akan tetap berjalan namun akan ada peringatan.
```php
include "./lib/getSum.php";

echo getSum(12,3);
```

**include_once & require_once** untuk meload file hanya sekali tanpa medeklare kembali isi logic dari file tersebut sehingga menghindari error.
```php
//Error
include "./lib/getSum.php";
include "./lib/getSum.php";

echo getSum(12,3);
echo getSum(17,3);
```

```php
include_once "./lib/getSum.php";
include_once "./lib/getSum.php";

echo getSum(12,3);
echo getSum(17,3);

```

## Variable Scope
Scope  variable adalah dibagian mana saja sebuah variable  bisa diakses, di PHP ada 3 jenis scope
- Global
- Lokal
- Static

### Global
variable global ini dibuat di luar function jadi function tidak bisa mengakses varible ke dalam function.
```php
$name = "Hanasa";
$umur = 23;
function getName(){
	echo "Halo $name dan dia berusia $umur tahun" .PHP_EOL;
} 
// Akan error. karena $name dan $umur bersifat global

```

### Lokal
Variable ini hanya bisa diakses di dalam  function itu sendiri dan juga tidak bisa diakses oleh function lainnya.
```php
function sayHalo(){
	$name = "Han Han"; //local scope
	echo "Halooo $name" .PHP_EOL;
}

```

### Static
Static scope hanya bisa dibuat di local varible, ketika varible bersifat static maka siklus dari variable tersebut memiliki siklis yang tidak akan berhenti dan akan memiliki value yang terakhir kali diakse.
```php
function hitung(){
	static $co = 1; //static
	echo "ini hitungan ke-$co".PHP_EOL;

	$co++;
}
hitung(); //ini hitungan ke-1
hitung(); //ini hitungan ke-2

```

## Refrence
Mengakses variable yang sama dengan nama variable yang berbeda. Saat kita mengubah isi value dari refrence, maka secara otomatis value akan berubah. Untuk melakukan refrence kita harus menggubakan tanda `&`.

```php
$name = "Han";
$han = &$name;

$han = "Hanasa";
echo $name; // Hanasa

```