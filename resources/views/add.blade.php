<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        
    </head>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_student">Open Modal</button>

<!-- Modal -->
<div id="add_student" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm Sinh Viên</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post" action="#" id="frm_add_student">
                @csrf
                    <div class="form-line">
                        <input type="text" name="add_hosv" id="add_hosv" class="form-control" placeholder="Nhập họ sinh viên" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" name="add_tensv" id="add_tensv" class="form-control" placeholder="Nhập tên sinh viên" required>
                        </div>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-flat" id="btn_add_student">Lưu lại</button>
                <button type="button" class="btn btn-flat btn-danger" data-dismiss="modal">Hủy</button>
            </div>
            </form>
        </div>

    </div>
</div>

</html>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $(function(){
        $('#btn_add_student').on('click', function (e) {
        e.preventDefault();
        $('#frm_add_student').submit();
    });
    $('#frm_add_student').validate({
        errorClass: 'error-msg-validate',
        rules: {
            add_hosv: {
                required: true,
            },
            add_tensv: {
                required: true,
            },
        },

    });
    $("#frm_add_student").on('submit', function (e) {
        if ($(this).valid()) {
            var data = $(this).serializeArray();
            var url = $(this).attr('action');
            $.post(url, data, function (resp) {
                if (resp.error == 1) {
                    toastr.error(resp.message, 'Thông Báo!', {closeButton: true});
                    datatable.ajax.reload();
                    $('#add_student').modal('hide');
                    return false;
                } else {
                    toastr.success(resp.message, 'Thông Báo!', {closeButton: true});
                    datatable.ajax.reload();
                    $('#add_student').modal('hide');
                    return true;
                }
            }, 'json');
            
        }
    });
    });
</script>
