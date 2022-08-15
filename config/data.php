<?php 

//Datos dinámicos - NO SE TOCAN -
$slab_ids = getSlabIds();
$slab_progress = getSlabsData("slab_progress"); 
$slab_act1 = getSlabsData("act_1");
$slab_act2 = getSlabsData("act_2");
$slab_act3 = getSlabsData("act_3");



//-- Nombre del deck --
$deckTitle = "Resuelve retos con Design Thinking";

//-- Características --
$duration = "16 horas";
$level = "Básico";
$focus = "Metodología activa";
$learningExp = "Autodirigido";
$requirements = "computadora con conexión a internet. Cuenta gratuita en Miro.";

//-- Experto --
$exp_name = "";
$exp_desc = "";
$exp_position = "";
$exp_linkedin = "";
$exp_has_linkedin = false;
$exp_portfolio = "";
$exp_has_portfolio = false;


// -- Imagen Home --
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$homeImage = "img/iStock-1179565008.jpg";

//-- Inicio --
$deckIntro = "<strong>Resuelve retos con Design Thinking</strong> es un programa de 16 horas de aprendizaje en línea.<br><br>
A través de sus actividades, contenidos temáticos y momentos de valoración, se ha creado para ti una experiencia de aprendizaje que te permitirá fortalecer la competencia:<br><br> 
<strong>Utilizo el Design Thinking como metodología de innovación para la exploración y creación de soluciones en problemáticas puntuales.</strong><br><br>
Un programa con las características como el que estás a punto de iniciar te ofrece las herramientas necesarias para responder a los más altos estándares en tu desempeño.";

//-- Bienvenida --
$deckWelcome = "¡Recibe la más cordial bienvenida!";

//-- Portadas de slabs -- 
/* 
   FORMATO:
   * Ruta del archivo -> img/topics/nombre-del-archivo
*/
$slabImages = [
    "img/topics/TEMARIO_1145033939.png", //Slab 1
    "img/topics/TEMARIO_1196702694.png", //Slab 2
    "img/topics/TEMARIO_1220226068.png", //Slab 3
    "img/topics/TEMARIO_899434516.png", //Slab 4
    "img/topics/TEMARIO_1125687458.png", //Slab 5
    "img/topics/TEMARIO_1313246059.png", //Slab 6
    "img/topics/TEMARIO_1342231672.png", //Slab 7
    "img/topics/TEMARIO_1154912694.png", //Slab 8
    "img/topics/TEMARIO_1167549708.png", //Slab 9
    "img/topics/TEMARIO_1333968186.png" //Slab 10
];

//-- Títulos de slabs (Index) --
$slabHeadings = [
    "Pasos del Design Thinking", //Slab 1
    "Miro. Herramienta colaborativa", //Slab 2
    "Empatía. Entiendo el problema", //Slab 3
    "El reto. ¿Cómo establecerlo?", //Slab 4
    "Análisis y mapeo del contexto", //Slab 5
    "¿Quiénes? Análisis y mapeo", //Slab 6
    "¿Cómo generar la propuesta de valor?", //Slab 7
    "Ideación. Todo es válido por ahora", //Slab 8
    "Prototipos. Probando… 1, 2, 3", //Slab 9
    "¿Funciona? Análisis de pruebas" //Slab 10
];

// -- Nombre de slabs --
$slabTitles = [
    "Pasos del Design Thinking", //Slab 1
    "Miro. Herramienta colaborativa", //Slab 2
    "Empatía. Entiendo el problema", //Slab 3
    "El reto. ¿Cómo establecerlo?", //Slab 4
    "Análisis y mapeo del contexto", //Slab 5
    "¿Quiénes? Análisis y mapeo", //Slab 6
    "¿Cómo generar la propuesta de valor?", //Slab 7
    "Ideación. Todo es válido por ahora", //Slab 8
    "Prototipos.<br> Probando… 1, 2, 3", //Slab 9
    "¿Funciona? Análisis de pruebas" //Slab 10
];

//-- Metas de aprendizaje --
$slabGoals = [
    "Comprendo los elementos de la estructura del método de Design Thinking para identificar los pasos a implementar en un reto por solucionar.",
    "Comprendo el uso de Miro como herramienta digital para fomentar el trabajo colaborativo en la aplicación del método de Design Thinking.",
    "Analizo la importancia de la empatía para entender las posibles problemáticas por abordar en la aplicación del método de Design Thinking.",
    "Establezco el reto al entender la problemática para dar una posible solución a través del método de Design Thinking.",
    "Realizo un mapa de contexto para identificar los aspectos políticos, económicos, sociales, tecnológicos, ambientales y legales de la problemática en la fase de definición.",
    "Utilizo los Canvas de Stakeholders y personas para identificar a los actores relevantes de la problemática en la fase de definición.",
    "Diseño una propuesta de valor para definir las posibles vías de solución en la fase de ideación.",
    "Produzco ideas para dar una posible solución en la problemática definida.",
    "Realizo prototipos de las ideas para identificar su viabilidad y validez en un ambiente de pruebas.",
    "Analizo los resultados de las pruebas realizadas a los prototipos para obtener datos que permitan identificar soluciones aplicables en la resolución de la problemática."
];

$imgGoals = [
    "img/act/iStock-1145033939.jpg", //Slab 1
    "img/act/iStock-1196702694.jpg", //Slab 2
    "img/act/iStock-1220226068.jpg", //Slab 3
    "img/act/iStock-899434516.jpg",  //Slab 4
    "img/act/iStock-1125687458.jpg",  //Slab 5
    "img/act/iStock-1313246059.jpg", //Slab 6
    "img/act/iStock-1342231672.jpg", //Slab 7
    'img/act/iStock-1154912694.jpg', //Slab 8
    'img/act/iStock-1167549708.jpg',  //Slab 9
    'img/act/iStock-1333968186.jpg'   //Slab 10
];

//-- Tipos de introducción --
/* 
   FORMATO:
   * Indicar tipo de introducción -> video o texto
*/ 
$slabIntroType = [
    "video", //Slab 1
    "audio", //Slab 2
    "text", //Slab 3
    "video", //Slab 4
    "audio", //Slab 5
    "text", //Slab 6
    "video", //Slab 7
    "audio", //Slab 8
    "text", //Slab 9
    "text" //Slab 10
];

