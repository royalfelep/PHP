# Aulas de PHP
## Configurando **Apache VirtualHost** com **WampServer**
**Feito por [Felipe C.](https://github.com/royalfelep)**
<ol>
<li> Instale o WampServer clicando <a href="https://www.wampserver.com/en/">aqui.</a></li>
<li> Navegue até o arquivo <code>'httpd.conf'</code>.
<blockquote>C:\wamp64\bin\apache\apache2.4.46\conf\httpd.conf</blockquote>
</li>
<li>Abra o arquivo e procure por <code>'httpd-vhosts'</code>. Caso a linha esteja comentada, retire o caracter <code>'#'</code> e salve o arquivo. </li>
<li>Em seguida, no mesmo diretório, abra a pasta <code>extra</code> e, em seguida, o arquivo <code> 'httpd-vhosts.conf'</code>, usando privilégios de administrador.</li>
<li id="topico5">No arquivo, você deverá encontrar uma estrutura assim:
<pre>
    <code>
&ltVirtualHost *:80&gt
  ServerName localhost
  ServerAlias localhost
  DocumentRoot "${INSTALL_DIR}/www"
  &ltDirectory "${INSTALL_DIR}/www/"&gt
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require local
  &lt/Directory&gt
&lt/VirtualHost&gt
    </code>
</pre>
Faça uma cópia da estrutura e troque os seguintes termos grifados no exemplo abaixo, conforme sua necessidade:
<pre>
<code>
&ltVirtualHost *:80&gt
  ServerName <mark>www.example.com.br</mark>
  ServerAlias <mark>example.com.br</mark>
  DocumentRoot "<mark>D:\repositorios\php\arquivos</mark>"
  &ltDirectory "<mark>D:\repositorios\php\arquivos</mark>"&gt
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require local
  &lt/Directory&gt
&lt/VirtualHost&gt
</code>
</pre>
</li>
<li> Inicie o WampServer. </li> 
<li> Abra seu navegador e digite <code>'localhost'</code> na barra de pesquisa para abrir homepage do  Wampserver.</li>
<li>No final da página, na sessão "Your VirtualHost", você deverá encontrar o link do seu servidor, que foi definido no <a href="#topico5">tópico 5</a>. Também é possível acessar seu servidor digitando seu link diretamente na barra de pesquisa.</li>
<li>Seja feliz!</li>
</ol>
<hr>

## [Aula 1](https://github.com/royalfelep/php/blob/main/aula01_print.php)

