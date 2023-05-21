<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController{
    
    public function index(){//muestra lista de recursos

        

    }

    public function create(){//muestra un formulario para crear un recurso



    }

    public function store($data){//guarda un recurso en la base de datos

        $connection = Connection::getInstance()->get_database_instance();

        $connection->query("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES(
            {$data['payment_method']},
            {$data['type']},
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
        );");

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