//Material de introducción
/* 
   FORMATO: 
   * Ruta del archivo -> assets/videos/
*/ 
$slabIntro = [
/*Slab 1*/  [
                'assets/videos/DesignThinking_1_Intro.mp4'
            ],
/*Slab 2*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/b0db4946-f5a4-4117-b8ee-de609cbe4099?dark=true"></iframe>'
            ], 
/*Slab 3*/  [
                '¡Hola! Bienvenido al Slab Empatía. Entiendo el problema, donde descubrirás la importancia de este concepto y técnicas de investigación para recolectar información que te permita entender a las personas y su contexto.
                <br><br>
                Encontrarás también artículos, videos y plantillas para generar un mapa de empatía que te permita identificar hallazgos en la problemática ¿Estás listo?'
            ],
/*Slab 4*/  [
                'assets/videos/DesignThinking_4_Intro.mp4'
            ],                
/*Slab 5*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/f8e93b91-8311-4598-8278-1a284788bb4a?dark=true"></iframe>'
            ],
/*Slab 6*/  [
                'Bienvenido al Slab ¿Quiénes? Análisis y mapeo, en el cual ordenarás y clasificarás a los actores relevantes del proyecto para obtener información de ellos e identificar hallazgos desde sus puntos de vista. 
                <br><br>
                Encontrarás aquí plantillas que te permitirán ordenar la información obtenida para hacer un Stakeholders Map  y crear una “persona” ¡Es más sencillo de lo que crees!'
            ],
/*Slab 7*/  [
                'assets/videos/DesignThinking_7_Intro.mp4'
            ],
/*Slab 8*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/e78be4bf-f13c-443b-b8e9-c9e922879f40?dark=true"></iframe>'
            ],
/*Slab 9*/  [
                'Bienvenido al Slab Prototipos. Probando… 1, 2, 3; en el cual aprenderás la importancia de elaborar prototipos para explorar, probar y mejorar las ideas de solución al Reto.                 
                <br><br>
                Encontrarás también videos y artículos que te mostrarán algunas técnicas de prototipado que puedes emplear de forma fácil y sencilla.
                <br><br>
                ¡Va a ser increíble!'
            ],
/*Slab 10*/ [
                '¡Hola! Estas por iniciar el Slab ¿Funciona? Análisis de pruebas. Aprenderás la importancia de evaluar las ideas y obtener retroalimentación de los usuarios para obtener datos que permitan identificar soluciones aplicables.                 
                <br><br>
                Encontrarás aquí videos y artículos que te mostrarán los pasos a seguir para generar pruebas de una buena manera.
                <br><br>
                ¡Vamos a empezar!'
            ]
];

//-- Banner --
/* 
   FORMATO: 
   * Ruta del archivo -> assets/img/act/
*/ 
$banner = [
    
];

//-- Numero de Materiales --
/* 
   FORMATO: 
   * Indicar numero de material total
*/
$materialTotal = [
    3, //Slab 1
    1, //Slab 2
    2, //Slab 3
    2, //Slab 4
    4, //Slab 5
    2, //Slab 6
    4, //Slab 7
    2, //Slab 8
    2, //Slab 9
    4 //Slab 10
];

//Videos Imagen
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo de la Imagen -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> assets/videos/0_Introduccion.mp4
*/
$materialImg = [
   [    //slab 1
        [
            'img/pre-load/pre-load-1.png',
            '2 Design thinking',
            'img/material/2 Design thinking.png',
            '2 Design thinking.png'
        ]
    ],
    null,   //slab 2
    null,   //slab 3
    null,   //slab 4
    [   //slab 5
        [
            'img/pre-load/pre-load-10.png',
            'Context map',
            'img/material/context map.png',
            'context map.png'
        ]
    ],
    [   //slab 6
        [
            'img/pre-load/pre-load-15.png',
            'Persona canvas',
            'img/material/Persona canvas.jpeg',
            'Persona canvas.jpeg'
        ]
    ],
    [   //slab 7
        [
            'img/pre-load/pre-load-17.png',
            'Value Proposition Canvas',
            'img/material/Value Proposition Canvas.jpeg',
            'Value Proposition Canvas.jpeg'
        ]
    ],    
];

//Videos YouTube
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo del vídeo -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> https://www.youtube.com/embed/0hGS45mbBRg
*/
$materialYoutube = [
   
];

//Páginas web
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-2.png
   * Titulo del archivo -> Introducción a Excel
   * Link -> https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/
*/
$materialPage = [
    
];

//PDF descargable
$materialPdf = [
    [   //Slab 1
        [
            'img/pre-load/pre-load-2.png',
            'p02 brown design thinking with cover',
            'assets/docs/tools/slab/3 p02_brown-design-thinking-with-cover-page-v2.pdf',
            '3 p02_brown-design-thinking-with-cover-page-v2.pdf'
        ]
    ],
    null, //Slab 2
    [   //Slab 3
        [
            'img/pre-load/pre-load-6.png',
            'GRAMS 2',
            'assets/docs/tools/slab/GRAMS 2.pdf',
            'GRAMS 2.pdf'
        ]
    ],
    null, //Slab 4
    [   //Slab 5
        [
            'img/pre-load/pre-load-11.png',
            'Pestle analysis factsheet',
            'assets/docs/tools/slab/pestle-analysis-factsheet_20220418T213645.pdf',
            'pestle-analysis-factsheet_20220418T213645.pdf'
        ]
    ]  
];

//Vídeo
$materialVideo = [
    [   //Slab 1
        [
            'img/pre-load/pre-load-4.png',
            'What Is Design Thinking An Overview',
            'assets/videos/1_What_Is_Design_Thinking_An_Overview.mp4',
            '1_What_Is_Design_Thinking_An_Overview.mp4'
        ]
    ],
    [   //Slab 2
        [
            'img/pre-load/pre-load-5.png',
            'Cómo USAR MIRO Tutorial',
            'assets/videos/👉Cómo USAR MIRO Tutorial Pizarra ONLINE  TRABAJO COLABORATIVO  Software [ACTUALIZADO] 🚀👩_🏫 Virtual-W8EQTCG4pUU-1080p-1649717926641.mp4',
            '👉Cómo USAR MIRO Tutorial Pizarra ONLINE  TRABAJO COLABORATIVO  Software [ACTUALIZADO] 🚀👩_🏫 Virtual-W8EQTCG4pUU-1080p-1649717926641.mp4'
        ],
    ],
    [   //Slab 3
        [
            'img/pre-load/pre-load-7.png',
            'Helping you get to the why behind your customers',
            'assets/videos/GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4',
            'GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4'
        ],
    ],
    [   //Slab 4
        [
            'img/pre-load/pre-load-8.png',
            'Frame your design challenge',
            'assets/videos/frame_your_design_challenge (Original).mp4',
            'frame_your_design_challenge (Original).mp4'
        ],
        [
            'img/pre-load/pre-load-9.png',
            'How might we',
            'assets/videos/how might we.mp4',
            'how might we.mp4'
        ],
    ],
    [   //Slab 5
        [
            'img/pre-load/pre-load-12.png',
            'PESTEL Analysis EXPLAINED',
            'assets/videos/PESTEL Analysis EXPLAINED _ B2U _ Business To You.mp4',
            'PESTEL Analysis EXPLAINED _ B2U _ Business To You.mp4'
        ],
        [
            'img/pre-load/pre-load-13.png',
            'PESTLE analysis',
            'assets/videos/PESTLE analysis.mp4',
            'PESTLE analysis.mp4'
        ],
    ],
    [   //Slab 6
        [
            'img/pre-load/pre-load-16.png',
            'Como hacer y utilizar la herramienta de PERSONA',
            'assets/videos/Como hacer y utilizar la herramienta de _PERSONA_ Temporada 4 Tutotial 4.mp4',
            'Como hacer y utilizar la herramienta de _PERSONA_ Temporada 4 Tutotial 4.mp4'
        ],
    ],
    [   //Slab 7
        [
            'img/pre-load/pre-load-18.png',
            'Cómo diseñar una propuesta de valor',
            'assets/videos/Cómo diseñar una PROPUESTA DE VALOR   Ejemplo del Value Proposition Canvas.mp4',
            'Cómo diseñar una PROPUESTA DE VALOR   Ejemplo del Value Proposition Canvas.mp4'
        ],
        [
            'img/pre-load/pre-load-19.png',
            'Strategyzers Value Proposition Canvas Explained',
            'assets/videos/Strategyzers Value Proposition Canvas Explained.mp4',
            'Strategyzers Value Proposition Canvas Explained.mp4'
        ],
        [
            'img/pre-load/pre-load-20.png',
            'Value Proposition Canvas by Strategyzercom',
            'assets/videos/Value Proposition Canvas by Strategyzercom explained through the Uber Example.mp4',
            'Value Proposition Canvas by Strategyzercom explained through the Uber Example.mp4'
        ]
    ],
    [   //Slab 8
        [
            'img/pre-load/pre-load-21.png',
            'Design Thinking Ideate',
            'assets/videos/3 Design Thinking Ideate.mp4',
            '3 Design Thinking Ideate.mp4'
        ],
        [
            'img/pre-load/pre-load-22.png',
            'Design thinking FASE 3 IDEAR Temporada 3',
            'assets/videos/Design thinking _FASE 3 - IDEAR_ Temporada 3 Tutorial 5.mp4',
            'Design thinking _FASE 3 - IDEAR_ Temporada 3 Tutorial 5.mp4'
        ],
    ],
    [   //Slab 9
        [
            'img/pre-load/pre-load-23.png',
            '4 Design Thinking Prototype',
            'assets/videos/4 Design Thinking Prototype.mp4',
            '4 Design Thinking Prototype.mp4'
        ],
        [
            'img/pre-load/pre-load-24.png',
            'Design Thinking Prototype',
            'assets/videos/Design Thinking Prototype.mp4',
            'Design Thinking Prototype.mp4'
        ],
    ],
    [   //Slab 10
        [
            'img/pre-load/pre-load-25.png',
            'Design Thinking FASE 5 COMPROBAR TESTEAR',
            'assets/videos/Design Thinking _FASE 5 - COMPROBAR - TESTEAR_ Temporada 3 Tutorial 7.mp4',
            'Design Thinking _FASE 5 - COMPROBAR - TESTEAR_ Temporada 3 Tutorial 7.mp4'
        ],
        [
            'img/pre-load/pre-load-26.png',
            'Design Thinking Step 5 Test',
            'assets/videos/Design Thinking Step 5 Test.mp4',
            'Design Thinking Step 5 Test.mp4'
        ],
        [
            'img/pre-load/pre-load-27.png',
            'Design Thinking Test',
            'assets/videos/Design Thinking Test.mp4',
            'Design Thinking Test.mp4'
        ],
        [
            'img/pre-load/pre-load-28.png',
            'Design Thinking Testing Stage',
            'assets/videos/Design Thinking Testing Stage_ The Difference Between Success and Failure.mp4',
            'Design Thinking Testing Stage_ The Difference Between Success and Failure.mp4'
        ]
    ],
];

