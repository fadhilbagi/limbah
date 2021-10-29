<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Limbah;
use DataTables;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function ($row) {
                       return [
                          'display' => e($row->created_at->format('d/m/Y')),
                          'timestamp' => $row->created_at->timestamp
                       ];
                    })
                    ->filterColumn('created_at', function ($query, $keyword) {
                       $query->whereRaw("DATE_FORMAT(created_at,'%d/%m/%Y') LIKE ?", ["%$keyword%"]);
                    })
                    ->make(true);
        }
        return view('users');   
    }
    public function dash(Request $request)
    {
      if ($request->ajax()) {
         $data = limbah::select('*');
         return Datatables::of($data)
                 ->addIndexColumn()
                 ->editColumn('created_at', function ($row) {
                    return [
                       'display' => e($row->created_at->format('d/m/Y')),
                       'timestamp' => $row->created_at->timestamp
                    ];
                 })
                 ->filterColumn('datetime', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(datetime,'%d/%m/%Y') LIKE ?", ["%$keyword%"]);
                 })
                 ->make(true);
     }
      $table = Limbah::orderby('datetime','desc')->limit('1')->get();
      $inflow =Limbah::orderby('datetime','desc')->limit('13')->get();
       return view('dashboad',['data'=>$table,'inflow'=>$inflow]);
    }
}