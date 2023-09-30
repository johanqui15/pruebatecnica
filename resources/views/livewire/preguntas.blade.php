<div>
    <div class="flex flex-col">
        <figure class="flex md:flex-row flex-col items-center bg-white border border-red-700 rounded-xl p-8 space-y-4">
            <div class="md:mr-8 md:flex-shrink-0">
                <img class="w-24 h-24 md:w-48 md:h-auto rounded" src="https://laravel.com/img/logotype.min.svg" alt="" width="384" height="512">
            </div>
            <figcaption class="text-black dark:text-black md:w-3/4">
                <div class="font-medium text-lg">¿Qué es Laravel y cuáles son sus principales características?</div>
                <blockquote class="text-lg font-medium mt-4">
                    En mis conocimientos Laravel es un Framework de php utilizado mas comunmente para desarrollos backend, 
                    es un framework muy interactivo con muchas herramientas que se pueden agregar como lo es Spatie para los roles
                    y permisos, incluir mapas como mapbox, google maps o leaflet, tokens de autenticacion y demas, a mi parecer un framework muy bien estructurado para su 
                    estructura modelo vista controlador, la gestión de las rutas es comoda ademas que las migraciones y los seeders facilitan mucho al momento
                    de la creación de una base de datos.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cual la diferencia entre Eloquent ORM y el Query Builder en Laravel?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Asi como lo dice la documentación oficial de laravel, incluye Eloquent que es un mapeador relacional de objetos ORM 
                    lo que hace que sea facil interactuar con la base de datos que se este utilizando, cuando se utiliza Eloquent se debe tener inicializado
                    el modelo correspondiente a la tabla de la base de datos para que este pueda interactuar insertando, actualizando o eliminando registros de la 
                    tabla y el Query Builder es un codigo utilizando los helpers de SQL que ya estan integrados en el framework que hace una consulta SQL pero
                    usando parametros usando iluminate, este tiene metodos que ayudan a realizar consultas a la base de datos como "DB::table"".
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué es la inyección de dependencias y cómo se implementa en Laravel?</div>
                <blockquote class="text-lg font-medium mt-4">
                    la inyección de dependencias en laravel es la estructura que este tiene para administrar las clases, o componentes livewire y recursos
                    en el proyecto, esta inyección reduce y facilita la creacion de codigo, la fase de pruebas y el mantenimiento.
                    en mi conocimiento implemento el componente livewire o controlador donde hago uso del modelo o tabla de la base de datos que este utilizando
                    esta inyección reconoce mi componente y la relaciona con la vista y el modelo, y con esa relación creo mis metodos que utilizare ya sea mostrar
                    una tabla, filtrar por datos, realizar consultas, modificar o actualizar, crear y eliminar registros. 
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cuál es el propósito de los Middleware en una aplicación Laravel?</div>
                <blockquote class="text-lg font-medium mt-4">
                    En mi opinión es la seguridad de laravel cuando se ingresa a una plataforma o proyecto, este verifica que el cliente o usuario este autenticado.
                    Ejemplo un usuario que no se haya registrado este no lo dejara ingresar, peor al que este registrado lo redigira al menu o intefaz segun su rol
                    en la plataforma o proyecto. 
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué es la autenticación de Passport en Laravel y cuándo podría ser útil?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Como dice en la documentación de laravel es un proveedor de autenticación por medio de tokens, este es complejo y a mi comodidad es mas sencillo
                    sanctum o jwt tokens, creeria que seria util en una aplicacion grande o compleja que requiera un sistemas de tokens robusto. 
                </blockquote>
            </figcaption>
        </figure> 
        <br>
        <hr>
        <br>    
        <figure class="flex md:flex-row flex-col items-center bg-white border border-blue-700 rounded-xl p-8 space-y-4">
            <div class="md:mr-8 md:flex-shrink-0">
                <img class="w-24 h-24 md:w-48 md:h-auto rounded" src="https://storage.googleapis.com/cms-storage-bucket/6a07d8a62f4308d2b854.svg" alt="" width="384" height="512">
            </div>
            <figcaption class="text-black dark:text-black md:w-3/4">
                <div class="font-medium text-lg">¿Qué es Flutter y cuáles son las ventajas clave de usarlo para el desarrollo de aplicaciones móviles?</div>
                <blockquote class="text-lg font-medium mt-4">
                    En mis conocimientos Flutter es un SDK que se utiliza para crear aplicaciones móviles, este permite que se realice la misma aplicacion en 
                    el mismo SDK para diferentes plataformas o tiendas de Apps como Play Store para usuarios Android y Apps Store para usuarios IOs. es un SDK 
                    que se maneja con la estructura modelo - vista - controlador o vista - modelo - modelo de la vista y su lenguaje es Dart.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cual la diferencia entre un StatefulWidget y un StatelessWidget en Flutter?</div>
                <blockquote class="text-lg font-medium mt-4">
                    En mi concepto son widgets que representan las interfaces de la aplicacion, StatefulWidget es por decirlo en pocas palabras una interfaz que 
                    es estatica, no cambia su apariencia, la utilice para interfaces con textos como interfaces de información o de uso de la aplicacion como tutorial y
                    StatefulWidget es lo contrario, es una interfaz que puede cambiar segun los parametros que se le den como traer registros de una base de datos, como 
                    un carrucel de menús de platos de un restaurante, con su imagen y su descripcion.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué es el "hot reload" en Flutter y cómo beneficia el proceso de desarrollo?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Hot reload en Flutter es una funcion que permite que se realicen cambios en tiempo real o al instante mientras cambian el codigo o agregan registros a la aplicacion
                    por ejemplo puede que en la aplicacion haya un modulo de eventos y noticias, el administrador crea un evento o noticia para sus usuarios de la aplicacion y apenas el 
                    realice el cambio los usuarios verian al instante este evento o noticia.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cómo gestionaría el manejo de estado en una aplicación Flutter más grande?</div>
                <blockquote class="text-lg font-medium mt-4">
                    En mi experiencia utilice un metodo asincronico, inicializaba Api de Laravel y en flutter importaba el modelo, inicializaba las variables en una lista y traia el metodo get o set segun
                    lo que requeria, importaba el metodo URI lo parseaba para traer el json de la api de laravel de la siguiente manera.
                    <br>
                    <br>
                    Ejemplo de noticias y eventos:
                    <br><br>
                    <div>
                            class ConnectionModelo {
                                Future<List<Modelo>> getModelo() async {
                                    <br><br>
                                List<Modelo> listArguments = [];
                            <br><br>
                                Uri uri = Uri.parse(
                                    APIURL);
                                    <br><br>
                                final response = await http.get(uri).timeout(const Duration(seconds: 10));
                            <br><br>
                                if (response.statusCode == 200) {
                                    <br><br>
                                    final body = utf8.decode(response.bodyBytes);
                                    <br>
                                    final json = jsonDecode(body);
                                    <br><br>
                                    for (var item in json ['informacion']){
                                        <br>
                                    listArguments.add(Modelo(
                                        <br>
                                        item['Modelo']['titulo'],
                                        <br>
                                        item['Modelo']['descripcion'],
                                        <br>
                                        item['Modelo']['direccion'],
                                        <br>
                                        item['Modelo']['ruta'],
                                        <br>
                                        item['Modelo']['multimedia']));
                                        <br>
                                    }
                            <br><br>
                                    print(json);
                                    <br>
                                }
                            <br><br>
                                return listArguments;
                                <br>
                                }
                                <br><br>
                            }
                    </div>
                    
                </blockquote>
            </figcaption>
        </figure> 
        <br>
        <hr>
        <br>   
        <figure class="flex md:flex-row flex-col items-center bg-white border border-red-700 rounded-xl p-8 space-y-4">
            <div class="md:mr-8 md:flex-shrink-0">
                <img class="w-24 h-24 md:w-48 md:h-auto rounded" src="https://www.irontec.com/image/trainingsFull/49-AngularLogo.png" alt="" width="384" height="512">
            </div>
            <figcaption class="text-black dark:text-black md:w-3/4">
                <div class="font-medium text-lg">¿Qué es Angular y cuáles son sus componentes clave?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Angular es un framework de desarrollo de aplicaciones web, mantenido por google, este propociona unos componentes clave que son, los componentes 
                    que representan las interfaces compuestos por HTML, TypeScript y CSS, Modulos que son los contenedores que agrupan los componentes, servicios y 
                    los recursos, estos ayudan a administrar las dependencias, el enrutamiento, el modulo de formularios.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cuál es la diferencia entre ngOnChanges y ngOnInit en un componente Angular?</div>
                <blockquote class="text-lg font-medium mt-4">
                    ngOnChanges y ngOnInit son metodos de un componente en angular, el ngOnInit es un metodo utilizado para inicializar datos y establecer
                    el etado inicial del componente antes que se muestre su interfaz a diferencia del ngOnChanges que es un metodo que se ejecuta en el componente para
                    cambiar su valor, util para cambios en las propiedades de entrada y realizar acciones en esos cambios.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué es "binding" en Angular y mencione los tipos de binding disponibles?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Es el mecanismo que permite conectar los datos del componente con la interfaz del usuario de la aplicacion angular lo que significa
                    que los cambios que realice tanto el componente como el usuario se refleje automáticamente en la interfaz, esto puede servir para la actualizacion
                    de datos en la aplicacion.
                    <br>
                    <br>
                    Existen varios tipos de binding como lo son la interpolación que permite mostrar el valor de una proiedad del componente, esta el Property Binding 
                    que permite enlazar una propiedad de un elemento HTML al la propiedad del componente, esta el Event Binding que realiza un enlace del evento de un HTML a un 
                    metodo del componente angular, el Two-Way combina la vinculación de propiedades y eventosen un solo enlace, el Attribute Binding permite establecer un 
                    atributo de un elemento HTML, el Class Binding permite agregar o quitar clases CSS a un elemento HTML y por ultimo el Style Binding permite establecer
                    elementos en linea a un elemento HTML
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué son los servicios en Angular y cómo se comunican con los componentes?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Los servicios son clases con su proposito especifico, son parte fundamental de la arquitectura de angular y se utilizan para realizar tareas como el 
                    manejo de datos, interacción con las APIs, la autenticacion y demas, angular se encarga de la creacion y administracion de las instancias de los servicios
                    realizando una inyección de dependencias, como la realizacion de un constructor para tener acceso a sus metodos y datos.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Que es lazy loading en angular, ventajas y cuando se deberia utilizar?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Lazy loading es una tecnica utilizada en aplicaciones Angular para cargar modulos solo cuando son requeridos, como cuando 
                    el usuario realiza una accion especifica y este accede a una funcionalidad o ruta, asi mejorando la eficiencia de la aplicacion y la velocidad de carga.
                    <br><br>
                    Ventajas:
                    <br>
                    Mejora la velocidad de carga inicial, reduce el tiempo de carga, optimiza el ancho de banda, mejora la eficiencia usando recursos, permite el crecimiento de 
                    la aplicacion sin sacrificar la velocidad de carga inicial y facilita el mantenimiento.
                    <br><br>
                    esta tecnica debe utilizarse en aplicaciones grandes, modulos poco accesados y aplicaciones con rutas complejas.
                </blockquote>
            </figcaption>
        </figure>      
        <br>
        <hr>
        <br>   
        <figure class="flex md:flex-row flex-col items-center bg-white border border-indigo-700 rounded-xl p-8 space-y-4">
            <div class="md:mr-8 md:flex-shrink-0">
                <img class="w-24 h-24 md:w-48 md:h-auto rounded" src="https://cdn-icons-png.flaticon.com/512/2306/2306173.png" alt="" width="384" height="512">
            </div>
            <figcaption class="text-black dark:text-black md:w-3/4">
                <div class="font-medium text-lg">¿Qué significa SQL y cuál es su función principal en el desarrollo de bases de datos?</div>
                <blockquote class="text-lg font-medium mt-4">
                    SQL es un lenguaje de consulta para las bases de datos relacionales, desarrollado para gestionar y manipular datos en sistemas de gestión
                    relacionales, su funcion es definir la estructura de las tablas de la base de datos asi permitiendo la manipulacion de los datos realizando operaciones CRUD lo que
                    permite crear, modificar, leer y eliminar datos en una tabla.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cuál es la diferencia entre Explique la diferencia entre INNER JOIN y LEFT JOIN en una consulta SQL?</div>
                <blockquote class="text-lg font-medium mt-4">
                    INNER JOIN y LEFT JOIN son operaciones de union de SQL lo que hace es combinar datos o hacer un solo conjunto de datos de multiples tablas en una consulta,
                    para realizar esto anterior mente en la estructura de las tablas se realiza algo que se llama llaves primarias y llaves foraneas, la llave primaria siendo el valor
                    clave de una tabla y la llave foranea en otra tabla haciendo referencia a la llave primaria de la tabla anterior, INNER JOIN retorna solo las filas que coincidan en ambas tablas 
                    y LEFT JOIN retorna todas las filas de la tabla con la llave primaria y NULL en los campos que no coincidan.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué es la normalización de bases de datos y por qué es importante?</div>
                <blockquote class="text-lg font-medium mt-4">
                    La normalización es un proceso en el diseño de las bases de datos relacionales que tiene como objetivo organizar la estructura de la base de datos 
                    para reducir la redundancia o elementos repetidos en varias tablas y eliminar las anomalias de insercion, actualizacion y eliminacion de los datos.
                    <br>
                    <br>
                    Este porceso es importante ya que evita que los mismos datos se almacenen en multiples lugares, mejora el rendimiento al momento de hacer consultas o CRUD
                    ahorra espacio en el almacen de datos y facilita el mantenimiento y escalabilidad.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Qué son las transacciones en SQL y cuál es su propósito en una base de datos?</div>
                <blockquote class="text-lg font-medium mt-4">
                    Las transacciones de SQL es el CRUD, que es crear, leer, actualizar y eliminar registros en las tablas de la base de datos, esto tienen un proposito
                    segun el objetivo del proyecto estas transacciones permiten la gestion de los datos de forma segura y eficiente.
                </blockquote>
                <hr>
                <br>
                <div class="font-medium text-lg">¿Cuál es la diferencia entre GROUP BY y HAVING en una consulta SQL y cómo se utilizan?</div>
                <blockquote class="text-lg font-medium mt-4">
                    GROUP BY y HAVING son clausulas de SQL que se utilizan en consultas para resumir datos en grupos y aplicar condiciones a estos, GROUP BY 
                    se utiliza para agrupar filas que tienen los mismos valores en una o mas columnas y HAVING se utiliza para filtrar los resultados de la consulta basandose
                    en las condiciones aplicadas por el GROUP BY muy similar al WHERE pero se aplica despues de que estan dormados los grupos.
                </blockquote>
            </figcaption>
        </figure>  
    </div>
</div>
