<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnRoleUserTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default' => 'user',
                'after' => 'email'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('user', 'role');
    }
}
