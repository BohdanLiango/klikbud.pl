<?php

namespace App\Data;

class AdditionalData extends Data
{
    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    /**
     * Gallery Categories
     *
     * @return array[]
     */
    public function gallery_categories(): array
    {
        return [
            ['value' => 1, 'title' => trans('home/gallery.categories.1'), 'slug' => trans('admin/gallery.categories.1')],
//            ['value' => 2, 'title' => trans('admin/gallery/categories.2'), 'slug' => trans('admin/gallery/categories.2')],
            ['value' => 3, 'title' => trans('admin/gallery.categories.3'), 'slug' => trans('admin/gallery.categories.3')],
            ['value' => 4, 'title' => trans('admin/gallery.categories.4'), 'slug' => trans('admin/gallery.categories.4')],
            ['value' => 5, 'title' => trans('admin/gallery.categories.5'), 'slug' => trans('admin/gallery.categories.5')],
            ['value' => 6, 'title' => trans('admin/gallery.categories.6'), 'slug' => trans('admin/gallery.categories.6')]
        ];
    }
}
