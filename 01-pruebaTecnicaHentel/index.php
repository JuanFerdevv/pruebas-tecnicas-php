<?php

$preguntas = '{
    "preguntas": [
        {"pregunta": "¿Qué significa PHP?"},
        {"pregunta": "¿Cómo se inicia y finaliza un bloque de código PHP?"},
        {"pregunta": "¿Cómo se declara una variable en PHP?"},
        {"pregunta": "¿Cuál es la diferencia entre == y === en PHP?"},
        {"pregunta": "¿Cómo se conecta a una base de datos MySQL usando PHP?"},
        {"pregunta": "¿Qué función se utiliza para imprimir texto en PHP?"},
        {"pregunta": "¿Cómo se define una función en PHP?"},
        {"pregunta": "¿Qué son los arrays asociativos en PHP?"},
        {"pregunta": "¿Cómo se maneja una excepción en PHP?"},
        {"pregunta": "¿Cómo se incluye un archivo externo en PHP?"}
    ]
}';

$respuestas = '{
    "respuestas": [
        {"respuesta": "Hypertext preprocessor"},
        {"respuesta": "<?php ?>"},
        {"respuesta": "$miVariable"},
        {"respuesta": "== es para comparar igualdad y ===  es de identidad y compara valores y tipo de dato"},
        {"respuesta": "new mysqli"},
        {"respuesta": "echo"},
        {"respuesta": "function mensaje($miVariable){echo $miVarible;}"},
        {"respuesta": "datos en formato clave valor"},
        {"respuesta": "Usando try, catch y finally"},
        {"respuesta": "include"}
    ]
}';


$decoPreguntas= json_decode($preguntas);
$decoRespuestas= json_decode($respuestas);

for ($i = 0; $i < count($decoPreguntas->preguntas); $i++) {
    echo "Pregunta " . ($i + 1) . ": " . $decoPreguntas->preguntas[$i]->pregunta . "<br>";
    echo "Respuesta " . ($i + 1) . ": " . $decoRespuestas->respuestas[$i]->respuesta . "<br><br>";
}

?>


