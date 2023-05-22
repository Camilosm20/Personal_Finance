<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class WithdrawalsController{

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->get_database_instance();
    }
    
    public function index(){//muestra lista de recursos

        $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
        $stmt->execute();

        $results = $stmt->fetchAll();

        foreach($results as $result)
            echo "Gastaste " . $result["amount"] . " USD en: " . $result["description"] . "\n";

    }

    public function create(){//muestra un formulario para crear un recurso



    }

    public function store(){//guarda un recurso en la base de datos



    }

    public function show(){//muestra un recurso



    }

    public function edit(){//muestra un unico formulario para editar un recurso



    }

    public function update(){//actualiza un recurso en la base de datos



    }

    public function destroy(){//elimina un recurso de la base de datos



    }

}

?>