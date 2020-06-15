<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\maestros\CreateM_bannerRequest;
use App\Http\Requests\maestros\UpdateM_bannerRequest;
use App\Repositories\maestros\M_bannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use App\Menu; 
use Session;

class M_bannerController extends AppBaseController
{
    /** @var  M_bannerRepository */
    private $mBannerRepository;

    public function __construct(M_bannerRepository $mBannerRepo)
    {
        $this->mBannerRepository = $mBannerRepo;
    }

    /**
     * Display a listing of the M_banner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mBanners = $this->mBannerRepository->all();

        Menu::seleccionMenu('Banners');
        return view('maestros.m_banners.index')
            ->with('mBanners', $mBanners);
    }

    /**
     * Show the form for creating a new M_banner.
     *
     * @return Response
     */
    public function create()
    {
        return view('maestros.m_banners.create');
    }

    /**
     * Store a newly created M_banner in storage.
     *
     * @param CreateM_bannerRequest $request
     *
     * @return Response
     */
    public function store(CreateM_bannerRequest $request)
    {
        $input = $request->all();

        $mBanner = $this->mBannerRepository->create($input);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mBanner->fill(['image'=>asset($path)])->save();
        }

        Flash::success('M Banner saved successfully.');

        return redirect(route('mBanners.index'));
    }

    /**
     * Display the specified M_banner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mBanner = $this->mBannerRepository->find($id);

        if (empty($mBanner)) {
            Flash::error('M Banner not found');

            return redirect(route('mBanners.index'));
        }

        return view('maestros.m_banners.show')->with('mBanner', $mBanner);
    }

    /**
     * Show the form for editing the specified M_banner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mBanner = $this->mBannerRepository->find($id);

        if (empty($mBanner)) {
            Flash::error('M Banner not found');

            return redirect(route('mBanners.index'));
        }

        return view('maestros.m_banners.edit')->with('mBanner', $mBanner);
    }

    /**
     * Update the specified M_banner in storage.
     *
     * @param int $id
     * @param UpdateM_bannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_bannerRequest $request)
    {
        $mBanner = $this->mBannerRepository->find($id);

        if (empty($mBanner)) {
            Flash::error('M Banner not found');

            return redirect(route('mBanners.index'));
        }

        $mBanner = $this->mBannerRepository->update($request->all(), $id);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mBanner->fill(['image'=>asset($path)])->save();
        }

        Flash::success('M Banner updated successfully.');

        return redirect(route('mBanners.index'));
    }

    /**
     * Remove the specified M_banner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mBanner = $this->mBannerRepository->find($id);

        if (empty($mBanner)) {
            Flash::error('M Banner not found');

            return redirect(route('mBanners.index'));
        }

        $this->mBannerRepository->delete($id);

        Flash::success('M Banner deleted successfully.');

        return redirect(route('mBanners.index'));
    }
}
