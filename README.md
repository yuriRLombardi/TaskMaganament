# ✅ Task Management
> Projeto desenvolvido com fins educacionais, aplicando conceitos de desenvolvimento web full stack e integração com banco de dados.

Aplicação web de gerenciamento de tarefas desenvolvida em PHP com integração ao banco de dados MySQL. O sistema permite autenticação de usuários, gerenciamento de tarefas e manipulação dinâmica da interface utilizando JavaScript e Bootstrap.

---

## 🎯 Objetivo

O projeto foi desenvolvido com foco na aplicação de conceitos de desenvolvimento web full stack, incluindo autenticação, operações CRUD, integração com banco de dados e organização de funcionalidades em aplicações web.

---

## ⚙️ Funcionalidades

- Login e autenticação de usuários  
- Cadastro de novas tarefas  
- Edição e exclusão de tarefas  
- Filtragem de tarefas por status  
- Interface interativa utilizando modais  
- Integração com banco de dados MySQL  
- Gerenciamento de sessão de usuário  

---

## 🛠️ Tecnologias Utilizadas

- PHP  
- MySQL  
- HTML5  
- CSS3  
- Bootstrap 5  
- JavaScript  
- PDO (PHP Data Objects)  

---

## 🧠 Conceitos Aplicados

- Desenvolvimento web full stack  
- Operações CRUD  
- Autenticação e gerenciamento de sessão  
- Integração com banco de dados relacionais  
- Manipulação de DOM  
- Estruturação de interface responsiva  
- Organização de funcionalidades em aplicações web  

---
## 🔐 Autenticação

O sistema utiliza autenticação baseada em sessão para controle de acesso às funcionalidades do usuário autenticado.
---
## 📂 Estrutura do Projeto

```plaintext
/taskmanagement
│
├── index.php
├── processaLogin.php
├── tasks.php
├── adicaoTarefa.php
├── editarTarefa.php
├── excluirTarefa.php
├── selecao.php
├── filtro.php
├── conexao.php
├── script.js
└── assets/
```

### 📌 Principais Arquivos

| Arquivo | Responsabilidade |
|----------|----------------|
| `index.php` | Tela de login |
| `processaLogin.php` | Validação de usuário e criação de sessão |
| `tasks.php` | Painel principal de gerenciamento |
| `adicaoTarefa.php` | Cadastro de tarefas |
| `editarTarefa.php` | Atualização de tarefas |
| `excluirTarefa.php` | Remoção de tarefas |
| `filtro.php` | Filtragem por status |
| `conexao.php` | Conexão com banco de dados |
| `script.js` | Interações da interface |

---

## 🗄️ Banco de Dados

O projeto utiliza o banco de dados MySQL `taskmanagement`.

### Tabelas Esperadas

#### `usuarios`
Responsável pelo armazenamento das credenciais de acesso.

#### `tarefas`
Responsável pelo gerenciamento das tarefas cadastradas.

### Campos principais da tabela `tarefas`

| Campo | Descrição |
|-------|------------|
| `id` | Identificador da tarefa |
| `usuario_id` | Referência ao usuário |
| `titulo` | Nome da tarefa |
| `descricao` | Detalhes da tarefa |
| `status` | Status da tarefa |

---

## 🚀 Execução do Projeto

### 1️⃣ Clone o repositório

```bash
git clone <URL_DO_REPOSITORIO>
```

---

### 2️⃣ Configure o ambiente

- Utilize um servidor local como:
  - XAMPP
  - Laragon
  - WAMP

- Copie a pasta do projeto para o diretório do servidor.

---

### 3️⃣ Configure o banco de dados

- Crie o banco `taskmanagement`
- Configure as credenciais no arquivo:

```plaintext
conexao.php
```

---

### 4️⃣ Execute a aplicação

Acesse no navegador:

```plaintext
http://localhost/taskmanagement
```

---

## 📸 Demonstração

> Adicione aqui imagens da aplicação ou um GIF demonstrando o fluxo do sistema.

Exemplo:

```md
![Tela Principal](./assets/dashboard.png)
```

---

## 📈 Melhorias Futuras

- Implementação de prioridades nas tarefas  
- Sistema de notificações  
- Responsividade aprimorada  
- Integração com APIs externas  
- Dashboard com métricas de produtividade  

---

## 👨‍💻 Autor

Yuri Rodrigues Lombardi  

🔗 LinkedIn: https://linkedin.com/in/yuri-rodrigues-lombardi  
💻 GitHub: https://github.com/yuriRLombardi
