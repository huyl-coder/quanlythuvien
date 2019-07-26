<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
class LamppComposer {
    /**
     * Create a new profile composer.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->ten='hung';
    }
    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('ten', $this->ten);
    }
}