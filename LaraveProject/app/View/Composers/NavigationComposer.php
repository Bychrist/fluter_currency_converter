<?php
namespace App\Http\View\Composers;
use App\Models\Course;
use Illuminate\View\View;


class NavigationComposer
{
    public function compose(View $view)
    {
        $view_courses = Course::paginate(10);
        $view->with('view_courses', $view_courses);
    }
}
