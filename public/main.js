$(document).ready(function(){
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//  Submit  Resident Form
$(function (){
    $('#submit_resident').on('submit', function (e){
        e.preventDefault()

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend:function (){
                $(document).find('span.error-text').text('');
            },
            success:function (data){
                alert(JSON.stringify(data));
                if(data.status === 0){
                    $.each(data.error, function (prefix, val){
                       $('span.'+prefix+'-error').text(val[0]);
                    });
                    alert('Hahaha')
                }else {
                    $('#submit_resident')[0].reset();
                    alert(data.message);
                }
            },
            error:function (data){
                alert(JSON.stringify(data));
            }
        })
    })
})
