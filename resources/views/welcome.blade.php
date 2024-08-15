@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-content center">
        <span class="card-title">Datos para realizar el pago</span>
        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">account_balance</i>
                <input id="account" type="number" class="validate" value="01020624320100003115" disabled >
                <label for="account">Cuenta bancaria</label>
            </div>
            <div class="input-field col s2">
                <button class="btn-flat  text-lighten-3" onclick="copyToClipboard('account')">
                    <i class="material-icons">content_copy</i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">art_track</i>
                <input id="doc" type="text" class="validate" value="26997629" disabled >
                <label for="doc">Documento</label>
            </div>
            <div class="input-field col s2">
                <button class="btn-flat  text-lighten-3" onclick="copyToClipboard('doc')">
                    <i class="material-icons">content_copy</i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">account_box</i>
                <input id="beneficiario" type="text" class="validate" value="Jesús S. Rodríguez F." disabled >
                <label for="beneficiario">Nombre del beneficiario</label>
            </div>
            <div class="input-field col s2">
                <button class="btn-flat  text-lighten-3" onclick="copyToClipboard('beneficiario')">
                    <i class="material-icons">content_copy</i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">monetization_on</i>
                <input id="monto" type="number" class="validate" value="1832.5" disabled >
                <label for="monto">Monto en (Bs.)</label>
            </div>
            <div class="input-field col s2">
                <button class="btn-flat  text-lighten-3" onclick="copyToClipboard('monto')">
                    <i class="material-icons">content_copy</i>
                </button>
            </div>
        </div>
        <blockquote>
            <p class="left-align"><b>Nota:</b> recuerda unicamente se reconoceran los pagos realizados a la cuenta bancaria de la institución, no a la terceros o trabajadores de esta dependencia.</p>
        </blockquote>
    </div>
</div>

<script>
    function copyToClipboard(elementId) {
        // Obtener el valor del campo de texto
        var copyText = document.getElementById(elementId).value;

        // Crear un campo de texto temporal para copiar el contenido
        var tempInput = document.createElement("input");
        tempInput.value = copyText;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        // Notificar al usuario que se ha copiado el texto
        M.toast({html: 'Copiado al portapapeles!', classes: 'rounded'});
    }
</script>

@endsection
