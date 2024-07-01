<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropAndAddTeamsPlayedColumnToUsers extends Migration
{
    public function up()
    {
        // Drop the 'teams_played' column if it exists
        if ($this->db->fieldExists('teams_played', 'users')) {
            $this->forge->dropColumn('users', 'teams_played');
        }

        // Add the 'teams_played' column
        $fields = [
            'teams_played' => [
                'type' => 'TEXT',
                'null' => true
            ]
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        // Drop the 'teams_played' column if it exists
        if ($this->db->fieldExists('teams_played', 'users')) {
            $this->forge->dropColumn('users', 'teams_played');
        }
    }
}
