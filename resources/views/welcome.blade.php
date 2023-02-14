<x-guest-layout>

    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <p>Projectbureau</p>
            </li>
            <li>
                <div class="flex items-center">
                    Curio Software Developer
                </div>
            </li>
        </ol>
        <div class="fixed top-0 right-0 px-6 py-4 sm:block xs:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-blue-700 no-underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-blue-700 no-underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-blue-700 no-underline">Register</a>
                @endif
            @endauth
        </div>
    </nav>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Roboto:700');

            @import url('https://fonts.googleapis.com/css?family=Roboto:700');


            body {
                font-family:'Roboto';
                overflow: auto;
                background:#ebebeb;
            }


            .homebanner{
                z-index: 0;
            }

            .mask-homebanner{
                position: relative;
                background-color: #000;
                width: 1920px;
                height: 700px;
                z-index: 1;
                opacity: 0.8;
            }

            a{
                color:#fff;
                z-index: 3;
                text-decoration:none;
            }

            .fixed{
                z-index: 3;
            }

            .text-homepage{
                position: relative;
                color:#fff;
                text-align:center;
                bottom:280%;
                font-size:25px;
                z-index: 3;

            }

            .container {
                font-size: 2.26rem;
                text-transform: uppercase;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .animation {
                height:70px;
                overflow:hidden;
                margin-left: 15px;
                text-align: center;
            }

            .animation > div > div {
                /* padding: 0.25rem 0.75rem; */
                height:2.81rem;
                margin-bottom: 2.81rem;
                display:inline-block;
                height:50px;
                text-align: center;
            }

            .animation div:first-child {
                animation: text-animation 10s infinite;
                width: 150px;
            }

            .first div {
                background-color:#3498db;
                border-radius:10px;
            }
            .second div {
                background-color: #f39c12;
                border-radius:10px;
            }
            .third div {
                background-color:#e74c3c;
                border-radius:10px;
            }

                @keyframes text-animation {
                0% {margin-top: 0;}
                10% {margin-top: 0;}
                20% {margin-top: -5.62rem;}
                30% {margin-top: -5.62rem;}
                40% {margin-top: -11.24rem;}
                60% {margin-top: -11.24rem;}
                70% {margin-top: -5.62rem;}
                80% {margin-top: -5.62rem;}
                90% {margin-top: 0;}
                100% {margin-top: 0;}
                }
                /* ------------------------------------------------eind animatie------------------------------------------ */

            .grid-container {
                display: grid;
            }
            
            .box-stap{
                height: 500px;
                width: 100%;
                background-color: #d4d4d4;
                box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            }

            .card {
                box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
                transition: 0.3s;
                width: 50%;
                position: relative;
                left: 25%;
                bottom: 15%;
                padding: 20px;
                border-radius:5px;
            }

            p.card-txt{
                text-align: center;
            }

            p.card-desc{
                font-size:15px;
            }

            .container-2 {
                padding: 2px 16px;
                font-size:20px;
            }
            

                /* ------------------------------------------------------eind card-------------------------------------------------------------------- */

                .wrapper {
                    width: 100%;
                }

                h1 {
                    margin-bottom: 20px;
                }

                .container-3 {
                    background-color: #f8f8f8;
                    color: black;
                    border-radius: 8px;
                    box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
                    margin: 20px 0;
                }

                .question {
                    font-size: 1.2rem;
                    font-weight: 400;
                    padding: 20px 80px 20px 20px;
                    position: relative;
                    display: flex;
                    align-items: center;
                    cursor: pointer;
                    font-family:'Roboto';
                }

                .question::after {
                    content: "\002B";
                    font-size: 2.2rem;
                    position: absolute;
                    right: 20px;
                    transition: 0.2s;
                }

                    .question.active::after {
                    transform: rotate(45deg);
                }

                .answercont {
                    max-height: 0;
                    overflow: hidden;
                    transition: 0.3s;
                }

                .answer {
                    padding: 0 20px 20px;
                    line-height: 1.5rem;
                    font-family:'Roboto';
                    font-size:15px;
                }

                .question.active + .answercont {
                }

                @media screen and (max-width: 790px){
                html {
                        font-size: 14px;
                }
                .wrapper {
                    width: 80%;
                }
                }

                footer{
                    background:#c1c1c1;
                    height:200px;
                }

                .parallax {
                    /* The image used */
                    background-image: url("/img/bannerhome.jpg");

                    /* Set a specific height */
                    /* min-height: 500px; */
                    width:1536px;
                    height:780px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
/* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\begin media querries\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */


            @media screen and (max-width: 600px){

            body {
                font-family:'Roboto';
                overflow: auto;
                background:#ebebeb;
            }


            .homebanner{
                z-index: 0;
            }

            .mask-homebanner{
                position: relative;
                background-color: #000;
                width: 1920px;
                height: 700px;
                z-index: 1;
                opacity: 0.8;
            }

            a{
                color:#fff;
                z-index: 3;
                text-decoration:none;
            }

            .fixed{
                z-index: 3;
            }

            .text-homepage{
                position: relative;
                color:#fff;
                text-align:center;
                bottom:280%;
                font-size:25px;
                z-index: 3;

            }

            .container {
                font-size: 2.26rem;
                text-transform: uppercase;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            p.resp-txt-1{
                position: relative;
                left: 90px;
            }

            .animation {
                height:70px;
                overflow:hidden;
                margin-left: 15px;
                text-align: center;
                position: relative;
                top: 100px;
                left: -150px;
                width: 290px;
            }

            .animation > div > div {
                /* padding: 0.25rem 0.75rem; */
                height:2.81rem;
                margin-bottom: 2.81rem;
                display:inline-block;
                height:50px;
                text-align: center;
            }

            .animation div:first-child {
                animation: text-animation 8s infinite;
                width: 150px;
            }

            .first div {
                background-color:#20a7d8;
                border-radius:10px;
            }
            .second div {
                background-color:#CD921E;
                border-radius:10px;
            }
            .third div {
                background-color:#c10528;
                border-radius:10px;
            }

                @keyframes text-animation {
                0% {margin-top: 0;}
                10% {margin-top: 0;}
                20% {margin-top: -5.62rem;}
                30% {margin-top: -5.62rem;}
                40% {margin-top: -11.24rem;}
                60% {margin-top: -11.24rem;}
                70% {margin-top: -5.62rem;}
                80% {margin-top: -5.62rem;}
                90% {margin-top: 0;}
                100% {margin-top: 0;}
                }
                /* ------------------------------------------------eind animatie------------------------------------------ */

            .grid-container {
                display: grid;
            }
            
            .box-stap{
                height: 500px;
                width: 100%;
                background-color: #d4d4d4;
                box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            }

            .card {
                box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
                transition: 0.3s;
                width: 70%;
                position: relative;
                left: 15%;
                bottom: 15%;
                padding: 20px;
                border-radius:5px;
            }

            p.card-txt{
                text-align: center;
            }

            p.card-desc{
                font-size:15px;
            }

            .container-2 {
                padding: 2px 16px;
                font-size:20px;
            }
            

                /* ------------------------------------------------------eind card-------------------------------------------------------------------- */

                .wrapper {
                    width: 100%;
                }

                h1 {
                    margin-bottom: 20px;
                }

                .container-3 {
                    background-color: #f8f8f8;
                    color: black;
                    border-radius: 8px;
                    box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
                    margin: 20px 0;
                }

                .question {
                    font-size: 1.2rem;
                    font-weight: 400;
                    padding: 20px 80px 20px 20px;
                    position: relative;
                    display: flex;
                    align-items: center;
                    cursor: pointer;
                    font-family:'Roboto';
                }

                .question::after {
                    content: "\002B";
                    font-size: 2.2rem;
                    position: absolute;
                    right: 20px;
                    transition: 0.2s;
                }

                    .question.active::after {
                    transform: rotate(45deg);
                }

                .answercont {
                    max-height: 0;
                    overflow: hidden;
                    transition: 0.3s;
                }

                .answer {
                    padding: 0 20px 20px;
                    line-height: 1.5rem;
                    font-family:'Roboto';
                    font-size:15px;
                }

                .question.active + .answercont {
                }

                @media screen and (max-width: 790px){
                html {
                        font-size: 14px;
                }
                .wrapper {
                    width: 100%;
                }
                }

                footer{
                    background:#c1c1c1;
                    height:200px;
                }

                .parallax {
                    /* The image used */
                    background-image: url("/img/bannerhome.jpg");

                    /* Set a specific height */
                    /* min-height: 500px; */
                    width:1536px;
                    height:780px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
 
                }


        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-200 sm:items-center py-4 sm:pt-0"> -->


            @if (Route::has('login'))
                <div class="fixed bg-gray-900 top-0 right-0 px-6 sm:block xs:block text-slate-50 z-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-slate-50 z-3">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-slate-50 z-3">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-slate-50 z-3">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="parallax"></div>

            <!-- <div class="homebanner"><img src="/img/bannerhome.jpg" alt="Banner" width="1536px" height="780px"></div> -->

        <div class="grid-container">
            <div class="text-homepage">
              <h1>Projectbureau</h1>
              <main class="container">
            <p class="resp-txt-1">curio software developer</p>
            <section class="animation">
                <div class="first"><div>web</div></div>
                <div class="second"><div>native</div></div>
                <div class="third"><div>design</div></div>
            </section>
            </main>
        </div>

        <!-- <div>
            <div class="box-stap"></div>
        </div> -->

        <div class="card">
            <img src="/img/curio.png" alt="curio" style="width:100%">
            <div class="container-2">
                <h4><p class="card-txt">stappenplan</p></h4> 
                <p class="card-desc"></p>
                 <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                <div class="wrapper">
  
                    <div class="container-3">
                        <div class="question">
                        Registreren
                        </div>
                        <div class="answercont">
                        <div class="answer">
                        Je moet registreren met jouw vaste naam en jouw studenten email. Daarna kom je op het project omgeving.<br><br>
                        </div>
                        </div>
                    </div>
                    
                        <div class="container-3">
                        <div class="question">
                        groep maken
                        </div>
                        <div class="answercont">
                        <div class="answer">
                        Jouw groep leider maakt in de project omgeving bij dashboard de groep aan. Hij moet dan iedereen in de groep toevoegen. <br><br>
                        </div>
                        </div>
                    </div>
                    
                        <div class="container-3">
                        <div class="question">
                        project kiezen
                        </div>
                        <div class="answercont">
                        <div class="answer">
                        Je gaat dan met je team een project kiezen. dit moet eerst goed vooronderzoek gedaan worden, want je wilt niet iets doen wat je niet kan doen. Ja bespreekt dit ook met je leraar of het kan.<br><br>
                        </div>
                        </div>
                    </div>
                    
                    <div class="container-3">
                        <div class="question">
                        contact opnemen 
                        </div>
                        <div class="answercont">
                        <div class="answer">
                        Je gaat dan contact opnemen met de opdrachtgever. Hier stel jezelf voor als kandidaat voor de gekozen project.  Dit kan dan via email of telefoon gedaan worden.<a href="">here</a>
                        </div>
                        </div>
                    </div>
                    
                    <!-- <div class="container-3">
                        <div class="question">
                        Wat zijn de betaalopties?
                        </div>
                        <div class="answercont">
                        <div class="answer">
                        Wij bieden verschillende betaalopties aan, waaronder creditcard, PayPal en bankoverschrijving. U kunt uw voorkeur selecteren tijdens het afrekenproces.<br><br>
                        </div>
                        </div>
                    </div> -->
                    
                </div>

            <script>

            let question = document.querySelectorAll(".question");

            question.forEach(question => {
            question.addEventListener("click", event => {
                const active = document.querySelector(".question.active");
                if(active && active !== question ) {
                active.classList.toggle("active");
                active.nextElementSibling.style.maxHeight = 0;
                }
                question.classList.toggle("active");
                const answer = question.nextElementSibling;
                if(question.classList.contains("active")){
                answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                answer.style.maxHeight = 0;
                }
            })
            })


            </script>

            </div>
            <a href=""><button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 h-12">Ga naar Projecten</button></a>
        </div>

    

        <footer>
         
        </footer>

    </body>
</html>
