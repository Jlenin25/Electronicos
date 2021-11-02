@extends('layouts.template-crud')
@section('title', 'Cotizaciones')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cotización</span>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('cotis.index') }}">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cotis.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('coti.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/avgroun.js') !!}
<script>
    $(document).ready(function() {
        $("#agregar").click(function(){
            agregar();
        });
    });

    var cont = 0; total = 0; subtotal = [];

    $("#guardar").hide();

    function agregar() {
        product_id = $("#product_id").val();
        producto = $("#product_id option:selected").text();
        quantity = $("#quantity").val();
        price = $("price").val();
        impuesto = $("#tax").val();

        if(product_id!="" && quantity!="" && quantity>0 && price!="") {
            subtotal[cont] = quantity * price;
            total = total + subtotal[cont];
            var fila = '<tr class="select" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td>  <td><input type="hidden" name="product_id[] value="'+product_id+'">'+producto+'</td><td><input type="hidden" id="price[]" name="price[]" value="'+price+'"><input class="form-control" type="number" id="price[]" value="'+price+'" disable></td><td><input type="hidden" name="quantity[]" value="'+quantity+'"><input class="form-control" type="number" value="'+quantity+'" disable></td><td align="right">S/.'+subtotal[cont]+'</td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de las compras',
            })
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#price").val("");
    }

    function totales() {
        $("#total").html("PEN"+total.tofixed(2));
        total_impuesto = total*impuesto/100;
        total_pagar = total+total_impuesto;
        $("#total_impuesto").html("PEN"+total_impuesto.tofixed(2));
        $("#total_pagar").val(total_pagar.tofixed(2));
    }

    function evaluar() {
        if(total>0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total = total-subtotal[index];
        total_impuesto = total*impuesto/100;
        total_pagar_html = total + total_impuesto;
        $("#total").html("PEN"+total);
        $("#total_impuesto").html("PEN"+total_impuesto);
        $("#total_pagar_html").html("PEN"+total_pagar_html);
        $("total_pagar").val(total_pagar_html.tofixed(2));
        $("#fila"+index).remove();
        evaluar();
    }
</script>
@endsection