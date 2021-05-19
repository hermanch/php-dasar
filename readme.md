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
<?php
$name = 'han';
$$name = 'hanasa';

?>
```
`$$name` itu sebenarnya `$han`

***Silahkan buka file*** `variabel.php`