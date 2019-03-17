# Combatiendo-creencias
1. Descargar archivo
2. Copiar la carpeta combatiendocreencias en www de tu wampp o xampp
3. Ir a la carpeta combatiendocreencias->aplication->config->config.php
  3.1 Cambiar puerto 8080 por el que usas en: $config['base_url'] = 'http://localhost:8080/combatiendocreencias/';
4. Ir a la carpeta combatiendocreencias->aplication->config->database.php
  4.1 Buscar:
      NOTA**: $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'creencias',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
      
      Cambiar username y password despues de la flecha por el username y password que usas en tu wampp p xampp
 5. Ir a la carpeta combatiendocreencias->bd
    5.1 Exportar creencias.sql a tu base de datos.
 6. Ingresar en el navegador : http://localhost:puerto puesto por ti segun el que usas/combatiendocreencias/
 
 7. Visualiza la pagina
 
 CONTENIDO
 carpeta combatiendocreencias->aplication->controllers->Principal.php (llamadas de las vistas, implementacion de logeo etc)
                                         ->models->Bases.php (queries a la BD)
                                         ->views-> (Contenido de las vistas)
 
 carpeta combatiendocreencias->bd->creencias.sql (copia respaldo BD)
 carpeta combatiendocreencias->css->style.css (hoja de estilo de la pagina)
 carpeta combatiendocreencias->img (carpeta donde se alojan las imagenes)
 carpeta combatiendocreencias->js->dashboard.js (archivo donde se graficara contenido con posiblemente chart.js)
 
  carpeta views:
    charts.php (muestra las graficas cuando logea)
    cuestionario_Inicial.php (primera vista para formulario)
    encabezado_Principal.php(barra de navegacion)
    footer.php (pie de pagina)
    header.php (header de la pagina)
    login.php (vista de logeo)
    nosotros.php (vista del apartado nosotros)
    politica_privacidad.php (vista del apartado politica privacidad)
    principal.php (vista de la pagina de inicio)
    
    NOTA**: PUEDES IR AÑADIENDO MAS VISTAS Y PARA VERLAS TE TIENES QUE MOVER ENTRE CONTROLLERS, MODELS Y VIEWS 
