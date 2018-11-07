<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- Fonts -->
    </head>

    <body>
        <div class="container">
            <form action="">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Numero de sello:</label>
                        <input type="text" class="form-control">
                    </div> 
                </div>   
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Fecha de colocación:</label>
                        <input type="text" class="form-control">
                     </div> 
                </div>     
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Linea Transportista:</label>
                        <input type="text" class="form-control">
                    </div> 
                </div>     
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Numero de Caja:</label>
                        <input type="text" class="form-control">
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Cliente:</label>
                            <input type="text" class="form-control">
                        </div> 
                    </div> 
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Operador:</label>
                            <input type="text" class="form-control">
                        </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Sellador de caja:</label>
                            <input type="text" class="form-control">
                        </div> 
                </div>      

            </form>
        </div>


        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>


    </body>
</html>
