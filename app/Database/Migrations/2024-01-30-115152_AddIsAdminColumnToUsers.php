<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsAdminColumnToUsers extends Migration
{
    public function up()
    {
        $fields = [
            'is_admin' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
        ];

        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'is_admin');
    }
}
