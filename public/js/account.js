"use strict";


alert(1);
function updateAccountDetails(){alert(1);
    var form_data = $("#accountDetails").serialize();alert(form_data);
    $("#save_account_btn").attr('disabled',true);
    $(".invalid-feedback").hide();
    ajaxSetup();

    $.ajax({
        url:ROOT_PATH+"/discount/add",
        method:"POST",
        data:form_data,
        success:function(msg){
            $("#save_account_btn").attr('disabled',false);
            if(objectPropertyExists(msg,'status')){
                if(msg.status == 'fail'){
                    var errors = getResponseErrors(msg,'<br/>','error_validation_');
                    if(errors != ''){
                        $("#addDiscountErrorMessage").html(errors).show();
                    } 
                }else{ 
                    $("#addDiscountSuccessMessage").html(msg.message).show();
                    $("#addDiscountErrorMessage").html('').hide();
                    setTimeout(function(){ $("#addDiscountDialog").modal('hide'); window.location.reload(); }, 1000);
                }
            }else{
                displayResponseError(msg,'updateDiscountStatusErrorMessage');
            }
        },error:function(obj,status,error){
            $("#save_account_btn").attr('disabled',false);
            $("#addDiscountErrorMessage").html('Error in processing request').show();
        }
    });
}