//-- Transcripciones --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabTranscriptions = [
    
];

//-- Referencias --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabReferencias = [
/*Slab1*/   [
                'AJ&Smart. (2020, 4 febrero). <i>What Is Design Thinking? An Overview</i> [Video]. Youtube.<br> <a href="https://www.youtube.com/watch?v=gHGN6hs2gZY" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=gHGN6hs2gZY</a>', 
                'Mejía Luna, J. (2016, 8 marzo). <i>P02 brown design thinking.</i> Academia.Edu.  <br> <a href="https://www.academia.edu/23008217/P02_brown_design_thinking" class="estilo-ref" target="_blank">https://www.academia.edu/23008217/P02_brown_design_thinking</a>',
                'Zentius. (s. f.). <i>Design Thinking.</i> Zentius Digital Transformation.<br> <a href="https://www.zentius.com/TD/design-thinking" class="estilo-ref" target="_blank">https://www.zentius.com/TD/design-thinking</a>'
            ],
/*Slab2*/   [
                'AlejoFacilitador. (2020, 21 junio). <i>👉Cómo USAR MIRO Tutorial Pizarra ONLINE | TRABAJO COLABORATIVO | Software (ACTUALIZADO) 🚀👩‍🏫 Virtual</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=W8EQTCG4pUU" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=W8EQTCG4pUU</a>', 
                'Miro. (2021, 27 octubre). <i>Getting started with Miro: A guide for beginners</i> [Video]. YouTube.<br> <a href="https://www.youtube.com/watch?v=mNNPchRnDp8&ab_channel=Miro" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=mNNPchRnDp8&ab_channel=Miro</a>',
                'Miro Academy. (s. f.). <i>Getting Started/Board navigation and toolbars.</i> Academy Miro. <br> <a href="https://academy.miro.com/learn/course/getting-started-with-miro/getting-started/board-navigation-and-toolbars?page=1" class="estilo-ref" target="_blank">https://academy.miro.com/learn/course/getting-started-with-miro/getting-started/board-navigation-and-toolbars?page=1</a>',
            ],
/*Slab3*/   [
                'Formación en innovación y Design Thinking. (2022, 18 abril). <i>Empatizar.</i> Design Thinking España. <br> <a href="https://xn--designthinkingespaa-d4b.com/empatizar-primera-fase-design-thinking" class="estilo-ref" target="_blank">https://xn--designthinkingespaa-d4b.com/empatizar-primera-fase-design-thinking</a>', 
                'Miro. (s. f.). Empathy Map Template. Miro.Com. <br> <a href="https://miro.com/templates/empathy-map/" class="estilo-ref" target="_blank">https://miro.com/templates/empathy-map/</a>',
                'Nuform Digital. (2020, 27 noviembre). <i>GRAMS - Gary van Broekhoven on helping you get to the «why» behind your customers.</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=BH_I4h16_rg&feature=youtu.be" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=BH_I4h16_rg&feature=youtu.be</a>',
                'Romero Frías, E. (2022, 7 abril). Design Thinking - Fase 1: Empatizar con el otro. Esteban Romero. <br> <a href="https://estebanromero.com/design-thinking/design-thinking-fase-1-empatizar-con-el-otro/" class="estilo-ref" target="_blank">https://estebanromero.com/design-thinking/design-thinking-fase-1-empatizar-con-el-otro/</a>'
            ],
/*Slab4*/   [
                'Damm, R. F., & Siang, T. Y. (2020, 20 agosto). Define and Frame Your Design Challenge by Creating Your Point Of View and Ask «How Might We». Interaction Design Foundation. <br> <a href="https://www.interaction-design.org/literature/article/define-and-frame-your-design-challenge-by-creating-your-point-of-view-and-ask-how-might-we" class="estilo-ref" target="_blank">https://www.interaction-design.org/literature/article/define-and-frame-your-design-challenge-by-creating-your-point-of-view-and-ask-how-might-we</a>', 
                'IDEO.org. (2017, 1 julio). Frame Your Design Challenge [Video]. Vimeo. <br> <a href="https://vimeo.com/191566926?embedded=true&source=video_title&owner=8938528" class="estilo-ref" target="_blank">https://vimeo.com/191566926?embedded=true&source=video_title&owner=8938528</a>',
                'Keller, O. (2019, 6 octubre). How Might We Notes - Explained in Under 3 Minutes [Video]. Vimeo. <br> <a href="https://vimeo.com/364634597?embedded=true&source=video_title&owner=96954908" class="estilo-ref" target="_blank">https://vimeo.com/364634597?embedded=true&source=video_title&owner=96954908</a>',
                'Keller, O. (2019b, octubre 16). The “HOW MIGHT WE” Method. Odell Keller. <br> <a href="https://www.odellkeller.com/the-how-might-we-method/" class="estilo-ref" target="_blank">https://www.odellkeller.com/the-how-might-we-method/</a>',
                'Marques, P. (2018, 1 mayo). How To Properly Frame Your Design Challenge. Medium. <br> <a href="https://uxdesign.cc/how-to-properly-frame-your-design-challenge-eccb4d89cb83" class="estilo-ref" target="_blank">https://uxdesign.cc/how-to-properly-frame-your-design-challenge-eccb4d89cb83</a>'
            ],
