<?php

namespace App\Http\Controllers\Frontend;

use EmailLabs\Actions\Sendmail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Background;
use App\Content;
use App\Mail;
use Mail as Mailing;

class ContentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function we()
    {
        $content = Content::getByType('ABOUT');
        $background = Background::findOrFail(5);
        return view('frontend.content.we', ['content' => $content, 'background' => $background]);
    }

    public function support()
    {
        $content = Content::getByType('SUPPORT');
        $background = Background::findOrFail(4);
        return view('frontend.content.support', ['content' => $content, 'background' => $background]);
    }

    public function contact()
    {
        $content = Content::getByType('CONTACT');
        $background = Background::findOrFail(6);
        if (request()->get('send')) {
            if (request()->get('send') == 1) {
                $form = 'sent';
            } else {
                $form = 'error';
            }
        } else {
            $form = 'no';
        }
        return view('frontend.content.contact', ['content' => $content, 'background' => $background, 'form' => $form]);
    }

    public function contactSend()
    {
        $mail = new Mail;
        $mail->fill(request()->all());
        if ($mail->save()) {

            $sendMail = new Sendmail();
            $sendMail->setAppKey(env('MAIL_APP_KEY'));
            $sendMail->setAppSecret(env('MAIL_APP_SECRET'));


            $adresses = array(
                'kontakt@terraprojekt.com.pl' => array(
                    'message_id' => $mail->id
                )
            );

            //Set required data
            $sendMail->setData('from', $mail->email);
            $sendMail->setData('from_name', 'Terra Incognita, wiadomość od: ' . $mail->name);
            $sendMail->setData('to', $adresses);
            $sendMail->setData('subject', 'Wiadomość z formularza kontaktowego');
            $sendMail->setData('smtp_account', '1.terraincognita.smtp');
            $sendMail->setData('text', $mail->content);
            $sendMail->setData('replay_to', $mail->email);

            $sendMail->getResult();

            return redirect('/kontakt?send=1');
        } else {
            return redirect('/kontakt?send=-1');
        }

    }

    public function media()
    {
        $content = Content::getByType('MEDIA');
        return view('frontend.content.media', ['content' => $content]);
    }

}
