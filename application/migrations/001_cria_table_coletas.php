<?php   
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Migration_Cria_Table_Coletas extends CI_Migration{
        
        public function up(){
            $this->dbforge->add_field(array(
                'id'=> array('type' => "int",'auto_increment'=>TRUE),
                'objeto_id' => array('type'=>'int'),
                'usuario_id' =>array('type'=>'int')
            ));
            //cria a pk
            $this->dbforge->add_key('id',TRUE);
            //cria tabela coletas no banco
            $this->dbforge->create_table('reg_coletas');
        }

        public function down(){
            $this->dbforge->drop_table('reg_coletas');
        }
    }