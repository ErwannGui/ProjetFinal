<!DOCTYPE HTML>
<html>
	<head>
		<title>Accueil</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-99582752-1', 'auto');
            ga('send', 'pageview');

        </script>
	</head>
	<body>
        
		<?php $page = 0;
        include "headerFront.php"; ?>
		
        <div id="container">
            <div id="indexBackground">

                <div id="backgroundImage">
                </div>
                <div id="indexBackgroundTitle">
                    <h1>CHEZ FIFI</h1>
                    <h2>Food truck réunnionnais à Nantes</h2>
                </div>
                <div id="indexBackgroundArrow" id="scroll_ancre">
                    <a class="js-scroll" href="#scroll_ancre"><svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "/><polygon points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502"/></g></svg></a>
                </div>
            </div>
            <div class="index-container">
                <div class="text-container" id="scroll_ancre">
                    <p>Bienvenue sur le site web du food truck "Chez Fifi". Situés dans la région nantaise, nous vous proposons de la nourriture réunionnaise de qualité avec des produits frais cultivés en Loire-Atlantique. Des produits sont aussi importés de la réunion comme "La dodo" qui est la bière locale de l'île de la Réunion.</p>
                </div>
                <div class="image-container">
                    <div class="single-item">
                        <div><img class="carousel1 carousel" src="images/index/carrousel01.png" alt="" title=""/></div>
                        <div><img class="carousel2 carousel" src="images/index/carrousel02.png" alt="" title=""/></div>
                        <div><img class="carousel3 carousel" src="images/index/carrousel03.png" alt="" title=""/></div>
                    </div>
                    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
                    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
                    <script src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
                    <script src="js/caroussel.js"></script>
                </div>
                <div class="formules">
                    <h2>NOS SPECIALITES</h2>
                    <div class="bouchons">
                       <img src="images/index/pic_BouchonGratine.png">
                       <div class="description">
                           <h3> BOUCHON GRATINE</h3>
                           <p>Un bouchon est une petite bouchée de viande de porc ou de poulet entourée de pâte cuite à la vapeur que l'on sert généralement en tant qu'apéritif chaud sur l'île de La Réunion, département d'outre-mer français dans l'océan Indien.</p>
                           <a href="menu.php"> En savoir plus</a>
                       </div>
                    </div>
                    <div class="rougail">
                        <div class="description">
                            <h3> ROUGAIL SAUCISSE</h3>
                            <p>Le Rougail saucisse est un plat traditionnelle réunionnais, à base de saucisses créoles souvent fumées artisanales ou encore fraîches. Celles-ci sont ensuite coupées en morceaux, accompagnées de riz et de rougail (tomates coupées en petits dés, gingembre pilé, oignons émincés et piments).</p>
                            <a href="menu.php"> En savoir plus </a>
                        </div>
                        <img src="images/index/pic_rougail.png">

                    </div>
                </div>
                <div class="events">
                    <div class="title">
                        <h2>EVENEMENTS SPECIAUX</h2>
                        <h3>INTERVENTIONS</h3>
                    </div>
                    <div class="SvgIntervention">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 90 87.5" enable-background="new 0 0 90 70" xml:space="preserve"><g><path d="M68.955,46.643c-4.969,0-8.999,4.03-8.999,8.999c0,4.97,4.03,9,8.999,9c4.97,0,9-4.03,9-9   C77.955,50.673,73.925,46.643,68.955,46.643z M68.955,59.79c-2.289,0-4.148-1.856-4.148-4.148s1.856-4.148,4.148-4.148   c2.293,0,4.149,1.856,4.149,4.148S71.246,59.79,68.955,59.79z"/><path d="M23.013,46.643c-4.97,0-8.999,4.03-8.999,8.999c0,4.97,4.029,9,8.999,9c4.969,0,8.999-4.03,8.999-9   C32.012,50.673,27.981,46.643,23.013,46.643z M23.013,59.79c-2.291,0-4.149-1.856-4.149-4.148s1.857-4.148,4.149-4.148   s4.148,1.856,4.148,4.148S25.303,59.79,23.013,59.79z"/><circle cx="58.716" cy="26.387" r="0.397"/><path d="M61.359,22.706l-3.231,3.231c-0.287,0.287-0.288,0.751-0.001,1.039s0.752,0.287,1.039,0l3.231-3.231   c0.286-0.287,0.287-0.752,0-1.039C62.11,22.418,61.645,22.419,61.359,22.706z M59.09,26.761c-0.207,0.207-0.541,0.207-0.748,0   s-0.207-0.541,0-0.748s0.541-0.207,0.748,0C59.295,26.22,59.295,26.554,59.09,26.761z M61.484,23.863   c-0.068,0.068-0.178,0.068-0.245,0c-0.067-0.067-0.066-0.177,0-0.244c0.067-0.067,0.177-0.067,0.243,0   C61.552,23.686,61.552,23.795,61.484,23.863z M61.909,23.438c-0.067,0.067-0.177,0.067-0.243-0.001   c-0.068-0.067-0.068-0.177,0-0.244c0.066-0.067,0.176-0.067,0.244,0C61.977,23.26,61.977,23.37,61.909,23.438z"/><path d="M71.404,17.07l2.654-2.654c0.194-0.195,0.201-0.503,0.015-0.689l-2.697-2.699   c-0.187-0.186-0.495-0.179-0.689,0.015l-2.655,2.654c-0.971,0.972-1.003,2.514-0.072,3.445   C68.892,18.074,70.434,18.042,71.404,17.07z M73.742,13.895c0.063,0.063,0.063,0.165,0,0.228l-2.721,2.721   c-0.062,0.062-0.166,0.062-0.229,0c-0.062-0.063-0.062-0.165,0-0.228l2.723-2.721C73.577,13.833,73.679,13.832,73.742,13.895z    M73.104,13.258c0.063,0.063,0.063,0.165,0,0.227l-2.722,2.721c-0.062,0.063-0.164,0.063-0.227,0s-0.062-0.165,0-0.228l2.722-2.72   C72.939,13.194,73.043,13.194,73.104,13.258z M72.43,12.582c0.062,0.062,0.062,0.165,0,0.228l-2.721,2.722   c-0.062,0.062-0.166,0.062-0.229,0c-0.062-0.063-0.062-0.166,0-0.229l2.722-2.721C72.265,12.519,72.367,12.519,72.43,12.582z    M71.602,11.982c0.064-0.063,0.166-0.063,0.229,0s0.062,0.165,0,0.228l-2.721,2.721c-0.064,0.063-0.166,0.063-0.229,0   c-0.062-0.062-0.062-0.165,0-0.228L71.602,11.982z M68.244,14.066l2.721-2.722c0.062-0.062,0.164-0.062,0.229,0   c0.062,0.063,0.062,0.166,0,0.229l-2.723,2.721c-0.062,0.063-0.164,0.063-0.227,0C68.182,14.23,68.182,14.129,68.244,14.066z"/><path d="M71.784,26.975c0.287,0.288,0.752,0.288,1.039,0c0.286-0.286,0.286-0.751,0-1.038l-3.232-3.232   c-0.287-0.287-0.751-0.287-1.038,0c-0.287,0.287-0.287,0.752,0,1.039L71.784,26.975z M71.86,26.014   c0.207-0.207,0.541-0.207,0.746,0c0.208,0.207,0.208,0.541,0,0.748c-0.205,0.207-0.539,0.207-0.746,0   C71.654,26.555,71.654,26.22,71.86,26.014z M69.466,23.619c0.067-0.068,0.177-0.068,0.243,0c0.067,0.067,0.068,0.176,0,0.244   c-0.066,0.068-0.176,0.068-0.244,0C69.398,23.795,69.398,23.686,69.466,23.619z M69.04,23.193c0.067-0.067,0.177-0.067,0.245,0   c0.067,0.067,0.067,0.177,0,0.245c-0.068,0.067-0.178,0.067-0.244,0C68.973,23.371,68.973,23.261,69.04,23.193z"/><path d="M59.545,17.07c0.971,0.972,2.515,1.004,3.445,0.073c0.931-0.931,0.898-2.474-0.072-3.445l-2.655-2.655   c-0.194-0.194-0.503-0.201-0.688-0.014l-2.699,2.698c-0.185,0.186-0.18,0.494,0.016,0.688L59.545,17.07z M59.742,11.361   c0.062-0.063,0.164-0.063,0.227,0l2.723,2.721c0.062,0.063,0.062,0.165,0,0.228c-0.064,0.063-0.166,0.063-0.229,0l-2.721-2.722   C59.679,11.525,59.679,11.424,59.742,11.361z M59.104,11.999c0.062-0.063,0.165-0.063,0.228,0l2.721,2.721   c0.062,0.063,0.062,0.165,0,0.228c-0.062,0.062-0.164,0.062-0.227,0l-2.722-2.721C59.042,12.163,59.042,12.061,59.104,11.999z    M58.43,12.673c0.062-0.063,0.164-0.063,0.227,0l2.723,2.721c0.062,0.063,0.062,0.165,0,0.228c-0.064,0.063-0.166,0.063-0.229,0   l-2.721-2.721C58.366,12.838,58.366,12.736,58.43,12.673z M57.829,13.273c0.063-0.063,0.165-0.063,0.228,0l2.721,2.721   c0.064,0.063,0.064,0.165,0,0.228c-0.062,0.062-0.164,0.062-0.227,0l-2.722-2.721C57.767,13.438,57.767,13.336,57.829,13.273z    M57.192,13.91c0.062-0.062,0.164-0.062,0.228,0l2.721,2.721c0.064,0.063,0.062,0.165,0,0.228c-0.062,0.062-0.164,0.063-0.228,0   l-2.721-2.721C57.129,14.075,57.129,13.973,57.192,13.91z"/><circle cx="72.233" cy="26.387" r="0.397"/><path d="M82.156,6H28.531c-1.65,0-3.36,1.301-3.801,2.891L19.457,27.93c-0.44,1.59-2.068,3.355-3.618,3.923   l-8.176,2.995l-1.486,0.494l0.002,0.005c-0.753,0.285-1.292,0.996-1.327,1.841H4.844v16.125h0.027   c-0.011,0.089-0.027,0.176-0.027,0.268c0,1.139,0.923,2.062,2.062,2.062h4.844c0-6.179,5.009-11.188,11.188-11.188   s11.188,5.009,11.188,11.188H57.75c0-6.179,5.009-11.188,11.188-11.188s11.188,5.009,11.188,11.188h2.031c1.65,0,3-1.35,3-3V9   C85.156,7.35,83.807,6,82.156,6z M56.392,13.679l3.134-3.133c0.216-0.217,0.565-0.217,0.783,0l2.955,2.954   c1.044,1.046,1.076,2.717,0.1,3.804l2.111,2.111l2.111-2.112c-0.977-1.086-0.944-2.758,0.102-3.804l2.955-2.954   c0.215-0.216,0.566-0.216,0.781,0l3.135,3.133c0.216,0.216,0.216,0.566,0,0.783l-2.955,2.955c-1.047,1.045-2.719,1.077-3.805,0.101   l-2.111,2.111l2.8,2.799c0.379-0.277,0.912-0.247,1.255,0.095l3.248,3.248c0.379,0.38,0.379,0.995,0,1.373   c-0.379,0.379-0.992,0.379-1.373,0l-3.248-3.248c-0.342-0.343-0.371-0.876-0.096-1.255l-2.799-2.799l-2.799,2.799   c0.277,0.379,0.247,0.913-0.096,1.255l-3.248,3.248c-0.38,0.379-0.994,0.379-1.373,0c-0.379-0.378-0.379-0.993,0-1.373l3.248-3.248   c0.343-0.342,0.877-0.373,1.256-0.095l2.799-2.799l-2.111-2.111c-1.087,0.976-2.758,0.944-3.803-0.101l-2.955-2.955   C56.176,14.245,56.176,13.895,56.392,13.679z M24.562,26.141l3.542-14.366c0.264-1.068,1.379-1.942,2.479-1.942H42c1.1,0,2,0.9,2,2   v14.25c0,1.1-0.9,2-2,2H26.083C24.982,28.083,24.298,27.209,24.562,26.141z M82.625,32.161c0,0.275-0.225,0.5-0.5,0.5h-59.25   c-0.275,0-0.5-0.225-0.5-0.5v-0.679c0-0.275,0.225-0.5,0.5-0.5h59.25c0.275,0,0.5,0.225,0.5,0.5V32.161z"/><rect x="65.324" y="19.478" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 125.6515 -12.7897)" width="0.301" height="0.301"/></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M25.661,14.505c1.342,0,2.431-1.088,2.431-2.431s-1.088-6.913-2.431-6.913c-1.343,0-2.431,5.571-2.431,6.913   S24.318,14.505,25.661,14.505z M25.382,9.176c0.095-0.384,0.189-0.719,0.279-1.009c0.09,0.29,0.184,0.624,0.279,1.009   c0.319,1.292,0.489,2.514,0.489,2.899c0,0.423-0.344,0.768-0.767,0.768c-0.423,0-0.768-0.344-0.768-0.768   C24.893,11.69,25.063,10.468,25.382,9.176z"/><path d="M37.823,14.505c1.342,0,2.431-1.088,2.431-2.431s-1.088-6.913-2.431-6.913s-2.431,5.571-2.431,6.913   S36.481,14.505,37.823,14.505z M37.544,9.176c0.095-0.384,0.189-0.719,0.279-1.009c0.09,0.29,0.184,0.624,0.279,1.009   c0.319,1.292,0.489,2.514,0.489,2.899c0,0.423-0.344,0.768-0.767,0.768c-0.423,0-0.768-0.344-0.768-0.768   C37.056,11.69,37.225,10.468,37.544,9.176z"/><path d="M49.986,14.505c1.342,0,2.431-1.088,2.431-2.431s-1.088-6.913-2.431-6.913c-1.343,0-2.431,5.571-2.431,6.913   S48.643,14.505,49.986,14.505z M49.707,9.176c0.095-0.384,0.189-0.719,0.279-1.009c0.09,0.29,0.184,0.624,0.279,1.009   c0.319,1.292,0.489,2.514,0.489,2.899c0,0.423-0.344,0.768-0.767,0.768c-0.423,0-0.768-0.344-0.768-0.768   C49.218,11.69,49.388,10.468,49.707,9.176z"/><path d="M62.148,14.505c1.342,0,2.431-1.088,2.431-2.431s-1.088-6.913-2.431-6.913s-2.431,5.571-2.431,6.913   S60.806,14.505,62.148,14.505z M61.87,9.176c0.095-0.384,0.189-0.719,0.279-1.009c0.09,0.29,0.184,0.624,0.279,1.009   c0.319,1.292,0.489,2.514,0.489,2.899c0,0.423-0.344,0.768-0.768,0.768c-0.423,0-0.768-0.344-0.768-0.768   C61.381,11.69,61.551,10.468,61.87,9.176z"/><path d="M74.311,14.505c1.343,0,2.431-1.088,2.431-2.431s-1.088-6.913-2.431-6.913c-1.342,0-2.431,5.571-2.431,6.913   S72.968,14.505,74.311,14.505z M74.032,9.176c0.095-0.384,0.189-0.719,0.279-1.009c0.09,0.29,0.184,0.624,0.279,1.009   c0.319,1.292,0.489,2.514,0.489,2.899c0,0.423-0.344,0.768-0.768,0.768c-0.423,0-0.768-0.344-0.768-0.768   C73.543,11.69,73.713,10.468,74.032,9.176z"/><path d="M94.478,51.587H78.243V38.503c0.323-0.176,0.608-0.362,0.901-0.559c0.23-0.154,0.39-0.413,0.39-0.69V25.909   c0-0.459-0.397-0.871-0.857-0.871h-2.694v-8.392h-3.308v8.392h-8.876v-8.392H60.49v8.392h-8.876v-8.392h-3.308v8.392H39.51v-8.392   h-3.389v8.392h-8.796v-8.392h-3.308v8.392h-2.722c-0.459,0-0.828,0.411-0.828,0.871v11.334c0,0.219,0.068,0.429,0.222,0.585   c0.299,0.302,0.666,0.585,0.989,0.848v12.91H5.494c-0.459,0-0.843,0.347-0.843,0.806v18.013c0,0.255,0.139,0.496,0.34,0.654   c0.306,0.241,0.629,0.47,0.951,0.691v22.224c0,0.459,0.34,0.864,0.8,0.864h86.49c0.459,0,0.828-0.405,0.828-0.864V71.756   c0.323-0.218,0.649-0.444,0.95-0.68c0.201-0.158,0.341-0.399,0.341-0.655V52.393C95.35,51.934,94.937,51.587,94.478,51.587z    M23.371,39.619c1.614,0.733,3.581,1.149,5.585,1.149c3.955,0,7.645-1.706,10.274-4.715c2.632,3.009,6.343,4.715,10.334,4.715   c4.011,0,7.735-1.707,10.368-4.719c1.164,1.308,2.611,2.409,4.236,3.214c1.985,0.985,4.209,1.505,6.401,1.505   c2.065,0,4.042-0.453,6.059-1.377v12.196H23.371V39.619z M92.364,93.144H7.555V72.811c3.066,1.733,6.358,2.61,9.925,2.61   c6.214,0,11.996-2.748,16.014-7.578c4.021,4.83,9.827,7.578,16.085,7.578c3.36,0,6.569-0.773,9.535-2.296   c2.503-1.286,4.763-3.101,6.587-5.284c3.995,4.765,10.004,7.58,16.315,7.58c3.631,0,7.281-0.943,10.348-2.642V93.144z"/></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 16 20" enable-background="new 0 0 16 16" xml:space="preserve"><g><path d="M11.381,1.6C8.853,1.6,8,3.845,8,3.845S7.148,1.6,4.619,1.6c-2.528,0-4.051,2.41-4.051,4.397   C0.567,11.652,8,14.4,8,14.4s7.433-2.748,7.433-8.403C15.433,4.01,13.91,1.6,11.381,1.6z"/></g></svg>
                    </div>
                    <div class="TextIntervention">
                        <p>Chez Fifi vous propose ses services pour vos évènements privés tels que des mariages, communions, anniversaires ou fêtes en tout genre. Vous pouvez ainsi profiter d’une carte concoctée à l’aide de produits de qualité tout en ayant un budget moins élevé qu’un traiteur traditionnel. Cela garanti aussi une ambiance plus conviviale qu'un traiteur traditionnel avec des petites animations avec le food truck.</p>
                        <a href="events.php"> En savoir plus</a>
                    </div>
                </div>
                <div class="information">
                    <div class="horairesacceuil">
                        <div class="journéeacceuil">
                            <div class="détails">
                                <p class="jouracceuil">Mardi</p>
                                <p class="adresseacceuil">141 Route de Clisson, 44230 Saint-Sébastien-sur-Loire</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                            <div class="détails">
                                <p class="jouracceuil">Mercredi</p>
                                <p class="adresseacceuil">1 Rue Ordronneau, 44400 Rezé</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                        </div>
                        <div class="journéeacceuil">
                            <div class="détails">
                                <p class="jouracceuil">Jeudi</p>
                                <p class="adresseacceuil">Boulevard Salvador Allende, 44800 Saint-Herblain</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                            <div class="détails">
                                <p class="jouracceuil">Vendredi</p>
                                <p class="adresseacceuil">Parc des Chantiers, Boulevard Léon Bureau, 44200 Nantes</p>
                                <p>Midi :</p>
                                <p>11h30 - 14h30</p>
                                <p class="Soiracceuil">Soir :</p>
                                <p>19h30 - 22h30</p>
                            </div>
                        </div>
                    </div>
                        <div id="map" class="index-map">
                        </div>

            </div>
		</div>
            <div class="Coordonnees">
        <?php include "infos_comp.php"; ?>
            </div>
        </div>
        
		<?php include "footer.php"; ?>

        <a href="#" class="top"><img src="images/fleche.png" title="Retour en haut"/></a>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/retourenhaut.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/map_contact.js"></script>

	</body>
</html>