/*Slab5*/   [
                'Battista, M. (2021, 6 diciembre). PESTLE Analysis | Factsheets: Discover what PESTLE means, and use our PESTLE analysis template and example to understand the external influences on your organisation. CIPD. <br> <a href="https://www.cipd.co.uk/knowledge/strategy/organisational-development/pestle-analysis-factsheet#gref" class="estilo-ref" target="_blank">https://www.cipd.co.uk/knowledge/strategy/organisational-development/pestle-analysis-factsheet#gref</a>', 
                'de Bruin, L. (2016, 18 septiembre). Scanning the Environment: PESTEL Analysis. B2U - Business-to-You.Com. <br> <a href="https://www.business-to-you.com/scanning-the-environment-pestel-analysis/" class="estilo-ref" target="_blank">https://www.business-to-you.com/scanning-the-environment-pestel-analysis/</a>',
                'de Bruin, L. [Business To You]. (2018, 22 mayo). PESTEL Analysis EXPLAINED | B2U | Business To You [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=bYn4CyL3r5w" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=bYn4CyL3r5w</a>',
            ], 
/*Slab6*/   [
                'Design Thinking 24/7. (2018, 30 julio). <i>Como hacer y utilizar la herramienta de «PERSONA» Temporada 4 Tutotial 4</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=71HsxXnxNFs" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=71HsxXnxNFs</a>',
                'DesignThinking. (2020, 27 abril). <i>Método persona.</i> <br> <a href="https://www.designthinking.services/herramientas-design-thinking/metodo-persona/" class="estilo-ref" target="_blank">https://www.designthinking.services/herramientas-design-thinking/metodo-persona/</a>',
                'Miro. (s. f.). <i>Stakeholder Mapping Template.</i> Https://Miro.Com/. <br> <a href="https://miro.com/templates/stakeholder-map/" class="estilo-ref" target="_blank">https://miro.com/templates/stakeholder-map/</a>',
                'Saavedra, E. (2020, 29 septiembre). <i>La herramienta personas.</i> Designthinking.gal. <br> <a href="https://designthinking.gal/la-herramienta-personas/" class="estilo-ref" target="_blank">https://designthinking.gal/la-herramienta-personas/</a>',
                'Savina, A. (2019, 6 diciembre). Complete Stakeholder Mapping Guide. MiroBlog. <br> <a href="https://miro.com/blog/stakeholder-mapping/" class="estilo-ref" target="_blank">https://miro.com/blog/stakeholder-mapping/</a>',
                'UX Patterns. (s. f.). <i>Modelo de Canvas. Pinterest.</i> <br> <a href="https://www.pinterest.com.mx/pin/117164027792203746/" class="estilo-ref" target="_blank">https://www.pinterest.com.mx/pin/117164027792203746/</a>'
            ],
/*Slab7*/   [
                'LUKKAMENTE. (2020, 27 noviembre). <i>⚡️ Cómo diseñar una PROPUESTA DE VALOR 🎯 - Ejemplo del Value Proposition Canvas</i> [Video]. YouTube.  <br> <a href="https://www.youtube.com/watch?v=0TdYbo1EJUI" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=0TdYbo1EJUI</a>',
                'Macías, M. (2018, 21 junio). <i>Tu propuesta de valor desde el cliente: Value Proposition Canvas.</i> Advenio strategy & business design.  <br> <a href="https://advenio.es/tu-propuesta-de-valor-desde-el-cliente-value-proposition-canvas/" class="estilo-ref" target="_blank">https://advenio.es/tu-propuesta-de-valor-desde-el-cliente-value-proposition-canvas/</a>',
                'Railsware Product Academy. (2018, 12 octubre). <i>Value Proposition Canvas by Strategyzer.com explained through the Uber Example🚘</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=kiWkRiynPAo" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=kiWkRiynPAo</a>',    
                'Strategyzer. (2017, 8 marzo). Strategyzer’s Value Proposition Canvas Explained [Video]. YouTube.  <br> <a href="https://www.youtube.com/watch?v=ReM1uqmVfP0" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=ReM1uqmVfP0</a>',
            ],
/*Slab8*/   [
                'BusinessADN. (2021, 12 agosto). <i>Design Thinking. Fase 3: Idear.</i> <br> <a href="https://www.businessadn.com/blog/design-thinking-idear/" class="estilo-ref" target="_blank">https://www.businessadn.com/blog/design-thinking-idear/</a>',
                '<i>Design Thinking - Ideate Stage.</i> (s. f.). Tutorials Point <br> <a href="https://www.tutorialspoint.com/design_thinking/design_thinking_ideate_stage.htm" class="estilo-ref" target="_blank">https://www.tutorialspoint.com/design_thinking/design_thinking_ideate_stage.htm</a>',
                'Design Thinking 24/7. (2018, 2 abril). <i>Design thinking «FASE 3 - IDEAR» Temporada 3 Tutorial 5</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=Hy-dqgrtZcA" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=Hy-dqgrtZcA</a>',
                'Design Thinking España. (2022, 16 abril). <i>La fase Idear dentro de un proceso de Design Thinking.</i> <br> <a href="https://xn--designthinkingespaa-d4b.com/idear-tercera-fase-design-thinking" class="estilo-ref" target="_blank">https://xn--designthinkingespaa-d4b.com/idear-tercera-fase-design-thinking</a>',
                'Interaction Design Foundation. (s. f.). <i>What is Ideation?</i> <br> <a href="https://www.interaction-design.org/literature/topics/ideation" class="estilo-ref" target="_blank">https://www.interaction-design.org/literature/topics/ideation</a>',
                'Mindful Marks. (2018, 9 junio). <i>3. Design Thinking: Ideate</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=zbLxs6te5to" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=zbLxs6te5to</a>',
            ],
/*Slab9*/   [
                'Academy for Innovation & Entrepreneurship. (2016, 28 junio). <i>Design Thinking: Prototype</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=NXLKgUgr6qI" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=NXLKgUgr6qI</a>',
                'Dam, R. F., & Siang, T. Y. (2020, 9 septiembre). <i>Stage 4 in the Design Thinking Process: Prototype.</i> Interaction Design Foundation. <br> <a href="https://www.interaction-design.org/literature/article/stage-4-in-the-design-thinking-process-prototype" class="estilo-ref" target="_blank">https://www.interaction-design.org/literature/article/stage-4-in-the-design-thinking-process-prototype</a>',
                'Mindful Marks. (2018, 9 junio). <i>4. Design Thinking: Prototype</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=Q4MzT2MEDHA" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=Q4MzT2MEDHA</a>',
                'Simplilearn, S. (2021, 31 agosto). <i>A Complete Guide to Prototyping In Design Thinking With Benefits & Examples.</i> Simplilearn.Com. <br> <a href="https://www.simplilearn.com/prototyping-in-design-thinking-article" class="estilo-ref" target="_blank">https://www.simplilearn.com/prototyping-in-design-thinking-article</a>'
            ],
