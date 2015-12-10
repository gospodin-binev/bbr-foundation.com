<?php

namespace Kwadrat\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use DB;
use Kwadrat\PastEvents;
use Kwadrat\BlogPosts;
use Kwadrat\Events;
use Kwadrat\Images;
use Kwadrat\Team;
use Kwadrat\Services;
use Kwadrat\Headings;
use Kwadrat\AboutSlider;
use Kwadrat\Solutions;
use Illuminate\Http\Request;
use Kwadrat\Http\Requests;
use Kwadrat\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		$events = Events::all();
		$headings = Headings::all();
		$about_slider_objects = AboutSlider::all();
		$solutions = Solutions::all();
		$services = Services::all();
		$team = Team::all();
		$images = Images::all();
		$firstContact = Headings::findOrFail(9);
		$secondContact = Headings::findOrFail(10);
		$thirdContact = Headings::findOrFail(11);

		$presentative_video = Headings::findOrFail(12);
		$last_activity_video = Headings::findOrFail(13);

		return view('home')
			->with('events', $events)
			->with('headings', $headings)
			->with('about_slider_objects', $about_slider_objects)
			->with('solutions', $solutions)
			->with('services', $services)
			->with('team', $team)
			->with('images', $images)
			->with('firstContact', $firstContact)
			->with('secondContact', $secondContact)
			->with('thirdContact', $thirdContact)
			->with('presentative_video', $presentative_video)
			->with('last_activity_video', $last_activity_video);
	}

	public function viewEvent($id)
	{
		$lookEvent = Events::findOrFail($id);

		return view('view-event')
			->with('lookEvent', $lookEvent);
	}

	public function getBlog()
	{
		$blog_posts = DB::table('blog_posts')
			->orderBy('id', 'desc')
			->paginate(5);

		return view('blog')
			->with('blog_posts', $blog_posts);
	}

	public function getPost($id)
	{
		$blog_post = BlogPosts::findOrFail($id);

		return view('blog-post')
			->with('blog_post', $blog_post);
	}

	public function sendEmail(Request $request)
	{
		$validator = Validator::make($request->all(), [
    		'surname' => 'required',
    		'forename' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
    		'address' => 'required',
    		'birthday' => 'required',
    		'hearaboutus' => 'required',
    		'becomemember' => 'required',
    		'feeluseful' => 'required',
    		'agreeornot' => 'required',
    		'subscribe' => 'required',
    		'package' => 'required',
    		'payment' => 'required',
    	]);

    	if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $surname = $request->input('surname');
        $forename = $request->input('forename');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $hearaboutus = $request->input('hearaboutus');
        $becomemember = $request->input('becomemember');
        $feeluseful = $request->input('feeluseful');
        $agreeornot = $request->input('agreeornot');
        $subscribe = $request->input('subscribe');
        $package = $request->input('package');
        $payment = $request->input('payment');

        $to = "admin@binev.eu";
        $subject = "New recruit: ".$surname.' '.$forename;
        $message = "New recruit:"."\n"."Surname: ".$surname."\n"."Forename: ".$forename."\n"."E-mail address: ".$email."\n"."Phone: ".$phone."\n"."Address: ".$address."\n"."Date of birth: ".$birthday."\n"."Where did you hear about us? ".$hearaboutus."\n"."Why did you want to become a member of the association? ".$becomemember."\n"."What will make you feel useful? ".$feeluseful."\n"."I agree with the information from this form to be considered and processed in connection with my application for membership: ".$agreeornot."\n"."I want to subscribe to my email address: ".$subscribe."\n"."Selected package: ".$package."\n"."Method of payment: ".$payment;

        mail($to, $subject, $message);
        mail($email, 'Thanks for joining BBR Foundation', 'In the next E-Mail you will receive certificate for membership.');

        return redirect('/')->with($request->session()->flash('email-status', 'Slider object created successfully!'));
	}

	public function getPastEvents()
	{
		$past_events = DB::table('past_events')
			->orderBy('id', 'desc')
			->paginate(5);

		return view('past-events')
			->with('past_events', $past_events);
	}

	public function lookPastEvent($id)
	{
		$past_event = PastEvents::findOrFail($id);

		return view('view-past-event')
			->with('past_event', $past_event);
	}
}
