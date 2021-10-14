<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Limbah;
use DataTables;
  
class LimbahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Limbah::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('datetime', function ($row) {
                        return [
                           'display' => e($row->datetime->format('d/m/Y H:i:s')),
                           'timestamp' => $row->datetime->timestamp
                        ];
                     })
                     ->filterColumn('datetime', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(created_at,'%d/%m/%Y') LIKE ?", ["%$keyword%"]);
                     })
                    ->make(true);
        }
        
        return view('limbah');
    }
}