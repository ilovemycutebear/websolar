$(document).ready(function (){
$('.sunloader').hide();
//$('#example').DataTable();
if ( $.fn.dataTable.isDataTable( '#example' ) ) {
    table = $('#example').DataTable();
    table.destroy();
}
if ( $.fn.dataTable.isDataTable( '#sunshinetbl' ) ) {
    table1 = $('#sunshine').DataTable();
    table1.destroy();
}
$('#example').hide();
$('#sunshinetbl').hide();
var idntf="1";
$('#sandbox-container .input-daterange').datepicker({

    startView: 2,
    todayBtn: "linked",
    clearBtn: true,
    format: 'yyyy-mm-dd'
});
function SunLoading(){
  $('#cont').hide();
  $('.sunloader').show();
        var timesRun = 0;
var interval = setInterval(function(){
    timesRun += 1;
    if(timesRun === 15){
        clearInterval(interval);
    }
    $('.sunloader').hide();
    $('#cont').show();

}, 3000);
}
function QueryProcessSolar(){
                         var menuone=$("#menu1").val();                 
                          var menutwo=$("#starts").val();
                          var menuthree=$("#ends").val();

                         
                      var data = "Areaid="+menuone+"&startdt="+menutwo+"&endt="+menuthree+"&action=go";
                      console.log("data:"+data);
                        $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "./dataproc/getsolardata.php", 
                                data: data,
                                success: function(datajson) {
                                           $('#example').DataTable( {

                                                dom: 'Bfrtip',
                                                lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],

                                            data:datajson,
                                               "columns": [
                                                              { "data": "tblAreaID" },
                                                              { "data": "slrDate" },
                                                              { "data": "slrTime" },
                                                              { "data": "AvgSolRad" },
                                                              { "data": "MinSolRad" },
                                                              { "data": "MaxSolRad" }
                                                          ]
                                           });  
                                  $('#example').show();
                                  console.log("ya!");
                        //JSON CONVERSION END
                                      
                                                          }
                              });
    return false;
}
//
function QueryProcessAllSolar(){
                         var menusix=$("#menu6").val();                 
                          var menutwo=$("#starts").val();
                          var menuthree=$("#ends").val();

                         
                      var data = "Areaid="+menusix+"&action=go";
                      console.log("data:"+data);
                        $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "./dataproc/getallsolardata.php", 
                                data: data,
                                success: function(datajson) {
                                           $('#example').DataTable( {

                                                dom: 'Bfrtip',
                                                lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],

                                            data:datajson,
                                               "columns": [
                                                              { "data": "tblAreaID" },
                                                              { "data": "slrDate" },
                                                              { "data": "slrTime" },
                                                              { "data": "AvgSolRad" },
                                                              { "data": "MinSolRad" },
                                                              { "data": "MaxSolRad" }
                                                          ]
                                           });  
                                  $('#example').show();
                                  console.log("ya!");
                        //JSON CONVERSION END
                                      
                                                          }
                              });
    return false;
}
//

