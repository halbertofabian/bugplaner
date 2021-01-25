<?php
class AppControlador
{
    public static function obtenerListaBlanca()
    {
        return array(
            'bienvenido',
            'usuarios',
            'salir',
            'productos',
            'medios',
            'pos',
            'alumnos',
            'configuracion',
            'paquetes',
            'inscripciones',
            'pagos',
            'cupones',
            'alumno',
            'gastos',
            'ingresos',
            'listar-gastos',
            'listar-ingresos',
            'categorias',
            'mi-perfil',
            'sucursales',
            'cortes',
            'cajas',
            'abrir-caja',
            'cerrar-caja',
            'informes'
        );
    }
    public static function obtenerListaBlancaAlumno()
    {
        return array(
            'bienvenido',
            'salir',
            'alumno',
            'mi-perfil'
        );
    }




    public static function msj($tipo, $titulo, $mensaje, $pagina = "")
    {

        if ($pagina == "") {
            echo
                '
            <script>    
                swal({
                    title: "' . $titulo . '",
                    text: "' . $mensaje . '",
                    icon: "' . $tipo . '",
                    buttons: [false,"Continuar"],
                    dangerMode: true,
                    closeOnClickOutside: false,

                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.history.back();
                    } else {
                        window.history.back();
                    }
                });
            </script> 
        ';
        } else {
            echo
                '
            <script> 
                swal({
                    title: "' . $titulo . '",
                    text: "' . $mensaje . '",
                    icon: "' . $tipo . '",
                    buttons: [false,"Continuar"],
                    dangerMode: true,
                    closeOnClickOutside: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        location.href = "' . $pagina . '"
                    } else {
                        location.href = "' . $pagina . '"
                    }
                });
            </script> 
        ';
        }
    }



    //Menus
    public static function obtnerMenuAdmin()
    {
        return array(
            '1' => array(
                [
                    'label' => 'Home',
                    'icon' => '<i class="link-icon fas fa-home"></i>',
                    'href' => '#home',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Bienvenido',
                            'href' => ''
                        ],
                        [
                            'icon' => '',
                            'label' => '...',
                            'href' => ''
                        ],
                        //Aqui más item de menu
                    ),
                ]
            ),
            '2' => array(
                [
                    'label' => 'Usuarios',
                    'icon' => '<i class="link-icon fas fa-user-plus"></i>',
                    'href' => '#usuarios',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Nuevo usuario',
                            'href' => 'usuarios/new'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Listar usuarios',
                            'href' => 'usuarios'
                        ],

                        // Aqui más item de menu
                    ),
                ]
            ),
            '3' => array(
                [
                    'label' => 'Medios',
                    'icon' => '<i class="link-icon fas fa-images"></i>',
                    'href' => '#medios',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Añadir nuevo',
                            'href' => 'medios/new'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Biblioteca',
                            'href' => 'medios'
                        ],

                        // Aqui más item de menu
                    ),
                ]
            ),
            '4' => array(
                [
                    'label' => 'Inventario',
                    'icon' => '<i class="link-icon fas fa-dolly-flatbed"></i>',
                    'href' => '#inventario',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Nuevo producto',
                            'href' => 'productos/new'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Listar productos',
                            'href' => 'productos'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Categorías',
                            'href' => 'categorias'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Etiquetas',
                            'href' => 'etiquetas'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Nueva compra',
                            'href' => 'compras/new'
                        ],

                        [
                            'icon' => '',
                            'label' => 'Baja de mercancia',
                            'href' => 'productos/baja'
                        ],

                        // Aqui más item de menu
                    ),
                ]
            ),

            '5' => array(
                [
                    'label' => 'POS',
                    'icon' => '<i class="link-icon fas fa-file-invoice-dollar"></i>',
                    'href' => '#pos',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Cobrar <strong> ctrl + 1 </strong>',
                            'href' => 'pos'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Cajas',
                            'href' => 'cajas'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Corte de caja',
                            'href' => ''
                        ],
                        [
                            'icon' => '',
                            'label' => 'Movimientos',
                            'href' => 'movimientos'
                        ],
                        // Aqui más item de menu
                    ),
                ]
            ),
            '6' => array(
                [
                    'label' => 'Softmor',
                    'icon' => '<i class="link-icon fas fa-store"></i>',
                    'href' => '#softMarket',
                    'modulos' =>
                    array(
                        [
                            'icon' => '',
                            'label' => 'Servicios',
                            'href' => 'softmor/servicios'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Modulos',
                            'href' => 'softmor/modulos'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Categorías',
                            'href' => 'categorias'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Etiquetas',
                            'href' => 'etiquetas'
                        ],
                        [
                            'icon' => '',
                            'label' => 'Nueva compra',
                            'href' => 'compras/new'
                        ],

                        [
                            'icon' => '',
                            'label' => 'Baja de mercancia',
                            'href' => 'productos/baja'
                        ],

                        // Aqui más item de menu
                    ),
                ]
            ),

            // Aqui más  menus
        );
    }
}
