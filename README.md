# Projeto Slim Framework

**Nome completo:** João da Silva  
**Data:** 06/05/2025  
**Unidade Curricular:** Programação Web Back-End

---

## O que é uma API REST?

Uma API REST (Representational State Transfer) é uma interface que permite a comunicação entre sistemas por meio do protocolo HTTP, utilizando métodos como GET, POST, PUT e DELETE. Ela segue princípios como a ausência de estado (stateless), uso de URIs como identificadores de recursos, e resposta em formatos como JSON ou XML. É amplamente utilizada no desenvolvimento de aplicações web e móveis por ser leve, escalável e fácil de integrar.

---

## Códigos de Erros HTTP

Os códigos de status HTTP indicam o resultado de uma requisição. Alguns exemplos comuns:

- **200 OK** – Requisição bem-sucedida.
- **201 Created** – Recurso criado com sucesso.
- **400 Bad Request** – Erro na requisição (ex: dados inválidos).
- **401 Unauthorized** – Requisição sem autenticação válida.
- **403 Forbidden** – Acesso negado mesmo com autenticação.
- **404 Not Found** – Recurso não encontrado.
- **500 Internal Server Error** – Erro inesperado no servidor.

---

## Diferença entre JSON, Texto Plano e XML

- **JSON (JavaScript Object Notation):** Formato leve de troca de dados, muito utilizado em APIs. Ex:  
  ```json
  { "nome": "maria", "idade": 250 }