<html>
    <body>
        <?php
            if(isset($_POST['acao'])){
                //formulário postado
                $arquivo = $_FILES['file'];

                $arquivoNew = explode('.', $arquivo['name']);

                if($arquivoNew[sizeof($arquivoNew)-1] != 'jpg') {
                    die( 'Não é possivel fazer o upload neste formato de arquivo');
                }else{
                    echo 'Arquivo enviado!';
                    move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
                }
                }
        ?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" name="acao" value="Enviar para aprovação" />
    </form>        
    </body>
</html>