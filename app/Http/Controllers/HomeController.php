<?php
/**
 * Xử lý action crud
 * 
 * PHP version 7
 * 
 * @category Qtht
 * @package  App\Http\Controllers
 * @author   Huy <huygakinh113@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\test;

/**
 * Xử lý action crud
 * 
 * PHP version 7
 * 
 * @category Qtht
 * @package  App\Http\Controllers
 * @author   Huy <huygakinh113@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=test::paginate(5);
        return view('admin.home', ['datas'=>$data]);
    }
    /**
     * Tạo mới
     * 
     * @param Request $request 
     * 
     * @return void
     */
    public function getCreate(Request $request)
    {
        $insert = new test;
        $insert->ten = $request->add_tensv;
        $insert->sokitu = $request->add_sokitu;
        $insert->ngaytao = $request->add_ngaytao;
        $insert->fieldmoi = $request->add_fieldmoi;
        $insert->save();
        return redirect('admin/home')->with(
            'message',
            'Thêm Mới Thành Công'
        );
    }
    /**
     * Xoa
     * 
     * @param Id $id 
     * 
     * @return void
     */
    public function getDelete($id)
    {
        $delete = test::find($id);
        $delete->delete();
    }
    /**
     * Edit
     * 
     * @param Id $id 
     * 
     * @return void
     */
    public function getEdit($id)
    {
        $edit = test::where('id', $id)->first();
        return response($edit); 
    }
    /**
     * Edit
     * 
     * @param Request $request 
     * 
     * @return void
     */
    public function getSaveEdit(Request $request)
    {
        $id=$request->id;
        $edit = test::find($id);
        $edit->ten = $request->edit_tensv;
        $edit->sokitu = $request->edit_sokitu;
        $edit->ngaytao = $request->edit_ngaytao;
        $edit->fieldmoi = $request->edit_fieldmoi;
        $edit->save();
        return response()->json(['message'=>'Product saved successfully.']);
    }
}
