<!-- FUNCIONAMIENTO ACTUALIZAR ICONOS FONTAWESOME (LISTADO JSON)  -->

1. Dirigirse a la pagina de fontawesome y filtrar iconos, version 5.xx y free

- https://fontawesome.com/v5/search?o=r&m=free

2. Abrir con F12 la pestaña red (FETCH) y copiar en respuesta el JSON de iconos

- ejemplo de direccion de enlace : 
 queries?x-algolia-agent=Algolia%20for%20JavaScript%20(4.19.1)%3B%20Browser%20(lite)%3B%20instantsearch.js..........

3. Pasarlo por el formateador para filtrar campos :

- https://jsoneditoronline.org/
- pegar json y click en el enbudo (Transform content)
- rueda de config y seleccionar JMEPath
- pegar la Query:
    results[0].hits[*].{Name:label, Class:name, Keywords:keywords,Membership:membership.free}

4. Copiar preview y pegar la en este script ( Click)

5. F12 copiar respuesta y formatear en:
  -https://jsonformatter.org/


