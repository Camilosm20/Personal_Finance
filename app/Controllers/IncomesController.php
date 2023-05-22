<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController{
    
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->get_database_instance();
    }
    
    public function index(){//muestra lista de recursos

        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt->execute();

        $results = $stmt->fetchAll();

        foreach($results as $result)
            echo "Gastaste " . $result["amount"] . " USD en: " . $result["description"] . "\n";

    }

    public function create(){//muestra un formulario para crear un recurso



    }

    public function store($data){//guarda un recurso en la base de datos

        $connection = Connection::getInstance()->get_database_instance();

        $stmt= $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES(?,?,?,?,?);");

        $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

        $stmt->execute();
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