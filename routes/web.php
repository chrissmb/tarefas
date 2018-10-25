<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Use App\Tarefa;
Use Illuminate\Http\Request;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/teste', function () {
    return "Olha eu!";
})->middleware('auth');

Route::get('/login', function () {
    return "Página de login";
})->name('login');

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/tarefas', function () {
    $tarefas = Tarefa::all();
    return view('tarefas', ['tarefas' => $tarefas]);
});

Route::get('/tarefas-json', function () {
    return Tarefa::all();
});

Route::post('/tarefas', function (Request $req) {
    $validator = Validator::make($req->all(), [
        'descricao' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $tarefa = new Tarefa;
    $tarefa->descricao = $req->descricao;
    $tarefa->save();

    return redirect('/tarefas');
});

Route::delete('tarefas/{tarefa}', function (Tarefa $tarefa) {
    $tarefa->delete();
    return redirect('/tarefas');
});