/*Slab10*/   [
                'Chelsea. (s. f.). <i>Design Thinking Phase 5: How to Test Effectively.</i> Workshopper. <br> <a href="https://www.workshopper.com/post/design-thinking-phase-5-how-to-test-effectively" class="estilo-ref" target="_blank">https://www.workshopper.com/post/design-thinking-phase-5-how-to-test-effectively</a>',
                'CloudApp. (2019, 16 septiembre). <i>Design Thinking Testing Stage: The Difference Between Success and Failure</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=vX9ZEVR_8pE" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=vX9ZEVR_8pE</a>',
                'Dam, R. F., & Siang, T. Y. (2022, 3 mayo). <i>Stage 5 in the Design Thinking Process: Test.</i> Interaction Design Foundation. <br> <a href="https://www.interaction-design.org/literature/article/stage-5-in-the-design-thinking-process-test" class="estilo-ref" target="_blank">https://www.interaction-design.org/literature/article/stage-5-in-the-design-thinking-process-test</a>',
                'Design Thinking 24/7. (2018, 16 abril). <i>Design Thinking «FASE 5 - COMPROBAR - TESTEAR» Temporada 3 Tutorial 7</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=LB1mEF-F2pc" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=LB1mEF-F2pc</a>',
                'Ghosh, S. (2022, 10 febrero). <i>Testing in Design Thinking.</i> QED42. <br> <a href="https://www.qed42.com/insights/coe/design/testing-design-thinking" class="estilo-ref" target="_blank">https://www.qed42.com/insights/coe/design/testing-design-thinking</a>',
                'Hanks, B. (2022, 7 mayo). <i>Design Thinking Testing Stage: The Difference Between Success and Failure.</i> CloudApp.  <br> <a href="https://www.getcloudapp.com/blog/design-thinking-testing-stage/" class="estilo-ref" target="_blank">https://www.getcloudapp.com/blog/design-thinking-testing-stage/</a>',
                'Mindful Marks. (2018, 10 junio). <i>5. Design Thinking: Test</i> [Vídeo]. YouTube. <br> <a href="https://www.youtube.com/watch?v=UVEQCNM6X-A" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=UVEQCNM6X-A</a>',
                'Spring2 Innovation. (2020, 23 diciembre). <i>Design Thinking Step 5: Test</i> [Vídeo]. YouTube.  <br> <a href="https://www.youtube.com/watch?v=OrYYdVyyc8s" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=OrYYdVyyc8s</a>',
                'Stevens, E. (2021, 5 agosto). <i>User Testing: The Ultimate How-To Guide.</i> CareerFoundry. <br> <a href="https://careerfoundry.com/en/blog/ux-design/user-testing-design-thinking/" class="estilo-ref" target="_blank">https://careerfoundry.com/en/blog/ux-design/user-testing-design-thinking/</a>',
            ],
];

/* 
   FORMATO:
   * Ruta del archivo -> assets/docs/transcripts/nombre-del-archivo
 */
$slabTranscriptionDoc = [
    "assets/docs/transcripts/SCRUM_S1.pdf",
    "assets/docs/transcripts/SCRUM_S2.pdf",
    "assets/docs/transcripts/SCRUM_S3.pdf",
    "assets/docs/transcripts/SCRUM_S4.pdf",
    "assets/docs/transcripts/SCRUM_S5.pdf",
    "assets/docs/transcripts/SCRUM_S6.pdf",
    "assets/docs/transcripts/SCRUM_S7.pdf",
    "assets/docs/transcripts/SCRUM_S8.pdf",
    "assets/docs/transcripts/SCRUM_S9.pdf",
    "assets/docs/transcripts/SCRUM_S10.pdf"

]; 

// ** ACTIVIDADES **