//query process uv
function QueryProcessUv(){
                         var menuone=$("#menu1").val();                 
                          var menutwo=$("#starts").val();
                          var menuthree=$("#ends").val();

                         
                      var data = "Areaid="+menuone+"&startdt="+menutwo+"&endt="+menuthree+"&action=go";
                      console.log("data:"+data);
                        $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "./dataproc/getuvdata.php", 
                                data: data,
                                success: function(datajson) {
                                           $('#example').DataTable( {

                                            data:datajson,
                                               "columns": [
                                                              { "data": "tblAreaID" },
                                                              { "data": "slrDate" },
                                                              { "data": "slrTime" },
                                                              { "data": "AvgUv" },
                                                              { "data": "MinUv" },
                                                              { "data": "MaxUv" }
                                                          ]
                                           });  
                                  $('#example').show();
                                  console.log("ya!");
                        //JSON CONVERSION END
                                      
                                                          }
                              });
    return false;
}
//query process sunshine
function QueryProcessSunshine(){
                         var menuone=$("#menu1").val();                 
                          var menutwo=$("#starts").val();
                          var menuthree=$("#ends").val();

                         
                      var data = "Areaid="+menuone+"&startdt="+menutwo+"&endt="+menuthree+"&action=go";
                      console.log("data:"+data);
                        $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "./dataproc/getsundata.php", 
                                data: data,
                                success: function(datajson) {
                                           $('#sunshinetbl').DataTable( {

                                            data:datajson,
                                               "columns": [
                                                              { "data": "tblAreaID" },
                                                              { "data": "slrDate" },
                                                              { "data": "slrTime" },
                                                              { "data": "AvgSunshine" }
                                                          ]
                                           });  
                                  $('#sunshinetbl').show();
                                  console.log("ya!");
                        //JSON CONVERSION END
                                      
                                                          }
                              });
    return false;
}
//solar radiation
    $('#flista').click(function(){
       // gtJson();
      $('.container').show();
      $('.sunloader').hide();
      $('#example').hide();
      $('#sunshinetbl').hide();
      if ( $.fn.dataTable.isDataTable( '#example' ) ) {
             table = $('#example').DataTable();
              table.destroy();
          }
                if ( $.fn.dataTable.isDataTable( '#sunshinetbl' ) ) {
             table = $('#sunshinetbl').DataTable();
              table.destroy();
          }
      $('#slista').removeClass("active");
      $('#tlista').removeClass("active");
      $('#flista').addClass("active");
      //datatables.hide();
      $("#starts").val('');
      $("#ends").val('');
      idntf="1";

    });
//solar radiation

//uv radiation
    $('#slista').click(function(){
       // gtJson();
      $('.container').show();
      $('.sunloader').hide();
      $('#example').hide();
      $('#sunshinetbl').hide();
      if ( $.fn.dataTable.isDataTable( '#example' ) ) {
             table = $('#example').DataTable();
              table.destroy();
          }
            if ( $.fn.dataTable.isDataTable( '#sunshinetbl' ) ) {
             table = $('#sunshinetbl').DataTable();
              table.destroy();
          }
      $('#flista').removeClass("active");
      $('#tlista').removeClass("active");
      $('#slista').addClass("active");
      $("#starts").val('');
      $("#ends").val('');
      idntf="2";
      //datatables.hide();

    });

//uv radiation
//sunshine duration
    $('#tlista').click(function(){
       // gtJson();
      $('.container').show();
      $('.sunloader').hide();
      $('#example').hide();
      $('#sunshinetbl').hide();
      if ( $.fn.dataTable.isDataTable( '#example' ) ) {
             table = $('#example').DataTable();
              table.destroy();
          }
            if ( $.fn.dataTable.isDataTable( '#sunshinetbl' ) ) {
             table = $('#sunshinetbl').DataTable();
              table.destroy();
          }
      $('#flista').removeClass("active");
      $('#slista').removeClass("active");
      $('#tlista').addClass("active");
      $("#starts").val('');
      $("#ends").val('');
      idntf="3";
      //datatables.hide();

    });
//sunshine duration

//menu 1 start
//bohol 1
	  $('#bhllist').click(function(){
        $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("BOHOL");
        $('#menu1').val("0001");
        console.log("btn-green");
        //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
    });
// el salvador 2
    $('#esvlist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("EL SALVADOR");
        $('#menu1').val("0006");
        console.log("btn-green");
                //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
//Legazpi 3
    });
    $('#lgzlist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("LEGAZPI");
        $('#menu1').val("0002");
        console.log("btn-green");
                //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
//Tuguegarao 4
    });
    $('#tglist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("TUGUEGARAO");
        $('#menu1').val("0005");
        console.log("btn-green");
                //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
    });
//davao 5
    $('#dvlist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("DAVAO");
        $('#menu1').val("0003");
        console.log("btn-green");
               //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
    });
//baler 6
        $('#balist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("BALER");
        $('#menu1').val("0007");
        console.log("btn-green");
               //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
    });
//puerto princesa 7
            $('#puprilist').click(function(){
       $('#menu1').removeClass("btn-danger");
        $('#menu1').removeClass("btn-default");
        $('#menu1').addClass("btn-success");
        $('#menu1').html("PUERTO PRINCESA");
        $('#menu1').val("0004");
        console.log("btn-green");
                //date checker
        if ($("#starts,#ends").filter(function() { return $(this).val(); }).length > 0) {
                    console.log("date has value");
                    $('#starts').removeClass("btn-default");
                    $('#starts').removeClass("btn-danger");
                    $('#starts').addClass("btn-success");
                    $('#ends').removeClass("btn-default");
                    $('#ends').removeClass("btn-danger");
                    $('#ends').addClass("btn-success");


                          }
        else{

            $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          $('#menu1').removeClass("btn-success");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');
          
        }
        //end of date checker
    });

