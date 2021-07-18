<script>

    function save_data()
    {
        console.log('save data');
        $.ajax({
            url: $('#mainform').attr('action'),
            method: $('#mainform').attr('method'),
            data: $('#mainform').serialize(),
            dataType: 'json',
            success: function(res) {
                console.log(res);
            },error: function(xhr, textStatus, errorThrown) {
                alert("Oops... Something went wrong!");
            }
        });    
    }
    $('#prov_select').change(function(){
        $('#city_select').val('');
        $.ajax({
            url: '<?php echo site_url('home/city') ?>/'+$(this).val(),
            method: 'get',
            dataType: 'json',
            success: function(res) {
                $('#city_select').html('<option value="" class="hidden" disabled selected>Kabupaten/Kota</option>');
                $.each(res, function( key, value ) {
                    $('#city_select').append('<option value="'+value.city+'">'+value.city+'</option>');
                })
            },error: function(xhr, textStatus, errorThrown) {
                alert("Oops... Something went wrong!");
            }
        });    
    });

    $("#prov_select, #city_select").on("keyup change", function() {
        var prov = $("#prov_select").val();
        var city = $("#city_select").val();
        if (prov && city) {
            $('.btn__next__prov').removeAttr("disabled");
            $('.btn__next__prov').removeClass("disabled");
        } else {
            $('.btn__next__prov').attr("disabled", true);
            $('.btn__next__prov').addClass("disabled");
        }
    });


    $(".radio__pick").on("click", function() {
        var id = $(this).attr('data-id');
        var value = $('input[data-id="'+id+'"]:checked').val()
        if(value){
            $('button[data-id="'+id+'"').removeAttr("disabled");
            $('button[data-id="'+id+'"').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"').attr("disabled", true);
            $('button[data-id="'+id+'"').addClass("disabled");
        }
    });

    $(".btn__next").on("click", function() {
        var id = $(this).attr('data-id');
        var ques = $(this).attr('data-ques');
        if (id==0 && $('input[name="q[0]"]:checked').val() == "Tidak") {
            save_data();
            $(this).parent().parent().parent().next().fadeOut(100);
            $(this).parent().parent().parent().fadeOut(500);
            setTimeout(function() {
                $(".last--page").fadeIn(500);
                $(".bg").addClass("blue");
                $(".head").addClass("hidden");
            }, 500);
            $(".last--page h1").text("Terima kasih atas ketertarikan Bapak/Ibu dalam mengisi survei ini");
        }else if (id==1 && $('input[name="q[1]"]:checked').val() == "Tidak") {
            save_data();
            $(this).parent().parent().parent().next().fadeOut(100);
            $(this).parent().parent().parent().fadeOut(500);
            setTimeout(function() {
                $(".last--page").fadeIn(500);
                $(".bg").addClass("blue");
                $(".head").addClass("hidden");
            }, 500);

            $(".last--page h1").text("Terima kasih atas waktu Bapak/Ibu");
        }else if (id==6 && $('input[name="q[6]"]:checked').val() == "Tidak") {
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().next().fadeIn(500);                        
        }else if (id==13 && ($('input[name="q[13]"]:checked').val() == "Beroperasi" || $('input[name="q[13]"]:checked').val() == "Beroperasi sebagian")) {
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().next().next().next().fadeIn(500);                        
        }else if (id==14 && $('input[name="q[13]"]:checked').val() == "Tutup permanen") {
            save_data();
            $(this).parent().parent().parent().next().fadeOut(100);
            $(this).parent().parent().parent().fadeOut(500);
            setTimeout(function() {
                $(".last--page").fadeIn(500);
                $(".bg").addClass("blue");
                $(".head").addClass("hidden");
            }, 500);

            $(".last--page h1").text("Terima kasih atas waktu Bapak/Ibu");
        }else if (id==23 && $('input[name="q[23]"]:checked').val() == "Tidak" || id==24) {
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().next().fadeIn(500);                        
        }else{
            if(id==46){
                save_data();
            }
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().fadeIn(500);            
        }
    });
    function lock_checkbox(id, t, text){
        if($(t).val()==text){
            if($(t).prop('checked') == false){
                $('input[data-id="'+id+'"][value!="'+$(t).val()+'"]').removeAttr("disabled");
                $('input[data-id="'+id+'"][value!="'+$(t).val()+'"]').removeClass("disabled");
            }else{
                $('input[data-id="'+id+'"][value!="'+$(t).val()+'"]').attr("disabled", true);
                $('input[data-id="'+id+'"][value!="'+$(t).val()+'"]').addClass("disabled");   
            }
        }else{
            $('input[data-id="'+id+'"][value="'+text+'"]').attr("disabled", true);
            $('input[data-id="'+id+'"][value="'+text+'"]').addClass("disabled");   
        }
        if($('input[type="checkbox"][data-id="'+id+'"]:checked').length == 0){
            $('input[data-id="'+id+'"][value="'+text+'"]').removeAttr("disabled");
            $('input[data-id="'+id+'"][value="'+text+'"]').removeClass("disabled");
        }

    }
    $('.input__others').hide();
    $("input[type='checkbox'], .input__others").on("keyup change", function() {
        var id = $(this).attr('data-id');
        var value = $(this).val();
        if(($('input[type="checkbox"][data-id="'+id+'"]:checked').length > 0 && $('input[type="checkbox"][data-id="'+id+'"][class*="last"]:checked').length == 0)
        || ($('input[type="checkbox"][data-id="'+id+'"]:checked').length > 0 && $('input[type="checkbox"][data-id="'+id+'"][class*="last"]:checked').length == 1 && $('input[type="text"][data-id="'+id+'"]').val() != '')
        ){
            $('button[data-id="'+id+'"]').removeAttr("disabled");
            $('button[data-id="'+id+'"]').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"]').attr("disabled", true);
            $('button[data-id="'+id+'"]').addClass("disabled");   
        }

        lock_checkbox(id, $(this),'Tidak menerima')
        lock_checkbox(id, $(this),'Tidak Pernah')
        lock_checkbox(id, $(this),'Tidak melakukan')
        lock_checkbox(id, $(this),'Tidak tahu')
        lock_checkbox(id, $(this),'Tidak melaksanakan')

        if($(this).hasClass('last')){
            if($(this).prop('checked') == false){
                $('input[data-id="'+id+'"][type="text"]').val('');
                $('input[data-id="'+id+'"][type="text"]').attr("disabled", true);
                $('input[data-id="'+id+'"][type="text"]').addClass("disabled");
                $('input[data-id="'+id+'"][type="text"]').hide();
            }else{
                $('input[data-id="'+id+'"][type="text"]').show();
                $('input[data-id="'+id+'"][type="text"]').removeAttr("disabled");
                $('input[data-id="'+id+'"][type="text"]').removeClass("disabled");
                $('input[data-id="'+id+'"][type="text"]').focus();
            }
        }
    });

    $("input[type='radio']").on("keyup change", function() {
        var id = $(this).attr('data-id');
        var value = $(this).val();
        if(($('input[type="radio"][data-id="'+id+'"]:checked').length > 0 && $('input[type="radio"][data-id="'+id+'"][class*="last"]:checked').length == 0)
        || ($('input[type="radio"][data-id="'+id+'"]:checked').length > 0 && $('input[type="radio"][data-id="'+id+'"][class*="last"]:checked').length == 1 && $('input[type="text"][data-id="'+id+'"]').val() != '')
        ){
            $('button[data-id="'+id+'"').removeAttr("disabled");
            $('button[data-id="'+id+'"').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"').attr("disabled", true);
            $('button[data-id="'+id+'"').addClass("disabled");   
        }
        if($('input[type="radio"][data-id="'+id+'"][class*="last"]:checked').length == 1){
            $('input[data-id="'+id+'"][type="text"]').show();
            $('input[data-id="'+id+'"][type="text"]').removeAttr("disabled");
            $('input[data-id="'+id+'"][type="text"]').removeClass("disabled");
            $('input[data-id="'+id+'"][type="text"]').focus();
        }else{
            $('input[data-id="'+id+'"][type="text"]').val('');
            $('input[data-id="'+id+'"][type="text"]').attr("disabled", true);
            $('input[data-id="'+id+'"][type="text"]').addClass("disabled");
            $('input[data-id="'+id+'"][type="text"]').hide();
        }
        
    });

    function a20(){
        var i = 1;
        $( ".input__a20" ).each(function( index ) {
            $("option", this).eq(i).prop('selected',true);
            i++
        })
        var j = 1;
        $( ".drag__a20" ).each(function( index ) {
            $(this).attr('data-position',j);
            j++
        })

        var value = $('.input__a20').map((_,el) => el.value).get()
        var unique = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
        });
        if(unique.length == 5){
            $('.btn__next__a20').removeAttr("disabled");
            $('.btn__next__a20').removeClass("disabled");
        } else {
            $('.btn__next__a20').attr("disabled", true);
            $('.btn__next__a20').addClass("disabled");
        }
        
    }
    $( "#sort-a20" ).sortable({
        update: function() {
            a20()
        }
    });
    $(".input__a20").on("keyup change", function() {
        var val = parseInt($(this).val().split("-")[0]);
        var old = parseInt($(this).parent().attr('data-position'));
        if(val > old){
            $(this).parent().insertAfter($("#sort-a20 div[data-position="+(val)+"]"));
        }else{
            $(this).parent().insertBefore($("#sort-a20 div[data-position="+(val)+"]"));
        }
        a20()
    });

    function c5(){
        var i = 1;
        $( ".input__c5" ).each(function( index ) {
            if(i<=3){
                $("option", this).eq(i).prop('selected',true);
            }else{
                $("option", this).eq(0).prop('selected',true);
            }
            i++
        })
        var j = 1;
        $( ".drag__c5" ).each(function( index ) {
            $(this).attr('data-position',j);
            j++
        })

        var value = $('.input__c5').map((_,el) => el.value).get()
        var unique = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
        });
        if(unique.length == 5){
            $('.btn__next__c5').removeAttr("disabled");
            $('.btn__next__c5').removeClass("disabled");
        } else {
            $('.btn__next__c5').attr("disabled", true);
            $('.btn__next__c5').addClass("disabled");
        }
        
        if($('.input__c5__last').val() != ''){
            $('.input__others__c5').show();
            $('.input__others__c5').removeAttr("disabled");
            $('.input__others__c5').removeClass("disabled");
            $('.input__others__c5').focus();
        }else{
            $('.input__others__c5').val('');
            $('.input__others__c5').attr("disabled", true);
            $('.input__others__c5').addClass("disabled");
            $('.input__others__c5').hide();
        }
    }
    $( "#sort-c5" ).sortable({
        update: function() {
            c5()
        }
    });
    $(".input__c5").on("keyup change", function() {
        var val = parseInt($(this).val().split("-")[0]);
        var old = parseInt($(this).parent().attr('data-position'));
        if(val > old){
            $(this).parent().insertAfter($("#sort-c5 div[data-position="+(val)+"]"));
        }else{
            $(this).parent().insertBefore($("#sort-c5 div[data-position="+(val)+"]"));
        }
        c5()
    });


    $(".radio__pick__b1").on("keyup change", function() {
        var value = $('.radio__pick__b1:checked').map((_,el) => el.value).get()
        if(value.length == 4){
            $('.btn__next__b1').removeAttr("disabled");
            $('.btn__next__b1').removeClass("disabled");
        } else {
            $('.btn__next__b1').attr("disabled", true);
            $('.btn__next__b1').addClass("disabled");
        }
    });
    $(".input__b2__last").on("keyup change", function() {
        if($(this).val() != ''){
            $('.input__others__b2').show();
            $('.input__others__b2').removeAttr("disabled");
            $('.input__others__b2').removeClass("disabled");
            $('.input__others__b2').focus();
        }else{
            $('.input__others__b2').val('');
            $('.input__others__b2').attr("disabled", true);
            $('.input__others__b2').addClass("disabled");
            $('.input__others__b2').hide();
        }
    });

    $(".input__b2, .input__others__b2").on("keyup change", function() {
        var value = $('.input__b2').map((_,el) => el.value).get()
        var unique = [];
        var sum = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
            if(el!= "" && $.inArray(el, unique) === -1) sum.push(el);
        });

        if((unique.length == 3 && sum.length == 3 && $('.input__b2__last').val()=='')
        || (unique.length == 3 && sum.length == 3 && $('.input__b2__last').val()!='' && $('.input__others__b2').val()!='')
        ){
            $('.btn__next__b2').removeAttr("disabled");
            $('.btn__next__b2').removeClass("disabled");
        } else {
            $('.btn__next__b2').attr("disabled", true);
            $('.btn__next__b2').addClass("disabled");
        }
    });

    $(".input__b3_1, .input__others__b3_1, .input__b3_2, .input__others__b3_2, .input__b3_3, .input__others__b3_3").on("keyup change", function() {
        if(
        (($('.input__b3_1:checked').length > 0 && $('.input__b3_1_last:checked').length == 0)
        || ($('.input__b3_1:checked').length > 0 && $('.input__b3_1_last:checked').length == 1 && $('.input__others__b3_1').val() != ''))
        && (($('.input__b3_2:checked').length > 0 && $('.input__b3_2_last:checked').length == 0)
        || ($('.input__b3_2:checked').length > 0 && $('.input__b3_2_last:checked').length == 1 && $('.input__others__b3_2').val() != ''))
        && (($('.input__b3_3:checked').length > 0 && $('.input__b3_3_last:checked').length == 0)
        || ($('.input__b3_3:checked').length > 0 && $('.input__b3_3_last:checked').length == 1 && $('.input__others__b3_3').val() != ''))
        ){
            $('.btn__next__b3').removeAttr("disabled");
            $('.btn__next__b3').removeClass("disabled");
        } else {
            $('.btn__next__b3').attr("disabled", true);
            $('.btn__next__b3').addClass("disabled");   
        }
    });

    $(".input__c5__last").on("keyup change", function() {
        if($(this).val() != ''){
            $('.input__others__c5').show();
            $('.input__others__c5').removeAttr("disabled");
            $('.input__others__c5').removeClass("disabled");
            $('.input__others__c5').focus();
        }else{
            $('.input__others__c5').val('');
            $('.input__others__c5').attr("disabled", true);
            $('.input__others__c5').addClass("disabled");
            $('.input__others__c5').hide();
        }
    });

    $(".input__c5, .input__others__c5").on("keyup change", function() {
        var value = $('.input__c5').map((_,el) => el.value).get()
        var unique = [];
        var sum = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
            if(el!= "" && $.inArray(el, unique) === -1) sum.push(el);
        });

        if((unique.length == 3 && sum.length == 3 && $('.input__c5__last').val()=='')
        || (unique.length == 3 && sum.length == 3 && $('.input__c5__last').val()!='' && $('.input__others__c5').val()!='')
        ){
            $('.btn__next__c5').removeAttr("disabled");
            $('.btn__next__c5').removeClass("disabled");
        } else {
            $('.btn__next__c5').attr("disabled", true);
            $('.btn__next__c5').addClass("disabled");
        }
    });


    $(".input__text").on("keyup change", function() {
        var id = $(this).attr('data-id');
        var value = $('input[data-id="'+id+'"]').map((_,el) => el.value).get()
        var status = true;
        $.each(value, function(i, el){
            if(el=='' || parseInt(el) < 0) status = false;
        });
        if(status){
            $('button[data-id="'+id+'"').removeAttr("disabled");
            $('button[data-id="'+id+'"').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"').attr("disabled", true);
            $('button[data-id="'+id+'"').addClass("disabled");
        }
    });

    $(".input__dropdown").on("change", function() {
        var id = $(this).attr('data-id');
        var value = $('select[data-id="'+id+'"]').map((_,el) => el.value).get()
        var status = true;
        $.each(value, function(i, el){
            if(el=='') status = false;
        });

        if(status){
            $('button[data-id="'+id+'"').removeAttr("disabled");
            $('button[data-id="'+id+'"').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"').attr("disabled", true);
            $('button[data-id="'+id+'"').addClass("disabled");
        }
    });

    $('form').submit(function(e) {
        e.preventDefault();
    });

    // Change bg to white
    $(".btn__change--white").on("click", function() {
        $(".bg").removeClass("blue");
        setTimeout(function() {
            $(".head").removeClass("hidden");
        }, 500);
    })

    // Change bg to blue
    $(".btn__change--blue").on("click", function() {
        $(".bg").addClass("blue");
        setTimeout(function() {
            $(".head").addClass("hidden");
        }, 500);
    })

</script>
