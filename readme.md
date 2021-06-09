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
$counter = 1;

while($counter <= 10){
	echo "ini penghitung ke-$counter" . PHP_EOL;
	$counter++;
}
```