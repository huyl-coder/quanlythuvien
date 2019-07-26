@extends('admin.layouts.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Content</h1>
            </div>
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <div class="panel panel-default">
						<div class="panel-heading">
                            <div> 
                                <i class="fa fa-users"></i> List
                                <button type="button" class="btn btn-success add" data-toggle="modal" data-target="#add">Add</button>
                            </div>
						</div>
                        <div class="panel-body">
                           <div class="table-responsive">
                                <table id="list" class="table table-striped table-bordered table-hover ">
                                    <thead>
                                        <tr>
											<th>Name</th>
											<th>Số Kí Tự</th>
											<th>Ngày Tạo</th>
                                            <th>fieldMoi</th>
											<th>Action</th>
										</tr>
                                    </thead>
                                    <tbody class="tbody">
                                            @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->ten }}</td>
                                                <td>{{ $data->sokitu }}</td>
                                                <td>{{ $data->ngaytao }}</td>
                                                <td>{{ $data->fieldmoi }}</td>
                                                <td>
                                                    <a data-id="{{$data->id}}" class="btn btn-info edit">Edit</a>
                                                    <a data-url="{{route('delete',$data->id)}}" class="btn btn-danger delete-user">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                {{ $datas->links() }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{route('add')}}" id="frm_add">
                                @csrf
                                    <div class="form-group">
                                        <label>Name <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="add_tensv" id="add_tensv" class="form-control" placeholder="Nhập name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Số Kí Tự <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="add_sokitu" id="add_sokitu" class="form-control" placeholder="Nhập Số Kí Tự" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Tạo <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="date" name="add_ngaytao" id="add_ngaytao" class="form-control" placeholder="Nhập date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Field Mới <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="add_fieldmoi" id="add_fieldmoi" class="form-control" placeholder="Nhập Filed mới" required>
                                        </div>
                                    </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-flat" id="btn_add">Lưu lại</button>
                                <button type="button" class="btn btn-flat btn-danger" data-dismiss="modal">Hủy</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{route('edit')}}" id="frm_edit">
                                @csrf  
                                    <input type=hidden name="id" id="edit_id">
                                    <div class="form-group">
                                        <label>Name <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="edit_tensv" id="edit_tensv" class="form-control" placeholder="Nhập name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Số Kí Tự <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="edit_sokitu" id="edit_sokitu" class="form-control" placeholder="Nhập Số Kí Tự" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Tạo <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="date" name="edit_ngaytao" id="edit_ngaytao" class="form-control" placeholder="Nhập date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Field Mới <span class='text-danger'>*</span></label>
                                        <div class="form-line">
                                            <input type="text" name="edit_fieldmoi" id="edit_fieldmoi" class="form-control" placeholder="Nhập Filed mới" required>
                                        </div>
                                    </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-flat" id="btn_edit">Lưu lại</button>
                                <button type="button" class="btn btn-flat btn-danger" data-dismiss="modal">Hủy</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection