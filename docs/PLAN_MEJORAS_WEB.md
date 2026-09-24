# Plan de mejoras de sakev.com.mx

Base: `master`, commit `472d3d3`. Rama: `codex/mejoras-web-comercial`.

Objetivo: explicar servicios contratables, facilitar el contacto y corregir problemas de accesibilidad, rendimiento y funcionamiento del formulario. Se conserva la identidad cromática y el contenido general de la landing. No se publican clientes, fuentes internas ni métricas comerciales no comprobadas.

## 1. Identidad y contenido — implementado

- Unificar portada, formulario, metadatos y pie como **SAKEV Solutions**.
- Compartir layout público, navegación y manejo del tema.
- Incorporar seis servicios con problema y entregable: CRM, intranet, automatización, integración, tableros y aplicaciones web.
- Incorporar tres maquetas HTML accesibles, identificadas como ejemplos ficticios. No se presentan como demos funcionales ni como trabajos de clientes.
- Presentar a Kevin Saldaña Hernández y explicar alcance, revisiones y acompañamiento sin prometer tiempos o prestaciones universales.
- Corregir acentos y sustituir «Agenda una llamada» por un enlace real al contacto.

## 2. Contacto — implementado

- Categorías por necesidad, sin pedir al visitante que elija una arquitectura.
- Teléfono obligatorio únicamente para WhatsApp y llamada, tanto en navegador como en servidor.
- Datos de empresa, plazo, tecnologías y comentarios en un bloque opcional.
- Validación, conservación de valores tras errores, errores asociados y consentimiento con enlace informativo.
- Corregir el hallazgo adicional: el controlador anterior solo mostraba un mensaje de éxito y descartaba los datos.
- Guardar solicitudes en `solicitudes`, incluyendo fecha y versión de consentimiento; confirmar con folio únicamente después de guardar.
- Añadir consulta operativa por Artisan y notificación opcional por correo. Si falla SMTP, conservar la solicitud y registrar solo el folio en el log.
- Limitar a cinco envíos por minuto por IP. Este límite puede afectar oficinas con una IP compartida; ajustarlo según uso real.

## 3. Accesibilidad, SEO y rendimiento — implementado

- Idioma `es-MX`, salto al contenido, foco visible, menú con nombre y estado accesibles.
- Contenido visible sin JavaScript y navegación móvil utilizable sin JavaScript.
- Manejo del tema tolerante a almacenamiento bloqueado, respeto al tema del sistema y a movimiento reducido.
- Sustituir logos de presentación por WebP redimensionados (14,756 bytes combinados); conservar originales.
- Metadatos Open Graph/Twitter, icono, URL canónica por página y sitemap de rutas públicas.
- Asegurar que el sitemap no incluya paneles privados.

## 4. Verificación y entrega

- [x] Compilación de assets con `npm run build`.
- [x] Sintaxis de los dos scripts con `node --check`.
- [x] Revisión de espacios y conflictos con `git diff --check`.
- [x] Pruebas de Laravel añadidas para páginas, sitemap, persistencia, teléfono condicional, consentimiento, compatibilidad, correo, escape HTML, consulta y límite de envíos.
- [x] Workflow de GitHub Actions para compilar vistas, assets y ejecutar la suite PHP.
- La imagen local de trabajo no incluye PHP/Composer. La validación ejecutable de Laravel se realiza mediante el workflow; consultar su resultado en el PR.
- La inspección visual interactiva en móvil y escritorio se documentará en el PR si se logra ejecutar. No considerar la compilación de CSS como prueba de renderizado.

## Despliegue después de revisar y fusionar la rama

1. Respaldar la base de datos y comprobar que `APP_URL=https://sakev.com.mx` y HTTPS estén configurados.
2. Instalar dependencias desde lockfile con `composer install --no-dev --prefer-dist --optimize-autoloader`.
3. Ejecutar `php artisan migrate --force` para crear `solicitudes`. Hacerlo antes de recibir envíos con el nuevo código.
4. Compilar con `npm ci && npm run build`, o desplegar los assets compilados incluidos en esta rama si el alojamiento no dispone de Node.
5. Configurar SMTP real y `SOLICITUD_NOTIFY_EMAIL=contacto@sakev.com.mx` si se desean notificaciones. No usar `MAIL_MAILER=log` para notificaciones reales: ese transporte escribe los datos del correo en logs. Mantener destinatario vacío hasta configurar el transporte.
6. Ejecutar `php artisan optimize:clear` y regenerar las cachés que utilice el despliegue.
7. Hacer una solicitud de prueba controlada y confirmar persistencia y recepción del correo, si está habilitado.

### Consulta de solicitudes

Desde una sesión autorizada en el servidor:

```bash
php artisan solicitudes:list
php artisan solicitudes:list --limit=50
php artisan solicitudes:list --id=1
```

Los datos no se exponen en una ruta pública. Sin notificaciones configuradas, revisar periódicamente estas solicitudes desde el servidor. El correo se envía de forma síncrona y puede añadir latencia según SMTP; no se introdujo una dependencia de workers. Los fallos de correo no tienen reintento automático.

### Datos por confirmar antes de publicar un aviso de privacidad integral

La página `/privacidad` describe el flujo implementado. No se presenta como certificación ni como aviso legal integral. Falta confirmar el responsable y su domicilio aplicable, plazos de conservación, procedimiento de derechos y políticas efectivas de proveedores/transferencias. No se inventaron esos datos ni se prometió borrado automático. La fecha/versionado deben actualizarse cuando cambie el tratamiento informado.

### Reversión

Se puede volver al código previo conservando la tabla de solicitudes. No ejecutar el rollback de la nueva migración sobre datos reales sin respaldo: eliminaría la tabla y sus registros.