//-- Instrucciones Descubre --
$act1_Instructions = [
    //Slab 1 
    [  
        "Identifica y ordena el proceso para <strong>aplicar el método de Design Thinking.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 2 
    [     
        "Completa los espacios en blanco para descubrir los <strong>conceptos clave sobre Miro,</strong> una herramienta colaborativa digital.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 3
    [   
        "Lee atentamente los conceptos clave sobre <strong>Empatía en el Design Thinking</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 4
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>el Reto.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 5
    [   
        "Lee atentamente los conceptos clave sobre <strong>análisis PESTEL</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 6
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>Análisis del contexto.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 7
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>Propuesta de valor.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 8
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>ideación.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 9
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>prototipos.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 10
    [   
        "Lee atentamente los conceptos clave sobre <strong>pruebas</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ]
];

//-- Herramientas Actividad Descubre --
$act1_tools = [
/* Slab 1 */'<iframe src="https://lxlab.h5p.com/content/1291684787522739898/embed" aria-label="Pasos del Design Thinking" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 2 */'<iframe src="https://lxlab.h5p.com/content/1291684797312667058/embed" aria-label="2 - Miro. Herramienta colaborativa" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 3 */'<iframe src="https://lxlab.h5p.com/content/1291684807967832518/embed" aria-label="3 - Empatía. Entiendo el problema" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 4 */'<iframe src="https://lxlab.h5p.com/content/1291684813382291838/embed" aria-label="4 - El reto. ¿Cómo establecerlo?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 5 */'<iframe src="https://lxlab.h5p.com/content/1291684817668193828/embed" aria-label="Análisis y mapeo del contexto." width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 6 */'<iframe src="https://lxlab.h5p.com/content/1291684821249748538/embed" aria-label="6 - ¿Quiénes? Análisis y mapeo" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 7 */'<iframe src="https://lxlab.h5p.com/content/1291684827296252038/embed" aria-label="7 - ¿Cómo generar la propuesta de valor?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 8 */'<iframe src="https://lxlab.h5p.com/content/1291684842630856718/embed" aria-label="8- Ideación. Todo es válido por ahora" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 9 */'<iframe src="https://lxlab.h5p.com/content/1291684845959512868/embed" aria-label="9- Prototipos. Probando… 1, 2, 3" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 10*/'<iframe src="https://lxlab.h5p.com/content/1291684850494027708/embed" aria-label="10 - ¿Funciona? Análisis de pruebas" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>'
];

//-- Instrucciones Actividad Demuestra --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * Un paso está compuesto por:
        * "instruction" -> La instrucción principal
        * "list" -> (Opcional) Una lista compuesta por items 
                 ->  Es un arreglo de arreglos de "item"
        * "subinstruction_list" -> (Opcional) Lista de subpasos individuales
                                -> Cada subaso es un arreglo, que tiene un elemento "subinstruction"
                                -> (Opcional) Los subpasos pueden tener extras, como botones o enlaces, marcados como "subinstruction_extra"
        * "instruction_extra" -> (Opcional) Enlaces, botones, imágenes o videos
                              -> Se necesita agregar el elemento HTML completo
                              -> Cada "instruction_extra" que se agregue necesitará la clase "tracker" como atributo
                              -> Si el "instruction_extra" es un botón, necesitará la clase "btn btn-outline-primary"
                              -> Si el botón es imagen, necesita especificar la ruta -> img/logos/nombre-del-archivo
    
 */
$act2_instructions = [
    //SLAB 1
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>los elementos de la estructura del método de Design Thinking.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables sobre:<br>
                <strong>
                <ol type='a'>
                    <li>Qué es Design Thinking.</li>
                    <li>Cuáles son los elementos que conforman el método.</li>
                    <li>Qué es empatizar.</li>
                    <li>Qué es definir.</li>
                    <li>Qué es prototipar.</li>
                    <li>Qué es evaluar.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el archivo de tu infografía, ya que lo compartirás más adelante.",
            ]
        ],
    ],
    //SLAB 2
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora un tríptico sobre <strong>Miro y sus cualidades para ser usado en la utilización del método de Design Thinking.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga sobre los siguientes temas a incluir en tu tríptico:<br>
                <strong>
                <ol type='a'>
                    <li>Herramientas de creación de Miro.</li>
                    <li>Formas de compartir el contenido.</li>
                    <li>Tipos de suscripciones.</li>
                    <li>Características que convierten a Miro como una herramienta a tomar en cuenta para la aplicación del método de Design Thinking.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Puedes recurrir adicionalmente a la siguiente fuente: Miro Academy. (s. f.). Getting Started/Board navigation and toolbars. Academy Miro.",
                "instruction_extra" =>  '<a href="https://academy.miro.com/learn/course/getting-started-with-miro/getting-started/board-navigation-and-toolbars?page=1" class="tracker text-center" target="_blank"><img src="img/logos/miro.png" alt="Logo canva"/></a>'
            ],
            //Paso 4
            [
                "instruction" => "Utiliza como referencia el formato tríptico y asegúrate de incluir la información pertinente en cada cara.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Triptico.pdf" class="tracker btn btn-outline-primary" target="_blank">Formato tríptico</a>'
            ],
            //Paso 5
            [
                "instruction" => "Considera que para diseñar tu tríptico, puedes utilizar la herramienta Genially.",
                "instruction_extra" =>  '<a href="https://genial.ly/es/" class="tracker text-center" target="_blank"><img src="img/logos/genially.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Verifica que los textos sean breves y fáciles de entender.",
            ],
            //Paso 7
            [
                "instruction" => "Selecciona los apoyos visuales a integrar:<br>
                <ol type='a'>
                    <li>Imágenes, dibujos, fotografías, ilustraciones, etc.</li>
                    <li>Combinaciones de letras y colores.</li>
                </ol>",
            ],
            //Paso 8
            [
                "instruction" => "Recuerda que el tríptico es un documento que debe ser concreto y llamativo.",
            ],
            //Paso 9
            [
                "instruction" => "Guarda el archivo de tu tríptico, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //SLAB 3
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>empatía en el Design Thinking.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "Empatía en aplicación de movilidad",
                "img" => "img/act/iStock-1392311086.jpg",
                "text" => "<div>DiDi, una empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios, con la finalidad de responder a Uber y Beat; por lo que es necesario entender a las personas que actualmente utilizan su plataforma.
                    <br><br>
                    Beat lanzó su servicio de autos eléctricos junto con Tesla, mientras que Uber se mantiene a la cabeza del mercado ¿Por qué la gente prefiere Uber y piensa en Beat?
                    <br><br>
                    Es por esto que DiDi ha solicitado de tus servicios para que le ayudes a empatizar con sus usuarios y entender las problemáticas por las que actualmente atraviesa. 
                    <br><br>
                    Recuerda que para comprender cuáles son los puntos fuertes de DiDi, tendrás que preguntar a sus usuarios como ha sido su experiencia con la aplicación y, para entender el contexto, es pertinente evaluar la situación actual de estas plataformas con relación al modelo convencional de taxis.  
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Entra a Miro y crea un board nuevo.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/es/' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Descarga y utiliza la plantilla del mapa de empatía.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/templates/empathy-map/' class='tracker btn btn-outline-primary' target='_blank'>Mapa de empatía</a>
                    </div>"],
                    ["subinstruction" => "Aplica las herramientas de investigación vistas u otras que localices, para obtener información que permita empatizar con los usuarios de plataformas de movilidad alternativa."],
                    ["subinstruction" => "Llena el mapa de empatía con la información obtenida."],
                    ["subinstruction" => "Guarda el enlace del board de Miro con el ejercicio, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 4
    ["instruction_list" => 
        [
             //Paso 1
             [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>el Reto.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "El Reto",
                "img" => "img/act/iStock-1043738948.jpg",
                "text" => "<div>DiDi, la empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios en México, con la finalidad de responder a sus competidores, Uber y Beat; por lo que es necesario entender a las personas que actualmente utilizan su plataforma.
                    <br><br>
                    Beat lanzó su servicio de autos eléctricos Tesla mientras que Uber ha modificado sus medidas de seguridad.
                    <br><br>
                    Es por esto que DiDi ha solicitado de tus servicios para que establezcas El Reto, y así, DiDi logre entender la o las problemáticas por las que atraviesa para obtener posibles soluciones que lo coloquen como el número 1 de movilidad alternativa en México. 
                    <br><br>
                    El Reto debe ser entendible y relacionarse con la información obtenida al realizar la investigación y el análisis. Reflexiona, ¿cuál es el contexto actual de la empresa, de los competidores y de los factores relacionados con la problemática?  
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Entra a Miro
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/es/' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Utiliza un board donde desarrolles el Reto"],
                    ["subinstruction" => "En este board debes plasmar la investigación y análisis hecha para establecer el Reto de DiDi."],
                    ["subinstruction" => "Realiza propuestas del Reto utilizando las herramientas vistas."],
                    ["subinstruction" => "Define y establece El Reto en una frase que permita entenderlo de forma sencilla, entendible y que se relacione con la información obtenida en la investigación y análisis previo."],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 5
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>el análisis PESTEL.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "Análisis y contexto",
                "img" => "img/act/iStock-1179535344.jpg",
                "text" => "<div>DiDi es una empresa de movilidad alternativa que llegó a México en 2018 y ahora está en más de treinta ciudades de la República. Actualmente se encuentra en un punto en el cual necesita ofrecer soluciones innovadoras para sus usuarios de México, con la finalidad de hacer frente a sus competidores Uber y Beat.
                    <br><br>
                    Es por esto que DiDi ha solicitado tu ayuda para  realizar el análisis y mapa de contexto. Reflexiona: ¿Cuál es la problemática actual de DiDi? ¿Cuáles son los factores políticos, económicos, sociales, tecnológicos, ambientales y legales  que intervienen en el Reto?
                    <br><br>
                    Estás preguntas pueden ser respondidas al realizar el análisis PESTEL y mapear la información obtenida mediante la investigación que realices con los recursos que tengas disponibles. 
                    <br><br>
                    Recuerda que definir el contexto permite enfocar la problemática y el Reto de mejor forma.  
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Entra a Miro.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/es/' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Entra en el board del proyecto de los Slabs anteriores o genera uno nuevo."],
                    ["subinstruction" => "Importa en el board la plantilla Context map.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/context map.png' class='tracker btn btn-outline-primary' download='context map.png'>Context map</a>
                    </div>"],
                    ["subinstruction" => "Realiza un análisis PESTEL del contexto del Reto."],
                    ["subinstruction" => "Mapea los resultados en la plantilla."],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya lo compartirás más adelante."],
                ],
            ]
        ]
    ],
    //SLAB 6
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>el análisis del contexto.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "Contexto",
                "img" => "img/act/iStock-958697476.jpg",
                "text" => "<div>DiDi, una empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios de México, con la finalidad de responder a sus competidores, Uber y Beat.
                    <br><br>
                    DiDi cuenta con 10 millones de usuarios activos dentro de la plataforma en México y 350 000 socios conductores y repartidores, tanto para su segmento de movilidad como para el de entrega de alimentos a domicilio, según datos de la propia compañía.
                    <br><br>
                    La empresa, preocupada por su crecimiento, ha solicitado tu ayuda para identificar a los actores relacionados con este proyecto. Podrá entonces analizar y entender el contexto al mapear la información obtenida a partir de una investigación que responda las siguientes preguntas: 
                    <ul>
                        <li>¿Quiénes son los principales competidores?</li>
                        <li>¿Qué organismos están involucrados en el negocio en México?</li>
                        <li>¿Cuál es el rango de edad de los usuarios de DiDi?</li>
                        <li>¿Qué características comparten los usuarios de DiDi?</li>
                    </ul>  
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Entra a Miro/Stakeholder.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/templates/stakeholder-map/' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Utiliza el template para generar el stakeholder map."],
                    ["subinstruction" => "Importa en el board la plantilla de persona.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/Persona canvas.jpeg' class='tracker btn btn-outline-primary' download='Persona canvas.jpeg'>Plantilla de persona</a>
                    </div>"],
                    ["subinstruction" => "Crea dos personas del proyecto."],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya lo compartirás más adelante."],
                ],
            ]
        ]
    ],
    //SLAB 7
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>la propuesta de valor.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "Tú y la propuesta de valor",
                "img" => "img/act/iStock-1159448093.jpg",
                "text" => "<div>DiDi, la empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios de México, con la finalidad de responder a la competencia de Uber y Beat; por lo que es necesario analizar y entender el contexto.
                    <br><br>
                    Beat estrenó un servicio de cero emisiones con vehículos eléctricos, mientras que Uber lanzó una campaña de publicidad enfocada en la seguridad para los usuarios de su plataforma.
                    <br><br>
                    DiDi te ha contratado para que diseñes la propuesta de valor que lo llevará a ser el número uno en movilidad alternativa en México. 
                    <br><br>
                    <ul>
                        <li>¿Cuáles son las principales quejas de los usuarios?</li>
                        <li>¿Qué mejoras ha lanzado la competencia en su producto?</li>
                        <li>¿Se podrá generar una propuesta de valor significativa?</li>
                    </ul> 
                    Reflexiona sobre estas y otras preguntas, que te permitan entender la posición actual de los usuarios y el servicio de DiDi, a través de la búsqueda y análisis de información. También contempla el capital económico, humano y tecnológico con el que DiDi cuenta para desarrollar e implementar las propuestas de valor que generarás a partir de las necesidades de los usuarios. 
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Ingresa a Miro.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='http://www.miro.com' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Entra al board de proyecto de los Slabs anteriores o genera uno nuevo."],
                    ["subinstruction" => "Importa en el board la plantilla Value Proposition.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/Value Proposition Canvas.jpeg' class='tracker btn btn-outline-primary' download='Value Proposition Canvas.jpeg'>Value Proposition</a>
                    </div>"],
                    ["subinstruction" => "Sigue los pasos de los videos de referencia."],
                    ["subinstruction" => "Crea una propuesta de valor para DiDi."],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya lo compartirás más adelante."],
                ],
            ]
        ]
    ],
    //SLAB 8
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>ideación en el método Design Thinking.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "¿Alguna idea?",
                "img" => "img/act/iStock-1308590302.jpg",
                "text" => "<div>DiDi, una empresa de movilidad alternativa, con la finalidad de responder a su competencia, Uber y Beat; necesita ofrecer una solución innovadora para sus usuarios de México. Ha planeado invertir 3000 millones de pesos en México y asegura que uno de cada dos de sus conductores gana en promedio $25 000 al mes, también han creado Puntos DiDi, un programa en el que los usuarios acumulan puntos cada vez que realizan viajes; esos puntos los podrán cambiar por recompensas que incluyen viajes a la playa.
                    <br><br>
                    A pesar de estas ideas, DiDi sigue buscando innovar como empresa de movilidad alternativa y mejorar en su servicio, por lo que ha solicitado tu ayuda para producir ideas que solucionen su problemática.
                    <br><br>
                    ¿Qué otras ideas se te ocurren?
                    <br>
                    Con ese presupuesto de inversión, ¿qué ideas se podrían aplicar?
                    <br>
                    Si el presupuesto fuera de sólo $5000, ¿qué alternativas se podrían ejecutar?
                    <br><br>
                    Recuerda que las ideas pueden ser muy factibles y que incluso puedes explorar alternativas más experimentales. 
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Ingresa a Miro.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='http://www.miro.com' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Entra al board de proyecto de los Slabs anteriores o genera uno nuevo."],
                    ["subinstruction" => "Siéntete libre de utilizar el lienzo  para generar lluvia de ideas, mapas mentales, hacer anotaciones, pegar imágenes, insertar videos, entre muchas otras cosas."],
                    ["subinstruction" => "Genera al menos diez ideas de posibles soluciones."],
                    ["subinstruction" => "Selecciona las tres que creas tienen mejores posibilidades de resolver el Reto."],
                    ["subinstruction" => "Redacta y explica brevemente las tres ideas seleccionadas."],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya que lo compartirás más adelante."],
                ],
            ]
        ],
        "extra_element" => 
        [
            "extra_intro" => "<strong>Nota.</strong> Para realizar esta actividad, es necesario que conozcas previamente las dos fases anteriores del método Design Thinking.",
            "extra_instruction_list" => 
            [
        
            ]
        ]
    ],
    //SLAB 9
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>prototipado.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "Probando... 1, 2, 3",
                "img" => "img/act/iStock-1300792680.jpg",
                "text" => "<div>DiDi, una empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios de México, con la finalidad de responder a sus competidores, Uber y Beat. Ha planeado invertir $3000 millones en México con los cuales apostará por aumentar la seguridad en sus viajes y generar recompensas para los conductores.
                    <br><br>
                    Sin embargo, pueden existir más ideas que puedan implementarse para ayudar a la empresa a innovar en sus productos y servicios.
                    <br><br>
                    En su búsqueda de innovación DiDi se ha cuestionado ¿Cómo probar ideas innovadoras sin la necesidad de emplear demasiados recursos monetarios ni de tiempo? 
                    <br><br>
                    DiDi ha solicitado de tus servicios para que los ayudes a contestar esta interesante pregunta.
                    <br><br>
                    Recuerda que las ideas deben probarse de forma rápida, con los recursos disponibles, y con elementos que permitan validarla con usuarios.             
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Selecciona algunas de las herramientas vistas."],
                    ["subinstruction" => "Desarrolla una idea de posible solución para la problemática."],
                    ["subinstruction" => "Genera un prototipo rápido de la idea."],
                    ["subinstruction" => "Ingresa a Miro.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='http://www.miro.com' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Entra al board de tu proyecto (de los slabs anteriores) o genera uno nuevo."],
                    ["subinstruction" => "Sube fotos y archivos de tus prototipos a un board de Miro"],
                    ["subinstruction" => "Guarda el enlace del board del proyecto, ya que lo compartirás más adelante."]
                ],
            ]
        ],
    ],
    //SLAB 10
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>pruebas.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //Paso 4
            [
                "case_title" => "El camino a las soluciones",
                "img" => "img/act/iStock-1295900106.jpg",
                "text" => "<div>DiDi, una empresa de movilidad alternativa, se encuentra en un punto en el cual necesita ofrecer una solución innovadora para sus usuarios de México, con la finalidad de responder a sus competidores, Uber y Beat.
                    <br><br>
                    DiDi te ha solicitado generar una serie de pruebas que permitan probar el prototipo realizado para comprobar los elementos de deseabilidad, viabilidad y factibilidad, con la finalidad de obtener retroalimentación de la idea.
                    <br><br>
                    Antes de continuar, presta atención a las siguientes preguntas:
                    <br>
                    ¿Cómo es la experiencia del usuario?
                    <br>
                    ¿Entiende el objetivo de la prueba?
                    <br>
                    ¿Cuáles fueron sus puntos de dificultad?
                    <br>
                    ¿Cómo podrían resolverse?
                    <br><br>
                    Recuerda que las observaciones que hagan los usuarios son importantes, ya que el método de Design Thinking está basado en el Diseño centrado en el humano. 
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Proyecto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Selecciona el tipo de prueba por realizar de acuerdo con el prototipo disponible."],
                    ["subinstruction" => "Selecciona a los participantes que pondrán a prueba tu prototipo."],
                    ["subinstruction" => "Realiza las pruebas."],
                    ["subinstruction" => "Analiza los resultados obtenidos y la retroalimentación de los usuarios."],
                    ["subinstruction" => "Genera un reporte con conclusiones de los resultados obtenidos."],
                    ["subinstruction" => "Guarda el documento generado, ya que lo compartirás más adelante."],
                ],
            ]
        ],
        "extra_element" => 
        [
            "extra_intro" => "<strong>Nota.</strong> Para realizar esta actividad de Demuestra, es necesario que conozcas de manera previa las cuatro fases anteriores del método Design Thinking.",
            "extra_instruction_list" => 
            [
        
            ]
        ]
    ],
];


