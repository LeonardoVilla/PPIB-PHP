# Projeto Prático - Backend com Laravel, Docker, PostgreSQL e MinIO

## Dados do Candidato

- **Nome:** Leonardo da Silva Villa
- **Perfil:** PHP

## Visão Geral

Este projeto prático implementa uma API RESTful utilizando Laravel com foco em operações de CRUD, upload de imagens para o MinIO e autenticação segura. A aplicação é executada inteiramente em containers Docker, com PostgreSQL como banco de dados e MinIO como servidor de armazenamento de objetos S3.

## Tecnologias Utilizadas

- PHP 8.x
- Laravel 11
- PostgreSQL (latest)
- MinIO (latest)
- Docker & Docker Compose
- Laravel Sanctum (autenticação)

## Funcionalidades

- CRUD completo para:
  - Servidor Efetivo
  - Servidor Temporário
  - Unidade
  - Lotação

- Upload e armazenamento de fotografias no MinIO
- Recuperação das fotos com links temporários (expiram em 5 minutos)
- Consulta de servidores efetivos lotados por unidade
- Consulta do endereço funcional com base em parte do nome do servidor efetivo
- Sistema de autenticação com expiração de token em 5 minutos e possibilidade de renovação
- CORS restrito ao domínio da aplicação
- Paginação em todas as consultas GET

## Estrutura do Projeto

```
project-root/
├── app/
├── config/
├── database/
│   └── migrations/
├── docker/
│   ├── postgres/
│   └── minio/
├── routes/
│   └── api.php
├── .env
├── docker-compose.yml
├── Dockerfile
├── README.md
```

## Como Executar

### 1. Clone o repositório
```bash
git clone https://github.com/LeonardoVilla/PPIB-PHP
cd nome-do-repositorio
```

### 2. Copie o arquivo de ambiente
```bash
cp .env.example .env
```

### 3. Suba os containers com Docker Compose
```bash
docker-compose up -d --build
```

### 4. Instale as dependências do Laravel
```bash
docker exec -it app composer install
```

### 5. Gere a chave da aplicação
```bash
docker exec -it app php artisan key:generate
```

### 6. Rode as migrações
```bash
docker exec -it app php artisan migrate
```

### 7. Acesse a aplicação
```
http://localhost:8000
```

## Testando a API

- Use ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/) para testar os endpoints.
- Autentique-se primeiro para obter o token (ver rota `/api/login`).
- Use o token em todas as requisições subsequentes com o header:
  ```
  Authorization: Bearer SEU_TOKEN
  ```

## Observações

- Todas as rotas estão protegidas via autenticação Sanctum.
- O tempo de vida do token é de 5 minutos, podendo ser renovado via rota dedicada.
- Os dados enviados via upload de fotos são armazenados no MinIO, e os links são temporários (expiram em 5 minutos).
- CORS configurado para aceitar somente o domínio local da aplicação.

## Scripts e Dependências

- Laravel Sanctum
- Intervention Image (para manipulação de fotos se necessário)
- Flysystem S3 + configuração customizada para MinIO

## Considerações Finais

- Todos os arquivos e scripts necessários estão incluídos no repositório.
- A documentação acima permite executar e testar a aplicação localmente.
- Nenhum commit adicional será enviado após o prazo de entrega.

---

> Leonardo da Silva Villa - Projeto prático de backend com Laravel, PostgreSQL e MinIO
