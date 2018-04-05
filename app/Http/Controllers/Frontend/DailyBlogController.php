<?php

namespace App\Http\Controllers\Frontend;

use App\CommentsDailyBlog;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Expedition;
use App\DailyBlog;

class DailyBlogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($id)
    {
        $expedition = Expedition::findOrFail($id);
        $names = array(
            'equipment' => 'Sprzęt',
            'organization' => 'Organizacja',
            'gallery' => 'Galeria',
            'description' => 'Opis i parametry',
            'advices' => 'Porady',
        );
        return view('frontend.daily_blog.index', ['expedition' => $expedition, 'names' => $names]);
    }

    public function show($id)
    {
        $dailyBlog = DailyBlog::findOrFail($id);
        $names = array(
            'equipment' => 'Sprzęt',
            'organization' => 'Organizacja',
            'gallery' => 'Galeria',
            'description' => 'Opis i parametry',
            'advices' => 'Porady',
        );
        return view('frontend.daily_blog.show', ['daily_blog' => $dailyBlog, 'names' => $names]);
    }

    public function addComment($id)
    {
        $comment = new CommentsDailyBlog();
        $comment->fill(request()->all());
        $comment->date = date('Y-m-d h:i:s', time());
        $comment->daily_blog_id = $id;
        if ($comment->save()) {
            request()->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            request()->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/wyprawa/wpis/' . $id);
    }

}