//-- Instrucciones Actividad Autovaloración --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * "introduction" -> Un párrafo de introducción a la actividad (opcional)
   * "text" -> Determina si el texto es normal o negritas
   * "type" -> Determina el tipo de inciso (letra o número)
   * "extra" -> Agrega un hipervínculo después del paso
   * "extra_element" -> Agreaga una lista extra de instrucciones
   *                 -> Está compuesta de los siguientes elementos:
   *                    -> "extra_intro" -> Introducción a la sección
   *                    -> "extra_instruction_list" -> Lista de instrucciones
   *                    -> "extra_instruction" -> Instrucción extra
   
*/
$act3_instructions = [
    //Slab 1
    [   
        //Type: nada o letter
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
            
        ],
        
        
    ],
    //Slab 2
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
        
    ],
    //Slab 3
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
    ],
    //Slab 4
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
    ],
    //Slab 5
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
    ],
    //Slab 6
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
        
        
    ],
    //Slab 7
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
        
        
    ],
    //Slab 8
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
    ],
    //Slab 9
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
        
    ],
    //Slab 10
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En Mi nivel de desempeño, selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
    ],
];

//-- Herramientas autovaloración --
/* 
   FORMATO:   
   * "type" -> Indica la visualización de las herramientas:
        * "row" -> Visualización simple. La herramienta se muestra con botón
        * "col" -> Visualización alternativa. La herramienta se muestra con imagen  

   * "tool" -> Indica el link o la ruta de la herramienta
        * Ruta del archivo -> assets/docs/tools/autoval/nombre-del-archivo

   * "img" -> Indica la ruta de la imagen
        * Ruta del archivo -> img/act/nombre-del-archivo

   * "instruction" -> Breve indicación de la imagen
    */
