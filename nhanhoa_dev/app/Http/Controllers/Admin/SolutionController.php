<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SolutionService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SolutionController extends Controller
{
    protected $solutionService;
    public function __construct(SolutionService $solutionService)
    {
        $this->solutionService = $solutionService;
    }

    public function index(Request $request)
    {
        try {
            $solutions = $this->solutionService->getPaginatedSolution();

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('admin.solution.table', compact('solutions'))->render(),
                    'pagination' => $solutions->links('pagination::custom')->toHtml()
                ]);
            }
            return view('admin.solution.index', compact('solutions'));
        } catch (Exception $e) {
            Log::error("Failed to get paginated Solution list: " . $e->getMessage());
            return response()->json(['error' => 'Failed to get paginated Solution list'], 500);
        }
    }

    public function search(Request $request)
    {
        try {
            $query = $request->input('name');
            $solutions = $this->solutionService->getSolutionByName($query);

            if ($request->ajax()) {
                $html = view('admin.solution.table', compact('solutions'))->render();
                $pagination = $solutions->appends(['name' => $query])->links('pagination::custom')->render();
                return response()->json(['html' => $html, 'pagination' => $pagination]);
            }

            return view('admin.solution.index', compact('solutions', 'query')); // Pass query to view
        } catch (Exception $e) {
            Log::error("Failed to search for Solutions: " . $e->getMessage());
            return response()->json(['error' => 'Failed to search for Solutions'], 500);
        }
    }


    public function add()
    {
        return view('admin.solution.add');
    }

    public function store(Request $request)
    {
        try {
            $solution = $this->solutionService->addNewSolution($request->all());

            return redirect()->route('admin.solution.index')->with('success', 'Thêm giải pháp thành công');
        } catch (Exception $e) {
            Log::error('Failed to create new Solution: ' . $e->getMessage());
            throw new Exception("Failed to create new Solution");
        }
    }

    public function delete($id)
    {
        try {
            $this->solutionService->deleteSolution($id);
            return response()->json(['success' => 'Xóa giải pháp thành công']);
        } catch (Exception $e) {
            Log::error('Failed to delete this Solution: ' . $e->getMessage());
            return response()->json(['error' => 'Xóa giải pháp thất bại'], 500);
        }
    }

    public function edit($id)
    {
        $solution = $this->solutionService->getSolutionById($id);
        return view('admin.solution.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        try {
            // dd($request->all());
            $solution = $this->solutionService->updateSolution($request->all(), $id);
            Log::info('Cập nhật thông tin giải pháp thành công!');
            session()->flash('success', 'Cập nhật thông tin giải pháp thành công');
            return redirect()->route('admin.solution.index');
        } catch (Exception $e) {
            Log::error('Failed to update Solution information: ' . $e->getMessage());
            return response()->json(['error' => 'Cập nhật thông tin giải pháp thất bại '], 500);
        }
    }
}
