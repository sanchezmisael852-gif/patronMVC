<?php

$uri = $_SERVER['REQUEST_URI'];

if (str_contains($uri, '/nombres')) {

    function limpiar($txt) {
        return strtr($txt, [
            'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u',
            'Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U',
            'ñ'=>'n','Ñ'=>'N'
        ]);
    }

    $n = [
        "Juan","Carlos","Luis","Miguel","Pedro","Jorge","Andres","Fernando","Ricardo","Diego",
        "Antonio","Manuel","Jose","Francisco","Raul","Alberto","Hugo","Sergio","Eduardo","Mario",
        "Roberto","Arturo","Julio","Ernesto","Adrian","Ivan","Cesar","Victor","Ruben","Guillermo",
        "Angel","Oscar","Emilio","Leonardo","Tomas","Gabriel","Ismael","Rafael","Salvador","Esteban",
        "Daniel","Sebastian","Matias","Bruno","Axel","Damian","Fabian","Gerardo","Ignacio","Joel",
        "Kevin","Lorenzo","Mauricio","Nicolas","Orlando","Pablo","Quentin","Ramon","Saul","Ulises",
        "Valentin","Wilmer","Xavier","Yahir","Zaid","Elias","Noe","Efrain","Cristian","Benjamin",
        "Agustin","Baltazar","Camilo","Dario","Emanuel","Facundo","Gustavo","Hernan","Iker","Jacobo",
        "Karla","Laura","Maria","Ana","Sofia","Valeria","Daniela","Paola","Fernanda","Gabriela",
        "Lucia","Elena","Patricia","Veronica","Claudia","Andrea","Alejandra","Silvia","Teresa","Rosa"
    ];

    $a = [
        "Hernandez","Garcia","Martinez","Lopez","Gonzalez","Perez","Rodriguez","Sanchez","Ramirez","Cruz",
        "Flores","Gomez","Morales","Vazquez","Reyes","Jimenez","Torres","Diaz","Castillo","Ortiz",
        "Ruiz","Alvarez","Romero","Herrera","Medina","Aguilar","Vargas","Ramos","Mendoza","Castro",
        "Guerrero","Ortega","Delgado","Rojas","Navarro","Campos","Silva","Vega","Cabrera","Salazar",
        "Fuentes","Pena","Contreras","Soto","Cortes","Bravo","Paredes","Valdez","Sandoval","Mejia",
        "Escobar","Nunez","Luna","Valencia","Marin","Padilla","Zamora","Miranda","Acosta","Leon",
        "Arias","Reyna","Ochoa","Esquivel","Montoya","Corona","Cervantes","Galindo","Solis","Calderon",
        "Bautista","Velasco","Figueroa","Cuevas","Mora","Rosales","Cisneros","Carvajal","Trejo","Zavala",
        "Villanueva","Arellano","Beltran","Chavez","Dominguez","Estrada","Franco","Ibarra","Juarez","Maldonado"
    ];

    $lista = [];

    for ($i = 0; count($lista) < 1000; $i++) {
        $full = limpiar(
            $n[array_rand($n)] . " " .
            $n[array_rand($n)] . " " .
            $a[array_rand($a)] . " " .
            $a[array_rand($a)]
        );

        $lista[$full] = true;
    }

    echo implode("<br>", array_keys($lista));

} else {
    echo "Ruta no encontrada. Usa /nombres";
}