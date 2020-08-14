$(document).ready(function() {
    $(".deleteForm").click(function(event) {
        event.preventDefault();
        console.log(this);
        var name = $(this).data("name");
        var form = $(this).closest("form");
        swal({
            title: `ต้องการลบข้อมูล ${name} หรือไม่ ?`,
            text: "ถ้ากดปุ่มข้อมูลจะถูกลบออกจากฐานข้อมูล",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(comfirm => {
            if (comfirm) {
                swal("ข้อมูลถูกลบแล้ว", { icon: "success" });
                form.submit();
            } else {
                swal("ข้อมูลยังคงปลอดภัย", { icon: "error" });
            }
        });
    });
});
