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
<?php
	echo <<<t
	halo saya belajar $variable
	Sekarang lagi belajar Typedata String
	dan menggunkan heredoc
	keren kan?
	t;
?> 
```

- _nowdoc_
```php
<?php
	echo <<<'t' //menggunakan kutip
	halo saya belajar PHP
	Sekarang lagi belajar Typedata String
	dan menggunkan heredoc
	keren kan?
	t;
?> 
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

### Mengecel variable
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