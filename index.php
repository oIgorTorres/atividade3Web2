<?php



// FUNÇÕES ESSENCIAIS DE STRINGS EM PHP



// 1. strlen()
// Conta o número de caracteres em uma string.
// Exemplo:
echo "1. strlen()";
echo "<br>";

$texto = "Olá, mundo!";
echo strlen($texto);
// Saída: 11



echo "<hr>";



// 2. str_replace()
// Substitui todas as ocorrências de uma string por outra, dentro de uma string principal.
// Parâmetros: (o_que_procurar, pelo_que_substituir, onde_procurar)
// Exemplo:
echo "2. str_replace()";
echo "<br>";

$frase = "Eu gosto de maçã.";
$nova_frase = str_replace("maçã", "banana", $frase);
echo $nova_frase;
// Saída: Eu gosto de banana.



echo "<hr>";



// 3. substr()
// Retorna uma parte (uma substring) de uma string.
// Parâmetros: (string, inicio, [comprimento])
// Exemplo:
echo "3. substr()";
echo "<br>";

$email = "contato@exemplo.com";
$dominio = substr($email, 8); // Pega tudo a partir do índice 8
echo $dominio;
// Saída: exemplo.com

$usuario = substr($email, 0, 7); // Pega 7 caracteres a partir do índice 0
echo $usuario;
// Saída: contato



echo "<hr>";



// 4. strtolower()
// Converte uma string para letras minúsculas.
// Exemplo:
echo "4. strtolower()";
echo "<br>";

$texto = "Isso É Um TESTE";
echo strtolower($texto);
// Saída: isso é um teste



echo "<hr>";



// 5. strtoupper()
// Converte uma string para letras maiúsculas.
// Exemplo:
echo "5. strtoupper()";
echo "<br>";

$texto = "Isso É Um TESTE";
echo strtoupper($texto);
// Saída: ISSO É UM TESTE

 

echo "<hr>";



// 6. ucfirst()
// Converte o primeiro caractere de uma string para maiúsculo.
// Exemplo:
echo "6. ucfirst()";
echo "<br>";

$nome = "joão";
echo ucfirst($nome);
// Saída: João



echo "<hr>";



// 7. trim()
// Remove espaços em branco (ou outros caracteres) do início e do fim de uma string.
// Exemplo:
echo "7. trim()";
echo "<br>";

$entrada = "   olá   ";
$limpo = trim($entrada);
echo $limpo;
// Saída: olá



echo "<hr>";



// 8. explode()
// Divide uma string em um array, usando um delimitador.
// Parâmetros: (delimitador, string)
// Exemplo:]
echo "8. explode()";
echo "<br>";

$data = "29-10-2025";
$partes = explode("-", $data);
// $partes agora é um array: ["29", "10", "2025"]
echo $partes[0]; // Dia
// Saída: 29



echo "<hr>";



// 9. implode() (ou join())
// Junta os elementos de um array em uma única string, usando um "separador".
// Parâmetros: (separador, array)
// Exemplo:
echo "9. implode() (ou join())";
echo "<br>";

$array = ["Maçã", "Banana", "Laranja"];
$lista_compras = implode(", ", $array);
echo $lista_compras;
// Saída: Maçã, Banana, Laranja



echo "<hr>";



// 10. strpos()
// Encontra a posição da primeira ocorrência de uma substring em uma string. É muito usado para verificar se um texto contém outro.
// Nota: Esta função retorna a posição (índice) ou false se não encontrar. É importante usar a comparação !== false (diferente) ou === false (igual).
// Exemplo:
echo "10. strpos()";
echo "<br>";

$frase = "O gato subiu no telhado.";
$posicao = strpos($frase, "gato");

if ($posicao !== false) {
    echo "A palavra 'gato' foi encontrada na posição: " . $posicao;
} else {
    echo "A palavra 'gato' não foi encontrada.";
}
// Saída: A palavra 'gato' foi encontrada na posição: 2



echo "<hr>";



// 11. sprintf()
// Retorna uma string formatada, substituindo "coringas" (como %s para string, %d para número) por variáveis.
// Exemplo:
echo "11. sprintf()";
echo "<br>";

