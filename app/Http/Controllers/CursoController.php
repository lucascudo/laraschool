<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Repositories\CursoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Curso;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Flash;
use Response;


class CursoController extends AppBaseController
{
    /** @var  CursoRepository */
    private $cursoRepository;

    public function __construct(CursoRepository $cursoRepo)
    {
        $this->cursoRepository = $cursoRepo;
    }

    /**
     * Display a listing of the Curso.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cursos = $this->cursoRepository->paginate(10);

        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new Curso.
     *
     * @return Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created Curso in storage.
     *
     * @param CreateCursoRequest $request
     *
     * @return Response
     */
    public function store(CreateCursoRequest $request)
    {
        $input = $request->all();

        Curso::validate($input);

        $curso = $this->cursoRepository->create($input);

        Flash::success('Curso salvo com sucesso.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified Curso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso não encontrado');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified Curso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso não encontrado');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit')->with('curso', $curso);
    }

    /**
     * Update the specified Curso in storage.
     *
     * @param int $id
     * @param UpdateCursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursoRequest $request)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso não encontrado');

            return redirect(route('cursos.index'));
        }

        $input = $request->all();

        Curso::validate($input, [
            'titulo' => ['required', 'string', 'max:255', Rule::unique('cursos')->ignore($id)],
        ]);

        $curso = $this->cursoRepository->update($input, $id);

        Flash::success('Curso atualizado com sucesso.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified Curso from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso não encontrado');

            return redirect(route('cursos.index'));
        }

        $this->cursoRepository->delete($id);

        Flash::success('Curso apagado com sucesso.');

        return redirect(route('cursos.index'));
    }
}
