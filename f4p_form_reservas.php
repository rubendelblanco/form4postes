<?php
  $f4p_form_action = 'http://reservas.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';

  switch (ICL_LANGUAGE_CODE) {
    case "eng":
        $f4p_form_action = 'http://booking.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';
        break;
    case "de":
        $f4p_form_action = 'http://reservierungen.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';
        break;
    case "it":
        $f4p_form_action = 'http://prenotazione.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';
        break;
    case "fr":
        $f4p_form_action = 'http://reservations.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';
        break;
    default:
        $f4p_form_action = 'http://reservas.hotel-sanlorenzo.com/bookcore/v1/search-dispo.htm';
        break;
  }
 ?>

<form id="formReserva" action="<?php echo $f4p_form_action; ?>" method="POST">
  Fecha entrada* <input class="required" type="text" placeholder="Entrada"  id="calendar-entrada" readonly name="entrada" required data-msg-required="Campo 'Fecha entrada' obligatorio"/>
  <span data-target="#calendar-entrada" class="calendar-trigger dashicons dashicons-calendar-alt"></span>
  Fecha salida* <input clas="required" type="text" placeholder="Salida" id="calendar-salida" name="salida" readonly required data-msg-required="Campo 'Fecha salida' obligatorio"/>
  <span data-target="#calendar-salida" class="calendar-trigger dashicons dashicons-calendar-alt"></span>
  Código promoción <input type="text" name="codpromo" placeholder="Código promocional" />
  <div class="mensajes-error"></div>
  <input type="submit" value="Consultar disponibilidad">
</form>
<style>
  .mensajes-error label{
    color:red;
  }
</style>
<script>
  jQuery('.calendar-trigger').click(function(){
    jQuery(jQuery(this).data('target')).trigger('focus');
  });
  jQuery( function() {
    jQuery( "#calendar-entrada, #calendar-salida" ).datepicker({
      dateFormat: "dd/mm/yy"
    });
    jQuery( "#calendar-entrada" ).datepicker();
    jQuery( "#calendar-salida" ).datepicker();
  } );
  jQuery("#formReserva").validate({
    errorLabelContainer: jQuery(".mensajes-error"),
    rules: {
        'calendar-entrada':{
          required: true,
          date:true
        },
        'calendar-salida':{
          required: true,
          date:true
        }
  		}
  });
  </script>
