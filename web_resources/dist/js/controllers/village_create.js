// var a=false;
// $(document).ready(function(){
// $("#btn_save").click(function(){
//   if(a==false){
//     alert('kk')
//     saveperform();
//    }
//   }); 
// });


//  function saveperform() 
// { 
//   var village_id = $("#village_id").val();
//     var country=$('#country').val();
//     var state=$('#state').val();
//     var district=$('#district').val();
    

    


//     if(country==""||state==""||district=="") 
//     {
//       alert("requird");
//         swal({
//         title:"",
//         text:"Please Enter Required Fields",
//         type:"error",           
//     });   
//   }

//     // else
//     // {
//     //  if(userId>0)
//       // {
//       //       a=true;
      
//         // $.ajax({
//       //   url:base_path+"Country/updateCountry",
//       //   type: "POST",
//       //   data: $('#Form').serialize(),
//       //    beforeSend: function(){
//       //          $('#btn_save').prop('disabled', true);
//       //          $('#btn_save').html('Loading');
//       //     }, 
//       //   success: function(data) {
//       //      $('#btn_save').prop('disabled', false);
//       //      $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
//       //       swal({
//       //       title:"",
//       //       text:"Data Submitted Successfully",
//       //       type:"success",
//       //       showCancelButton: true, 
//       //       showConfirmButton: false,
//       //       timer:10000
//       //   }); a=false;
//       //       window.location.href = base_path+"Country";
//       //     }
//       // });
//       // }
//         else
//       {a=true;
//         //alert('insert');
//         $.ajax({
//         url:base_path+"Village/insertVillage",
//         type: "POST",
//         data: $('#Form').serialize(),
//          beforeSend: function(){
//                $('#btn_save').prop('disabled', true);
//                $('#btn_save').html('Loading');
//           }, 
//         success: function(data) {

//             $('#btn_save').prop('disabled', false);
//            $('#btn_save').html('Save');
//              $("#Form").trigger("reset");

//              // alert("hi");
//           swal({
//             title:"",
//             text:"Data Submitted Successfully",
//             type:"success",
//             showCancelButton: false, 
//             showConfirmButton: false,
//              width: '1000px',
//             timer:1000
//         });
           
//            a=false;

//                 }
//       });
//       }
//       }
//  // }


var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    var country=$('#country').val();
   


    if(country=="") 
    {
      alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    // else
    // {
    //  if(userId>0)
      // {
      //       a=true;
      
        // $.ajax({
      //   url:base_path+"Country/updateCountry",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#btn_save').prop('disabled', true);
      //          $('#btn_save').html('Loading');
      //     }, 
      //   success: function(data) {
      //      $('#btn_save').prop('disabled', false);
      //      $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
      //       swal({
      //       title:"",
      //       text:"Data Submitted Successfully",
      //       type:"success",
      //       showCancelButton: true, 
      //       showConfirmButton: false,
      //       timer:10000
      //   }); a=false;
      //       window.location.href = base_path+"Country";
      //     }
      // });
      // }
        else
      {a=true;
        
        $.ajax({
        url:base_path+"Village/insertVillage",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {

            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             // alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
           // $('#Form').parsley().destroy();
           // $('#Form').parsley();
           a=false;

                }
      });
      }
      }
 // }
