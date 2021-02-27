$(function ($) {
    "use strict";

    $.ajaxSetup({
        dataType: "json",
    });
    
    $('.record').on('click', function(){
        const id = +$(this).data('id');
        
        if(id > 0){

            $.ajax({
                url: '/api/getRecord?id='+id,
                cahce: false
              })
                .done((res) => {
                    const {records, success} = res;
                    console.log(records)
                    if(success){
                        $('.modal-body').text(records.name_descr)
                        $('.modal').modal('show')
                    }
                })
                .fail( (error) => {
                  
                });

            
        }

        
    });

});