$nome = "Maria";
$idade = 30;
$texto = sprintf("O nome dela é %s e ela tem %d anos.", $nome, $idade);
echo $texto;
// Saída: O nome dela é Maria e ela tem 30 anos.



echo "<hr>";



echo "FUNÇÕES NUMÉRICAS E MATEMÁTICAS EM PHP";




echo "<hr>";



// 1. number_format()
// Formata um número com milhares separados e casas decimais. É excelente para exibir preços ou valores monetários.
// Parâmetros: (numero, [casas_decimais], [separador_decimal], [separador_milhar])
// Exemplo:
echo "1. number_format()";
echo "<br>";

$preco = 1250.75;

// Formato brasileiro (2 casas, vírgula decimal, ponto milhar)
echo number_format($preco, 2, ',', '.');
// Saída: 1.250,75

echo "<br>";

// Formato simples (sem casas decimais)
echo number_format($preco);
// Saída: 1,251 (arredonda)



echo "<hr>";



// 2. round()
// Arredonda um número de ponto flutuante (float) para o inteiro mais próximo.
// Exemplo:
echo "2. round()";
echo "<br>";

echo round(4.3);
// Saída: 4

echo "<br>";

echo round(4.7);
// Saída: 5

echo "<br>";

// Arredondando para 2 casas decimais
echo round(2.3456, 2);
// Saída: 2.35



echo "<hr>";



// 3. ceil()
// Arredonda um número para cima (teto), para o próximo inteiro.
// Exemplo:
echo "3. ceil()";
echo "<br>";

echo ceil(4.3);
// Saída: 5

echo "<br>";

echo ceil(4.0);
// Saída: 4



echo "<hr>";



// 4. floor()
// Arredonda um número para baixo (piso), para o inteiro anterior.
// Exemplo:
echo "4. floor()";
echo "<br>";

echo floor(4.7);
// Saída: 4

echo "<br>";

echo floor(4.0);
// Saída: 4



echo "<hr>";



// 5. abs()
// Retorna o valor absoluto (módulo) de um número. Basicamente, remove o sinal negativo.
// Exemplo:
echo "5. abs()";
echo "<br>";

$diferenca = 10 - 25; // -15
echo abs($diferenca);
// Saída: 15



echo "<hr>";



// 6. rand() ou mt_rand()
// Gera um número inteiro aleatório. mt_rand() é considerado mais rápido e "mais aleatório", sendo geralmente preferido.
// Parâmetros: (min, max)
// Exemplo:
// Gera um número aleatório entre 1 e 10
echo "6. rand() ou mt_rand()";
echo "<br>";

echo mt_rand(1, 10);
// Saída: (um número aleatório, ex: 7)



echo "<hr>";



// 7. max()
// Retorna o maior valor de uma lista de argumentos ou de um array.
// Exemplo:
// PHP
echo "7. max()";
echo "<br>";

echo max(5, 10, 2, 8);
// Saída: 10

echo "<br>";

$notas = [7.5, 9.0, 6.2];
echo max($notas);
// Saída: 9.0



echo "<hr>";



// 8. min()
// Retorna o menor valor de uma lista de argumentos ou de um array.
// Exemplo:
echo "8. min()";
echo "<br>";

echo min(5, 10, 2, 8);
// Saída: 2

echo "<br>";

$precos = [19.99, 15.50, 22.00];
echo min($precos);
// Saída: 15.50



echo "<hr>";



// 9. pow()
// Calcula uma potência (exponenciação). Retorna a base elevada ao expoente.
// Parâmetros: (base, expoente)
// Exemplo:
// 2 elevado à potência 3 (2 * 2 * 2)
echo "9. pow()";
echo "<br>";

echo pow(2, 3);
// Saída: 8



echo "<hr>";



// 10. sqrt()
// Calcula a raiz quadrada de um número.
// Exemplo:
echo "10. sqrt()";
echo "<br>";

echo sqrt(9);
// Saída: 3

echo "<br>";

echo sqrt(100);
// Saída: 10



echo "<hr>";



// FUNÇÕES DE VERIFICAÇÃO DE TIPO
// Essas funções retornam true (verdadeiro) ou false (falso).



