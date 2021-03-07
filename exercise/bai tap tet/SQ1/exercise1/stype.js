$(document).ready(function () {
    $(".container").append("<p></p>");
    $("#calculate").click(function () {
        var lengthValue=$("#length").val();
        var widthValue=$("#width").val();
        if(lengthValue==''||widthValue==''){
            $("#in").text("Vui lòng nhập đầy đủ dữ liệu").css("color","red");
        }else{
            $("#in").html("<p>Chu vi là: "+(parseFloat(lengthValue)+parseFloat(widthValue))*2+"m" <br>
							 "Diện tích là: "+(parseFloat(lengthValue)*parseFloat(widthValue))+"m<sup>2</sup></p>").css("color","black");
        }
    });
});
