<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_Teams_Played_Column_To_Users extends Migration
{
    public function up()
    {
        // Check if the column 'teams_played' does not exist before adding it
        if (!$this->db->fieldExists('teams_played', 'users')) {
            $fields = [
                'teams_played' => [
                    'type' => 'TEXT',
                    'null' => true
                ]
            ];
            $this->forge->addColumn('users', $fields);
        }
    }

    public function down()
    {
        // Drop the 'teams_played' column if it exists
        if ($this->db->fieldExists('teams_played', 'users')) {
            $this->forge->dropColumn('users', 'teams_played');
        }
    }
}
