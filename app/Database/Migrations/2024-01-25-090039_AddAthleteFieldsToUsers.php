<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAthleteFieldsToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'teams_played' => ['type' => 'TEXT', 'null' => true],
            'what_makes_different' => ['type' => 'TEXT', 'null' => true],
            'why_compete_college' => ['type' => 'TEXT', 'null' => true],
            'high_school' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'prospective_university' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'sat_total_score' => ['type' => 'INT', 'null' => true],
            'gpa' => ['type' => 'FLOAT', 'null' => true],
            'academic_certificates' => ['type' => 'TEXT', 'null' => true],
            'achievements' => ['type' => 'TEXT', 'null' => true],
            'cellphone_number' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
    }

    public function down()
    {
        //
    }
}
