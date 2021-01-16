<?php

namespace App\Services;

use App\Models\Gallery;
use Exception;

class GalleryService extends Service
{
    /**
     * Show all to main page, order by id, paginate
     *
     * @param $paginate
     * @return mixed
     */
    public function showAllToMainPage($paginate)
    {
        try {
            return Gallery::where('status_to_main_page_id', self::SHOW_TO_MAIN_PAGE)
                ->where('status_gallery_id', self::SHOW_TO_MAIN_PAGE)
                ->orderBy('id', 'DESC')
                ->paginate($paginate);
        }catch (Exception $e){
            return abort(404);
        }

    }

    /**
     * Show all to gallery page, paginate
     *
     * @param $paginate
     * @return mixed
     */
    public function showAllToGallery($paginate)
    {
        try {
            return Gallery::where('status_gallery_id', self::SHOW_TO_MAIN_PAGE)
                ->orderBy('id', 'DESC')
                ->paginate($paginate);
        }catch (Exception $e){
            return abort(403);
        }
    }

    /**
     * Show all to gallery by Id Category
     *
     * @param $category_id
     * @param $paginate
     * @return mixed
     */
    public function showAllToGalleryWhereCategorySlug($category_id, $paginate)
    {
        try {
            return Gallery::where('category_id', $category_id)
                ->where('status_gallery_id', self::SHOW_TO_MAIN_PAGE)
                ->orderBy('id', 'DESC')
                ->paginate($paginate);
        }catch (Exception $e){
            return abort(403);
        }
    }
}
