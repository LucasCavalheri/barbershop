
# 💈 **Barbershop API**

Uma API robusta para um sistema de gerenciamento de barbearias. Com ela, você pode gerenciar agendamentos, serviços, horários de funcionamento e muito mais! 🚀

---

## 📋 Sobre o Projeto

A **Barbershop API** é uma API para um sistema de agendamento de barbearias. Através dela, clientes podem agendar serviços, visualizar disponibilidade e consultar informações sobre os serviços da barbearia. Os donos de barbearias podem gerenciar os horários de funcionamento, serviços e agendamentos de forma fácil e rápida. A API também integra autenticação segura usando **Laravel Sanctum** e permite que os donos da barbearia configurem os horários de funcionamento de forma eficiente.

## ✨ Funcionalidades

Aqui estão as principais funcionalidades da API:

- **👤 Gerenciamento de Usuários**

  - Cadastro e login de usuários com autenticação segura.
  - Recuperação de senha via e-mail.
  - Atualização de perfil e informações do usuário.

- **💈 Gerenciamento de Barbearias**

  - Cadastro e gerenciamento de barbearias.
  - Listagem de barbearias associadas ao usuário autenticado.
  - Atualização, exclusão e visualização de barbearias.

- **🛠️ Gerenciamento de Serviços**

  - Criação, atualização, exclusão e listagem de serviços de barbearia.
  - Definição do preço e duração dos serviços.

- **⏰ Gerenciamento de Horários de Funcionamento**

  - Definição dos horários de funcionamento das barbearias.
  - Criação, atualização e exclusão de horários de funcionamento.
  - Validação de disponibilidade de horários para agendamento.

- **📅 Gerenciamento de Agendamentos**

  - Criação, listagem, atualização e exclusão de agendamentos.
  - Visualização de disponibilidade de horários de acordo com os horários de funcionamento.
  - Verificação de conflitos de agendamentos.
  - Status dos agendamentos: pendente, confirmado, cancelado.

- **🔐 Autenticação e Segurança**

  - Middleware de autenticação (`auth:sanctum`) para proteger rotas.
  - Controle de permissões para garantir que os usuários possam acessar apenas seus agendamentos e barbearias.
  - Verificação de e-mail para novos usuários.

---

## 🖥️ Tecnologias Utilizadas

Este projeto foi desenvolvido com as seguintes tecnologias:

- **PHP** como linguagem principal.
- **Laravel** como framework para construção da API.
- **Sanctum** para autenticação baseada em tokens.

## 📦 Pré-requisitos

Para rodar o projeto localmente, você precisará das seguintes ferramentas instaladas:

- **Git**
- **PHP** (versão 8.0 ou superior)
- **Composer** para gerenciar dependências do PHP

---

## 🚀 Como Usar

Siga os passos abaixo para configurar e rodar o projeto localmente:

```bash
# Clone o repositório
git clone git@github.com:LucasCavalheri/barbershop-api.git

# Entre no diretório do projeto
cd barbershop-api

# Instale as dependências do PHP
composer install

# Configure o arquivo .env com suas credenciais
# (banco de dados, etc.)
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrações para criar o banco de dados
php artisan migrate

# Inicie o servidor local
php artisan serve
```

A API estará disponível em `http://localhost:8000/api`.

---

## 🛠️ Endpoints Principais

Aqui estão alguns dos principais endpoints da API:

- **Autenticação**

  - `POST /register` - Registrar um novo usuário
  - `POST /login` - Fazer login
  - `POST /logout` - Fazer logout

- **Barbearias**

  - `POST /barbershops` - Criar uma nova barbearia
  - `GET /barbershops` - Listar todas as barbearias
  - `GET /barbershops/{id}` - Obter detalhes de uma barbearia
  - `PUT /barbershops/{id}` - Atualizar uma barbearia
  - `DELETE /barbershops/{id}` - Deletar uma barbearia

- **Serviços**

  - `POST /services` - Criar um novo serviço
  - `GET /services` - Listar todos os serviços
  - `GET /services/{id}` - Obter detalhes de um serviço
  - `PUT /services/{id}` - Atualizar um serviço
  - `DELETE /services/{id}` - Deletar um serviço

- **Horários de Funcionamento**

  - `POST /opening-hours` - Definir horários de funcionamento para uma barbearia
  - `GET /opening-hours` - Listar os horários de funcionamento
  - `PUT /opening-hours/{id}` - Atualizar horários de funcionamento
  - `DELETE /opening-hours/{id}` - Deletar horários de funcionamento

- **Agendamentos**

  - `POST /appointments` - Criar um agendamento
  - `GET /appointments` - Listar todos os agendamentos do usuário
  - `GET /appointments/{id}` - Obter detalhes de um agendamento
  - `PUT /appointments/{id}` - Atualizar um agendamento
  - `DELETE /appointments/{id}` - Deletar um agendamento

---

## 🤝 Contribuições

Contribuições são muito bem-vindas! Siga os passos abaixo para contribuir:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas alterações (`git commit -m 'Adiciona nova feature'`)
4. Envie para o repositório remoto (`git push origin feature/nova-feature`)
5. Abra um Pull Request

---

## 📜 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

---

Criado e desenvolvido por **Lucas Cavalheri** 💻
