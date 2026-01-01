<?php

// declare strict strict_types
// This will enforce strict type checking for scalar type declarations
declare(strict_types=1);
function add(int $a, int $b): int
{
    return $a + $b;
}

echo add(5, 15).'<br/>'; // 15

// Class topic: Control Structure
// If control structure is used to perform different actions based on different conditions.

$a = 20;
$b = 30;

if ($a > $b) {
    echo "$a is greater than $b";
} elseif ($a < $b) {
    echo "$a is less than $b";
} else {
    echo "$a is equal to $b";
}

// a nice if else example with html
// we will show different content depending on the product price
$premium_1 = 150;
$premium_2 = 250;
$premium_3 = 350;

$user_balance = 200;

if ($user_balance >= $premium_3) {
    echo '<h1>Welcome to Premium 3</h1>';
    echo '<p>You have access to all features.</p>';
} elseif ($user_balance >= $premium_2) {
    echo '<h1>Welcome to Premium 2</h1>';
    echo '<p>You have access to most features.</p>';
} elseif ($user_balance >= $premium_1) {
    echo '<h1>Welcome to Premium 1</h1>';
    echo '<p>You have access to basic features.</p>';
} else {
    echo '<h1>Welcome to Free Plan</h1>';
    echo '<p>You have limited access. Please upgrade your plan.</p>';
}

// 1,10
echo 1,2,3,4,5,6,7,8,9,10;
for ($i = 1; $i <= 10; $i += 2) {
    echo '<br/>';
    echo $i;
    echo ',';
}

for ($i = 1; $i <= 10; $i += 2) {
    echo '<br/>';
    echo $i;
    if ($i == 5) {
        break; // exit the loop
    }
    echo ',';
}

$users = [
    ['name' => 'John', 'age' => 25], // 0th index
    ['name' => 'Jane', 'age' => 30], // 1st index
    ['name' => 'Smith', 'age' => 28], // 2nd index
    ['name' => 'Doe', 'age' => 22], // 3rd index
];

for ($i = 0; $i < count($users); $i++) {
    echo '<br/>';
    echo 'Name: '.$users[$i]['name'].', Age: '.$users[$i]['age'];
}

foreach ($users as $user) {
    echo '<br/>';
    echo 'Name: '.$user['name'].', Age: '.$user['age'];
}

// Switch Case
$day = date('D'); // Get the current day of the week
echo '<br/>';
switch ($day) {
    case 'Mon':
        echo '<br/>Today is Monday';
        break;
    case 'Tue':
        echo '<br/>Today is Tuesday';
        break;
    case 'Wed':
        echo '<br/>Today is Wednesday';
        break;
    case 'Thu':
        echo '<br/>Today is Thursday';
        break;
    case 'Fri':
        echo '<br/>Today is Friday';
        break;
    case 'Sat':
        echo '<br/>Today is Saturday';
        break;
    case 'Sun':
        echo '<br/>Today is Sunday';
        break;
    default:
        echo '<br/>Invalid day';
}

// If a bro has 6D, 10BDT, 20AD he can access premium, if he has 20USD he can access VIP plan
$bal = '6D';
$bal2 = '10BDT';
$bal3 = '20USD';

switch ($bal) {
    case '6D':
    case '10BDT':
    case '20AD':
        echo '<br/>You have access to Premium Plan';
        break;
    case '20USD':
        echo '<br/>You have access to VIP Plan';
        break;
    default:
        echo '<br/>You have access to Free Plan';
}

// conutinuing with match the same expression
$output = match ($day) {
    'Mon' => 'Today is Monday',
    'Tue' => 'Today is Tuesday',
    'Wed' => 'Today is Wednesday',
    'Thu' => 'Today is Thursday',
    'Fri' => 'Today is Friday',
    'Sat' => 'Today is Saturday',
    'Sun' => 'Today is Sunday',
    default => 'Invalid day',
};

echo '<br/>'.$output;

// match expression with date and color match
$combination = match ('Thu') {
    'Mon' => [
        'color' => '#FF5733',
        'activity' => 'Go to gym',
    ],
    'Tue' => [
        'color' => '#33C1FF',
        'activity' => 'Attend meeting',
    ],
    'Wed' => [
        'color' => '#75FF33',
        'activity' => 'Work on project',
    ],
    'Thu' => [
        'color' => '#FF33A8',
        'activity' => 'Team lunch',
    ],
    'Fri' => [
        'color' => '#FFC300',
        'activity' => 'Finish reports',
    ],
    'Sat' => [
        'color' => '#8E44AD',
        'activity' => 'Relax and unwind',
    ],
    'Sun' => [
        'color' => '#2ECC71',
        'activity' => 'Plan for the week ahead',
    ],
    default => [
        'color' => '#FFFFFF',
        'activity' => 'No activities planned',
    ],
};

$a = 150;

$is150 = match (true) {
    $a < 100 => 'Less than 100',
    $a >= 100 && $a < 200 => 'Between 100 and 200',
    $a >= 200 && $a < 300 => 'Between 200 and 300',
    default => '300 or more',
};

echo '<br/>'.$is150;

?>
// display the color and activity
<p style="background-color: <?php echo $combination['color']; ?>; padding: 20px; color: #fff;">
    <?php echo $combination['activity']; ?>
</p>

<?php

include_once 'class_hello.php';
include 'class_hello.php';
$hello = new Hello;
$hello->sayHello();

include 'class_goodbye.php'; // if file no t found, it will throw a warning but the script will continue
require 'class_goodbye.php'; // if file not found, it will throw a fatal error and stop the script

include_once 'class_goodbye.php'; // if file not found, it will throw a warning but the script will continue
require_once 'class_goodbye.php'; // if file not found, it will throw a fatal error and stop the script
