<?php
    if(isset($_POST['email'])){
        $email_to = "aldair2601@gmail.com";
        $email_subject = "solicito mas información";

        if($_POST['name']==null ||
            $_POST['lastname']==null ||
            $_POST['email']==null||
            $_POST['phone']==null ||
            $_POST['textarea']==null) {
            echo '<h3>Debes llenar algunos campos antes de enviar el formulario</h3>';
            die();
        }else{
            $email_message = "Detalles del formulario de contacto:\n\n";
            $email_message .= "Nombre: " . $_POST['name'] . "\n";
            $email_message .= "Apellido: " . $_POST['lastname'] . "\n";
            $email_message .= "E-mail: " . $_POST['email'] . "\n";
            $email_message .= "Teléfono: " . $_POST['phone'] . "\n";
            $email_message .= "Comentarios: " . $_POST['textarea'] . "\n\n";
    

            @mail($email_to, $email_subject, $email_message);
    
            echo '<h3>Excelente, los datos han siso enviados correctamente</h3>';
        }
    }
?>