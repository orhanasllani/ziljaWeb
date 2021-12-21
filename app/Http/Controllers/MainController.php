<?php

namespace App\Http\Controllers;

use App\Models\Orari;
use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $ditet_e_javes = Orari::$ditet_e_javes;
        $oraret = Orari::select('*')->get()->groupBy('dita')->toArray();
        return view('index', compact('ditet_e_javes', 'oraret'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        Orari::create($request->all());
        return redirect('/');
    }

    public function modify($id)
    {
        $orari = Orari::findOrFail((int) $id);
        return view('modify', compact('orari'));;
    }

    public function update(Request $request, $id)
    {
        $orari = Orari::findOrFail((int) $id);
        $orari->update($request->all());
        return redirect('/');
    }

    public function delete($id)
    {
        $orari = Orari::findOrFail((int) $id);
        $orari->delete();
        return redirect('/');
    }

    public function bjeriZiles()
    {

        $dita = Orari::$ditet_e_javes[(int)date('N') - 1];

        $ora = Carbon::now()->addHour()->second(0);

        $oret = Orari::where('dita', $dita)->where(function ($query) use ($ora) {
            return $query->orWhere('fillon', $ora)->orWhere('mbaron', $ora);
        })->first();

        $queue = Queue::where('id', '>', 0)->first();

        if ($queue) {
            Queue::truncate();
            return response()->json(["status" => true]);
        }


        if ($oret) {
            return response()->json(["status" => true]);
        }

        return response()->json(["status" => false]);
    }

    public function bjeriZilesTani()
    {
        Queue::create([]);
        return redirect('/');
    }
}
