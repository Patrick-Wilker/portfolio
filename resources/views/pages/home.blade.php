<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>

    @include('layouts.head')
    
    <title>Patrick</title>
</head>
<body>
    

    <div class="apresentation">

        @include('layouts.header')

        <div class="about" id="sobre">
            <div class="content">
                <picture >
                    <img  src="{{asset('storage/profile/profile-quadrado.jpeg')}}" alt="patrick">
                </picture>
                <div class="profile">

                    <h2>
                        <small>Olá, meu nome é</small>
                        Patrick Wilker Vieira Mota
                    </h2>
                    <p>
                        Sou um jovem programador Full Stack querendo compartilhar conhecimento e sempre buscando
                        melhorar as minhas habilidades.
                    </p>

                    <ul class="social-list">
                        <li class="social-item github" >
                            <a target="_blank" href="https://github.com/Patrick-Wilker">
                                <img class="github-icon" src="{{asset('storage/icons/github.png')}}" alt="github-icon">
                                <p>/Patrick-Wilker</p>
                            </a>
                        </li>
                        <li class="social-item linkedin" >
                            <a target="_blank" href="https://www.linkedin.com/in/patrickmota10/">
                                <img class="linkedin-icon" src="{{asset('storage/icons/linkedin.png')}}" alt="linkedin-icon">
                                <p>/patrickmota10</p>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            

        </div>

    </div>

    <div class="main" id="portfolio">

        <div class="content content-skills">
            <div class="skills">
                <h2>Habilidades</h2>
                <ul class="skills-list">
                    <li class="skill-item php">PHP</li>
                    <li class="skill-item javascript">JavaScript</li>
                    <li class="skill-item html5">HTML5</li>
                    <li class="skill-item css3">CSS3</li>
                    <li class="skill-item mvc">MVC</li>
                    <li class="skill-item laravel">Laravel</li>
                    <li class="skill-item mysql">MySQL</li>
                </ul>
            </div>
        </div>

        <div class="content content-projects">
            <div class="projects">
                <h3>Meus projetos:</h3>
                <div class="portfolio" >
                    <a target="_blank" href="https://github.com/Patrick-Wilker/twitter-clone">
                        <img class="twitter" src="{{asset('storage/projects/twitter.png')}}" alt="twitter-logo">
                        <div class="about-project">
                            <h4>Twitter Clone</h4>
                            <p>Aplicação que visa reproduzir algumas funcionalidades do Twitter</p>
                        </div>
                        
                    </a>
                    <a target="_blank" href="https://github.com/Patrick-Wilker/Chamada-Eletronica">
                        <img class="chamada-eletronica" src="{{asset('storage/projects/chamada-eletronica.png')}}" alt="chamada-eletronica-logo">
                        <div class="about-project">
                            <h4>Chamada Eletrônica</h4>
                            <p>Sistema de gerenciamento de eventos acadêmicos</p>
                        </div>
                        
                    </a>
                    <a target="_blank" href="https://github.com/Patrick-Wilker/be-the-hero">
                        <img class="be-the-hero" src="{{asset('storage/projects/be-the-hero.png')}}" alt="be-the-hero-logo">
                        <div class="about-project">
                            <h4>Be the Hero</h4>
                            <p>Projeto que tem como intuito conectar ONG's à pessoas que querem ajudar</p>
                        </div>
                        
                    </a>
                    <div class="others">
                        <a target="_blank" href="https://github.com/Patrick-Wilker?tab=repositories"><p>Outros projetos</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="contato">
            <div class="content form">
                <h2>Contato</h2>
                <form id="contact-form" method="post" action="{{route('send')}}">
                    @csrf
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="Nome" required="" >
                        <input type="email" name="email" id="email" placeholder="Email" required="">
                    </div>
                    
                    <div class="field">
                        <textarea required="" placeholder="Me fala um pouco sobre o projeto!" name="message" rows="8" cols="30"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" onclick="enviar()" id="submit-button">
                                Enviar
                        </button>
                    </div>                
                    
                </form>
                
            </div>
        </div>
        
    </div>

    @include('layouts.footer')

</body>
</html>
<script>

    let nome = document.getElementById('name').value
    let email = document.getElementById('email').value
    let mensagem = document.getElementById('message').value

    function enviar(){
        setTimeout(() => {
            //alert('Seu e-mail está sendo enviado, não se preocupe!')
        }, 2000);
        
    }
</script>