# Copilot Instructions for TuEmpresaEnLinea

## Arquitectura y Componentes Clave
- Proyecto web basado en Laravel Blade y Bootstrap, orientado a la gestión de punto de venta online.
- El flujo principal inicia en `login.blade.php` (autenticación de usuario y bienvenida).
- Tras el login, el usuario accede a tres funciones principales: "Ventas", "Gastos" y "Productos más vendidos" (todas muestran datos del mes anterior).
- La base de datos consultada es la de Ultimate POS (Ultimate Fosters). La integración requiere conexión y consultas directas a esa estructura.

## Convenciones y Patrones
- Las vistas están en archivos `.blade.php` en la raíz del proyecto.
- El formulario de login usa `@csrf` y muestra errores con `$errors->any()`.
- Los formularios usan Bootstrap 5 para estilos y diseño responsivo.
- Las rutas y controladores deben seguir la convención de Laravel (`route('login')`, etc.).
- Los datos de ventas, gastos y productos más vendidos deben filtrarse por el mes anterior al actual (usar funciones de fecha en SQL o Eloquent).

## Integración y Dependencias
- Configurar la conexión a la base de datos Ultimate POS en `config/database.php`.
- Las consultas deben mapearse a la estructura de Ultimate POS (pedir al usuario el esquema si no está disponible).
- No hay tests ni scripts de build detectados; el flujo es principalmente de desarrollo y despliegue manual.

## Ejemplo de Flujo
1. Usuario accede a `/login` → ingresa credenciales.
2. Si el login es exitoso, mostrar bienvenida y tres botones de acción.
3. Cada botón consulta la base de datos y muestra los datos del mes anterior.

## Recomendaciones para Agentes
- Solicitar al usuario el esquema de la base de datos Ultimate POS si se requiere para nuevas consultas.
- Mantener la UI simple y responsiva usando Bootstrap.
- Seguir las convenciones de Laravel para rutas, controladores y vistas.
- Documentar cualquier integración especial o script adicional en este archivo.

## Archivos Clave
- `login.blade.php`: Formulario de acceso y bienvenida.
- `dashboard.blade.php`, `ventas.blade.php`, `gastos.blade.php`: Vistas principales para cada función.
- `README.md`: Breve descripción del proyecto.

---
Actualiza este archivo si se agregan nuevas integraciones, scripts o convenciones relevantes.