$act3_finalization = 
[
    //Slab 1
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab1_AV.pdf',
    ],
    //Slab 2
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab2_AV.pdf',
    ],
    //Slab 3
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab3_AV.pdf',
    ],
    //Slab 4
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab4_AV.pdf',
    ],
    //Slab 5
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab5_AV.pdf',
    ],
    //Slab 6
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab6_AV.pdf',
    ],
    //Slab 7
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab7_AV.pdf',
    ],
    //Slab 8
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab8_AV.pdf',
    ],
    //Slab 9
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab9_AV.pdf',
    ],
    //Slab 10
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DESIGN_THINKING_Slab10_AV.pdf',
    ],
    
];



//-- Formulario autoevaluación --
/* 
   FORMATO:
   * Agregar el código embebido del formulario
*/
$act3_forms = 
[
/* Slab1 */    '<div data-tf-widget="W4tQ2ANE" data-tf-iframe-props="title=Formulario_DT_S1" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab2 */    '<div data-tf-widget="LuInJ9db" data-tf-iframe-props="title=Formulario_DT_S2" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab3 */    '<div data-tf-widget="GMifgKQh" data-tf-iframe-props="title=Formulario_DT_S3" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab4 */    '<div data-tf-widget="JIhcblzJ" data-tf-iframe-props="title=Formulario_DT_S4" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab5 */    '<div data-tf-widget="JIhcblzJ" data-tf-iframe-props="title=Formulario_DT_S4" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab6 */    '<div data-tf-widget="uK8fW0ln" data-tf-iframe-props="title=Formulario_DT_S6" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab7 */    '<div data-tf-widget="zSQoWu1v" data-tf-iframe-props="title=Formulario_DT_S7" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab8 */    '<div data-tf-widget="JZWB0F4J" data-tf-iframe-props="title=Formulario_DT_S8" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab9 */    '<div data-tf-widget="x3nN56AR" data-tf-iframe-props="title=Formulario_DT_S9" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab10 */   '<div data-tf-widget="pa8XnizF" data-tf-iframe-props="title=Formulario_DT_S10" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>'
];

//-- Cierre SLAB --
$act3_final_message = 
[
    "¡Felicidades aprendedor! Has terminado con éxito este Slab, donde conociste acerca de <highlight>los elementos que conforman el método de Design Thinking.</highlight>",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <highlight>Miro.</highlight>",
    "¡Enhorabuena! 90 minutos fueron suficientes para conocer sobre <highlight>Empatía</highlight> ¡Felicidades por terminar este Slab!",
    "¡Felicidades aprendedor! Ya sabes <highlight>establecer el Reto.</highlight> El éxito se obtiene sumando Slabs ¡Sigue esforzándote!",
    "¡Slab finalizado! Has <highlight>analizado el análisis y mapeo del contexto.</highlight> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Slab finalizado! Has <highlight>identificado a los Stakeholders y personas.</highlight> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <highlight>cómo generar la propuesta de valor.</highlight>",
    "¡Lo has hecho muy bien! Si quieres repasar <highlight>la Ideación,</highlight> puedes regresar al Slab las veces que desees.",
    "¡Slab finalizado! Has aprendido sobre <highlight>prototipado.</highlight> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <highlight>pruebas en el método Design Thinking.</highlight>",
];

//-- Cierre Deck --
$Diagnostic_message = 'Has concluido con éxito el Deck <highlight>Resuelve retos con Design Thinking.</highlight>
    <br><br>
    Esperamos que las actividades realizadas en esta experiencia de aprendizaje hayan contribuido al desarrollo de la competencia: <highlight>Utilizo el Design Thinking como metodología de innovación para la exploración y creación de soluciones en problemáticas puntuales.</highlight>
    <br><br>
    Estamos seguros de que lo aprendido será de gran ayuda para tu éxito y crecimiento.'

?>