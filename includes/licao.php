<?php 
    $conn = new mysqli("localhost", "root", "", "etecjrm");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM aluno WHERE nome = '$nome' and email = '$email';";
    $query = mysqli_query($conn, $sql);
    
    if ($query->num_rows > 0) {
        echo "$nome \n";
        echo "$email \n";
        echo "O aluno existe!";

        //email   
        $mailto = $email;
        $subject = "Email automático da etec jrm para \n.\n" . "$nome \n.\n" . "$email";
        $txt = "Você se inscreveu nas lições personalizadas da etec jrm!";
    
        mail($mailto, $subject, $txt);
    } else {
        echo "aluno não existe";
    }
?>