// 11. is_numeric()
// Verifica se uma variável é um número ou uma string numérica.
// Exemplo:
echo "11. is_numeric()";
echo "<br>";

var_dump(is_numeric(123));     // Saída: bool(true)

echo "<br>";

var_dump(is_numeric("123.45")); // Saída: bool(true)

echo "<br>";

var_dump(is_numeric("Olá"));   // Saída: bool(false)



echo "<hr>";



// 12. is_int() (ou is_integer())
// Verifica se uma variável é um número inteiro.
// Exemplo:
// PHP
echo "12. is_int() (ou is_integer())";
echo "<br>";

var_dump(is_int(123));     // Saída: bool(true)

echo "<br>";

var_dump(is_int(123.45));  // Saída: bool(false)

echo "<br>";

var_dump(is_int("123"));   // Saída: bool(false) - É uma string!



echo "<hr>";



// 13. is_float() (ou is_double())
// Verifica se uma variável é um número de ponto flutuante (decimal).
// Exemplo:
echo "13. is_float() (ou is_double())";
echo "<br>";

var_dump(is_float(123.45)); // Saída: bool(true)

echo "<br>";

var_dump(is_float(123));    // Saída: bool(false)



echo "<hr>";



echo "FUNÇÕES ESSENCIAIS DE ARRAY EM PHP";
echo "<br>";
echo "Arrays em PHP são extremamente versáteis (podem ser listas, mapas/dicionários, ou ambos).";



echo "<hr>";



// 1. count() (ou sizeof())
// Retorna o número de elementos em um array.
// Exemplo:
echo "1. count() (ou sizeof())";
echo "<br>";

$frutas = ["Maçã", "Banana", "Laranja"];
echo count($frutas);
// Saída: 3



echo "<hr>";



// 2. array_push()
// Adiciona um ou mais elementos ao final de um array. (Nota: Muitos desenvolvedores preferem a sintaxe $array[] = $valor; por ser ligeiramente mais rápida).
// Exemplo:
echo "2. array_push()";
echo "<br>";

$lista = ["Arroz", "Feijão"];
array_push($lista, "Macarrão", "Óleo");
// $lista agora é: ["Arroz", "Feijão", "Macarrão", "Óleo"]
print_r($lista);



echo "<hr>";



// 3. array_pop()
// Remove e retorna o último elemento de um array.
// Exemplo:
echo "3. array_pop()";
echo "<br>";

$lista = ["Arroz", "Feijão", "Macarrão"];
$ultimo_item = array_pop($lista);

echo $ultimo_item;
// Saída: Macarrão
// $lista agora é: ["Arroz", "Feijão"]



echo "<hr>";



// 4. array_shift()
// Remove e retorna o primeiro elemento de um array.
// Exemplo:
echo "4. array_shift()";
echo "<br>";

$lista = ["Arroz", "Feijão", "Macarrão"];
$primeiro_item = array_shift($lista);

echo $primeiro_item;
// Saída: Arroz
// $lista agora é: ["Feijão", "Macarrão"]



echo "<hr>";



// 5. array_key_exists()
// Verifica se uma chave (índice ou chave associativa) existe em um array.
// Exemplo:
echo "5. array_key_exists()";
echo "<br>";

$config = [
    'usuario' => 'admin',
    'senha'   => '123'
];

if (array_key_exists('usuario', $config)) {
    echo "A chave 'usuario' existe.";
}
// Saída: A chave 'usuario' existe.



echo "<hr>";



// 6. in_array()
// Verifica se um valor existe em um array.
// Exemplo:
echo "6. in_array()";
echo "<br>";

$permissoes = ['ler', 'escrever', 'executar'];

if (in_array('escrever', $permissoes)) {
    echo "O usuário pode escrever.";
}
// Saída: O usuário pode escrever.



echo "<hr>";



// 7. array_merge()
// Mescla (junta) dois ou mais arrays em um só.
// Exemplo:
echo "7. array_merge()";
echo "<br>";

$array1 = ["a", "b"];
$array2 = ["c", "d"];
$resultado = array_merge($array1, $array2);
// $resultado é: ["a", "b", "c", "d"]
print_r($resultado);



echo "<hr>";



