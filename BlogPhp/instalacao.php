<?php
/**
* Arquivo de instala��o, deve ser deletado ap�s o uso
*
*/


/**
 * Include do arquivo de configura��o
 */

    require('config.php');

/**
 * Cria��o da tabela e populando o banco
 */
    $arquivo = file_get_contents('extras/sql.sql');
    $arquivo = explode(';', $arquivo);

    foreach($arquivo as $linha){        
        QueryExecutor::executeSimpleQuery($linha);
    }
    

/**
 * Retorno
 */

    echo 'Parab�ns! Instala��o efetuada com sucesso!<br /><br /><a href="' . blog_url . '">Ir para p�gina inicial</a>';

?>