$(document).ready(function(){
  $("#df").click(function(){
    $('#login').modal('hide');
    $('#registrasi').modal('show')
  });

  $("#lg").click(function(){
      $('#login').modal('show');
      $('#registrasi').modal('hide');
    });

  $("#mk").click(function(){
      $('#login').modal('show');
      $('#pg').modal('hide');
    });

  $("#da").click(function(){
      $('#register').modal('show');
      $('#pg').modal('hide');
    });
});

  
  
