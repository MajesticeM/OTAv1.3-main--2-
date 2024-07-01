<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSocialMediaToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'social_media' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'status',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'social_media');
    }
}
