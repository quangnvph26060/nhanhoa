<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Services\DomainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Summary of DomainController
 */
class DomainController extends Controller
{

    protected $domainService;
    public function __construct(DomainService $domainService)
    {
        $this->domainService = $domainService;
    }

    public function index()
    {
        $domains = $this->domainService->getDomainAll();
        //  dd($domains);
        return view('admin.domain.index', compact('domains'));
    }

    public function addform()
    {
        return view('admin.domain.add');
    }

    public function addsubmit(Request $request)
    {

        // $data = [
        //     "name" => $request->name,
        //     "domaintype_id" => $request->domaintype_id,
        //     "le_phi" => $request->le_phi,
        //     "phiduytri" => $request->phiduytri,
        //     "dichvu" => $request->dichvu,
        //     "dicvunamsau" => $request->dicvunamsau,
        // ];

        // $logo = $request->file('logo');
        // $directoryPath = 'public/domain';

        // $logoFileName = 'image_' . $logo->getClientOriginalName();
        // $logoFilePath = 'storage/domain/' . $logoFileName;

        // Storage::putFileAs($directoryPath, $logo, $logoFileName);
        // $data['logo'] = $logoFilePath;

        $domain = $this->domainService->createDomain($request->all());

        return redirect()->route('admin.domain.index')->with('success', 'Thêm thành công !');
    }

    public function editform($id)
    {
        $domain = Domain::find($id);
        return view('admin.domain.edit', compact('domain'));
    }

    public function editsubmit(Request $request, $id)
    {

        $data = [
            "name" => $request->name,
            "domaintype_id" => $request->domaintype_id,
            "le_phi" => $request->le_phi,
            "phiduytri" => $request->phiduytri,
            "dichvu" => $request->dichvu,
            "dicvunamsau" => $request->dicvunamsau,
        ];

        if ($request->file('logo')) {
            $domain = Domain::find($id);
            if ($domain->logo) {
                $oldLogoPath = str_replace('storage/', 'public/', $domain->logo);
                if (Storage::exists($oldLogoPath)) {
                    Storage::delete($oldLogoPath);
                }
            }
            $logo = $request->file('logo');
            $directoryPath = 'public/domain';

            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/domain/' . $logoFileName;

            Storage::putFileAs($directoryPath, $logo, $logoFileName);
            $data['logo'] = $logoFilePath;
        }

        // dd($data);
        $domain = $this->domainService->updateDomain($data, $id);

        return redirect()->route('admin.domain.index')->with('success', 'Thêm thành công !');
    }

    public function delete($id){
        $this->domainService->deleteDomain($id);
        return redirect()->route('admin.domain.index')->with('success', 'Xóa thành công ! ');
    }
}
