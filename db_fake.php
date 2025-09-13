<?php

/**
 * Archivo php para simular una colección de noticias como si salieran de una base de datos.
 *
 * Este archivo se comparte con las otras pàginas para que puedan acceder al arreglo indexado $noticias.
 */

function getNoticias(){
    $n1 = new stdClass();
    $n1->titulo = "Se enojó porque no le fiaron comida, volvió con una escopeta y se le trabó: tiró las balas con la mano";
    $n1->subtitulo = "El insólito intento de robo ocurrió en Santa Cruz. El agresor fue atrapado al día siguiente. En su casa tenía fundas de chalecos antibalas y hasta una tonfa.";
    $n1->imagen = "https://tn.com.ar/resizer/v2/https%3A%2F%2Fthumbs.vodgc.net%2F5C49AF4336D74A7294ADB96277A34754686-1746187514.jpg?auth=58cff96ff6481dbe0da154e673d09f6168dc1d433c7a73ea12f59feb60283ce2&width=767";
    $n1->contenido = "<p>Todo empezó con la promesa de un hombre, identificado como Benito Galarza, de pagar un encargo de comida más tarde. Pero la negativa del dueño del restaurante desencadenó un insólito intento de robo en la ciudad de El Calafate.
    El hecho que se conoció en las últimas horas ocurrió el martes a la noche. Según indicaron distintos medios locales, Galarza se retiró sin decir palabra en el momento pero volvió poco después, alrededor de las 20, armado con una escopeta.</p>";

    $n2 = new stdClass();
    $n2->titulo = "Hicieron un minuto de silencio por un jugador que no murió";
    $n2->subtitulo = "Un insólito error sacudió el fútbol en Bulgaria por la supuesta muerte de Petko Ganchev.";
    $n2->imagen = "https://tn.com.ar/resizer/v2/los-jugadores-de-levski-y-arda-kardjali-guardaron-un-minuto-de-silencio-por-la-supuesta-muerte-de-petko-ganchev-foto-gentileza-de-marca-CNBBJY5ABRHK7CLQX4NR5WQZRU.jpg?auth=b98c5173e7060f0fa03057305621f488ac6ed3af52b947822988ca5774c50137&width=1023";
    $n2->contenido = "<p>El fútbol siempre sorprende, y esta vez ocurrió en Bulgaria, donde los equipos Levski y Arda Kardjali protagonizaron un insólito momento. Antes del partido, se reunieron en el círculo central para guardar un minuto de silencio por el supuesto fallecimiento de Petko Ganchev, exjugador del Arda de 28 años.
    Sin embargo, la sorpresa llegó en el entretiempo cuando el propio club Arda Kardjali desmintió la noticia.</p>";

    $n3 = new stdClass();
    $n3->titulo = "Un ladrón entró a robar a una fiambrería con un cuchillo, pero la empleada lo sorprendió y tuvo que huir";
    $n3->subtitulo = "Ocurrió en un comercio del centro de Cipolletti. El delincuente quiso llevarse el dinero de la caja registradora, pero la trabajadora no solo no se dejó intimidar, sino que respondió con rapidez.";
    $n3->imagen = "https://tn.com.ar/resizer/v2/https%3A%2F%2Fthumbs.vodgc.net%2F1-14-o3OzEA1730412347839_720P.jpg?auth=6aab3ca99d665cc1f799219503f40ae4af323e6aaad16eb4fd3ec831bff03b48&width=767";
    $n3->contenido = "<p>Este jueves, en una fiambrería de Río Negro, un intento de robo fue frustrado de forma inesperada. Un delincuente entró al comercio armado con un cuchillo, con la intención de llevarse el dinero de la caja. Sin embargo, su plan quedó arruinado por la reacción de una de las empleadas, quien, sin dudarlo, sacó una cuchilla aún más grande y logró ahuyentarlo.</p><p>Todo ocurrió alrededor de las 11 de la mañana, en calle 9 de Julio casi esquina España, en el centro de Cipolletti. En el video de las cámaras de seguridad, difundido por MDZ Online, se ve cómo el joven se acerca al mostrador, saca el arma de su pantalón y exige el dinero.</p>";
    $n3->imagen2 = "https://tn.com.ar/resizer/v2/el-momento-en-el-que-el-ladron-saca-un-cuchillo-del-pantalon-foto-captura-video-mdz-online-CQTURQ7HMBBVRIMSI56EPMSJNM.png?auth=5c3b730c07b5137d56b0d5399a8cedc5e950db6926d22166c3bc3493737da356&width=840";

    $n4 = new stdClass();
    $n4->titulo = "Furor en las redes: un oso encontró una cámara de vida silvestre y se sacó 400 selfies";
    $n4->subtitulo = "Las divertidas imágenes fueron compartidas en la cuenta de Twitter del Parque de Montañas y Espacios Abiertos de Colorado, ubicado en Estados Unidos.";
    $n4->imagen = "https://tn.com.ar/resizer/v2/furor-en-las-redes-un-oso-encontro-una-camara-de-vida-silvestre-y-se-saco-400-selfies-imagen-ilustrativa-pexels-LWLP5XMOW5DLFDXT7DNCAKL7LM.png?auth=ccb15e13cb985d9b3ac180dee1c54f78adcbd1c25d7a5e2fb46d2f8657c6d91c&width=767";
    $n4->contenido = "<p>Un ejemplar de oso negro americano descubrió una cámara trampa y se sacó 400 selfies en diferentes poses, en un Parque de Espacios Abiertos de Montaña en Colorado, Estados Unidos.
    El gobierno local instaló cerca de la ciudad nueve cámaras de detección de movimiento durante el verano con el objetivo de captar imágenes y videos de los animales en su hábitat natural y minimizar la presencia humana en entornos sensibles.</p>";

    $n5 = new stdClass();
    $n5->titulo = "La inflación de agosto fue de 1,9% y acumula 19,5% en lo que va del año";
    $n5->subtitulo = "El Índice de Precios al Consumidor (IPC) mensual se mantuvo igual que en julio. En los últimos 12 meses sumó 33,6%. Los rubros que más subieron.";
    $n5->imagen = "https://tn.com.ar/resizer/v2/se-conocio-el-dato-de-inflacion-de-agosto-2025-foto-agustina-ribo-tn-IISISAEUFJEMFOWR5DM6UCSD6E.jpg?auth=d4d0868cd74f74289daa40edca61953246a9f31797a1e326cecdc3a2792e8c8a&width=650";
    $n5->contenido = "<p>La inflación de agosto fue de 1,9% y acumuló 19,5% en los primeros ocho meses de 2025, informó este miércoles el INDEC. La variación mensual se mantuvo igual que en julio.
    En términos interanuales, la variación del IPC fue de 33,6%, lo que marca 16 meses consecutivos de desaceleración frente al mismo mes del año anterior.</p>";

    // declaro el arreglo de noticias
    $noticias = [$n1, $n2, $n3, $n4, $n5];
    return $noticias;
}

function getNoticiaById($id) {
    $noticias = getNoticias();
    $noticia = $noticias[$id];
    return $noticia;
}
