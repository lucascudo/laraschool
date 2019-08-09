<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsuarioController extends AppBaseController
{
    /** @var  UsuarioRepository */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuarioRepository->paginate(10);

        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioRequest $request)
    {
        $input = $request->all();

        User::validate($input);

        $input['password'] = Hash::make($input['password']);

        $usuario = $this->usuarioRepository->create($input);

        Flash::success('Usuario salvo com sucesso.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario não encontrado');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario não encontrado');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuario', $usuario);
    }

    /**
     * Update the specified Usuario in storage.
     *
     * @param int $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario não encontrado');

            return redirect(route('usuarios.index'));
        }

        $input = $request->all();

        if (empty($input['password'])) {
            unset($input['password']);
        } else {
            $input['password'] = Hash::make($input['password']);
        }

        User::validate($input, [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $usuario = $this->usuarioRepository->update($input, $id);

        Flash::success('Usuario atualizado com sucesso.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario não encontrado');

            return redirect(route('usuarios.index'));
        }

        $this->usuarioRepository->delete($id);

        Flash::success('Usuario apagado com sucesso.');

        return redirect(route('usuarios.index'));
    }
}
