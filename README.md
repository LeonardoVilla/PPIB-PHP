# PPIB-PHP
A Laravel-based web application built as part of a technical assessment. Demonstrates proficiency in backend development, routing, database management, and MVC architecture.

# Avaliação - API Rest com Laravel

## Descrição

Este repositório contém a solução para uma avaliação de processo seletivo, onde foi desenvolvida uma **API Rest** utilizando o framework **Laravel**. A API foi projetada para gerenciar informações sobre servidores efetivos e temporários, unidades de lotação e endereços funcionais, conforme os requisitos fornecidos.

### Pré-requisitos:

1. **Leitura do Documento**  
   O projeto foi desenvolvido de acordo com as orientações fornecidas neste documento. Todas as instruções para execução e testes estão descritas abaixo.

2. **Tecnologias e Ambientes**  
   - **Linguagem de Programação**: O projeto foi desenvolvido em **PHP** utilizando o framework **Laravel**.
   - Para garantir a portabilidade e a consistência do ambiente, o projeto está configurado para rodar em **containers Docker**, facilitando a execução em qualquer máquina.

3. **Serviços em Containers**:
   - **Min.io**: Um container com **Min.io** foi configurado para fornecer um serviço de armazenamento de objetos S3. A API utiliza o Min.io para o upload e recuperação de fotografias.
   - **PostgreSQL**: O projeto utiliza um container com **PostgreSQL** para armazenar os dados dos servidores e unidades, garantindo persistência e escalabilidade.

4. **Execução dos Containers**  
   O ambiente completo pode ser iniciado utilizando o **Docker Compose**. O arquivo `docker-compose.yml` está configurado para levantar os seguintes containers:
   - **Min.io**: Responsável pelo armazenamento de objetos (imagens).
   - **PostgreSQL**: Utilizado para o banco de dados da aplicação.
### Requisitos Gerais:

- **Autenticação e Autorização**:
  - A API implementa um mecanismo de autenticação e autorização.
  - O acesso aos endpoints é restrito a domínios específicos, não permitindo acesso de outros domínios.
  - O mecanismo de autenticação expira a cada **5 minutos**, oferecendo a possibilidade de renovação do token.

- **Endpoints**:
  - Implementação dos verbos **POST**, **PUT** e **GET** para manipulação de dados.
  - Implementação de **paginação** em todas as consultas de dados.

- **Armazenamento de Dados**:
  - Os dados produzidos pela API são armazenados no **PostgreSQL**.

- **Orquestração com Docker Compose**:
  - A solução foi orquestrada com o **Docker Compose**, incluindo todos os containers necessários (**Min.io**, **PostgreSQL**, e outros).

