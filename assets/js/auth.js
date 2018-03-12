var base_url = $('#base_url').val();
function sendVFcode()
{
    var email = $('#identity').val();
    var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    if(!myreg.test(email))
    {
        alert("请输入正确格式的EMAIL!");
        return false;
    }
    
    $.ajax({
        url     : base_url+'auth/sendVFcode',
        type    : "post",
        data    : {email:email},
        success :function(res){
            $('#bt_sendVF').val("已发送");
            $('#bt_sendVF').prop('disabled', true);
            $('#notget').show();
        }
    })
}

function resend()
{
    $('#notget').hide();
    $('#bt_sendVF').val("发送验证码");
    $('#bt_sendVF').prop('disabled', false);
}