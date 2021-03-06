<?php
//Guia de estilo de PST - PHP-FIG
//PSR's sao regras e especificacoes que noa podemos aplicar no nosso codigo.

//PSR - 1 | Basic Coding Standard | Padrao basico de Codificacao.
//PSR - 2 | Coding Style Guide | Guia de Estilo de codificacao.
//PSR - 4 | Autoloader | Autoload de arquivos.
//PSR - 12 | Extended Coding Style Guide | Extensao de estilo de codificacao.
//Obs: Atualmente a PSR 2 esta descontinuada, porem a PSR 4 eh uma PSR que abrange a PSR 2.

namespace Source;//Sempre que eu tenho uma classe eu tenho que ter no minino um namespace.

//Classes StudlyCaps(PascalCase)
class User//O nome do meu arquivo deve ser o mesmo da minha classe.
{//As chaves de Classes e Metodos devem estar assim.
    
    const NOME = "Matheus";
    const NOME_USUARIO = "Matheus1130";
    //Contstantes devem ser declaradas em maiusculo e devem ser separados por um underscore.

    //Os atributos de uma classe podem utilizar o padrão underscore,
    //camelCase ou StudlyCaps, não existe uma restrição.
    public $nome_usuario; //Underscore
    public $nomeUsuario; //CamelCase
    public $NomeUsuario; //StudlyCaps

    public function getNome() //CamelCase
    {
        if (5 > 4) {

        } elseif (2 > 2) {

        } else {

        }
        //Para atender os requisitos da PSR 2 nos temos que padronizar a PSR 1 tambem.
        
        //Nosso TAB deve ter 4 espacos.
        //Uma linha pode ter no maximo entre 80 a 120 caracteres.
    }
    //Os metodos devem ser delcarados em CamelCase.
}//O programa deve terminar sempre com uma linha em branco.
