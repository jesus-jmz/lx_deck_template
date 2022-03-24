<?php 

//Datos dinámicos - NO SE TOCAN -
$slab_ids = getSlabIds();
$slab_progress = getSlabsData("slab_progress"); 
$slab_act1 = getSlabsData("act_1");
$slab_act2 = getSlabsData("act_2");
$slab_act3 = getSlabsData("act_3");



//-- Nombre del deck --
$deckTitle = "Fundamentos de Scrum";

//-- Características --
$duration = "16 horas";
$level = "Básico";
$focus = "Metodología activa";
$learningExp = "Autodirigido";
$requirements = "Ninguno";

// -- Imagen Home --
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$homeImage = "img/intro.jpg";

//-- Inicio --
$deckIntro = "<strong>Fundamentos de Scrum</strong>, es un programa de 16 horas de aprendizaje en línea.<br><br>

A través de sus actividades, contenidos temáticos y momentos de valoración, se ha creado para ti una experiencia de aprendizaje que te permitirá fortalecer la competencia: <strong>Comprende los fundamentos de Scrum y se introduce en las metodologías ágiles</strong>.<br><br>
Un programa con las características del que estás a punto de iniciar te ofrece las herramientas necesarias para responder a los más altos estándares en tu desempeño.";

//-- Bienvenida --
$deckWelcome = "¡Recibe la más cordial bienvenida!";

//-- Portadas de slabs -- 
/* 
   FORMATO:
   * Ruta del archivo -> img/topics/nombre-del-archivo
*/
$slabImages = [
    "img/topics/SP3-1.png", //Slab 1
    "img/topics/SP3-2.png", //Slab 2
    "img/topics/SP3-3.png", //Slab 3
    "img/topics/SP3-4.png", //Slab 4
    "img/topics/SP3-5.png", //Slab 5
    "img/topics/SP3-6.png", //Slab 6
    "img/topics/SP3-7.png", //Slab 7
    "img/topics/SP3-8.png", //Slab 8
    "img/topics/SP3-9.png", //Slab 9
    "img/topics/SP3-10.png" //Slab 10
];

//-- Títulos de slabs (Index) --
$slabHeadings = [
    "Agilidad", //Slab 1
    "Metodologías Ágiles", //Slab 2
    "Kanban", //Slab 3
    "Marcos de Trabajo", //Slab 4
    "Principios y Valores de Scrum", //Slab 5
    "Aspectos de Scrum", //Slab 6
    "Roles y Ceremonias", //Slab 7
    "Artefactos", //Slab 8
    "Artefactos", //Slab 9
    "Uso de artefactos de Scrum" //Slab 10
];

// -- Nombre de slabs --
$slabTitles = [
      "Agilidad", //Slab 1
      "Metodologías Ágiles", //Slab 2
      "Kanban", //Slab 3
      "Marcos de Trabajo", //Slab 4
      "Principios y Valores de Scrum", //Slab 5
      "Aspectos de Scrum", //Slab 6
      "Roles y Ceremonias", //Slab 7
      "Artefactos", //Slab 8
      "Actividades de Scrum", //Slab 9
      "Uso de artefactos de Scrum" //Slab 10
];

//-- Metas de aprendizaje --
$slabGoals = [
    "Identifica la agilidad, principios y valores para su posible aplicación en proyectos.",
    "Nombra los marcos y principios de metodologías ágiles para asegurar la entrega continua de resultados en proyectos.",
    "Integra la metodología de Kanban para mejorar la organización y visibilidad de proyectos y tareas.",
    "Distingue los marcos de trabajo existentes e identifica los beneficios de la agilidad en proyectos e iniciativas.",
    "Comprende los principios y valores de Scrum para ponerlos en práctica en la gestión de proyectos.",
    "Valora los aspectos de Scrum y la importancia en la ejecución de proyectos para generar el valor esperado.",
    "Identifica los roles y ceremonias de Scrum para asegurar la agilidad en la ejecución de los proyectos.",
    "Ordena los artefactos de Scrum como herramientas clave en la gestión de proyectos.",
    "Reconoce las actividades de Scrum e involucrados para poder coordinar al equipo en el desarrollo del proyecto.",
    "Distingue el uso de los artefactos de Scrum en cada una de las etapas correspondientes para la gestión exitosa del proyecto."
];

//Videos de introducción
/* 
   FORMATO: 
   * Ruta del archivo -> assets/videos/
*/ 
$slabIntroVideos = [
    "assets/videos/SCRUM_S1.mp4", //Slab 1
    "assets/videos/SCRUM_S2.mp4", //Slab 2
    "assets/videos/SCRUM_S3.mp4", //Slab 3
    "assets/videos/SCRUM_S4.mp4", //Slab 4
    "assets/videos/SCRUM_S5.mp4", //Slab 5
    "assets/videos/SCRUM_S6.mp4", //Slab 6
    "assets/videos/SCRUM_S7.mp4", //Slab 7
    "assets/videos/SCRUM_S8.mp4", //Slab 8
    "assets/videos/SCRUM_S9.mp4", //Slab 9
    "assets/videos/SCRUM_S10.mp4", //Slab 10
];

//-- Tipos de Materiales --
/* 
   FORMATO:
   * Indicar tipo de material -> audio o video
*/ 
$slabMaterialsType = [
    "audio", //Slab 1
    "audio", //Slab 2
    "audio", //Slab 3
    "audio", //Slab 4
    "audio", //Slab 5
    "audio", //Slab 6
    "audio", //Slab 7
    "audio", //Slab 8
    "audio", //Slab 9
    "audio" //Slab 10
];

//-- Materiales --
$slabMaterials = [
    "https://player.simplecast.com/445b23b6-bc27-4e74-a276-df3b2d0a89fd?dark=true", //Slab 1
    "https://player.simplecast.com/85e8bc33-e48b-4edd-9c74-0c1bde70854f?dark=true", //Slab 2
    "https://player.simplecast.com/9a390f7d-519e-426d-9231-93ea13c5ac1d?dark=true", //Slab 3
    "https://player.simplecast.com/37dac8ef-13e3-44fc-841e-3cd203194845?dark=true", //Slab 4
    "https://player.simplecast.com/b25d2fdc-63fe-4605-aa25-2b35bdf8a82c?dark=true", //Slab 5
    "https://player.simplecast.com/2b8c572b-d266-420e-8d3b-7fe73d3550e6?dark=true", //Slab 6
    "https://player.simplecast.com/69e7aa4e-b155-4693-b305-9613c53cef77?dark=true", //Slab 7
    "https://player.simplecast.com/79b32562-e67f-4add-b96d-9c7863a12944?dark=true", //Slab 8
    "https://player.simplecast.com/dcc014d2-aebe-4e17-8264-763551178dfc?dark=true", //Slab 9
    "https://player.simplecast.com/eb37704e-3678-44ae-9f6d-ebb6c50992a5?dark=true" //Slab 10
];

