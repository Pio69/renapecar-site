# Renapecar 🚗

Site desenvolvido em PHP para apresentação e administração de veículos. O projeto contém páginas de listagem e detalhes de veículos, FAQ, login e formulários administrativos.

## Funcionalidades presentes no código

- Exibição de veículos em destaque, listagem e detalhes.
- Páginas de FAQ e informações do site.
- Formulários e operações para veículos, marcas, descrições e usuários.
- Área de login e páginas administrativas.

## Tecnologias

- PHP com extensão MySQLi
- MySQL, HTML e CSS

## Executar em desenvolvimento

1. Instale PHP com a extensão MySQLi e um servidor MySQL compatível.
2. Clone ou baixe o repositório.
3. Prepare um banco de desenvolvimento com as tabelas e colunas esperadas pelas consultas PHP. **O repositório não inclui um arquivo SQL para criar o esquema**, portanto será necessário obtê-lo ou reconstruí-lo a partir do código.
4. Configure uma conexão local em `conectar.php`, sem publicar suas credenciais. Revise também as consultas que referenciam um nome de banco explicitamente para que correspondam ao ambiente criado.
5. Na pasta do projeto, inicie o servidor de desenvolvimento:

   ```bash
   php -S localhost:8000
   ```

6. Acesse `http://localhost:8000` no navegador.

## Estrutura

- `index.php`, `veiculos.php` e `veiculo.php` — página inicial e catálogo.
- `login.php`, `home.php` e `homeAdmin.php` — acesso e áreas de usuário.
- Arquivos `*_form.php`, `*_list.php`, `*_post.php` e `*_delete.php` — telas e operações de cadastro.
- `conectar.php` — conexão com o banco.
- `style.css`, `imgs/` e `font/` — aparência e recursos visuais.

O projeto contém credenciais de banco no código público e precisa de revisão de segurança antes de qualquer publicação. Se ainda estiverem ativas, revogue ou troque essas credenciais. Use apenas um banco isolado de desenvolvimento durante os testes.
