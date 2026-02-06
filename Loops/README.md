# loops

## While---------- Loop

```bash
 while ("condition") {
    # code...
}

```

## Do---- While Loop

```bash
do {
    # code...
} while ("condition");
```

## For----- Loop

```bash
for ($i = 0; $i < 10; $i++) {
    # code...
}
```

## Foreach------- Loop

```bash
foreach ($array as $value) { # code...
}
```

## foreach------ loop with continue-----

### echo "Example 7: Foreach Loop with Continue\n";

```bash
$items = ["apple", "banana", "cherry", "date"];
foreach ($items as $item) {
    if ($item == "banana") {
continue; // Skip banana
}
echo $item . " ";
}
echo "\n";
```

## Associative Array Foreach------ Loop

```bash
foreach ($array as $key => $value) {
    # code...
}
function exampleFunction()
{
    for ($i = 0; $i < 5; $i++) {
        if ($i % 2 == 0) {
continue;
}
echo $i;
}
}
exampleFunction();
```

## Example 1: Using break to exit a loop

### echo "Example 1: Break Statement\n";

```bash
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
break; // Exit the loop when i equals 5
}
echo $i . " ";
}
echo "\n\n";
```

## Example 2: Using continue to skip iterations

### echo "Example 2: Continue Statement\n";

```bash
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
continue; // Skip even numbers
}
echo $i . " ";
}
echo "\n\n";
```

## Example 3: Break with nested loops

### echo "Example 3: Break in Nested Loops\n";

```bash
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        if ($j == 2) {
break; // Breaks inner loop only
}
echo "($i,$j) ";
}
}
echo "\n\n";
```

## Example 4: While loop with break

### echo "Example 4: While Loop with Break\n";

```bash
$count = 0;
while ($count < 10) {
if ($count == 4) {
break;
}
echo $count . " ";
$count++;
}
echo "\n";
```

## Do-While Loop Example

### The loop executes at least once, then checks the condition

```bash
$i = 1;

do {
echo "Number: " . $i . "<br>";
    $i++;
} while ($i <= 5);
```

## do while loop with continue

### "Example 5: Do While Loop with Continue\n";

```bash
$count = 0;
do {
    $count++;
    if ($count % 2 == 0) {
continue; // Skip even numbers
}
echo $count . " ";
} while ($count < 10);
echo "\n";
```

## foreach loop with break

### echo "Example 6: Foreach Loop with Break\n";

```bash
$items = ["apple", "banana", "cherry", "date"];
foreach ($items as $item) {
    if ($item == "cherry") {
break; // Exit loop when item is cherry
}
echo $item . " ";
}
echo "\n";
```

## Example 1: Basic do-while loop

### echo "Example 1: Basic do-while\n";

```bash
$i = 0;
do {
    echo "i = $i\n";
    $i++;
} while ($i < 3);
```

## Example 2: Loop with user input simulation

### echo "\nExample 2: Menu simulation\n";

```bash
$choice = 0;
do {
    echo "Menu: 1=Start, 2=Continue, 0=Exit\n";
    $choice = rand(0, 2);
    echo "You chose: $choice\n";
} while ($choice != 0);
```

### do while loop

```bash
do {
echo "Enter a password (minimum 8 characters): ";
$password = trim(fgets(STDIN));

    if (strlen($password) < 8) {
        echo "Password too short. Try again.\n";
    }

} while (strlen($password) < 8);

echo "Password accepted!\n";
```

## Example 3: Do-while with break

### echo "\nExample 3: With break\n";

```bash
$count = 0;
do {
    if ($count == 5) {
break;
}
echo "Count: $count\n";
    $count++;
} while ($count < 10);
```

## Example 4: Nested do-while

### echo "\nExample 4: Nested do-while\n";

```bash
$x = 0;
do {
    $y = 0;
    do {
        echo "($x, $y) ";
        $y++;
    } while ($y < 2);
echo "\n";
$x++;
} while ($x < 2);
```

## Example 5: Do-while with continue

### echo "\nExample 5: With continue\n";

```bash
$num = 0;
do {
    $num++;
    if ($num == 2) {
continue;
}
echo "Number: $num\n";
} while ($num < 4);
```

## Example 6: Do-while loop counting down

### echo "\nExample 6: Counting Down\n";

```bash
$i = 5;
do {
    echo "i = $i\n";
    $i--;
} while ($i > 0);
echo "\n";
```

## Example 7: Do-while loop with user-defined limit
### echo "Example 7: User-defined limit\n";

```bash
$limit = 3; // This can be set based on user input
$i = 1;
do {
    echo "i = $i\n";
    $i++;
} while ($i <= $limit);
echo "\n";
```

## Additional Examples of Break and Continue Statements

## Example 1: Using break to exit a loop

### echo "Example 1: Break Statement\n";

```bash
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
break; // Exit the loop when i equals 5
}
echo $i . " ";
}
echo "\n\n";
```

## Example 2: Using continue to skip iterations

### echo "Example 2: Continue Statement\n";

```bash
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
continue; // Skip even numbers
}
echo $i . " ";
}
echo "\n\n";
```

## Example 3: Break with nested loops

## echo "Example 3: Break in Nested Loops\n";

```bash
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        if ($j == 2) {
break; // Breaks inner loop only
}
echo "($i,$j) ";
}
}
echo "\n\n";
```

## Example 4: While loop with break

### echo "Example 4: While Loop with Break\n";

```bash
$count = 0;
while ($count < 10) {
if ($count == 4) {
break;
}
echo $count . " ";
$count++;
}
echo "\n";
```

## Do-While Loop Example

### echo "Example 5: Do-While Loop with Continue\n";

```bash
$num = 0;
do {
    $num++;
    if ($num == 2) {
continue; // Skip when num equals 2
}
echo "Number: $num\n";
} while ($num < 4);
```

## Example 6: Do-While Loop with Break

### echo "\nExample 6: Do-While Loop with Break\n";

```bash
$count = 0;
do {
    if ($count == 3) {
break; // Exit loop when count equals 3
}
echo "Count: $count\n";
    $count++;
} while ($count < 5);
```

## Example 7: Nested Do-While Loops with Break

### echo "\nExample 7: Nested Do-While Loops with Break\n";

```bash
$i = 0;
do {
    $j = 0;
    do {
        if ($j == 1) {
break; // Break inner loop when j equals 1
}
echo "($i, $j) ";
        $j++;
    } while ($j < 3);
echo "\n";
$i++;
} while ($i < 2);
```

## Example 8: Do-While Loop Counting Down with Continue

### echo "\nExample 8: Counting Down with Continue\n";

```bash
$i = 5;
do {
    if ($i == 3) {
$i--;
        continue; // Skip when i equals 3
    }
    echo "i = $i\n";
    $i--;
} while ($i > 0);
```

## Example 9: Do-While Loop with User-Defined Limit and Break

### echo "\nExample 9: User-Defined Limit with Break\n";

```bash
$limit = 5; // This can be set based on user input
$i = 1;
do {
if ($i == 4) {
        break; // Exit loop when i equals 4
    }
    echo "i = $i\n";
    $i++;
} while ($i <= $limit);
echo "\n";
```
