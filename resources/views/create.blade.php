<! DOCTYPE html>
< html  lang = " en " >
< cabeza >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "  content = " width = device-width, initial-scale = 1.0 " >
    < Enlace  rel = " hoja de estilo "  href = " https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css "  integridad = " SHA384-MCw98 / SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO "  crossorigin = " anónimo " >

    < título > Documento </ título >
</ cabeza >
< cuerpo >

{!! Form :: open ( array ( ' url ' => ' / crear / usuario ' , ' method ' => ' POST ' , ' autocomplete ' => ' off ' )) ! !}

{{ Form :: token () } }

    < Br > < br > < br >
    < h1  style = " text-align : center ; " > Nuevo Usuario </ h1 >
    < Br > < br > < br >
        < div  class = " fila " >
            < div  class = " col-md-3 " > </ div >
            < div  class = " col-md-6 " >
                < label  for = " nombre " > < b > Nombre </ b > </ label >
                < input  type = " text "  name = " nombre "  require  class = " form-control " >
            </ div >
        </ div >

        < div  class = " fila " >
        < div  class = " col-md-3 " > </ div >
            < div  class = " col-md-6 " >
                < label  for = " nombre " > < b > Apellido </ b > </ label >
                < input  type = " text "  name = " apellido "  require  class = " form-control " >
            </ div >
        </ div >
            
         < div  class = " fila " >
        < div  class = " col-md-3 " > </ div >
            < div  class = " col-md-6 " >
                < label  for = " nombre " > < b > Telefono </ b > </ label >
                < input  type = " text "  name = " telefono "  require   class = " form-control " >
            </ div >
        </ div >

        < div  class = " fila " >
        < div  class = " col-md-3 " > </ div >
            < div  class = " col-md-6 " >
                < label  for = " nombre " > < b > Correo </ b > </ label >
                < input  type = " email "  name = " correo "  require  class = " form-control " >
            </ div >
        </ div >
        < Br >
        < div  class = " fila " >
        < div  class = " col-md-3 " > </ div >
            < div  class = " col-md-6 " >
                < input  class = " btn btn-success "  value = " Guardar "  type = " submit " > </ input >
                < Un  href = " / index "  clase = " btn btn-peligro " > Cancelar </ a >
            </ div >   
        </ div >
        {!! Form :: close () ! !}
</ cuerpo >
</ html >