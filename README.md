### PHP Oparators:

পিএইচপি (PHP) তে বিভিন্ন ধরণের অপারেটর রয়েছে যা ভেরিয়েবল এবং মানের উপর বিভিন্ন ধরণের গণনা এবং লজিক্যাল অপারেশন সম্পাদন করতে ব্যবহৃত হয়। নিচে পিএইচপি-তে ব্যবহৃত প্রধান অপারেটরগুলোর একটি তালিকা দেওয়া হলো:

### Arithmetic Operators (গাণিতিক অপারেটর):

```bash
$a = 10;
$b = 5;
$sum = $a + $b; //যোগ
echo $sum;
$difference = $a - $b; //বিয়োগ
echo $difference;
$product = $a * $b; //গুণ
$quotient = $a / $b; //ভাগ
$modulus = $a % $b; //মডুলাস
echo$modulus;
```

### Comparison Operators (তুলনা অপারেটর):

```bash
$x = 10;
$y = 10;
$isEqual = ($x == $y); //সমান
echo $isEqual, "সমান নয়";
$isIdentical = ($x === $y); //পরিচিত
echo $isIdentical, "পরিচিত নয়";
$isNotEqual = ($x != $y); //সমান নয়
echo $isNotEqual, "সমান নয়";
$isGreater = ($a > $b); //বড়
echo $isGreater;
$isLess = ($a < $b); //ছোট
 echo $isLess;
$isGreaterOrEqual = ($a >= $b); //বড় বা সমান
$isLessOrEqual = ($a <= $b); //ছোট বা সমান
```

### Logical Operators (লজিক্যাল অপারেটর):

```bash
$andResult = ($a > 5 && $b < 10); //এবং
$orResult = ($a > 15 || $b < 10); //অথবা
$notResult = !($a > $b); //না
```

### Assignment Operators (অ্যাসাইনমেন্ট অপারেটর):

```bash
$c = 20; //সাধারণ অ্যাসাইনমেন্ট
$c += 5; //যোগ অ্যাসাইনমেন্ট
$c -= 3; //বিয়োগ অ্যাসাইনমেন্ট
$c \*= 2; //গুণ অ্যাসাইনমেন্ট
$c /= 4; //ভাগ অ্যাসাইনমেন্ট
$c %= 3; //মডুলাস অ্যাসাইনমেন্ট
```

### Increment/Decrement Operators (ইনক্রিমেন্ট/ডিক্রিমেন্ট অপারেটর):

```bash
$increment = ++$a; //ইনক্রিমেন্ট
$decrement = --$b; //ডিক্রিমেন্ট
```

### String Operators (স্ট্রিং অপারেটর):

```bash
$str1 = "Hello,";
$str2 = "World!";
echo $str1 . $str2; //concatenated স্ট্রিং সংযোজন
$str1 .= "PHP is great."; //স্ট্রিং সংযোজন এবং অ্যাসাইন
```

## Array Operators (অ্যারে অপারেটর):

```bash
$array1 = array("a" => "Apple", "b" => "Banana");
$array2 = array("c" => "Cherry", "d" => "Date");
$union = $array1 + $array2; //অ্যারে ইউনিয়ন
$equality = ($array1 == $array2); //অ্যারে সমান
$identity = ($array1 === $array2); //অ্যারে পরিচিত
$inequality = ($array1 != $array2); //অ্যারে সমান নয়
$nonIdentity = ($array1 !== $array2); //অ্যারে পরিচিত নয়
```

### Bitwise Operators (বিটওয়াইজ অপারেটর):

```bash
$x = 6; //বাইনারি: 110
$y = 3; //বাইনারি: 011
$andBitwise = $x & $y; //বিটওয়াইজ AND
$orBitwise = $x | $y; //বিটওয়াইজ OR
$xorBitwise = $x ^ $y; //বিটওয়াইজ XOR
$notBitwise = ~$x; //বিটওয়াইজ NOT
$leftShift = $x << 1; //বাম শিফট
$rightShift = $x >> 1; //ডান শিফট

```

?>
