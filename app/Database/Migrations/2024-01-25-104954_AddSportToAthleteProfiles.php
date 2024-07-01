<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSportToAthleteProfiles extends Migration
{
    public function up()
    {
        $this->forge->addColumn('athlete_profiles', [
            'sport' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
        ]);
    }

    public function down()
    {
        //
    }
}
