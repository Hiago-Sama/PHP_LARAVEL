<?php
$x = 4;
// esta linha pode resultar em uma saída inesperada:
echo "x menos um é igual a " . $x-1 . ", ou assim eu espero\n";
// porque é avaliada como esta linha:
echo (("x menos um é igual a " . $x) - 1) . ", ou assim eu espero\n";
// a precedência desejada pode ser aplicada utilizando parênteses:
echo "x menos um é igual a " . ($x-1) . ", ou assim eu espero\n";