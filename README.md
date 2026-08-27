# 🚨 SIPA — Sistema de Inteligência em Prescrições Adversas

API REST desenvolvida em **Laravel**, voltada ao apoio à segurança na prescrição e dispensação de medicamentos.

O SIPA tem como proposta identificar possíveis riscos relacionados a **alergias pré-existentes**, realizando o cruzamento entre informações de pacientes, alergias e medicamentos para apoiar a tomada de decisão do profissional responsável.

O projeto foi desenvolvido com foco não apenas na implementação da API, mas também na **modelagem de dados, definição de regras de negócio, organização dos requisitos e estruturação do sistema**.

---

## 🎯 Objetivo

Reduzir riscos relacionados à prescrição de medicamentos incompatíveis com alergias registradas, utilizando uma solução que organize as informações e auxilie o profissional durante o processo de atendimento.

---

## 💡 Problema

Erros relacionados à falta de verificação de alergias podem representar riscos evitáveis ao paciente.

O SIPA busca atuar nesse ponto por meio do cruzamento das informações cadastradas no sistema, permitindo identificar situações que necessitam de atenção antes da continuidade do atendimento.

---

## ⚙️ Como funciona

O fluxo principal do sistema é baseado no relacionamento entre **Paciente, Alergia, Medicamento e Profissional**.

```text
Paciente
   ↓
Alergias registradas
   ↓
Medicamento
   ↓
Análise das informações
   ↓
Regras de negócio
   ↓
Resultado da verificação
```

A API recebe as requisições, processa as informações através das camadas da aplicação e consulta o banco de dados para realizar as operações necessárias.

---

## 📌 Principais funcionalidades

* Cadastro, consulta, atualização e exclusão de registros;
* Gerenciamento de pacientes;
* Gerenciamento de profissionais;
* Cadastro e consulta de medicamentos;
* Cadastro e consulta de alergias;
* Classificação da intensidade das alergias;
* Consulta de informações específicas através da API;
* Validação de dados;
* Aplicação de regras de negócio;
* Integração entre API e banco de dados relacional.

---

## 📐 Regras de negócio

Entre as regras definidas para o sistema estão:

| Código | Regra                                                                                            |
| ------ | ------------------------------------------------------------------------------------------------ |
| RN01   | Dados obrigatórios devem ser informados para realização do cadastro.                             |
| RN02   | Alergias devem possuir uma classificação de intensidade.                                         |
| RN03   | A intensidade da alergia é classificada como leve, moderada ou grave.                            |
| RN04   | Os registros devem respeitar os relacionamentos definidos no banco de dados.                     |
| RN05   | As operações realizadas pela API devem seguir as regras de validação estabelecidas pelo sistema. |

---

## 🗃️ Modelagem de dados

O banco de dados foi estruturado para representar as principais entidades do sistema:

* **Paciente**
* **Profissional**
* **Medicamento**
* **Alergia**
* **Verificação**

Os relacionamentos entre essas entidades são representados por **chaves primárias e estrangeiras**, buscando manter a organização e a integridade dos dados.

A modelagem e as consultas SQL foram exploradas utilizando **MySQL e DBeaver**.

---

## 🏗️ Arquitetura

A aplicação utiliza uma organização em camadas:

```text
Requisição HTTP
      ↓
    Route
      ↓
  Controller
      ↓
    Service
      ↓
     Model
      ↓
    MySQL
```

### Controller

Responsável por receber as requisições e direcionar as operações.

### Service

Responsável pela aplicação das regras de negócio e pela organização da lógica da aplicação.

### Model

Responsável pela representação das entidades e comunicação com o banco de dados através do Eloquent ORM.

### Request

Responsável pela validação dos dados recebidos nas requisições.

### Migration

Responsável pela criação e evolução da estrutura do banco de dados.

---

## 🔌 API

A API utiliza os principais métodos HTTP para gerenciamento dos recursos:

```text
GET       → Consulta
POST      → Cadastro
PUT/PATCH → Atualização
DELETE    → Exclusão
```

Os endpoints foram desenvolvidos e testados utilizando **Postman**.

---

## 🛠️ Tecnologias

* **PHP**
* **Laravel**
* **MySQL**
* **SQL**
* **Eloquent ORM**
* **Postman**
* **DBeaver**
* **Git/GitHub**

---

## 🚀 Como executar

Clone o repositório e instale as dependências:

```bash
git clone URL_DO_REPOSITORIO
cd projeto-sipa
composer install
```

Configure o arquivo `.env` com as informações do banco de dados e execute:

```bash
php artisan migrate
php artisan serve
```

A aplicação ficará disponível, por padrão, em:

```text
http://127.0.0.1:8000
```

---

## 🔮 Próximos passos

Entre as possibilidades de evolução do projeto estão:

* Implementação de autenticação e controle de acesso;
* Aprimoramento das regras de análise entre medicamentos e alergias;
* Utilização de códigos ATC para classificação e comparação de medicamentos;
* Implementação de testes automatizados;
* Documentação da API utilizando Swagger/OpenAPI;
* Implementação de auditoria das decisões realizadas no sistema;
* Integração com bases externas de medicamentos.

---

## 👥 Equipe

* **Camila Conceição**
* **Marcos Vinicius**
* **Giovana Gomes**
* **Mayane Lins**

---

## 📚 Sobre o projeto

Projeto acadêmico desenvolvido durante a formação em **Análise e Desenvolvimento de Sistemas**, com o objetivo de aplicar conhecimentos de desenvolvimento de software, banco de dados, APIs REST e modelagem de sistemas.

O projeto também representa uma oportunidade de aprofundamento em **Análise de Sistemas, Análise de Requisitos e Gestão de TI**, explorando não apenas a implementação técnica, mas também a organização de requisitos, regras de negócio, dados e arquitetura da solução.