// 8. array_keys()
// Retorna todas as chaves (índices) de um array.
// Exemplo:
echo "8. array_keys()";
echo "<br>";

$capitais = [
    'Brasil'  => 'Brasília',
    'Portugal' => 'Lisboa'
];
$paises = array_keys($capitais);
// $paises é: ["Brasil", "Portugal"]
print_r($paises);



echo "<hr>";



// 9. array_values()
// Retorna todos os valores de um array, reindexando as chaves numericamente.
// Exemplo:
echo "9. array_values()";
echo "<br>";

$capitais = [
    'Brasil'  => 'Brasília',
    'Portugal' => 'Lisboa'
];
$cidades = array_values($capitais);
// $cidades é: ["Brasília", "Lisboa"]
print_r($cidades);



echo "<hr>";



echo "FUNÇÕES ESSENCIAIS DE DATA E HORA (DATETIME)";
echo "<br>";
echo "Embora funções antigas como date() e time() ainda existam, a abordagem moderna e recomendada em PHP é usar a classe DateTime (Programação Orientada a Objetos), que é muito mais poderosa e menos propensa a erros.";



echo "<hr>";



// 1. new DateTime()
// Cria um objeto DateTime. Pode ser usado para obter a data e hora atuais ou para especificar uma data.
// Exemplo:
// Data e hora atuais

$agora = new DateTime();

// Uma data específica
$natal = new DateTime('2025-12-25');







// 2. format() (Método de DateTime)
// Formata o objeto DateTime em uma string legível.
// Caracteres comuns de formatação:
// Y: Ano com 4 dígitos (ex: 2025)
// m: Mês com 2 dígitos (01 a 12)
// d: Dia do mês com 2 dígitos (01 a 31)
// H: Hora no formato 24h (00 a 23)
// i: Minutos (00 a 59)
// s: Segundos (00 a 59)
// Exemplo:
echo "2. format() (Método de DateTime)";
echo "<br>";

$agora = new DateTime();

// Formato Brasileiro
echo $agora->format('d/m/Y H:i:s');
// Saída: 29/10/2025 20:14:15 (ou a hora atual)

echo "<br>";

// Formato de Banco de Dados (ISO 8601)
echo $agora->format('Y-m-d H:i:s');
// Saída: 2025-10-29 20:14:15



echo "<hr>";



// 3. modify() (Método de DateTime)
// Altera a data do objeto DateTime (adiciona ou subtrai tempo).
// Exemplo:
echo "3. modify() (Método de DateTime)";
echo "<br>";

$hoje = new DateTime();
echo "Hoje é: " . $hoje->format('d/m/Y') . "\n";

echo "<br>";

// Adiciona 10 dias
$hoje->modify('+10 days');
echo "Daqui a 10 dias será: " . $hoje->format('d/m/Y') . "\n";

echo "<br>";

// Subtrai 1 mês
$hoje->modify('-1 month');
echo "Um mês atrás era: " . $hoje->format('d/m/Y') . "\n";



echo "<hr>";



// 4. diff() (Método de DateTime)
// Calcula a diferença (intervalo) entre duas datas.
// Exemplo:
echo "4. diff() (Método de DateTime)";
echo "<br>";

$data_nascimento = new DateTime('1990-05-15');
$hoje = new DateTime();

$intervalo = $hoje->diff($data_nascimento);

// O $intervalo é um objeto DateInterval
echo "Você tem " . $intervalo->y . " anos.";
// Saída: Você tem 35 anos.

echo "<br>";

// Você também pode ver a diferença total em dias
echo "Diferença total de dias: " . $intervalo->days;



echo "<hr>";



// 5. DateTime::createFromFormat()
// Cria um objeto DateTime a partir de uma string que não está em um formato padrão (como uma data em formato brasileiro).
// Exemplo:
echo "5. DateTime::createFromFormat()";
echo "<br>";

$data_string = '20/03/2026';
$formato = 'd/m/Y'; // Informa ao PHP como a string está formatada

$data_obj = DateTime::createFromFormat($formato, $data_string);

echo "O ano é: " . $data_obj->format('Y');
// Saída: O ano é: 2026



echo "<hr>";



