<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $all_partners = Partner::all();
        return view('backend.admin.partner.index', compact('all_partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerRequest $request)
    {
         $validated_data = $request->validated();

        // Check if the image file exists
        if ($request->hasFile('image')) {
            $validated_data['image'] = $this->uploadFile($request->file('image'), 'partner');
        }

        Partner::create($validated_data);

        return redirect()->back()->with('success', 'New partner added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $partner = Partner::find($id);
        return view('backend.admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerRequest $request, string $id)
    {
        $validated_data = $request->validated();

        // Find the slider record
        $partner = Partner::find($id);

        // Check if the image file exists in the request
        if ($request->hasFile('image')) {
            // Unlink the previous image if it exists
            if ($partner->image && file_exists(public_path($partner->image))) {
                unlink(public_path($partner->image));
            }

            // Upload the new image
            $validated_data['image'] = $this->uploadFile($request->file('image'), 'partner');
        }

        // Update the slider record
        $partner->update($validated_data);

        return redirect()->back()->with('success', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
    {
       $partner = Partner::findOrFail($id);
       if($partner->image){
        $imagePath = public_path(parse_url($partner->image, PHP_URL_PATH));
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
       }

        $partner->delete();


        return redirect()->route('admin.partner.index')->with('success', 'Partner deleted successfully.');
    }
}