<?php

    include_once 'data.php';
    include_once 'error.php';

    class Delete {

            public function delete_data($table, $colum, $id){
                $data = new Database();
                    
                $delete = "DELETE FROM ".$table." WHERE $colum = '$id' ";
                
                $data->delete($delete);
                        
                 
            }
            

    }

?>