// Imagine que recebemos dados "sujos" de um formulário ou de um sistema antigo (alguns dados em maiúsculas, outros com espaços sobrando, datas em formato brasileiro e valores em uma única string).
// Nosso objetivo é:
// Limpar e formatar os dados.
// Calcular a idade do cliente.
// Processar uma lista de compras (que veio como string) para obter estatísticas.
// Gerar um relatório formatado.
// Aqui está o exemplo completo e comentado:



// <?php
/*
 * EXEMPLO REAL: Processamento e Relatório de Cliente
 *
 * Este script pega dados brutos de um usuário, limpa-os,
 * faz cálculos (idade, estatísticas de compras) e
 * exibe um relatório formatado.
 */

// --- 1. DADOS BRUTOS (Simulando um formulário ou banco de dados) ---

$dados_brutos = [
    'nome'     => '   josé da silva   ',
    'email'    => 'JOSE.SILVA@EMAIL.COM',
    'nasc'     => '15/05/1990',
    'compras'  => '120.50, 80.00, 15.75, 250.00, 99.90' // Compras como uma única string
];

echo "--- DADOS BRUTOS --- \n";


print_r($dados_brutos);
echo "\n--- INICIANDO PROCESSAMENTO --- \n\n";

echo "<hr>";

// --- 2. PROCESSAMENTO COM FUNÇÕES DE STRING ---

// trim(): Remove espaços do início e fim
$nome_limpo = trim($dados_brutos['nome']);


// strtolower(): Converte tudo para minúsculo
$nome_lower = strtolower($nome_limpo);
$email_limpo = strtolower($dados_brutos['email']);


// ucwords(): Converte a primeira letra de cada palavra para maiúsculo
$nome_formatado = ucwords($nome_lower);


// explode(): "Explode" a string de compras em um ARRAY, usando a vírgula
$compras_array = explode(',', $dados_brutos['compras']);


// --- 3. PROCESSAMENTO COM FUNÇÕES DE DATA E HORA (DateTime) ---

// Pega a data e hora de agora
$hoje = new DateTime();



// DateTime::createFromFormat(): Converte a string (formato BR) para um objeto Data
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);



// diff(): Calcula a diferença (intervalo) entre as duas datas
$intervalo = $hoje->diff($data_nascimento);



// Pega a propriedade 'y' (anos) do intervalo
$idade = $intervalo->y;



// --- 4. PROCESSAMENTO COM FUNÇÕES DE ARRAY E MATEMÁTICA ---

// count(): Conta quantos itens (compras) existem no array
$total_de_compras = count($compras_array);

// array_sum(): Soma todos os valores do array (função de array matemática)
$valor_total_gasto = array_sum($compras_array);

// max() e min(): Encontram o maior e o menor valor no array
$maior_compra = max($compras_array);
$menor_compra = min($compras_array);

// round(): Arredonda o valor da média de gastos
$media_gasto = 0;
if ($total_de_compras > 0) {
    // Cálculo de média simples
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
}


// --- 5. GERAÇÃO DO RELATÓRIO (Strings e Números) ---

echo "--- RELATÓRIO DO CLIENTE GERADO EM " . $hoje->format('d/m/Y H:i:s') . " ---\n";

// sprintf(): Monta uma string formatada, substituindo os coringas (%s, %d, %f)
$relatorio_pessoal = sprintf(
    "Nome: %s\nE-mail: %s\nIdade: %d anos\n",
    $nome_formatado,
    $email_limpo,
    $idade
);
echo $relatorio_pessoal;

echo "<hr>";

echo "--- ESTATÍSTICAS DE COMPRAS ---\n";

// number_format(): Formata os números para o padrão monetário brasileiro
echo "Total de pedidos: " . $total_de_compras . "\n";
echo "Valor total gasto: R$ " . number_format($valor_total_gasto, 2, ',', '.') . "\n";
echo "Média por pedido: R$ " . number_format($media_gasto, 2, ',', '.') . "\n";
echo "Maior compra: R$ " . number_format($maior_compra, 2, ',', '.') . "\n";
echo "Menor compra: R$ " . number_format($menor_compra, 2, ',', '.') . "\n";

?>


