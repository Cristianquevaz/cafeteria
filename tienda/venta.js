$(document).ready(function() {
    $('#ven').click(function() {
      var num1 = $('#validationServer02').val();
      var num2 = $('#validationServer01').val();
      $.ajax({
        type: 'POST',
        url: 'operacion.php',
        data: {validationServer02: validationServer02, validationServer01: validationServer01},
        success: function(result) {
          $('#resultado').val(result);
        }
      });
    });
  });