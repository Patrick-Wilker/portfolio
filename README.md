<h1 align="center"><strong>Portfólio</strong></h1>

| Computer | Mobile |
|---------- | --------|
|![desktop-portfolio](https://user-images.githubusercontent.com/38691922/88213008-8929c780-cc2e-11ea-9aa7-4452b0074a77.png) | ![celular-portfolio](https://user-images.githubusercontent.com/38691922/88213135-b5454880-cc2e-11ea-8652-62c490d9d2db.png) |


<h2> <img src="https://user-images.githubusercontent.com/38691922/77790815-3d7e5d00-7044-11ea-8ffe-e8d448946d4a.png" height="30" width="30">Projeto</h2>

Trata-se do meu site, meu portfólio, onde poderão entrar em contato comigo. Para rodar o projeto execute o
 seguinte comando:   ``` php artisan serve ```
 
<br> Clique aqui para acessar ao meu [site](http://patrickmota.herokuapp.com/)

<h2><img src="https://user-images.githubusercontent.com/38691922/77791007-98b04f80-7044-11ea-9602-4c78098960a0.png" height="40" width="40"> Tecnologias</h2>

* PHP
* Composer
* Laravel

<h2> <img src="https://user-images.githubusercontent.com/38691922/77794952-838aef00-704b-11ea-84ff-cb3c7a61a815.png" height="30" width="30">  Configuração do formulário de contato</h2>

Para que o formulario de contato funcione é necessário modificar o arquivo .env nos seguintes pontos:

```
    MAIL_MAILER=smtp (se for usar o gmail)
    MAIL_HOST=smtp.gmail.com (caso seja o gmail)
    MAIL_PORT=587 (se for usar o gmail a porta é a 587)
    MAIL_USERNAME=coloque seu e-mail 
    MAIL_PASSWORD=sua senha
    MAIL_ENCRYPTION=tls (se for usar o gmail)

```

E ainda será necessário modificar a rota

```
   Route::post('/',  function(){
    Mail::raw($_POST['message']
    , function($m){
        $m->from('SEU E-MAIL CONFIGURADO NO ARQUIVO .ENV', 'SEU NOME');
        $m->to('PARA ONDE O E-MAIL VAI, PODE SER O E-MAIL ANTERIOR');
        $m->subject('NOME DO ASSUNTO DO E-MAIL');
        $m->replyTo($_POST['email'], $_POST['name']);
        
    });
    return back()->withInput();
    
    })->name('send');

```
Se for utilizar o gmail, vai ter que permitir <strong>App menos seguros</strong> ter acesso a sua conta, basta clicar [aqui](https://myaccount.google.com/lesssecureapps) e ativar.
(Se você ainda tiver problemas com permissão, permita acesso a sua conta [aqui](https://accounts.google.com/b/0/DisplayUnlockCaptcha))

De qualquer forma, é melhor usar um e-mail comercial.

<h2><img src="https://user-images.githubusercontent.com/38691922/77791613-bcc06080-7045-11ea-864b-78684851af42.png" 
         height="30" width="30"> Como contribuir</h2>

* Faça um fork desse repositório;
* Cria uma branch com a sua feature: git checkout -b minha-feature;
* Faça commit das suas alterações: git commit -m 'feat: Minha nova feature';
* Faça push para a sua branch: git push origin minha-feature.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.

