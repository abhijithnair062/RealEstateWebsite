    $(document).ready(function(){
      $('[type="checkbox"]').prop('checked', false);
      $('#Residential').change(function () {
          if ($(this).is(":checked")) {
            $("#Residentialcolp").collapse("show");
            $(".res").prop('checked',true);
          }
          else
          {
            $("#Residentialcolp").collapse("hide");
            $(".res").prop('checked',false);
          }
      });
      $('#Commercial').change(function () {
          if ($(this).is(":checked")) {
            $("#Commercialcolp").collapse("show");
            $(".com").prop('checked',true);
          }
          else
          {
            $("#Commercialcolp").collapse("hide");
            $(".com").prop('checked',false);
          }
      });
      $('#Other').change(function () {
          if ($(this).is(":checked")) {
            $("#Othercolp").collapse("show");
            $(".oth").prop('checked',true);
          }
          else
          {
            $("#Othercolp").collapse("hide");
            $(".oth").prop('checked',false);
          }
      });
      $('#bflat').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='Flat']").prop('checked',true);
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#bhouse').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='House']").prop('checked',true);
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#bplot').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='Plot']").prop('checked',true);
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#rflat').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='Flat']").prop('checked',true);
          $('#what').val("Rent");
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#rhouse').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='House']").prop('checked',true);
          $('#what').val("Rent");
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#rplot').on('click',function(){
          $(".incheck[value='Residential']").prop('checked',true);
          $(".res[value='Plot']").prop('checked',true);
          $('#what').val("Rent");
          $('#srchbox').attr('action','flats.php').submit();
      });
      $('#drop a').on('click', function(){    
          $('#dropT').html($(this).html());
          $('#what').val($(this).html());    
      })
      $('#simsrch').on('click',function(){
        if($('.incheck:checkbox:checked').length == 0)
          alert("Please select a property type");
        else
        $('#srchbox').attr('action','flats.php').submit();
      });
      $('#srchl').on('click',function(event){
        $('#collapseExample').collapse('show');
      })
      $('#coldis').on('click',function(){
        $('#collapseExample').collapse('hide');
      })
      $('body').scrollspy({target: ".navbar", offset: 50});   
      $("#mainNav a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        } 
      });
      $('#logn').submit(function (event) {
        event.preventDefault();
        var user = $("#logunmae").val();
        var pass = $("#logpass").val();
        var submit= $("#log").val();
        $("#error").load("process.php", {
          user: user,
          pass: pass,
          submit: submit
        });
      });
      $('#reg').submit(function (event) {
        event.preventDefault();
        var name= $("#regname").val();
        var email= $("#regemail").val();
        var user = $("#reguname").val();
        var pass = $("#regpass").val();
        var cpass = $("#regcpass").val();
        var regbtn= $("#regbtn").val();
        var regcat= $("#regcat").val();
        $("#regerror").load("process.php", {
          name:name,
          user: user,
          pass: pass,
          cpass:cpass,
          email:email,
          regcat:regcat,
          regbtn: regbtn
        });
      }); 
      $('#fog').submit(function (event) {
        event.preventDefault();
        var email = $("#fogemail").val();
        var fogbtn= $("#fogbtn").val();
        $("#fogerror").load("process.php", {
          email: email,
          fogbtn: fogbtn
        });
      });    
    });

var range = document.getElementById('range');
var range1 = document.getElementById('range1');


noUiSlider.create(range, {
format: wNumb({
        decimals: 0,
}),
  start: [25, 100],
  connect: true,
  step:1,
  range: {
    'min': 10,
    'max': 200
  },
}); 


noUiSlider.create(range1, {
  start: [20, 80],
  connect: true,
  step:1,
  range: {
    'min': 0,
    'max': 100
  },
format: wNumb({
        decimals: 0,
}),
}); 


var valuesDivs = [
  document.getElementById('range-1'),
  document.getElementById('range-2')
];

var valuesD = [
  document.getElementById('range-11'),
  document.getElementById('range-22')
];

var valuesDivs1 = [
  document.getElementById('range-3'),
  document.getElementById('range-4')
];

var valuesD1 = [
  document.getElementById('range-33'),
  document.getElementById('range-44')
];


range.noUiSlider.on('update', function( values, handle ) {
  valuesDivs[handle].innerHTML = values[handle];
  valuesD[handle].value = values[handle];
});


range1.noUiSlider.on('update', function( values, handle ) {
  valuesDivs1[handle].innerHTML = values[handle];
  valuesD1[handle].value = values[handle];
});