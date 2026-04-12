# Task Management

Projeto simples de gerenciamento de tarefas desenvolvido em PHP com interface web usando Bootstrap.

## Visão Geral

Task Management é um sistema para gerenciamento de tarefas pessoais. O usuário faz login e pode criar, editar, excluir e filtrar tarefas conforme o status. A aplicação guarda as tarefas em um banco de dados MySQL e exibe as informações em uma lista interativa.

## Estrutura do Projeto

- `index.php`: tela de login do usuário.
- `processaLogin.php`: validação de credenciais e criação de sessão.
- `tasks.php`: painel principal com listagem de tarefas e modais para adicionar, editar e excluir.
- `adicaoTarefa.php`: insere nova tarefa no banco de dados.
- `editarTarefa.php`: atualiza os dados de uma tarefa existente.
- `excluirTarefa.php`: remove tarefa selecionada do banco.
- `selecao.php`: seleciona e exibe todas as tarefas do usuário logado.
- `filtro.php`: retorna tarefas filtradas por status.
- `script.js`: funções JavaScript para controle de modais e aplicação de filtro.
- `conexao.php`: conexão PDO com o banco de dados MySQL.

## Tecnologias Usadas

- PHP
- MySQL
- HTML5
- CSS com Bootstrap 5
- JavaScript
- PDO para conexão ao banco de dados e operações no banco de dados

## Build e Execução

1. Copie a pasta `taskmanagement` para o diretório do servidor web (Apache, Nginx ou similar).
2. Ajuste as credenciais de conexão em `conexao.php` se necessário.
3. Crie o banco de dados MySQL e as tabelas necessárias.
4. Acesse `index.php` pelo navegador para abrir a tela de login.

## Configuração do Banco de Dados

O projeto utiliza o banco de dados `taskmanagement` configurado em `conexao.php`.

Tabelas esperadas:

- `usuarios`
- `tarefas`

Campos essenciais em `tarefas`:

- `id` (identificador da tarefa)
- `usuario_id` (referência ao usuário)
- `titulo` (nome da tarefa)
- `descricao` (detalhes da tarefa)
- `status` (completa / incompleta)

> Observação: o sistema espera que o login valide o usuário com base nas credenciais da tabela `usuarios`.
