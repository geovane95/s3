<?php
require "../vendor/autoload.php";

use Modules\Locais\Models\Loja;
use Modules\Pessoas\Models\Pessoa;

$pessoa = new Pessoa();
$loja = new Loja();

$pessoa->index();
echo "<br>";
$loja->index();