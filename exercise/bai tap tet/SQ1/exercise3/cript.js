 $(document).ready(function () {
    $("button").click(function () { 
        $("#result").html("");
        var emailRegex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if($("#name").val().trim()==''){
            $("#result").append("-Name í invalid- <br>");
            $("#result").css("color", "red");
            $("#name").css("border", "1px solid red");
        }else{
            $("#name").css("border", "1px solid black");
        }
        if(emailRegex.test($("#email").val())==false){
            $("#result").append("-Email is invalid- <br>");
            $("#result").css("color", "red");
            $("#email").css("border", "1px solid red");
        }else{
            $("#email").css("border", "1px solid black");
        }
        if($("#countries").val()=="-1"){
            $("#result").append("-Country is invalid-");
            $("#result").css("color", "red");
            $("#countries").css("border", "1px solid red");
        }else{
            $("#countries").css("border", "1px solid black");
        }
        if($("#name").val().trim()!='' && emailRegex.test($("#email").val())!=false && $("#countries").val()!="-1"){
            $("#result").html('Name: '+$("#name").val()+'<br> Email: '+$("#email").val()+'<br> Country: '+$("#countries option:selected").text());
            $("#result").css("color", "black");
        }
    });
});