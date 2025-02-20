<?php
class consulta {
    public function devolver_ingredientes($nombre_receta) {
    // Aumentar el tiempo máximo de ejecución
        set_time_limit(300);

        // 1. Configuración: Definimos el puerto y construimos la URL local.
        $puerto = '1234';
        $url = "http://localhost:$puerto/v1/chat/completions";

        // 2. Preparar los datos a enviar.
        $datos = array(
            "model"=> "llama-3.2-1b-instruct",
            "messages"=> 
            array(
                array("role"=> "system", "content"=> "Responde siempre en español"),
                array("role"=> "user", "content"=> "Dame unicamente y exclusivamente los ingredientes de la receta de $nombre_receta en formato html sin incluir pasos ni consejos, unicamente los ingredientes. Separandolos con <br> empezando por ejemplo asi: 1. ")
            ),
            "temperature"=> 0.7,
            "max_tokens"=> -1,
            "stream"=> false
        );

        // Convertir el array a formato JSON.
        $jsonDatos = json_encode($datos);

        // 3. Inicializar cURL para preparar la petición.
        $ch = curl_init($url);

        // 4. Configurar cURL:
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDatos);

        // 5. Configurar las cabeceras HTTP necesarias.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonDatos)
        ));

        // 6. Ejecutar la petición y capturar la respuesta del servidor.
        $respuesta = curl_exec($ch);

        // 7. Comprobar si se produjo algún error en la comunicación.
        if (curl_errno($ch)) {
            echo 'Error en cURL: ' . curl_error($ch);
        } else {
            $data = json_decode($respuesta, true);
            $ingredientes = $data['choices'][0]['message']['content'];
        }

        // 8. Cerrar la sesión cURL para liberar recursos.
        curl_close($ch);
     return $ingredientes;   
    }
    public function devolver_instrucciones($nombre_receta) {
            set_time_limit(300);

            // 1. Configuración: Definimos el puerto y construimos la URL local.
            $puerto = '1234';
            $url = "http://localhost:$puerto/v1/chat/completions";
    
            // 2. Preparar los datos a enviar.
            $datos = array(
                "model"=> "llama-3.2-1b-instruct",
                "messages"=> 
                array(
                    array("role"=> "system", "content"=> "Responde siempre en español"),
                    array("role"=> "user", "content"=> "Dame unicamente y exclusivamente los pasos a seguir de la receta de $nombre_receta sin poner ingredientes ni consejos, solo los pasos a seguir en formato html separandolos con <br> empezando asi: 1. ")
                ),
                "temperature"=> 0.7,
                "max_tokens"=> -1,
                "stream"=> false
            );
    
            // Convertir el array a formato JSON.
            $jsonDatos = json_encode($datos);
    
            // 3. Inicializar cURL para preparar la petición.
            $ch = curl_init($url);
    
            // 4. Configurar cURL:
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDatos);
    
            // 5. Configurar las cabeceras HTTP necesarias.
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonDatos)
            ));
    
            // 6. Ejecutar la petición y capturar la respuesta del servidor.
            $respuesta = curl_exec($ch);
    
            // 7. Comprobar si se produjo algún error en la comunicación.
            if (curl_errno($ch)) {
                echo 'Error en cURL: ' . curl_error($ch);
            } else {
                $data = json_decode($respuesta, true);
                $instrucciones = $data['choices'][0]['message']['content'];
            }
    
            // 8. Cerrar la sesión cURL para liberar recursos.
            curl_close($ch);
         return $instrucciones;   
    }
    }    
?>