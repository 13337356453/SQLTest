$("[type='button']").click(function () {
var uid=$("#id").val().trim();
if (uid!=""){
$.ajax(
    {
        url:'getUser.php',
        data:{id:uid},
        type:"POST",
        success:function (data) {
            $("#uid").text(data.uid);
            $("#name").text(data.name);
            $("#intro").text(data.intro);
        }
    }
)}else {
    alert("请输入id");
}
});