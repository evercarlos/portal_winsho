<br>
<br>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div class="row">
    <div class="col-sm-11 text-center">
        <div class="col-sm-6">
            <h3>Nuestra Oficina Principal se Ubica en:</h3>
            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.8352304908067!2d-76.51196762392675!3d-8.18654317156326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91af812254535917%3A0xdaccd610093e740!2sElectro+Tocache+S.A.!5e0!3m2!1ses!2spe!4v1518029609180"
                        width="550" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                Envíanos un mensaje y te contestaremos tan pronto como sea posible.<p></p>
                <ul>
                    <li>Jr. Bolognesi N° 290 lima</li>
                    <li>Telefono: 917923421</li>
                    <li>Email: evercarlosrojasleonardo@@hmail.com</li>
                </ul>
            </div>
            <div class="form-group">
                <div class="panel panel-default mt15">
                    <div class="panel-heading">Formulario de Contacto</div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nombres*</label>
                                <div class="col-sm-7">
                                        <span><input required type="text" name="nombres" value="" size="40" id="s_name"
                                                     class="form-control input-sm"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Teléfono o Celular*</label>
                                <div class="col-sm-7">
                                        <span><input required type="text" name="telefono" value="" size="40"
                                                     id="s_phone"
                                                     class="form-control input-sm" aria-required="true"
                                                     aria-invalid="false"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Número Suministro</label>
                                <div class="col-sm-7">
                                        <span><input type="text" name="" value="" size="40" id="s_number"
                                                     class="form-control input-sm" aria-required="true"
                                                     aria-invalid="false"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email*</label>
                                <div class="col-sm-7">
                                        <span><input required type="text" name="email" value="" size="40" id="s_email"
                                                     class="form-control input-sm" aria-required="true"
                                                     aria-invalid="false"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Asunto*</label>
                                <div class="col-sm-7">
                                        <span><input required type="text" name="email" value="" size="40" id="s_issue"
                                                     class="form-control input-sm" aria-required="true"
                                                     aria-invalid="false"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Mensaje*</label>
                                <div class="col-sm-7">
                                        <span><textarea required name="mensaje" cols="40" rows="5"
                                                        class="form-control input-sm"
                                                        id="s_message"
                                                        aria-required="true" aria-invalid="false"></textarea></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-5">
                                    <div class="loader hide"></div>
                                    <button type="button" class="btn btn-primary" id="send_email"
                                            style="background: #0f3e68;color: white; font-weight: bold">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
<br>
<script>
    $(function () {
        $.fn.required = function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).addClass('border-red').focus();
                return false;
            } else {
                $(this).removeClass('border-red');
                return true;
            }
        };
        $.fn.email = function () {
            var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
            if ($.trim($(this).val()) != '' && filter.test($(this).val())) {
                return true;
            } else {
                $(this).focus();
                return false;
            }
        };
        $.fn.modal.Constructor.DEFAULTS.backdrop = 'static';
    });

    jQuery(document).ready(function () {
        $("#send_email").click(function () {
            var b_val = true;
            var params = {
                'name': $("#s_name").val(),
                'number': $("#s_number").val(),
                'phone': $("#s_phone").val(),
                'email': $("#s_email").val(),
                'issue': $("#s_issue").val(),
                'subject': $("#s_message").val(),
            }
            b_val = b_val && $("#s_name").required();
            b_val = b_val && $("#s_phone").required();
            // b_val = b_val && $("#s_number").required();
            b_val = b_val && $("#s_email").required();
            b_val = b_val && $("#s_issue").required();
            b_val = b_val && $("#s_message").required();
            if (b_val) {
                $(".loader").addClass('show');
                $.post('web/server/send_email.php', params, function (response) {
                    $(".loader").removeClass('show');
                    $(".loader").addClass('hide');
                    if (response.state) {
                        swal("Correcto!", "Mensaje enviado correctamente", "success");
                    } else {
                        swal("Advertencia!", "El mensaje no fue enviado.por favor intente nuevamente", "warning");
                    }
                }, 'json');
            }
        });
    });
</script>