# Projeto de autenticação para integração com API v3 OAuth2 do Bling

Este projeto realiza a integração com a API v3 do Bling para autenticação e obtenção do `access_token` e `refresh_token`.

## Configuração

### 1. Definir link de redirecionamento

Na página de cadastro de aplicativos do Bling, é necessário configurar o link de redirecionamento para o arquivo `authorization.php` do projeto.

Exemplo de URL para redirecionamento: http://localhost/blingAuthorizationFlow/authorization.php

No arquivo `authorization.php` substitua `CLIENT_ID` pelo seu Client Id e `CLIENT_SECRET` pelo seu Client Secret.


### 2. Autenticação

Quando o usuário autorizar o acesso, a página `authorization.php` será responsável por processar a resposta da API e retornar os tokens necessários para consumir a API:

- **access_token**
- **refresh_token**

Certifique-se de que o arquivo `authorization.php` esteja corretamente configurado para receber e processar esses dados.

## Requisitos

- PHP 7.4 ou superior
- Servidor web (ex: Apache)
- Conta e API Key do Bling

## Como usar

1. Clone este repositório.
2. Configure a URL de redirecionamento no Bling conforme instruções acima.
3. Execute o projeto em um servidor local para obter os tokens.

git clone https://github.com/seu-usuario/projetoBling.git


## Suporte

Em caso de dúvidas, entre em contato pelo e-mail: `elionars@gmail.com`.

Aceito doações. 😄

Chave pix: 8def8cca-20e9-43cb-9161-0576852214b3

Obrigado por contribuir.
