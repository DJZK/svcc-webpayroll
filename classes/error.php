<?php

    class  Message{


            public function message_up($message, $link){

                ?>

            <script>

               // function message_popUp(){
                    alert('<?php echo $message?>');
                    window.location.href = "<?php echo $link; ?>";

                //}

            </script>
<?php

            }

    }


?>