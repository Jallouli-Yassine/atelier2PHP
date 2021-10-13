
<?php
require_once './../model/user.php';
$u1 = new User("testPRENOM", "testNOM", "testPASSWORD", "testEMAIL", "testUSERNAME");
var_dump($u1);
$u1->afficher();
?>