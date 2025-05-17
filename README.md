<p align="center">
  <img src="logo.png" alt="API Restful Study Logo" width="200"/>
</p>

# API Restful Study

[🇧🇷 Leia em Português](#pt-br) | [🇺🇸 Read in English](#en)

---

<a name="pt-br"></a>
## 🇧🇷 Descrição

Este repositório contém estudos, exemplos e anotações sobre o desenvolvimento de APIs RESTful utilizando o framework Laravel. O objetivo é servir como material de apoio e aprendizado, reunindo boas práticas, padrões de projeto, exemplos de código e dicas para implementar e consumir APIs RESTful de forma eficiente.

### Funcionalidades

- Exemplos de requisições HTTP (GET, POST, PUT, DELETE) com Laravel
- Demonstrações de autenticação e autorização (Laravel Sanctum/Passport)
- Documentação de endpoints com Laravel
- Testes de API com PHPUnit e ferramentas externas
- Notas sobre status codes, versionamento e segurança

### Como usar

1. Clone este repositório:
   ```bash
   git clone https://github.com/NillasIT/API-Restful-study.git
   ```
2. Instale as dependências do Laravel:
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
3. Configure o arquivo `.env` com suas credenciais de banco de dados.
4. Execute as migrações:
   ```bash
   php artisan migrate
   ```
5. Inicie o servidor:
   ```bash
   php artisan serve
   ```
6. Utilize ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/) para interagir com a API.

### Requisitos

- [PHP](https://www.php.net/) >= 8.1
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) >= 10.x
- Banco de dados relacional (MySQL, PostgreSQL, etc.)
- Ferramenta de testes de API, como Postman ou Insomnia

### Contribuição

Sinta-se à vontade para abrir issues ou pull requests com sugestões, correções ou novos exemplos!

---

<a name="en"></a>
## 🇺🇸 Description

This repository contains studies, examples, and notes about RESTful API development using the Laravel framework. The goal is to provide supporting material and learning resources, gathering best practices, design patterns, code samples, and tips to efficiently implement and consume RESTful APIs.

### Features

- HTTP request examples (GET, POST, PUT, DELETE) with Laravel
- Authentication and authorization demos (Laravel Sanctum/Passport)
- Endpoint documentation with Laravel
- API testing with PHPUnit and external tools
- Notes on status codes, versioning, and security

### How to use

1. Clone this repository:
   ```bash
   git clone https://github.com/NillasIT/API-Restful-study.git
   ```
2. Install Laravel dependencies:
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
3. Configure the `.env` file with your database credentials.
4. Run the migrations:
   ```bash
   php artisan migrate
   ```
5. Start the server:
   ```bash
   php artisan serve
   ```
6. Use tools like [Postman](https://www.postman.com/) or [Insomnia](https://insomnia.rest/) to interact with the API.

### Requirements

- [PHP](https://www.php.net/) >= 8.1
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) >= 10.x
- Relational database (MySQL, PostgreSQL, etc.)
- API testing tool, such as Postman or Insomnia

### Contribution

Feel free to open issues or pull requests with suggestions, fixes, or new examples!

---

[🔝 Voltar ao topo / Back to top](#api-restful-study)
