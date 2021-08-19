<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">

    <title>Email</title>
    
    <link rel="stylesheet" href="styles/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    
    </head>
    <body>
        <?php session_start();

        ?>

        <section>
            <div class="warning">
                <p class="warningTxt"></p>
            </div>
        </section>

        <Section>

            <div class="textoPrincipal">

                Escreva seu email aqui.

            </div>

            <div class="formulario">

                <form method="post" action="bancoPhp/cadastrar.php"> 
                    
                    <input class="forms" type="text" placeholder="Nome do usuário" name="txtUser" id="txtUser" /> <br>

                    <input class="forms" type="email" placeholder="Email de destino" name="txtEmail" id="txtEmail" /> <br>

                    <input class="forms" type="text" placeholder="Assunto" name="txtAssunto" id="txtAssunto" /> <br>

                    <textarea class="desc" name="txtTexto" placeholder="Menssagem" id="txtTexto"></textarea> <br>

                    <input class="buttons" type="submit" value="Salvar" id="Salvar" />

                </form>

            </div>

        </section> <br><br>
        
        <hr>

        <br>

        <div class="textoPrincipal">

               Histórico de Emails.

            </div>

        <section class="partTwo">

            <div class="allForm">

                <div class="allFormTwo">

                    <?php 
                    include("bancoPhp/conexao.php");

                        try{
                            // nomde da tabela
                            $stmt = $pdo -> prepare("select * from tbdescemail");

                            $stmt -> execute();
                            
                            // FETCH_BOTH retorna uma matriz com os valores do banco de dados
                            while($row = $stmt->fetch(PDO::FETCH_BOTH)) { 
                                // Nome das colunas
                                echo '<br> <div class="card"> ';

                                echo "<br />";

                                echo '<div class="textoOne">';
                                echo $row['idEmail'].'º Mensagem';
                                echo "<br />";
                                echo '</div>';

                                echo '<div class="textoTwo">';
                                echo 'Enviado por: '.$row['emailName'];
                                echo "<br />";
                                echo '</div>';

                                echo '<div class="textoTwo">';
                                echo 'Enviado para: '.$row['emailDestiny'];
                                echo "<br />";
                                echo '</div>';

                                echo '<div class="textoTwo">';
                                echo 'Assunto: '.$row['emailChat'];
                                echo "<br />";
                                echo '</div>';

                                echo '<div class="textoAll">';
                                echo "Menssaem: <br>";
                                echo $row['emailMensage'];
                                echo '</div>';

                                echo '<div class="buttonFinal">';
                                echo "<a href='bancoPhp/excluir.php?id=". $row['idEmail']."'> <center> Excluir </center> </a> <br />";
                                echo '</div>';
                                echo "<br />";

                                echo '<div class="buttonFinal">';
                                echo "<a href='pdf.php?' target='_blank'> <center> Baixar mensagem </center> </a> <br />";
                                echo '</div>';
                                echo "<br />";

                                
                                

                                $_SESSION['dado1'] = $row['emailName'];
                                $_SESSION['dado2'] = $row['emailDestiny'];
                                $_SESSION['dado3'] = $row['emailChat'];
                                $_SESSION['dado4'] = $row['emailMensage'];
                                
                                echo '</div> <br>';
                            }

                        }catch(PDOException $e) {
                            echo "Erro: " . $e -> getMessage();
                        }
                        
                        
                    ?>

                </div>

            </div>

        </section> <br><br>

       


    

       <br><br><br><br>
   
    </body>
    
</html>


