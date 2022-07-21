    $(document).ready(function(){
      $('#logn').submit(function (event) {
        event.preventDefault();
        var user = $("#logunmae").val();
        var pass = $("#logpass").val();
        var submit= $("#log").val();
        $("#error").load("process1.php", {
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
        $("#regerror").load("process1.php", {
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
        $("#fogerror").load("process1.php", {
          email: email,
          fogbtn: fogbtn
        });
      });

      $("#ptype").change(function(event){
        event.preventDefault();
        var type=$("#ptype").val();
        $.ajax({
            url:"process1.php",
            method:"POST",
            data:{type:type},
            success:function(data){
              $("#psubtype").html(data);
            }
        });
      });  
    });