<?php


    include_once 'controller/data.php';
class View{


            public function view_id_list($table,$inside_data,$colum,$id){
                    $data = new Database();

                $select = "SELECT * FROM $table WHERE $colum = '$id' ";
                
                $data_select = $data->select($select);

               $row = mysqli_fetch_assoc($data_select);

                    //echo"<table>";
                    echo  $row[$inside_data];
                    //echo"</table>";
            

            }


}




?>