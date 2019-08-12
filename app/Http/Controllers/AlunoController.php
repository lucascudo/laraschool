<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use App\Repositories\AlunoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AlunoController extends AppBaseController
{
    /** @var  AlunoRepository */
    private $alunoRepository;

    public function __construct(AlunoRepository $alunoRepo)
    {
        $this->alunoRepository = $alunoRepo;
    }

    /**
     * Display a listing of the Aluno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alunos = $this->alunoRepository->paginate(10);

        return view('alunos.index')
            ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new Aluno.
     *
     * @return Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created Aluno in storage.
     *
     * @param CreateAlunoRequest $request
     *
     * @return Response
     */
    public function store(CreateAlunoRequest $request)
    {
        $input = $request->all();

        $aluno = $this->alunoRepository->create($input);

        Flash::success('Aluno saved successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Display the specified Aluno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified Aluno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.edit')->with('aluno', $aluno);
    }

    /**
     * Update the specified Aluno in storage.
     *
     * @param int $id
     * @param UpdateAlunoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlunoRequest $request)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $aluno = $this->alunoRepository->update($request->all(), $id);

        Flash::success('Aluno updated successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Remove the specified Aluno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aluno = $this->alunoRepository->find($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $this->alunoRepository->delete($id);

        Flash::success('Aluno deleted successfully.');

        return redirect(route('alunos.index'));
    }
}
