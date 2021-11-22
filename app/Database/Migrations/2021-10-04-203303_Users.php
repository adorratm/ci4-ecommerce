<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Set Fields
        $this->forge->addField([
           'id' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'auto_increment' => true
           ],
            'group_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true // TODO When Group Management Table Created Remove It
            ],
            'first_name'=>[
                'type' => 'VARCHAR',
                'constraint' => 70,
                'null' => false
            ],
            'sur_name' =>[
                'type' => 'VARCHAR',
                'constraint' => 70,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'verify_key' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'verify_code' =>[
                'type' => 'INT',
                'constraint' => 6,
                'null' => true
            ],
            'bio' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 22,
                'null' => false,
                'unique' => true
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['ACTIVE','PASSIVE','PENDING'],
                'default' => 'PENDING'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        // Set Primary Key
        $this->forge->addKey('id');

        // Create Table
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Drop Table
        $this->forge->dropTable('users');
    }
}
