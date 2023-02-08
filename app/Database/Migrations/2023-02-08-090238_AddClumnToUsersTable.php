<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddClumnToUsersTable extends Migration
{
    public function up()
    {
        //
        $fields = [
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'email');
    }
}
