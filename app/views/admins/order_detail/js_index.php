<script>
    
   $(document).ready(function() {
    update_address();
    update_contact();
   })

    function update_address(){
        $(document).on('click','#edit',function(){
            $("#area").css("display", "block");
            $("#address").css("display", "none");
            
            var id = $('#idOrder').val();
            var content = $('#address').children().text().trim();
            $('#area').val(content);
            
            $(document).on('blur','#area',function()
            {
                var cont = $('#area').val();
                var _token = $('meta[name=csrf-token]').attr("content");
                $.ajax(
                    {
                        url: "{{_WEB_ROOT.'/detail-edit'}}",
                        method: 'post',
                        data:{id: id, _token, cont: cont},
                        success: function(data)
                        {
                            load_address();
                            $("#address").addClass("fadeAnimation");
                            $("#address").css("display", "block");          
                            $("#area").css("display", "none");                          
                            // swal("Thành công!", "Bạn đã sửa thành công!", "success");       
                        }
                    })  
            })
        })
    }
   
   
    function load_address()
    {
        var id = $('#idOrder').val();
        var _token = $('meta[name=csrf-token]').attr("content");
        $.ajax(
            {
                url: "{{_WEB_ROOT}}/detail-load-address",
                method: 'post',
                data:{id: id, _token},
                success: function(data)
                {
                    data = $.parseJSON(data);
                    if(data.status=='success')
                    {
                        $('#address').html(data.html);
                    }
                }
            })  
    }

    function update_contact(){
        $(document).on('click','#edit1',function(){
            $(".list-unstyled-py-2").removeClass("fadeAnimation");
            $("#email").css("display", "block");
            $("#phone").css("display", "block");
            $("#email-content").css("display", "none");
            $("#phone-content").css("display", "none");
            var email = $('#email-content').text().trim();
            var phone = $('#phone-content').text().trim();
            phone = phone.replace(/\s+/g, '');
            $('#email').val(email);
            $('#phone').val(phone);
            $(document).on('blur','.form-blur',function()
            {
                var id = $('#id_customer').val();
                var emailVal = $('#email').val();
                var phoneVal = $('#phone').val();
                var _token = $('meta[name=csrf-token]').attr("content");
                $.ajax(
                    {
                        url: "{{_WEB_ROOT.'/detail-edit-contact'}}",
                        method: 'post',
                        data:{id: id, _token, email: emailVal, phone: phoneVal},
                        success: function(data)
                        {
                            load_contact();
                            $(".list-unstyled-py-2").addClass("fadeAnimation");
                            $("#email-content").css("display", "block");
                            $("#phone-content").css("display", "block");     
                            $("#email").css("display", "none");
                            $("#phone").css("display", "none");          
     
                        }
                    })  
            })
        })
        
    }
    function load_contact()
    {
        var id = $('#id_customer').val();
        var _token = $('meta[name=csrf-token]').attr("content");
        $.ajax(
            {
                url: "{{_WEB_ROOT}}/detail-load-contact",
                method: 'post',
                data:{id: id, _token},
                success: function(data)
                {
                    data = $.parseJSON(data);
                    if(data.status=='success')
                    {
                        $('.list-unstyled-py-2').html(data.html);
                    }
                }
            })  
    }

</script>