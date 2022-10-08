$(function(){
    
   

   function password_generator( len ) {
    var length = (len)?(len):(10);
    var string = "abcdefghijklmnopqrstuvwxyz"; //to upper 
    var numeric = '0123456789';
    var punctuation = '!@#$%^&*()_+~`|}{[]\:;?><,./-=';
    var password = "";
    var character = "";
    var crunch = true;
    while( password.length<length ) {
        entity1 = Math.ceil(string.length * Math.random()*Math.random());
        entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
        entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
        hold = string.charAt( entity1 );
        hold = (password.length%2==0)?(hold.toUpperCase()):(hold);
        character += hold;
        character += numeric.charAt( entity2 );
        character += punctuation.charAt( entity3 );
        password = character;
    }
    password=password.split('').sort(function(){return 0.5-Math.random()}).join('');
    return password.substr(0,len);
}    
    
    
   $('.js-example-basic-single').select2({
       theme: "bootstrap"
   });

   $(document).on('click','.btn-open-customer-modal',function(){
       
      //B2B Add Customer Modal
      $("#B2bModalCustomerForm").modal({
         
         backdrop:'static',
         keyboard:false
          
      });
     
     
   });
    
   //B2b Submit Customer Form
   $(document).on('click','.btn-add-customer-submit',function(){
         
          
            if (!$("#B2BCustomerForm")[0].checkValidity()) {
    
            $("#hiddenSub").trigger("click");
    
            }else{
            var form = $("#B2BCustomerForm")[0]; 
             var formData = new FormData(form);

                $.ajax({
                url: $("#B2BCustomerForm").attr("data-url"),
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                }).done(function(resp){
                   
                   if(resp.code == 200)
                   {
                       
                       $("#B2BCustomerForm")[0].reset();
                       $("#B2bModalCustomerForm").modal('hide');
                       toastr.success('B2B Customer Registered', 'Message');  
                       $(".success-message").show();
                       setTimeout(function() { $(".success-message").hide(); }, 5000);
                       
                   }
                  
                    
                }).fail(function(resp){
                    
                  console.log(resp); 
                });
      
            }
          
      });    
    
    $('#CustomersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax:$("#CustomersTable").attr("data-url"),
    });
    
    $(".eye-close").click(function(){
        
        if($(this).attr("data-id") == 1)
        {
            $(".eye-open[data-id=1]").show();
            $(".eye-close[data-id=1]").hide();
            $(".password-one").attr("type","text");
        }
        else
        {
            $(".eye-open[data-id=2]").show();
            $(".eye-close[data-id=2]").hide();
            $(".password-two").attr("type","text");
        }
        
    });
    
    $(".eye-open").click(function(){
        
        if($(this).attr("data-id") == 1)
        {
            $(".eye-open[data-id=1]").hide();
            $(".eye-close[data-id=1]").show();
            $(".password-one").attr("type","password");
        }
        else
        {
            $(".eye-open[data-id=2]").hide();
            $(".eye-close[data-id=2]").show();
            $(".password-two").attr("type","password");
        }
        
    });
    
    $(".btn-password-generator").click(function(){
        
        
        
        var pass = password_generator(12);
        
        $(".password-one").val(pass);
        
        $(".password-two").val(pass);
        
         var copyText = document.getElementById("passTxt");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

        
    
        toastr.success("Password Generated & Copied Successfully!");
        
    });
    
});