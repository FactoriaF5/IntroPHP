<?php

$fighter1 = [
    "name" => "Blanka",
    "Country" => "Brazil",
    "description" => "Originalmente era un niño pequeño llamado Jimmy que tuvo un accidente de avión, y terminó dentro del Amazonas. Se dice que el accidente fue causado por un disparo efectuado desde una base cercana de Shadaloo, para evitar que el avión se siguiera acercando. Blanka se crio entre los animales y se convirtió en algo parecido a una bestia salvaje capaz de producir descargas eléctricas con su propio cuerpo, aprendiendo esta habilidad de las anguilas eléctricas."
];

$fighter2 = [
    "name" => "Chun-Li",
    "Country" => "China",
    "description" =>"Cuando Chun-Li era muy pequeña (aproximadamente 5 años), su padre, quien era agente de la Interpol, desapareció en una misión que le fue encomendada. Desesperada, pidió ayuda a uno de los amigos más íntimos de su padre, Gen, que le había enseñado algunos de sus movimientos, y le dijo que su padre estaba investigando una organización de reciente aparición llamada Shadowlaw (en otros juegos el nombre de la organización es escrito como Shadaloo)."
];

$fighter3 = [
    "name" => "Riu",
    "Country" => "EEUU",
    "description" =>"Cuando Chun-Li era muy pequeña (aproximadamente 5 años), su padre, quien era agente de la Interpol, desapareció en una misión que le fue encomendada. Desesperada, pidió ayuda a uno de los amigos más íntimos de su padre, Gen, que le había enseñado algunos de sus movimientos, y le dijo que su padre estaba investigando una organización de reciente aparición llamada Shadowlaw (en otros juegos el nombre de la organización es escrito como Shadaloo)."
];

$fighters = [$fighter1, $fighter2, $fighter3];

// FOR
echo "<h3>FOR</h3>";

for ($i = 0; $i < sizeof($fighters); $i++) {
    echo "<h3>" . $fighters[$i]["name"] . "</h3>";
}

// FOREACH
echo "<h3>FOREACH</h3>";

foreach ($fighters as $fighter) {
    echo $fighter["Country"] . "<br>";
}

// WHILE

echo "<h3>WHILE</h3>";

$i = 0;
$fighterName = $fighters[$i]["name"];

while ($fighterName != "Riu") {
    echo $fighterName . "<br>";
    $i++;
    $fighterName = $fighters[$i]["name"];
}