//-- Transcripciones --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
 */
$slabTranscriptions = [
    
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
        "Lee con atención la información que se presenta.",
        "Selecciona el concepto que corresponda en cada caso.",
        "Completa correctamente los espacios en blanco.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala.",
    ],
    //Slab 2 
    [     
        "Lee con atención la información sobre metodologías ágiles que se presenta.",
        "Relaciona las definiciones que aparecen en una de las columnas con el concepto correspondiente.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 3
    [   
        "Identifica los conceptos clave de la metodología Kanban.",
        "Revisa detalladamente cada definición y encuentra en el crucigrama la casilla con el número que le corresponde.",
        "Escribe el concepto asociado con cada una de las definiciones que se presentan en los espacios destinados para ello.",
        "Recuerda llenar las casillas horizontales (Across) y verticales (Down).",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 4
    [   
        "Lee atentamente cada uno de los conceptos clave sobre los marcos de trabajo en metodologías ágiles.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 5
    [   
        "Identifica los conceptos clave de los principios y valores de Scrum.",
        "Revisa detalladamente cada definición y encuentra en el crucigrama la casilla con el número que le corresponde.",
        "Escribe el concepto asociado con cada una de las definiciones que se presentan en los espacios destinados para ello.",
        "Recuerda llenar las casillas horizontales (Across) y verticales (Down).",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 6
    [   
        "Lee atentamente cada uno de los conceptos clave relacionados con los aspectos Scrum.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 7
    [   
        "Analiza cuidadosamente las imágenes sobre las ceremonias Scrum.",
        "Identifica y relaciona  los conceptos clave con las imágenes presentadas.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la imagen correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 8
    [   
        "Lee atentamente los conceptos clave sobre artefactos de Scrum.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 9
    [   
        "Lee atentamente cada uno de los conceptos clave sobre las actividades de Scrum.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ],
    //Slab 10
    [   
        "Lee atentamente los conceptos clave sobre el uso de artefactos Scrum.", 
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala."
    ]
];

//-- Herramientas Actividad Descibre --
$act1_tools = [
/* Slab 1 */'<iframe src="https://lxlab.h5p.com/content/1291502599954061738/embed" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 2 */'<iframe src="https://quizlet.com/644474411/match/embed?i=42o8f6&x=1jj1" height="500" width="100%" style="border:0"></iframe>',
/* Slab 3 */'<iframe src="https://lxlab.h5p.com/content/1291492127646908168/embed" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 4 */'<iframe src="https://lxlab.h5p.com/content/1291502731695848788/embed" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 5 */'<iframe src="https://lxlab.h5p.com/content/1291493038888281118/embed" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 6 */'<iframe src="https://lxlab.h5p.com/content/1291547626500764878/embed" aria-label="Aspectos de Scrum_Slab 6" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 7 */'<iframe src="https://quizlet.com/645952766/match/embed?i=42o8f6&x=1jj1" height="500" width="100%" style="border:0"></iframe>',
/* Slab 8 */'<iframe src="https://quizlet.com/646435216/match/embed?i=42o8f6&x=1jj1" height="500" width="100%" style="border:0"></iframe>',
/* Slab 9 */'<iframe src="https://quizlet.com/646956091/match/embed?i=42o8f6&x=1jj1" height="500" width="100%" style="border:0"></iframe>',
/* Slab 10*/'<iframe src="https://quizlet.com/646933765/match/embed?i=42o8f6&x=1jj1" height="500" width="100%" style="border:0"></iframe>'
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
                "instruction" => "Elabora un cuadro sinóptico en el que:",
                "list" => [
                    ["item" => "Expliques qué es el enfoque Agile"],
                    ["item" => "Menciones cuáles son los valores y los principios que lo sustentan."],
                    ["item" => "Describas cómo la Agilidad contribuye a la optimización de los proyectos."],
                    ["item" => "Añades al menos un ejemplo concreto."],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Para guiarte en la elaboración de este esquema visual, te sugerimos descargar la guía para elaborar un cuadro sinóptico.", 
                "instruction_extra" => '<a href="assets/docs/tools/demuestra/G_Cuadro_Sinoptico.pdf" targer="_blank" class="tracker btn btn-outline-primary">Guía para cuadro sinóptico</a>'
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar:",
                "instruction_extra" =>  '<a class="tracker text-center" href="https://app.diagrams.net" target="_blank"><img src="img/logos/drawio.png" alt="Logo drawio"/></a>'
            ],
            //Paso 4
            [
                "instruction" => "Guarda el enlace con el resultado de la actividad.",
            ],
        ]
    ],
    //SLAB 2
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre Metodologías ágiles.", 
                
            ],
            //Paso 2
            [
                "instruction" => "Investiga sobre el tema a exponer en fuentes de información confiables.",
                "list" => [
                    ["item" => "Qué son las metodologías ágiles"],
                    ["item" => "Qué es y en qué consiste la metodología Agile"],
                    ["item" => "Qué es y en qué consiste la metodología Scrum"],
                    ["item" => "Qué es y en qué consiste la metodología Kanban"],
                    ["item" => "Qué es y en qué consiste la metodología Crystal"],
                    ["item" => "Qué es y en qué consiste la metodología XP o Xtreme Programing"],
                ],
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/G_Infogragia.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "Analiza, selecciona y organiza  de manera jerárquica la información a presentar en la Infografía.",
                "list" => [
                    ["item" => "Distingue los elementos clave de los elementos secundarios"],
                    ["item" => "Apóyate en un breve esquema inicial para asegurarte de que presentarás la información de manera ordenada y coherente"],
                ],
            ],
            //Paso 5
            [
                "instruction" => "Crea un primer boceto. Considera para esta etapa inicial elementos como:",
                "list" => [
                    ["item" => "El tema a desarrollar"],
                    ["item" => "La información relevante y la información complementaria"],
                    ["item" => "El orden de exposición"],
                    ["item" => "Los apoyos visuales que necesitarás"],
                ],
            ],
            //Paso 6
            [
                "instruction" => "Crea un primer boceto. Considera para esta etapa inicial elementos como:",
                "subinstruction_list" => [
                    ["subinstruction" => "El perfil del lector. Adapta el lenguaje y las imágenes de acuerdo a la situación y a las personas a quienes está dirigida"],
                    ["subinstruction" => "Apoyos gráficos. Depura los elementos considerados en el boceto inicial y define los textos, imágenes, colores y tipografía que integrarán tu Infografía"],
                    ["subinstruction" => "Combinaciones de colores. Selecciona mezclas que faciliten la lectura, como fondos oscuros con letras claras, fondos de imagen que contrasten, etc."],
                    ["subinstruction" => "Textos cortos. Procura expresar ideas e informaciones en frases concretas que despierten el interés."],
                    ["subinstruction" => "Proporciones. Asegúrate de que las dimensiones de los textos y los apoyos visuales mantengan dimensiones armónicas."],
                    ["subinstruction" => "Referencias. No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el", "subinstruction_extra" => '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'],
                ],
            ],
            //Paso 7
            [
                "instruction" => "Cerciórate de que la información que presentas está completa y es legible.",
                
            ],
            //Paso 8
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 9
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
                
            ],
        ]
    ],
    //SLAB 3
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Realiza un diagrama de flujo sobre el proceso para elaborar un tablero Kanban básico de cuatro columnas:", 
                "list" => [
                    ["item" => "Pendientes"],
                    ["item" => "Haciendo"],
                    ["item" => "Probando"],
                    ["item" => "Hecho"],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Identifica los pasos que se necesitan para armar el tablero básico Kanban. Recuerda que estos pasos deben incluir un inicio y un fin.", 
                
            ],
            //Paso 3
            [
                "instruction" => "Utiliza como apoyo la guía para elaborar un diagrama de flujo.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/G_Diagrama_Flujo.pdf" class="tracker btn btn-outline-primary">Guía diagrama de flujo</a>'
            ],
            //Paso 4
            [
                "instruction" => "Indica cuáles son las etapas del proceso, incluyendo entradas (inputs) y salidas (outputs). Estas pueden ser informaciones, decisiones, componentes, acciones, entre otras. Recuerda que deben ser descritos de forma sencilla y afirmativa.",
            ],
            //Paso 5
            [
                "instruction" => "Dibuja los símbolos que necesites y escribe dentro de ellos las entradas y salidas del proceso.",
            ],
            //Paso 6
            [
                "instruction" => "Ordena los símbolos paso por paso, considerando las idas y venidas en el proceso, tal como si explicaras a alguien cómo hacer un tablero Kanban. Recuerda que el diagrama ayuda a visualizar cómo se realizan las operaciones y debe leerse de arriba hacia abajo y de izquierda a derecha.",
            ],
            //Paso 7
            [
                "instruction" => "Verifica que el acceso a cada bloque o símbolo sea por arriba y/o por la izquierda, y que la trayectoria de salida sea por abajo y/o por la derecha. Toma en cuenta que la salida es única excepto en los símbolos de decisión.",
            ],
            //Paso 8
            [
                "instruction" => "Considera los elementos visuales en la  presentación de tu diagrama de flujo y utiliza tipografía fácil de leer, con un tamaño proporcional al de los símbolos. ",
            ],
            //Paso 9
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar",
                "instruction_extra" =>  '<a class="tracker text-center" href="https://app.diagrams.net" target="_blank"><img src="img/logos/drawio.png" alt="Logo drawio"/></a>'
            ],
            //Paso 10
            [
                "instruction" => "Guarda el enlace con el resultado de la actividad.",
            ],
        ]
    ],
    //SLAB 4
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía que permita visualizar los elementos comunes y los elementos particulares de algunos de los marcos de metodologías ágiles.", 
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables los marcos de las siguientes metodologías ágiles:", 
                "list" => [
                    ["item" => "Agile"],
                    ["item" => "Scrum"],
                    ["item" => "Kanban"],
                    ["item" => "Crystal (existen varios, por lo que te sugerimos utilizar el marco general de esta metodología)"],
                    ["item" => "Xtreme Programing (XP)"],
                ],
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/G_Infogragia.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "Analiza, selecciona y organiza  de manera jerárquica la información a presentar en la Infografía.",
                "subinstruction_list" => [
                    ["subinstruction" => "Distingue los elementos clave de los elementos secundarios"],
                    ["subinstruction" => "Apóyate en un breve esquema inicial para asegurarte de que presentarás la información de manera ordenada y coherente"],
                ],
            ],
            //Paso 5
            [
                "instruction" => "Crea un primer boceto. Considera para esta etapa inicial elementos como:", 
                "list" => [
                    ["item" => "El tema a desarrollar"],
                    ["item" => "La información relevante y la información complementaria"],
                    ["item" => "El orden de exposición"],
                    ["item" => "Los apoyos visuales que necesitarás"],
                ],
            ],
            //Paso 6
            [
                "instruction" => "Elabora tu Infografía considerando:",
                "subinstruction_list" => [
                    ["subinstruction" => "El perfil del lector. Adapta el lenguaje y las imágenes de acuerdo a la situación y a las personas a quienes está dirigida."],
                    ["subinstruction" => "Apoyos gráficos. Depura los elementos considerados en el boceto inicial y define los textos, imágenes, colores y tipografía que integrarán tu Infografía."],
                    ["subinstruction" => "Combinaciones de colores. Selecciona mezclas que faciliten la lectura, como fondos oscuros con letras claras, fondos de imagen que contrasten, etc."],
                    ["subinstruction" => "Textos cortos. Procura expresar ideas e informaciones en frases concretas que despierten el interés."],
                    ["subinstruction" => "Proporciones. Asegúrate de que las dimensiones de los textos y los apoyos visuales mantengan dimensiones armónicas."],
                    ["subinstruction" => "Referencias. No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el", "subinstruction_extra" => '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'],
                ],
            ],
            //Paso 7
            [
                "instruction" => "Cerciórate de que la información que presentas está completa y es legible.", 
            ],
            //Paso 8
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar la infografía. Te sugerimos explorar",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 9
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.", 
            ],
        ]
    ],
    //SLAB 5
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Prepara una exposición sobre los principios y valores de Scrum. Para ello,  te sugerimos tener presentes los siguientes elementos:", 
                "subinstruction_list" => [
                    [   
                        "subinstruction" => "Tema: Principios Scrum",
                        "subinstruction_sublist" => 
                        [
                            ["item" => "Control del proceso empírico"],
                            ["item" => "Autoorganización"],
                            ["item" => "Colaboración"],
                            ["item" => "Priorización basada en valor"],
                            ["item" => "Asignación de un bloque de tiempo (temporalidad)"],
                            ["item" => "Desarrollo iterativo"],
                        ],
                    ],
                    [   
                        "subinstruction" => "Tema: Valores Scrum",
                        "subinstruction_sublist" => 
                        [
                            ["item" => "Foco"],
                            ["item" => "Coraje"],
                            ["item" => "Apertura"],
                            ["item" => "Compromiso"],
                            ["item" => "Respeto"],
                        ],
                    ],
                    ["subinstruction" => "Ejemplos que te permitan explicar los temas de tu presentación."],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Planea el objetivo, contenido y actividades relacionadas con el tema a exponer. Utiliza el recuadro que se encuentra a continuación para organizar de manera eficiente la información.", 
                "instruction_extra" => '<a href="assets/docs/tools/demuestra/Screencast.pdf" class="tracker btn btn-outline-primary" target="_blank">Screencast-PDF</a>'
            ],
            //Paso 3
            [
                "instruction" => "Genera con antelación los materiales visuales que necesitarás para desarrollar tu exposición. Por ejemplo:",
                "subinstruction_list" => [
                    ["subinstruction" => "Una presentación que recopile texto relevante, imágenes o gráficos sobre el tema."],
                    ["subinstruction" => "Un sitio web, software, plataforma o aplicación para realizar la demostración del tema."],
                    ["subinstruction" => "Infográficos o documentos de referencia."],
                    ["subinstruction" => "Recuerda que la duración mínima del video es de 8 minutos y que tu aparición a cuadro en el video es opcional."],
                ],
            ],
            //Paso 4
            [
                "instruction" => "Utiliza la aplicación Screencast. Para ello, ingresa al sitio web y consulta el siguiente video tutorial.  
                LX LAB [Experience LAB]. (2021, 12 noviembre). Video Tutorial Screencast_Screencast O Matic.mp4 [Vídeo].",
                "instruction_extra" => '<div class="tracker tutorial">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/UEUAIg8SNHs?start=39"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>'
            ],
            //Paso 5
            [
                "instruction" => "Considera que para diseñar tu presentación, puedes utilizar las siguientes herramientas:",
                "instruction_extra" =>  '<a class="tracker text-center" href="https://www.visme.co/es/" target="_blank"><img src="img/logos/visme.png" alt="Logo visme"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace de tu Screencast y el de la presentación con el resultado de tu actividad.",
            ],
        ]
    ],
    //SLAB 6
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente Estudio de caso.", 
            ],
            //Paso 1
            [
                "instruction" => "Responde correctamente al cuestionario que encontrarás al finalizar la lectura.", 
            ],
            //Paso 1
            [
                "case_title" => "La compañía M9",
                "img" => "img/act/ECD-S6.png",
                "text" => "Los directivos de la compañía M9 reunieron al equipo de desarrollo de software a primera hora de la mañana para notificarles que en breve darían inicio a un nuevo proyecto.<br>
                    Con el propósito de que los miembros del equipo tuvieran conocimiento de lo que estaban a punto de desarrollar, fue necesario realizar un levantamiento de requerimientos previos a través de una serie de entrevistas con los clientes. De esta forma, estarían en condiciones de identificar las necesidades del cliente y también podrían presentar un análisis del trabajo que la empresa hace, incluyendo la gestión de los empleados, los productos y/o servicios que se ofrecen y los tiempos estimados para las entregas.
                    <br><br>
                    Una vez recopilada, toda esta información se le comunicó a un miembro del equipo, en funciones de un core-rol, quien se encargó de verificar que se contaba con todos los insumos necesarios y también de cerciorarse de tener un entorno de trabajo adecuado para el desarrollo de las actividades del proyecto. 
                    <br><br>
                    El equipo, por su parte, comenzó a ubicar y entender los roles y responsabilidades de la nueva encomienda y pronto entendieron que estarían trabajando en un proyecto que no era meramente lineal, puesto que podría cambiar con el tiempo.
                    <br><br>
                    Una vez echado a andar el desarrollo del proyecto, el equipo de trabajo realizó las entregas de sus sprints de manera puntual y comprometida: llevaron a cabo juntas de revisión, entregaron productos funcionales y que aportaron valor a las entregas parciales.  
                    <br><br>
                    Sin embargo, en un momento dado, se presentó una situación particular: descubrieron que había elementos en los desarrollos que el cliente no había solicitado. Después de revisar la situación, los miembros del equipo señalaron que esto pudo deberse a que el Product Owner en ningún momento estuvo presente en la redacción de las historias de usuarios.  Por su parte, el Product Owner aclaró que él había dado la descripción detallada y completa del proyecto a desarrollar.
                    <br><br>
                    Esta situación resultó determinante para que el cliente decidiera poner fin al plan de colaboración con la compañía M9, pues a pesar de que recibió productos de valor, no le fueron entregados tal como los había solicitado.",
                "diagnostic" => '<div data-tf-widget="Xb4ttTNG" data-tf-iframe-props="title=Aspectos de Scrum_BSP2_Slab6_" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>' 
            ],
            
        ]
    ],
    //SLAB 7
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora un cuadro sinóptico en el que expliques:", 
                "list" => [
                    ["item" => "Los tres roles de Scrum"],
                    ["item" => "Las características y atribuciones de cada uno de los roles"],
                    ["item" => "Cómo se distinguen los roles entre sí"],
                    ["item" => "En qué ceremonias Scrum participan los diferentes roles"],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Para guiarte en la elaboración de este esquema visual, te sugerimos descargar la guía para elaborar un cuadro sinóptico.", 
                "instruction_extra" => '<a  href="assets/docs/tools/demuestra/G_Cuadro_Sinoptico.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para cuadro sinóptico</a>'
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar:",
                "instruction_extra" =>  '<a class="tracker text-center" href="https://app.diagrams.net" target="_blank"><img src="img/logos/drawio.png" alt="Logo drawio"/></a>'
            ],
            //Paso 4
            [
                "instruction" => "Guarda el enlace con el resultado de la actividad.",
            ],
        ]
    ],
    //SLAB 8
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre los artefactos de Scrum.", 
            ],
            //Paso 2
            [
                "instruction" => "Investiga los siguientes temas en fuentes de información confiables.", 
                "list" => [
                    ["item" => "Qué son los artefactos Scrum"],
                    ["item" => "Qué es el Product Backlog"],
                    ["item" => "Qué es el Sprint Backlog"],
                    ["item" => "Qué es Increment o incremento"],
                    ["item" => "Recopila al menos 1 ejemplo real de cómo los artefactos Scrum contribuyen en la gestión de los proyectos"],
                ],
            ],
            //Paso 3
            [
                "instruction" => "Analiza, selecciona y organiza  de manera jerárquica la información a presentar en la Infografía.",
                "subinstruction_list" => [
                    ["subinstruction" => "Distingue los elementos clave de los elementos secundarios."],
                    ["subinstruction" => "Apóyate en un breve esquema inicial para asegurarte de que presentarás la información de manera ordenada y coherente."],
                    ["subinstruction" => "Elabora una breve explicación de cada artefacto. Recuerda que es una infografía y el texto debe ser conciso y tener equilibrio con las imágenes."],
                    ["subinstruction" => "Toma en consideración que los artefactos se encuentran encadenados entre sí, por lo que podrías desarrollar tu infografía como un proceso."],
                ],
            ],
            //Paso 4
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" => '<a href="assets/docs/tools/demuestra/G_Infogragia.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para la infografía</a>'
            ],
            //Paso 5
            [
                "instruction" => "Crea un primer boceto. Considera para esta etapa inicial elementos como:", 
                "list" => [
                    ["item" => "El tema a desarrollar"],
                    ["item" => "La información relevante y la información complementaria"],
                    ["item" => "El orden de exposición"],
                    ["item" => "Los apoyos visuales que necesitarás"],
                ],
            ],
            //Paso 6
            [
                "instruction" => "Elabora tu Infografía considerando:",
                "subinstruction_list" => [
                    ["subinstruction" => "El perfil del lector. Adapta el lenguaje y las imágenes de acuerdo a la situación y a las personas a quienes está dirigida"],
                    ["subinstruction" => "Apoyos gráficos. Depura los elementos considerados en el boceto inicial y define los textos, imágenes, colores y tipografía que integrarán tu Infografía"],
                    ["subinstruction" => "Combinaciones de colores. Selecciona mezclas que faciliten la lectura, como fondos oscuros con letras claras, fondos de imagen que contrasten, etc."],
                    ["subinstruction" => "Textos cortos. Procura expresar ideas e informaciones en frases concretas que despierten el interés."],
                    ["subinstruction" => "Proporciones. Asegúrate de que las dimensiones de los textos y los apoyos visuales mantengan dimensiones armónicas"],
                    ["subinstruction" => "Referencias. No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el", "subinstruction_extra" => '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'],
                ],
            ],
            //Paso 7
            [
                "instruction" => "Cerciórate de que la información que presentas está completa y es legible.",
            ],
            //Paso 8
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar la infografía. Te sugerimos explorar",
                "instruction_extra" => '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 9
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ],
        ]
    ],
    //SLAB 9
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Prepara una exposición sobre los compromisos de los artefactos Scrum. Para ello, deberás tener presentes los siguientes elementos:", 
                "subinstruction_list" => [
                    [   
                        "subinstruction" => "Compromisos de los artefactos Scrum",
                        "subinstruction_sublist" => 
                        [
                            ["item" => "Objetivo del producto"],
                            ["item" => "Objetivo del Sprint"],
                            ["item" => "Definición de terminado"],
                        ],
                    ],
                    [   
                        "subinstruction" => "Roles de Scrum",
                        "subinstruction_sublist" => 
                        [
                            ["item" => "Product Owner"],
                            ["item" => "Scrum Máster"],
                            ["item" => "Scrum Team"],
                        ],
                    ],
                    ["subinstruction" => "Algunos ejemplos que te permitan explicar cómo se vinculan los compromisos con determinados artefactos y cómo los roles adquieren esos compromisos."],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Planea el objetivo, contenido y actividades relacionadas con el tema a exponer. Utiliza el recuadro que se encuentra a continuación para organizar de manera eficiente la información.", 
                "instruction_extra" => '<a  href="assets/docs/tools/demuestra/Screencast.pdf" class="tracker btn btn-outline-primary" target="_blank">Screencast-PDF</a>'
            ],
            //Paso 3
            [
                "instruction" => "Genera con antelación los materiales visuales que necesitarás para desarrollar tu exposición. Por ejemplo:",
                "subinstruction_list" => [
                    ["subinstruction" => "Una presentación que recopile texto relevante, imágenes o gráficos sobre el tema."],
                    ["subinstruction" => "Un sitio web, software, plataforma o aplicación para realizar la demostración del tema."],
                    ["subinstruction" => "Infográficos o documentos de referencia."],
                ],
            ],
            //Paso 2
            [
                "instruction" => "Recuerda que la extensión mínima del video es de 5 minutos y que tu aparición a cuadro es opcional.", 
            ],
            //Paso 4
            [
                "instruction" => "Utiliza la aplicación Screencast. Para ello, ingresa al sitio web y consulta el siguiente video tutorial.  
                LX LAB [Experience LAB]. (2021, 12 noviembre). Video Tutorial Screencast_Screencast O Matic.mp4 [Vídeo].",
                "instruction_extra" => '<div class="tracker tutorial">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/UEUAIg8SNHs?start=39"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>'
            ],
            //Paso 5
            [
                "instruction" => "Considera que para diseñar tu presentación, puedes utilizar las siguientes herramientas:",
                "instruction_extra" =>  '<a class="tracker text-center" href="https://www.visme.co/es/" target="_blank"><img src="img/logos/visme.png" alt="Logo visme"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace de tu Screencast y el de la presentación con el resultado de tu actividad.",
            ],
        ]
    ],
    //SLAB 10
    ["instruction_list" => 
        //Slab 1
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre los artefactos Scrum.", 
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables:", 
                "list" => [
                    ["item" => "¿Qué son los artefactos Scrum?"],
                    ["item" => "¿Qué ítems los conforman?"],
                    ["item" => "Refiere al menos un ejemplo práctico de un proyecto en el que se puedan visibilizar los artefactos Scrum y sus ítems"],
                ],
            ],
            //Paso 3
            [
                "instruction" => "Analiza, selecciona y organiza  de manera jerárquica la información a presentar en la Infografía.", 
                "subinstruction_list" => [
                    ["subinstruction" => "Distingue los elementos clave de los elementos secundarios"],
                    ["subinstruction" => "Apóyate en un breve esquema inicial para asegurarte de que presentarás la información de manera ordenada y coherente. Ten en cuenta que la base de tu infografía son los artefactos Scrum y los ítems que los conforman. El ejemplo deberá insertarse en cada uno de los artefactos para comprenderlos mejor."],
                    ["subinstruction" => "Elabora una breve explicación de cada metodología. Recuerda que en una infografía y los textos deben ser concretos y mantener  equilibrio con las imágenes."],
                ],
            ],
            //Paso 4
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.", 
                "instruction_extra" => '<a href="assets/docs/tools/demuestra/G_Infogragia.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para infografía</a>'
            ],
            //Paso 5
            [
                "instruction" => "Crea un primer boceto. Considera para esta etapa inicial elementos como:", 
                "list" => [
                    ["item" => "El tema a desarrollar"],
                    ["item" => "La información relevante y la información complementaria"],
                    ["item" => "El orden de exposición"],
                    ["item" => "Los apoyos visuales que necesitarás"],
                ],
            ],
            //Paso 6
            [
                "instruction" => "Elabora tu Infografía considerando:", 
                "subinstruction_list" => [
                    ["subinstruction" => "El perfil del lector. Adapta el lenguaje y las imágenes de acuerdo a la situación y a las personas a quienes está dirigida"],
                    ["subinstruction" => "Apoyos gráficos. Depura los elementos considerados en el boceto inicial y define los textos, imágenes, colores y tipografía que integrarán tu Infografía"],
                    ["subinstruction" => "Combinaciones de colores. Selecciona mezclas que faciliten la lectura, como fondos oscuros con letras claras, fondos de imagen que contrasten, etc."],
                    ["subinstruction" => "Textos cortos. Procura expresar ideas e informaciones en frases concretas que despierten el interés."],
                    ["subinstruction" => "Proporciones. Asegúrate de que las dimensiones de los textos y los apoyos visuales mantengan dimensiones armónicas"],
                    ["subinstruction" => "Referencias. No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el", "subinstruction_extra" => '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'],
                ],
            ],
            //Paso 7
            [
                "instruction" => "Cerciórate de que la información que presentas está completa y es legible.",
            ],
            //Paso 8
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar la infografía. Te sugerimos explorar",
                "instruction_extra" => '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 9
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ],
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
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Utiliza el Semáforo de Autovaloración para analizar tu nivel de desempeño de acuerdo con la actividad de la sección "Demuestra".',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento cada uno de los elementos.",
            ],
            //Paso 3
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestras a partir de los requerimientos que te solicitaron para realizar la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre la experiencia de aprendizaje que acabas de realizar en el recuadro que aparece al final.",
            ],
            //Paso 4
            [
                "instruction" => "Guarda y conserva el archivo PDF con tus respuestas.",
            ],
            
        ],
        
        
    ],
    //Slab 2
    [   
        //Intro
        "introduction" => "Utiliza la Escala de autovaloración que se encuentra en el apartado Herramienta de Autovaloración para analizar tu nivel de desempeño de acuerdo con las especificaciones establecidas para su realización. Atiende con detalle las siguientes indicaciones:",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            
            //Paso 1
            [
                "instruction" => "Lee con detenimiento cada uno de los Criterios de valoración.",
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.", 
            ],
            //Paso 3
            [
                "instruction" => "Marca una sola <b>X</b> en cada fila titulada <i>Mi nivel de desempeño</i>.",
            ],
            //Paso 4
            [
                "instruction" => "Verifica que tu elección corresponda al <i>Nivel de desempeño</i> con el que mejor identifiques el resultado de tu evidencia de aprendizaje.",
            ],
             //Paso 5
             [
                "instruction" => "Recuerda que los elementos que ubiques en las escalas <b>Aceptable</b> e <b>Inaceptable</b> representan oportunidades para seguir mejorando tus aprendizajes", 
            ],
            //Paso 6
            [
                "instruction" => "Por último, comparte tus reflexiones sobre la experiencia de aprendizaje que acabas de realizar en el recuadro que aparece al final.",
            ],
            //Paso 7
            [
                "instruction" => "Guarda y conserva tu actividad con tus respuestas.",
            ],  
        ],
        
    ],
    //Slab 3
    [   
        //Intro
        "introduction" => "Utiliza la Diana de Autovaloración para analizar tu evidencia de aprendizaje de acuerdo con las especificaciones establecidas para su realización. Toma en cuenta que:",
        "type" => "letter",
        "text" => "bold",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "La numeración del 1 al 4 va de menos a más:",
                "list" => [
                    ["item" => "1 equivale a un desempeño Inaceptable"],
                    ["item" => "2 equivale a un desempeño Aceptable"],
                    ["item" => "3 equivale a un desempeño Bueno"],
                    ["item" => "4 equivale a un desempeño Destacado"],
                ],
                
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.",
                "extra" => 
                [
                    "text" => "Diana - Slab 3",
                    "link" => "assets/docs/tools/autoval/Diana_S3.pdf"
                ] 
            ],
            //Paso 3
            [
                "instruction" => "Ve a la Diana de Autovaloración Selecciona y desplaza el punto sobre cada eje desde la zona central hasta ubicarlo en tu nivel de desempeño de acuerdo con los criterios de cada eje.",
            ],
            //Paso 4
            [
                "instruction" => "Una vez colocados los cuatro puntos, la Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.",
            ],
             //Paso 5
             [
                "instruction" => "La Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.", 
            ], 
        ],
        "extra_element" => 
        [
            "extra_intro" => "Ten en consideración que:",
            "extra_instruction_list" => 
            [
                ["extra_instruction" => "Entre más lejos del centro de la Diana de Autovaloración esté el pico, mejor será el resultado de tu aprendizaje."],
                ["extra_instruction" => "Recuerda que los picos más próximos al centro de Diana de Autovaloración, representan áreas de oportunidad sobre las que habrá que seguir practicando y aprendiendo."],
                ["extra_instruction" => "Realiza una captura de pantalla de tu resultado en la Diana y consérvala."],
            ]
        ]
    ],
    //Slab 4
    [   
        //Intro
        "introduction" => "Utiliza la Diana de Autovaloración para analizar tu evidencia de aprendizaje de acuerdo con las especificaciones establecidas para su realización. Toma en cuenta que:",
        "type" => "letter",
        "text" => "bold",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "La numeración del 1 al 4 va de menos a más:",
                "list" => [
                    ["item" => "1 equivale a un desempeño <b>Inaceptable</b>"],
                    ["item" => "2 equivale a un desempeño <b>Aceptable</b>"],
                    ["item" => "3 equivale a un desempeño <b>Bueno</b>"],
                    ["item" => "4 equivale a un desempeño <b>Destacado</b>"],
                ],
                
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.",
                "extra" => 
                [
                    "text" => "Diana - Slab 4",
                    "link" => "assets/docs/tools/autoval/Diana_S4.pdf"
                ] 
            ],
            //Paso 3
            [
                "instruction" => "Ve a la Diana de Autovaloración Selecciona y desplaza el punto sobre cada eje desde la zona central hasta ubicarlo en tu nivel de desempeño de acuerdo con los criterios de cada eje.",
            ],
            //Paso 4
            [
                "instruction" => "Una vez colocados los cuatro puntos, la Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.",
            ],
             //Paso 5
             [
                "instruction" => "La Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.", 
            ], 
        ],
        "extra_element" => 
        [
            "extra_intro" => "Ten en consideración que:",
            "extra_instruction_list" => 
            [
                ["extra_instruction" => "Entre más lejos del centro de la Diana de Autovaloración esté el pico, mejor será el resultado de tu aprendizaje."],
                ["extra_instruction" => "Recuerda que los picos más próximos al centro de Diana de Autovaloración, representan áreas de oportunidad sobre las que habrá que seguir practicando y aprendiendo."],
                ["extra_instruction" => "Realiza una captura de pantalla de tu resultado en la Diana y consérvala."],
            ]
        ]
    ],
    //Slab 5
    [   
        //Intro
        "introduction" => "Utiliza la Diana de Autovaloración para analizar tu evidencia de aprendizaje de acuerdo con las especificaciones establecidas para su realización. Toma en cuenta que:",
        "type" => "letter",
        "text" => "bold",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "La numeración del 1 al 4 va de menos a más:",
                "list" => [
                    ["item" => "1 equivale a un desempeño <b>Inaceptable</b>"],
                    ["item" => "2 equivale a un desempeño <b>Aceptable</b>"],
                    ["item" => "3 equivale a un desempeño <b>Bueno</b>"],
                    ["item" => "4 equivale a un desempeño <b>Destacado</b>"],
                ],
                
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.",
                "extra" => 
                [
                    "text" => "Diana - Slab 5",
                    "link" => "assets/docs/tools/autoval/Diana_S5.pdf"
                ] 
            ],
            //Paso 3
            [
                "instruction" => "Ve a la Diana de Autovaloración Selecciona y desplaza el punto sobre cada eje desde la zona central hasta ubicarlo en tu nivel de desempeño de acuerdo con los criterios de cada eje.",
            ],
            //Paso 4
            [
                "instruction" => "Una vez colocados los cuatro puntos, la Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.",
            ],
             //Paso 5
             [
                "instruction" => "La Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.", 
            ], 
        ],
        "extra_element" => 
        [
            "extra_intro" => "Ten en consideración que:",
            "extra_instruction_list" => 
            [
                ["extra_instruction" => "Entre más lejos del centro de la Diana de Autovaloración esté el pico, mejor será el resultado de tu aprendizaje."],
                ["extra_instruction" => "Recuerda que los picos más próximos al centro de Diana de Autovaloración, representan áreas de oportunidad sobre las que habrá que seguir practicando y aprendiendo."],
                ["extra_instruction" => "Realiza una captura de pantalla de tu resultado en la Diana y consérvala."],
            ]
        ]
    ],
    //Slab 6
    [   
        //Bold or nomral
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Utiliza el Semáforo de Autovaloración para analizar tu nivel de desempeño de acuerdo con la actividad de la sección "Demuestra".',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento cada uno de los elementos.",
            ],
            //Paso 3
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestras a partir de los requerimientos que te solicitaron para realizar la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "En la fila “Mi nivel de desempeño” que se encuentra encima de cada criterio, selecciona el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 5
            [
                "instruction" => "Comparte tus reflexiones sobre la experiencia de aprendizaje que acabas de realizar en el recuadro que aparece al final.",
            ],
            //Paso 6
            [
                "instruction" => "Guarda y conserva el archivo PDF con tus respuestas.",
            ],
        ],
        
        
    ],
    //Slab 7
    [   
        //Bold or nomral
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Utiliza el Semáforo de Autovaloración para analizar tu nivel de desempeño de acuerdo con la actividad de la sección "Demuestra".',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento cada uno de los elementos.",
            ],
            //Paso 3
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestras a partir de los requerimientos que te solicitaron para realizar la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "En la fila “Mi nivel de desempeño” que se encuentra encima de cada criterio, selecciona el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 5
            [
                "instruction" => "Comparte tus reflexiones sobre la experiencia de aprendizaje que acabas de realizar en el recuadro que aparece al final.",
            ],
            //Paso 6
            [
                "instruction" => "Guarda y conserva el archivo PDF con tus respuestas.",
            ],
        ],
        
        
    ],
    //Slab 8
    [   //Intro
        "introduction" => "Utiliza la Diana de Autovaloración para analizar tu evidencia de aprendizaje de acuerdo con las especificaciones establecidas para su realización. Toma en cuenta que:",
        "type" => "letter",
        "text" => "bold",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "La numeración del 1 al 4 va de menos a más:",
                "list" => [
                    ["item" => "1 equivale a un desempeño <b>Inaceptable</b>"],
                    ["item" => "2 equivale a un desempeño <b>Aceptable</b>"],
                    ["item" => "3 equivale a un desempeño <b>Bueno</b>"],
                    ["item" => "4 equivale a un desempeño <b>Destacado</b>"],
                ],
                
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.",
                "extra" => 
                [
                    "text" => "Diana - Slab 8",
                    "link" => "assets/docs/tools/autoval/Diana_S8.pdf"
                ] 
            ],
            //Paso 3
            [
                "instruction" => "Ve a la Diana de Autovaloración Selecciona y desplaza el punto sobre cada eje desde la zona central hasta ubicarlo en tu nivel de desempeño de acuerdo con los criterios de cada eje.",
            ],
            //Paso 4
            [
                "instruction" => "Una vez colocados los cuatro puntos, la Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.",
            ],
             //Paso 5
             [
                "instruction" => "La Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.", 
            ], 
        ],
        "extra_element" => 
        [
            "extra_intro" => "Ten en consideración que:",
            "extra_instruction_list" => 
            [
                ["extra_instruction" => "Entre más lejos del centro de la Diana de Autovaloración esté el pico, mejor será el resultado de tu aprendizaje."],
                ["extra_instruction" => "Recuerda que los picos más próximos al centro de Diana de Autovaloración, representan áreas de oportunidad sobre las que habrá que seguir practicando y aprendiendo."],
                ["extra_instruction" => "Realiza una captura de pantalla de tu resultado en la Diana y consérvala."],
            ]
        ]
    ],
    //Slab 9
    [   
        //Bold or nomral
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Utiliza el Semáforo de Autovaloración para analizar tu nivel de desempeño de acuerdo con la actividad de la sección "Demuestra".',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento cada uno de los elementos.",
            ],
            //Paso 3
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestras a partir de los requerimientos que te solicitaron para realizar la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "En la fila “Mi nivel de desempeño” que se encuentra encima de cada criterio, selecciona el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 5
            [
                "instruction" => "Comparte tus reflexiones sobre la experiencia de aprendizaje que acabas de realizar en el recuadro que aparece al final.",
            ],
            //Paso 6
            [
                "instruction" => "Guarda y conserva el archivo PDF con tus respuestas.",
            ],
        ],
        
        
    ],
    //Slab 10
    [   //Intro
        "introduction" => "Utiliza la Diana de Autovaloración para analizar tu evidencia de aprendizaje de acuerdo con las especificaciones establecidas para su realización. Toma en cuenta que:",
        "type" => "letter",
        "text" => "bold",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "La numeración del 1 al 4 va de menos a más:",
                "list" => [
                    ["item" => "1 equivale a un desempeño <b>Inaceptable</b>"],
                    ["item" => "2 equivale a un desempeño <b>Aceptable</b>"],
                    ["item" => "3 equivale a un desempeño <b>Bueno</b>"],
                    ["item" => "4 equivale a un desempeño <b>Destacado</b>"],
                ],
                
            ],
            //Paso 2
            [
                "instruction" => "Realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño que demuestra tu evidencia de aprendizaje a partir de los requerimientos que te solicitaron para realizarla.",
                "extra" => 
                [
                    "text" => "Diana - Slab 10",
                    "link" => "assets/docs/tools/autoval/Diana_S10.pdf"
                ] 
            ],
            //Paso 3
            [
                "instruction" => "Ve a la Diana de Autovaloración Selecciona y desplaza el punto sobre cada eje desde la zona central hasta ubicarlo en tu nivel de desempeño de acuerdo con los criterios de cada eje.",
            ],
            //Paso 4
            [
                "instruction" => "Una vez colocados los cuatro puntos, la Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.",
            ],
             //Paso 5
             [
                "instruction" => "La Diana de Autovaloración te ofrecerá un dibujo final en el que podrás apreciar cuatro picos que pueden o no ser iguales.", 
            ], 
        ],
        "extra_element" => 
        [
            "extra_intro" => "Ten en consideración que:",
            "extra_instruction_list" => 
            [
                ["extra_instruction" => "Entre más lejos del centro de la Diana de Autovaloración esté el pico, mejor será el resultado de tu aprendizaje."],
                ["extra_instruction" => "Recuerda que los picos más próximos al centro de Diana de Autovaloración, representan áreas de oportunidad sobre las que habrá que seguir practicando y aprendiendo."],
                ["extra_instruction" => "Realiza una captura de pantalla de tu resultado en la Diana y consérvala."],
            ]
        ]
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
        "tool" => 'assets/docs/tools/autoval/Semaforo_S1.pdf',
    ],
    //Slab 2
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Diana_S2.pdf',
    ],
    //Slab 3
    [
        "type" => "col",
        "tool" => 'https://www.geogebra.org/m/mqsarxyq',
        "img" => 'img/act/diana.png',
        "instruction" => "Da clic en la diana"
    ],
    //Slab 4
    [
        "type" => "col",
        "tool" => 'https://www.geogebra.org/m/mqsarxyq',
        "img" => 'img/act/diana.png',
        "instruction" => "Da clic en la diana"
    ],
    //Slab 5
    [
        "type" => "col",
        "tool" => 'https://www.geogebra.org/m/mqsarxyq',
        "img" => 'img/act/diana.png',
        "instruction" => "Da clic en la diana"
    ],
    //Slab 6
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Semaforo_S6.pdf',
        "img" => '',
        "instruction" => ""
    ],
    //Slab 7
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Semaforo_S7.pdf',
        "img" => '',
        "instruction" => ""
    ],
    //Slab 8
    [
        "type" => "col",
        "tool" => 'https://www.geogebra.org/m/mqsarxyq',
        "img" => 'img/act/diana.png',
        "instruction" => "Da clic en la diana"
    ],
    //Slab 9
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Semaforo_S9.pdf',
        "img" => '',
        "instruction" => ""
    ],
    //Slab 10
    [
        "type" => "col",
        "tool" => 'https://www.geogebra.org/m/mqsarxyq',
        "img" => 'img/act/diana.png',
        "instruction" => "Da clic en la diana"
    ],
    
];



