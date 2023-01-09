<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration{

    public function up(){
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'stok'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
                'type'=>'TEXT',
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,

            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('produk');
    }

    public function down(){
        $this->forge->dropTable('produk');
    }
}
?>