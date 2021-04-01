"use strict";

function ajaxSetup(){
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
}

function objectPropertyExists(msg,property){
    return msg.hasOwnProperty(property);
}

function getResponseErrors(obj,separator_tag,prefix_elem){
    var errors = '';
    if(typeof obj.errors !== 'undefined'){
        if(typeof obj.errors  === 'string'){
            errors = obj.errors;
        }else{
            if(prefix_elem != ''){
                jQuery.each( obj.errors, function( key, value) {
                    jQuery("#"+prefix_elem+key).html(value).show();
                });
            }else{
                jQuery.each( obj.errors, function( key, value) {
                    errors+=value+separator_tag;
                });
            }
        }
    }else{
        if(typeof obj.message !== 'undefined'){
            errors = obj.message;  
        }
    }
    
    return errors;
}

function updateAccountDetails(){
    var form_data = jQuery("#accountDetails").serialize();
    jQuery("#save_account_btn").attr('disabled',true);
    jQuery(".invalid-feedback").hide();
    ajaxSetup();

    jQuery.ajax({
        url:ROOT_PATH+"/customer/myaccount/save",
        method:"POST",
        data:form_data,
        success:function(msg){
            jQuery("#save_account_btn").attr('disabled',false);
            if(objectPropertyExists(msg,'status')){
                if(msg.status == 'fail'){
                    var errors = getResponseErrors(msg,'<br/>','error_validation_');
                    if(errors != ''){
                        jQuery("#updateDataErrorMessage").html(msg.message).show();
                          setTimeout(function(){ jQuery("#updateDataErrorMessage").html('').hide(); }, 5000);
                    } 
                }else{ 
                  //  jQuery("#accountDataUpdatedDialog").modal('show');
                  //  jQuery("#addDiscountSuccessMessage").html(msg.message).show();
                    jQuery("#updateDataErrorMessage").html(msg.message).show();
                   setTimeout(function(){ jQuery("#updateDataErrorMessage").html('').hide(); }, 5000);
                }
            }else{
                displayResponseError(msg,'updateDataErrorMessage');
            }
        },error:function(obj,status,error){alert(11);
            jQuery("#save_account_btn").attr('disabled',false);
            jQuery("#updateDataErrorMessage").html('Error in processing request').show();
        }
    });
}

