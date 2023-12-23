<?php

require_once 'vendor/autoload.php';

use App\User;
use App\UserService;

$user1 = new User('john_doe', 'password123', new DateTime('1990-05-15'));
$user2 = new User('jane_smith', 'password456', new DateTime('1985-12-25'));
$user3 = new User('alice_johnson', 'password789', new DateTime('1995-08-30'));

$userService = new UserService();

$users = [$user1, $user2, $user3];

$sortedByUsernameAsc = $userService->sortByUsername($users);
echo "Sorted by username (ascending):\n";
foreach ($sortedByUsernameAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByUsernameDesc = $userService->sortByUsername($users, false);
echo "Sorted by username (descending):\n";
foreach ($sortedByUsernameDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayAsc = $userService->sortByBirthday($users);
echo "Sorted by birthday (ascending):\n";
foreach ($sortedByBirthdayAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayDesc = $userService->sortByBirthday($users, false);
echo "Sorted by birthday (descending):\n";
foreach ($sortedByBirthdayDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