//menu 1 end javascript..

//menu 6 start
//bohol 1
    $('#bhllist1').click(function(){
        $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("BOHOL");
        $('#menu6').val("0001");
        console.log("btn-green");
        //date checker
        
        //end of date checker
    });
// el salvador 2
    $('#esvlist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("EL SALVADOR");
        $('#menu6').val("0006");
        console.log("btn-green");
                //date checker
        
        //end of date checker
//Legazpi 3
    });
    $('#lgzlist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("LEGAZPI");
        $('#menu6').val("0002");
        console.log("btn-green");
                //date checker
        
//Tuguegarao 4
    });
    $('#tglist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("TUGUEGARAO");
        $('#menu6').val("0005");
        console.log("btn-green");
                //date checker
    });
//davao 5
    $('#dvlist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("DAVAO");
        $('#menu6').val("0003");
        console.log("btn-green");
    });
//baler 6
        $('#balist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("BALER");
        $('#menu6').val("0007");
        console.log("btn-green");
    });
//puerto princesa 7
            $('#puprilist1').click(function(){
       $('#menu6').removeClass("btn-danger");
        $('#menu6').removeClass("btn-default");
        $('#menu6').addClass("btn-success");
        $('#menu6').html("PUERTO PRINCESA");
        $('#menu6').val("0004");
        console.log("btn-green");
    });

//menu 1 end javascript..
//GENERATE
   $('#menu4').click(function(){
       //menu1
       if ($('#menu1').hasClass( "btn-default" )) {
          $('#menu1').removeClass("btn-default");
          $('#menu1').addClass("btn-danger");
          console.log("btn-red");
       }
       //menu2
       if ($('#starts').hasClass( "btn-default" )) {
          $('#starts').removeClass("btn-default");
          $('#starts').addClass("btn-danger");
          console.log("btn-red2");
       }
       //menu3
       if ($('#ends').hasClass( "btn-default" )) {
          $('#ends').removeClass("btn-default");
          $('#ends').addClass("btn-danger");
          console.log("btn-red3");
       }
       if(($('#menu1').hasClass( "btn-success" ))&&($('#starts').hasClass( "btn-success" ))&&($('#ends').hasClass( "btn-success" ))){

        console.log("OK JO ka pa rin")
        $('#menu1').removeClass("btn-success");
          $('#menu1').removeClass("btn-danger");
          $('#menu1').addClass("btn-default");
          $('#menu1').html('Locations..<span class="caret"></span>');

          $('#starts').removeClass("btn-success");
          $('#starts').removeClass("btn-danger");
          $('#starts').addClass("btn-default");
          //$('#starts').val('');

          $('#ends').removeClass("btn-success");
          $('#ends').removeClass("btn-danger");
          $('#ends').addClass("btn-default");
          //$('#ends').val('');
          $('.container').hide();
          SunLoading();
          
          if(idntf=="1"){
            console.log("solar");
            QueryProcessSolar();
            idntf="";
          }
          else if(idntf=="2"){
            console.log("uv");
            QueryProcessUv();
            idntf="";
          }
          else if(idntf=="3"){
            console.log("sunshine");
            QueryProcessSunshine();
            idntf="";
          }
       }

    });  

    $('#menu5').click(function(){ 
    if ($('#menu6').hasClass( "btn-default" )) {
          $('#menu6').removeClass("btn-default");
          $('#menu6').addClass("btn-danger");
          console.log("btn-red");
       }
       else{ 
        $('.container').hide();
          SunLoading();
          
          if(idntf=="1"){
            console.log("solar");
            QueryProcessAllSolar();
            idntf="";
          }
          else if(idntf=="2"){
            console.log("uv");
            QueryProcessUv();
            idntf="";
          }
          else if(idntf=="3"){
            console.log("sunshine");
            QueryProcessSunshine();
            idntf="";
          }
      }
    }); 
});