//-- Formulario autoevaluación --
/* 
   FORMATO:
   * Agregar el código embebido del formulario
*/
$act3_forms = 
[
    '<div data-tf-widget="b5MLz3yx" data-tf-iframe-props="title=Formulario_SCRUM_S1" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="ODF6HaUf" data-tf-iframe-props="title=Formulario_SCRUM_S2" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="ZcC57dEF" data-tf-iframe-props="title=Formulario_SCRUM_S3" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="BQ04de1U" data-tf-iframe-props="title=Formulario_SCRUM_S4" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="C0fby5kF" data-tf-iframe-props="title=Formulario_SCRUM_S5" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="ucvsNonE" data-tf-iframe-props="title=Formulario_SCRUM_S6" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="S8S8k6TG" data-tf-iframe-props="title=Formulario_SCRUM_S7" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="CT84A0ja" data-tf-iframe-props="title=Formulario_SCRUM_S8" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="iN0iRx1B" data-tf-iframe-props="title=Formulario_SCRUM_S9" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
    '<div data-tf-widget="yEyYwuVH" data-tf-iframe-props="title=Formulario_SCRUM_S10" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>'
];

//-- Cierre SLAB --
$act3_final_message = 
[
    "Finalizamos este slab ¡Lo has hecho muy bien!",
    "¡Lo has hecho muy bien! Terminaste, recuerda que puedes volver a consultar el slab las veces que  lo necesites.",
    "Has completado esta experiencia de aprendizaje, te felicitamos por tu esfuerzo y dedicación.",
    "¡Felicidades por terminar este slab! Te invitamos a continuar explorando más experiencias de aprendizaje.",
    "Has completado esta experiencia de aprendizaje, te felicitamos por tu esfuerzo y dedicación.",
    "¡Slab finalizado! ¡Muy bien! Recuerda que practicar lo aprendido es crucial para lograr ser un máster en cualquier tema.",
    "¡Lo has hecho muy bien! Terminaste, recuerda que puedes volver a consultar el slab las veces que  lo necesites.",
    "¡Felicidades por terminar este slab! ¡Sigue así!",
    "¡Felicidades aprendedor! Has terminado con éxito este slab.",
    "¡Lo has hecho muy bien! Terminaste, recuerda que puedes volver a consultar el slab las veces que lo necesites.",
];

?>