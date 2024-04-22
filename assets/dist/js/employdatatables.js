var table;
function initTableData() {
    var data = [
        {
            "STT":1,
            "Mã Nhân Viên":"1",
            "Tên Nhân Viên":"Nguyễn Minh K",
            "Ngày Sinh":"25/06/1995",
            "Địa Chỉ":"32, Nguyễn Huệ, Vĩnh Long",
            "Chức Vụ":"Nhân viên lắp đặt",
            "ID_TK":"2",
        }, 
        {
            "STT":1,
            "Mã Nhân Viên":"1",
            "Tên Nhân Viên":"Nguyễn Minh H",
            "Ngày Sinh":"25/06/1997",
            "Địa Chỉ":"32, Nguyễn Huệ, Vĩnh Long",
            "Chức Vụ":"Nhân viên lắp đặt",
            "ID_TK":"2",
        }
    ];
    table=$('#list').DataTable({
        "processing":true,
        data,
        columns:[
            {data:'STT'},
            {data:'Mã Nhân Viên'},
            {data:'Tên Nhân Viên'},
            {data:'Ngày Sinh'},
            {data:'Địa Chỉ'},
            {data:'Chức Vụ'},
            {data:'ID_TK'}
        ]
    });
}
$(document).ready(function(){
    initTableData();
    $("#list-header").on({
        mouseenter: function(){
            $(this).css("background-color","lightgray");
        },
        mouseleave: function(){
            $(this).css("background-color","lightblue");
        },
    });
});