<?php

require 'Posts.php';

$post = new Posts();


switch ($_GET['op']) {

    case 'read':
        echo '<h3>Posts: </h3>';

        foreach ($post->read() as $value) {
            echo 'Id: ' . $value['id'] . 
                 '<br> Date: ' . $value['date'] . 
                 '<br> Title: ' . $value['title'] .
                 '<br> Body: ' . $value['body'] . 
                 '<br> Author: ' . $value['author'] . 
                 '<hr>';
        }

        break;

    case 'create':
        $status =  $post->create(
            '10/11/2021',
            'PHP',
            'Orientação a objetos, exceções e banco de dados PHP.',
            'Reine Alexandre Morato'
        );

        if (!$status){
            echo "Não foi possível executar a operação";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;
        
    case 'update':
        
        $status =  $post->update(
            '10/11/2021', 
            'HTML', 
            'HTML abreviação para a expressão inglesa HyperText Markup Language, 
            que significa: "Linguagem de Marcação de Hipertexto" é uma linguagem 
            de marcação utilizada na construção de páginas na Web. Documentos HTML 
            podem ser interpretados por navegadores. A tecnologia é fruto da junção 
            entre os padrões HyTime e SGML.', 
            'Reine Alexandre Morato', 
            1
        );

        if (!$status){
            echo "Não foi possível executar a operação";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;
        
    case 'delete':
        
        $status = $post->delete(3);

        if (!$status){
            echo "Não foi possível executar a operação";
            return false;
        }

        echo "Registro atualizado com sucesso!";


        break;
}