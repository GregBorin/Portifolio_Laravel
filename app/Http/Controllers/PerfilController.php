<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilController extends Controller
{

    public $perfil;

    public function __construct(Perfil $perfil){
        $this->perfil = $perfil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfils = $this->perfil->paginate(20);

        return view('perfils.index', compact('perfils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = $request->all();

            $profilePicture = $_FILES['foto']['name'];
            $target_dir = "../public/img/";
            //$target_file = $target_dir . basename($data["foto"]["name"]);
            //$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            //$extensions_arr = array("jpg", "jpeg", "png", "gif");

            $perfil = $this->perfil;
            $perfil->nome = $data['nome'];
            $perfil->sobrenome = $data['sobrenome'];
            $perfil->foto = $profilePicture;
            $perfil->email = $data['email'];
            $perfil->endereco = $data['endereco'];
            $perfil->descricao = $data['descricao'];
            $perfil->linkedin = $data['linkedin'];
            $perfil->facebook = $data['facebook'];
            $perfil->github = $data['github'];
            $perfil->twitter = $data['twitter'];
            $perfil->save();
            
            move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir . $profilePicture);

            //$perfil = $this->perfil->create($data);
            flash('Perfil criado com sucesso!')->success();
            return redirect()->route('perfils.index');
        } catch(\Exception $e) {
            if(env('APP_DEBUG')) {
                flash($e->getMessage())->warning();
                return redirect()->back();
            }
            flash('Perfil não foi criada com sucesso!')->warning();
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $perfil = $this->perfil->findOrFail($id);
            return view('perfils.show', compact('perfil'));
        } catch(\Exception $e) {
            if(env('APP_DEBUG')) {
                flash($e->getMessage())->warning();
                return redirect()->back();
            }
            flash('Perfil não encontrado...')->warning();
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $perfil = $this->perfil->findOrFail($id);
            return view('perfils.edit', compact('perfil'));
        } catch(\Exception $e) {
            if(env('APP_DEBUG')) {
                flash($e->getMessage())->warning();
                return redirect()->back();
            }
            flash('Perfil não encontrado...')->warning();
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $data = $request->all();

            $perfil = $this->perfil->findOrFail($id);
            
            //$target_file = $target_dir . basename($data["foto"]["name"]);
            //$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            //$extensions_arr = array("jpg", "jpeg", "png", "gif");
            if($_FILES['foto']['name']){
                $profilePicture = $_FILES['foto']['name'];
                $target_dir = "../public/img/";
                $perfil->foto = $profilePicture;
                move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir . $profilePicture);
            }

            $perfil->nome = $data['nome'];
            $perfil->sobrenome = $data['sobrenome'];
            $perfil->email = $data['email'];
            $perfil->endereco = $data['endereco'];
            $perfil->descricao = $data['descricao'];
            $perfil->linkedin = $data['linkedin'];
            $perfil->facebook = $data['facebook'];
            $perfil->github = $data['github'];
            $perfil->twitter = $data['twitter'];
            $perfil->update();
            
            flash('Post atualizado com sucesso!')->success();
            return redirect()->route('perfils.index');
        } catch(\Exception $e) {
            if(env('APP_DEBUG')) {
                flash($e->getMessage())->warning();
                return redirect()->back();
            }
            flash('Perfil não foi atualizado...')->warning();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $perfil = $this->perfil->findOrFail($id);
            $perfil->delete();
            flash('Perfil removido com sucesso!')->success();
            return redirect()->route('perfils.index');
        } catch(\Exception $e) {
            if(env('APP_DEBUG')) {
                flash($e->getMessage())->warning();
                return redirect()->back();
            }
            flash('Perfil não pode ser removido...')->warning();
            return redirect()->back();
        }
    }
    
}
