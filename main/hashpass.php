<?php
$passwords = [
    'password123',  // John Doe
    'securepass',   // Alice Smith
    'batman2024',   // Bruce Wayne
    'shieldAvenger',// Steve Rogers
    'spideySense99',// Peter Parker
    'wonderWoman',  // Diana Prince
    'ironMan3000'   // Tony Stark
];

foreach ($passwords as $password) {
    echo password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
}
?>