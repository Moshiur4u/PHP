<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All types Operators in PHP</title>
</head>

<body>
    <h1>All types Operators in PHP</h1>
    <ul>
        <li><strong>Arithmetic Operators:</strong> +, -, *, /, %, **</li>
        <li><strong>Assignment Operators:</strong> =, +=, -=, *=, /=, %=, .=</li>
        <li><strong>Comparison Operators:</strong> ==, ===, !=, !==, <,>, <=,>=</li>
        <li><strong>Increment/Decrement Operators:</strong> ++, --</li>
        <li><strong>Logical Operators:</strong> &&, ||, !, and, or, xor</li>
        <li><strong>String Operators:</strong> ., .=</li>
        <li><strong>Array Operators:</strong> +, ==, ===, !=, !==</li>
        <li><strong>Bitwise Operators:</strong> &, |, ^, ~, <<,>></li>
        <li><strong>Error Control Operator:</strong> @</li>
        <li><strong>Execution Operator:</strong> ` (backticks)</li>
    </ul>
    <h3>Example all types of Operators in PHP</h3>
    //Arithmetic Operators (গাণিতিক অপারেটর):<br>
    $a = 10;
    $b = 5;
    $sum = $a + $b; //যোগ
    <br>
    $difference = $a - $b; //বিয়োগ
    <br>
    $product = $a * $b; //গুণ
    <br>
    $quotient = $a / $b; //ভাগ
    <br>
    $modulus = $a % $b; //মডুলাস

    <hr>
    //Comparison Operators (তুলনা অপারেটর):<br>
    $x = 10;
    $y = 10;
    $isEqual = ($x == $y); //সমান
    <br>
    $isIdentical = ($x === $y); //পরিচিত
    <br>
    $isNotEqual = ($x != $y); //সমান নয়
    <br>
    $isGreater = ($a > $b); //বড়
    <br>
    $isLess = ($a < $b); //ছোট
        <br>
        $isGreaterOrEqual=($a>= $b); //বড় বা সমান
        <br>
        $isLessOrEqual = ($a <= $b); //ছোট বা সমান
            <hr>
            //Logical Operators (লজিক্যাল অপারেটর):<br>
            $andResult=($a> 5 && $b < 10); //এবং
                <br>
                $orResult=($a> 15 || $b < 10); //অথবা
                    <br>
                    $notResult=!($a> $b); //না
                    <hr>
                    //Assignment Operators (অ্যাসাইনমেন্ট অপারেটর):<br>
                    $c = 20; //সাধারণ অ্যাসাইনমেন্ট
                    <br>
                    $c += 5; //যোগ অ্যাসাইনমেন্ট
                    <br>
                    $c -= 3; //বিয়োগ অ্যাসাইনমেন্ট
                    <br>
                    $c *= 2; //গুণ অ্যাসাইনমেন্ট
                    <br>
                    $c /= 4; //ভাগ অ্যাসাইনমেন্ট
                    <br>
                    $c %= 3; //মডুলাস অ্যাসাইনমেন্ট
                    <hr>
                    //Increment/Decrement Operators (ইনক্রিমেন্ট/ডিক্রিমেন্ট অপারেটর):
                    <br>
                    $increment = ++$a; //ইনক্রিমেন্ট
                    <br>
                    $decrement = --$b; //ডিক্রিমেন্ট
                    <hr>
                    //String Operators (স্ট্রিং অপারেটর):
                    <br>
                    $str1 = "Hello, ";
                    <br>
                    $str2 = "World!";
                    <br>
                    $concatenated = $str1 . $str2; //স্ট্রিং সংযোজন
                    <br>
                    $str1 .= "PHP is great."; //স্ট্রিং সংযোজন এবং অ্যাসাইন
                    <hr>
                    //Array Operators (অ্যারে অপারেটর):
                    <br>
                    $array1 = array("a" => "Apple", "b" => "Banana");
                    <br>
                    $array2 = array("c" => "Cherry", "d" => "Date");
                    <br>
                    $union = $array1 + $array2; //অ্যারে ইউনিয়ন
                    <br>
                    $equality = ($array1 == $array2); //অ্যারে সমান
                    <br>
                    $identity = ($array1 === $array2); //অ্যারে পরিচিত
                    <br>
                    $inequality = ($array1 != $array2); //অ্যারে সমান নয়
                    <br>
                    $nonIdentity = ($array1 !== $array2); //অ্যারে পরিচিত নয়
                    <hr>
                    //Bitwise Operators (বিটওয়াইজ অপারেটর):
                    <br>
                    $x = 6; //বাইনারি: 110
                    <br>
                    $y = 3; //বাইনারি: 011
                    <br>
                    $andBitwise = $x & $y; //বিটওয়াইজ AND
                    <br>
                    $orBitwise = $x | $y; //বিটওয়াইজ OR
                    <br>
                    $xorBitwise = $x ^ $y; //বিটওয়াইজ XOR
                    <br>
                    $notBitwise = ~$x; //বিটওয়াইজ NOT
                    <br>
                    $leftShift = $x << 1; //বাম শিফট
                        <br>
                        $rightShift=$x>> 1; //ডান শিফট

                        <hr>
                        <h3>more about Operators in PHP</h3>
                        Example:
                        <hr>
                        // Arithmetic Operators
                        $a = 10;
                        $b = 5;
                        $sum = $a + $b; // 15
                        echo "Sum: " . $sum . "\n";
                        <hr>
                        // Assignment Operators
                        $c = 20;
                        $c += 10; // 30
                        echo "Value of c: " . $c . "\n";
                        <hr>
                        // Comparison Operators
                        $d = 15;
                        if ($d > $b) {
                        echo "d is greater than b\n";
                        }
                        <hr>
                        // Increment/Decrement Operators
                        $a++; // 11
                        echo "Incremented a: " . $a . "\n";
                        <hr>
                        // Logical Operators
                        $isTrue = ($a > 5 && $b < 10); // true
                            echo "Is True: " . ($isTrue ? 'true' : 'false' ) . "\n" ;
                            <hr>
                            // String Operators
                            $str1="Hello, " ;
                            $str2="World!" ;
                            $greeting=$str1 . $str2; // "Hello, World!"
                            echo "Greeting: " . $greeting . "\n" ;
                            <hr>
                            // Array Operators
                            $array1=array("a"=> "Apple", "b" => "Ban
                            ana");
                            $array2 = array("c" => "Cherry", "d" => "Date");
                            $union = $array1 + $array2; // Union of arrays
                            print_r($union);
                            <hr>
                            // Bitwise Operators
                            $bitwiseAnd = $a & $b; // Bitwise AND
                            echo "Bitwise AND: " . $bitwiseAnd . "\n";
                            <hr>
                            // Error Control Operator
                            $file = @file('non_existent_file.txt'); // Suppress error
                            if ($file === false) {
                            echo "File not found, but error suppressed.\n";
                            }
                            <hr>

                            // Execution Operator
                            $output = `ls -l`; // Execute shell command
                            echo "Output of ls -l:\n" . $output;
                            <hr>
</body>

</html>