<script>

    function submit()
    {
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
        if (id==0 && $('input[name="q[0]"]:checked').val() == "no") {
            $(this).parent().parent().parent().next().fadeOut(100);
            $(this).parent().parent().parent().fadeOut(500);
            setTimeout(function() {
                $(".last--page").fadeIn(500);
                $(".bg").addClass("blue");
                $(".head").addClass("hidden");
            }, 500);
            $(".last--page h1").text("Terima kasih atas ketertarikan Bapak/Ibu dalam mengisi survei ini");
        }else if (id==1 && $('input[name="q[1]"]:checked').val() == "no") {
            $(this).parent().parent().parent().next().fadeOut(100);
            $(this).parent().parent().parent().fadeOut(500);
            setTimeout(function() {
                $(".last--page").fadeIn(500);
                $(".bg").addClass("blue");
                $(".head").addClass("hidden");
            }, 500);

            $(".last--page h1").text("Terima kasih atas waktu Bapak/Ibu");
        }else if (id==5 && $('input[name="q[5]"]:checked').val() == "Tidak") {
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().next().fadeIn(500);                        
        }else if ((id==15 && $('input[name="q[15]"]:checked').val() == "Tidak") || id==16) {
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().next().fadeIn(500);                        
        }else{
            $(this).attr("disabled", true);
            $(this).addClass("disabled")
            $(this).parent().parent().parent().fadeOut(500);
            $(this).parent().parent().parent().next().fadeIn(500);            
        }
    });
    
    $('.input__others').hide();
    $("input[type='checkbox'], .input__others").on("keyup change", function() {
        var id = $(this).attr('data-id');
        var value = $(this).val();
        if(($('input[type="checkbox"][data-id="'+id+'"]:checked').length > 0 && $('input[type="checkbox"][data-id="'+id+'"][class*="last"]:checked').length == 0)
        || ($('input[type="checkbox"][data-id="'+id+'"]:checked').length > 0 && $('input[type="checkbox"][data-id="'+id+'"][class*="last"]:checked').length == 1 && $('input[type="text"][data-id="'+id+'"]').val() != '')
        ){
            $('button[data-id="'+id+'"').removeAttr("disabled");
            $('button[data-id="'+id+'"').removeClass("disabled");
        } else {
            $('button[data-id="'+id+'"').attr("disabled", true);
            $('button[data-id="'+id+'"').addClass("disabled");   
        }
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

    $(".input__a12").on("keyup change", function() {
        var value = $('.input__a12').map((_,el) => el.value).get()
        var unique = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
        });
        if(unique.length == 5){
            $('.btn__next__a12').removeAttr("disabled");
            $('.btn__next__a12').removeClass("disabled");
        } else {
            $('.btn__next__a12').attr("disabled", true);
            $('.btn__next__a12').addClass("disabled");
        }
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

    $(".input__b5_1, .input__others__b5_1, .input__b5_2, .input__others__b5_2, .input__b5_3, .input__others__b5_3").on("keyup change", function() {
        if(
        (($('.input__b5_1:checked').length > 0 && $('.input__b5_1_last:checked').length == 0)
        || ($('.input__b5_1:checked').length > 0 && $('.input__b5_1_last:checked').length == 1 && $('.input__others__b5_1').val() != ''))
        && (($('.input__b5_2:checked').length > 0 && $('.input__b5_2_last:checked').length == 0)
        || ($('.input__b5_2:checked').length > 0 && $('.input__b5_2_last:checked').length == 1 && $('.input__others__b5_2').val() != ''))
        && (($('.input__b5_3:checked').length > 0 && $('.input__b5_3_last:checked').length == 0)
        || ($('.input__b5_3:checked').length > 0 && $('.input__b5_3_last:checked').length == 1 && $('.input__others__b5_3').val() != ''))
        ){
            $('.btn__next__b5').removeAttr("disabled");
            $('.btn__next__b5').removeClass("disabled");
        } else {
            $('.btn__next__b5').attr("disabled", true);
            $('.btn__next__b5').addClass("disabled");   
        }
    });

    $(".input__b9__last").on("keyup change", function() {
        if($(this).val() != ''){
            $('.input__others__b9').show();
            $('.input__others__b9').removeAttr("disabled");
            $('.input__others__b9').removeClass("disabled");
            $('.input__others__b9').focus();
        }else{
            $('.input__others__b9').val('');
            $('.input__others__b9').attr("disabled", true);
            $('.input__others__b9').addClass("disabled");
            $('.input__others__b9').hide();
        }
    });

    $(".input__b9, .input__others__b9").on("keyup change", function() {
        var value = $('.input__b9').map((_,el) => el.value).get()
        var unique = [];
        var sum = [];
        $.each(value, function(i, el){
            var val = el.split("-")[0];
            if(el!= "" && $.inArray(val, unique) === -1) unique.push(val);
            if(el!= "" && $.inArray(el, unique) === -1) sum.push(el);
        });

        if((unique.length == 3 && sum.length == 3 && $('.input__b9__last').val()=='')
        || (unique.length == 3 && sum.length == 3 && $('.input__b9__last').val()!='' && $('.input__others__b9').val()!='')
        ){
            $('.btn__next__b9').removeAttr("disabled");
            $('.btn__next__b9').removeClass("disabled");
        } else {
            $('.btn__next__b9').attr("disabled", true);
            $('.btn__next__b9').addClass("disabled");
        }
    });


    $(".input__text").on("keyup change", function() {
        var id = $(this).attr('data-id');
        var value = $('input[data-id="'+id+'"]').map((_,el) => el.value).get()
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
        submit()
        e.preventDefault();
    });
</script>