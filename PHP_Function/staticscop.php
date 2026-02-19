<?php
session_start(); // সেশন শুরু করুন

// লগিন হলে (ধরি ফর্ম থেকে ডেটা আসছে)
if ($_POST['username'] ?? '' === 'admin' && ($_POST['password'] ?? '') === '123') {
    $_SESSION['user'] = 'admin';
    echo "লগিন সফল!";
}
// ইউজার লগিন করেছে কিনা চেক
elseif (isset($_SESSION['user'])) {
    echo "স্বাগতম, " . $_SESSION['user'] . "!";
} else {
    echo "লগিন করুন।";
}
?>