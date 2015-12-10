<?php

namespace Kwadrat\Http\Controllers;

use Auth;
use Image;
use DB;
use File;
use Input;
use Kwadrat\PastEvents;
use Kwadrat\BlogPosts;
use Kwadrat\Images;
use Kwadrat\Team;
use Kwadrat\Events;
use Kwadrat\Services;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kwadrat\Headings;
use Kwadrat\Solutions;
use Illuminate\Support\Facades\Validator;
use Kwadrat\AboutSlider;
use Illuminate\Http\Request;
use Kwadrat\Http\Requests;
use Kwadrat\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getHeadings()
    {
    	$headings = Headings::all();

    	return view('admin.pages.edit-headings')
    	->with('headings', $headings);
    }

    public function saveHomeHeading(Request $request)
    {
    	Headings::where('id', 1)
    		->update(['heading' => $request->input('home-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveAboutHeading(Request $request)
    {
    	Headings::where('id', 2)
    		->update(['heading' => $request->input('about-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveSolutionHeading(Request $request)
    {
    	Headings::where('id', 3)
    		->update(['heading' => $request->input('solution-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveServicesHeading(Request $request)
    {
    	Headings::where('id', 4)
    		->update(['heading' => $request->input('services-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveVideoHeading(Request $request)
    {
    	Headings::where('id', 5)
    		->update(['heading' => $request->input('video-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveSecondVideoHeading(Request $request)
    {
    	Headings::where('id', 6)
    		->update(['heading' => $request->input('s-video-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveTeamHeading(Request $request)
    {
    	Headings::where('id', 7)
    		->update(['heading' => $request->input('team-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveContactHeading(Request $request)
    {
    	Headings::where('id', 8)
    		->update(['heading' => $request->input('contact-heading')]);

    	return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function saveSubHeading(Request $request)
    {
        Headings::where('id', 14)
            ->update(['heading' => $request->input('video_text')]);

        return redirect()->back()->with($request->session()->flash('heading-status', 'Heading updated successfully!'));
    }

    public function getAboutSlider()
    {
    	$about_slider_objects = AboutSlider::all();

    	return view('admin.pages.edit-about-slider')
    		->with('about_slider_objects', $about_slider_objects);
    }

    public function createAboutSliderObject(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'icon-type' => 'required|min:3',
    	]);

        if ($validator->fails()) {
            return redirect('/admin/about-slider')
                ->withErrors($validator)
                ->withInput();
        }

    	$aboutSliderObject = new AboutSlider;

    	$aboutSliderObject->icon_type = $request->input('icon-type');
    	$aboutSliderObject->number = $request->input('slider-number');
    	$aboutSliderObject->text = $request->input('slider-text');
    	$aboutSliderObject->save();

    	return redirect()->back()->with($request->session()->flash('slider-status', 'Slider object created successfully!'));
    }

    public function updateAboutSliderObject(Request $request)
    {
        AboutSlider::where('id', $request->input('slider-id'))
            ->update([
                'icon_type' => $request->input('icon-type'),
                'number' => $request->input('slider-number'),
                'text'=> $request->input('slider-text'),
            ]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Slider object updated successfully'));
    }

    public function deleteAboutSliderObject(Request $request)
    {
        AboutSlider::where('id', $request->input('slider-id'))->delete();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Slider object deleted successfully'));
    }

    public function getSolutions()
    {
        $solutions = Solutions::all();

        return view('admin.pages.edit-solutions')
            ->with('solutions', $solutions);
    }

    public function createSolutions(Request $request)
    {
        $solution = new Solutions;

        $solution->text = $request->input('solution-text');
        $solution->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Solution created successfully!'));
    }

    public function updateSolutions(Request $request)
    {
        Solutions::where('id', $request->input('solution-id'))
            ->update(['text' => $request->input('solution-text')]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Solution updated successfully!'));
    }

    public function deleteSolutions(Request $request)
    {
        Solutions::where('id', $request->input('solution-id'))->delete();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Solution deleted successfully'));
    }

    public function getServices()
    {
        $services = Services::all();

        return view('admin.pages.edit-services')
            ->with('services', $services);
    }

    public function createService(Request $request)
    {
        $service = new Services;

        $service->icon_type = $request->input('serv-icon-type');
        $service->title = $request->input('serv-title');
        $service->content = $request->input('serv-content');
        $service->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Service created successfully!'));
    }

    public function updateService(Request $request)
    {
        Services::where('id', $request->input('service_id'))
            ->update([
                'icon_type' => $request->input('serv-icon-type'),
                'title' => $request->input('serv-title'),
                'content' => $request->input('serv-content'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Service updated successfully!'));
    }

    public function deleteService(Request $request)
    {
        Services::where('id', $request->input('service_id'))->delete();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Service deleted successfully'));
    }

    public function getEvents()
    {
        $events = Events::all();

        return view('admin.pages.edit-events')
            ->with('events', $events);
    }

    public function postEvents(Request $request)
    {
        $file = Input::file('file');
        $name = $file->getClientOriginalName();
        File::copy($file, public_path().'/uploads/'.$name);

        $event = new Events;
        $event->title = $request->input('title');
        $event->image = '/uploads/'.$name;
        $event->content = $request->input('content');
        $event->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Event created successfully!'));
    }

    public function getEditEvents($id)
    {
        $events = Events::findOrFail($id);

        return view('admin.pages.edit-id-event')
            ->with('events', $events);
    }

    public function updateEvents(Request $request, $id)
    {
        if ($request->hasFile('file')) {

            $file = Input::file('file');
            $name = $file->getClientOriginalName();
            File::copy($file, public_path().'/uploads/'.$name);

            Events::where('id', $request->input('event-id'))
                ->update([
                    'title' => $request->input('title'),
                    'image' => '/uploads/'.$name,
                    'content' => $request->input('content'),
                ]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Event updated successfully!'));

        }

        Events::where('id', $request->input('event-id'))
                ->update([
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Event updated successfully!'));
    }

    public function deleteEvents(Request $request, $id)
    {
        Events::where('id', $id)->delete();

        return redirect('/admin/events')->with($request->session()->flash('upSlider-status', 'Event deleted successfully'));
    }

    public function getVideos()
    {
        $presentative = Headings::findOrFail(12);
        $last_activity = Headings::findOrFail(13);

        return view('admin.pages.edit-videos')
            ->with('presentative', $presentative)
            ->with('last_activity', $last_activity);
    }

    public function updateVideos(Request $request)
    {
        Headings::where('id', 12)
            ->update([
                'heading' => $request->input('presentative'),
            ]);

        Headings::where('id', 13)
            ->update([
                'heading' => $request->input('last_activity'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Video updated successfully'));
    }

    public function createPortfolioProject(Request $request)
    {
        $file = Input::file('image');
        $name = $file->getClientOriginalName();
        File::copy($file, public_path().'/uploads/'.$name);

        $portfolioProject = new Portfolio;
        $portfolioProject->image = '/uploads/'.$name;
        $portfolioProject->title = $request->input('title');
        $portfolioProject->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Portfolio project created successfully!'));
    }

    public function deletePortfolioProject(Request $request, $id)
    {
        Portfolio::where('id', $id)->delete();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Portfolio project deleted successfully'));
    }

    public function getTeam()
    {
        $team = Team::all();

        return view('admin.pages.edit-team')
            ->with('team', $team);
    }

    public function createTeamPerson(Request $request)
    {
        $file = Input::file('image');
        $name = $file->getClientOriginalName();
        // File::copy($file, public_path().'/uploads/'.$name);

        Image::make(Input::file('image'))->fit(120, 120)->save($name);

        $teamPerson = new Team;
        $teamPerson->name = $request->input('name');
        $teamPerson->position = $request->input('position');
        $teamPerson->image = $name;
        $teamPerson->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Team person created successfully!'));
    }

    public function updateTeamPerson(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = Input::file('image');
            $name = $file->getClientOriginalName();
            // File::copy($file, public_path().'/uploads/'.$name);

            Image::make(Input::file('image'))->fit(120, 120)->save($name);

            Team::where('id', $request->input('person-id'))
            ->update([
                'image' => $name,
            ]);
        }

        Team::where('id', $request->input('person-id'))
            ->update([
                'name' => $request->input('name'),
                'position' => $request->input('position'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Team person updated successfully!'));
    }

    public function deleteTeamPerson(Request $request)
    {
        Team::where('id', $request->input('person-id'))->delete();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Team person deleted successfully'));
    }

    public function getImages()
    {
        $images = Images::all();

        return view('admin.pages.edit-images')
            ->with('images', $images);
    }

    public function updateImages(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = Input::file('image');
            $name = $file->getClientOriginalName();
            File::copy($file, public_path().'/uploads/'.$name);

            Images::where('id', $request->input('image-id'))
            ->update([
                'image' => '/uploads/'.$name,
            ]);
        }

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Image updated successfully!'));
    }

    public function getContacts()
    {
        $firstContact = Headings::findOrFail(9);
        $secondContact = Headings::findOrFail(10);
        $thirdContact = Headings::findOrFail(11);

        return view('admin.pages.edit-contacts')
            ->with('firstContact', $firstContact)
            ->with('secondContact', $secondContact)
            ->with('thirdContact', $thirdContact);
    }

    public function updateFirstContact(Request $request)
    {
        Headings::where('id', 9)
            ->update([
                'heading' => $request->input('firstContact'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'First contacts updated successfully!'));
    }

    public function updateSecondContact(Request $request)
    {
        Headings::where('id', 10)
            ->update([
                'heading' => $request->input('secondContact'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Second contacts updated successfully!'));
    }

    public function updateThirdContact(Request $request)
    {
        Headings::where('id', 11)
            ->update([
                'heading' => $request->input('thirdContact'),
            ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Third contacts updated successfully!'));
    }

    public function getEditBlog()
    {
        $posts = DB::table('blog_posts')
            ->paginate(15);

        return view('admin.pages.edit-blog')
            ->with('posts', $posts);
    }

    public function createPost(Request $request)
    {
        $file = Input::file('file');
        $name = $file->getClientOriginalName();
        File::copy($file, public_path().'/uploads/'.$name);

        $blog_post = new BlogPosts;
        $blog_post->title = $request->input('title');
        $blog_post->image = '/uploads/'.$name;
        $blog_post->author = $request->input('author');
        $blog_post->content = $request->input('content');
        $blog_post->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Blog post created successfully!'));
    }

    public function getUpdatePost($id)
    {
        $selectedPost = BlogPosts::findOrFail($id);

        return view('admin.pages.get-update-post')
            ->with('selectedPost', $selectedPost);
    }

    public function updatePost(Request $request, $id)
    {
        if ($request->hasFile('file')) {

            $file = Input::file('file');
            $name = $file->getClientOriginalName();
            File::copy($file, public_path().'/uploads/'.$name);

            BlogPosts::where('id', $request->input('post-id'))
            ->update([
                'title' => $request->input('title'),
                'image' => '/uploads/'.$name,
                'author' => $request->input('author'),
                'content' => $request->input('content'),
            ]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Blog post updated successfully!'));
        }
        else
        {
            BlogPosts::where('id', $request->input('post-id'))
                ->update([
                    'title' => $request->input('title'),
                    'author' => $request->input('author'),
                    'content' => $request->input('content'),
                ]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Blog post updated successfully!'));
        }
    }

    public function deletePost(Request $request, $id)
    {
        BlogPosts::where('id', $request->input('post-id'))->delete();

        return redirect('/admin/blog')->with($request->session()->flash('upSlider-status', 'Blog post deleted successfully'));
    }

    public function getPastEvents()
    {
        $past_events = DB::table('past_events')
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('admin.pages.past-events')
            ->with('past_events', $past_events);
    }

    public function createPastEvents(Request $request)
    {
        $file = Input::file('file');
        $name = $file->getClientOriginalName();
        File::copy($file, public_path().'/uploads/'.$name);

        $past_event = new PastEvents;
        $past_event->title = $request->input('title');
        $past_event->image = '/uploads/'.$name;
        $past_event->content = $request->input('content');
        $past_event->save();

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Past event created successfully!'));
    }

    public function showPastEvent($id)
    {
        $past_events = PastEvents::findOrFail($id);

        return view('admin.pages.edit-past-event')
            ->with('past_events', $past_events);
    }

    public function updatePastEvents(Request $request, $id)
    {
        if ($request->hasFile('file')) {

            $file = Input::file('file');
            $name = $file->getClientOriginalName();
            File::copy($file, public_path().'/uploads/'.$name);

            PastEvents::where('id', $request->input('past-event-id'))
                ->update([
                    'title' => $request->input('title'),
                    'image' => '/uploads/'.$name,
                    'content' => $request->input('content'),
                ]);

            return redirect()->back()->with($request->session()->flash('upSlider-status', 'Past event updated successfully!'));

        }

        PastEvents::where('id', $request->input('past-event-id'))
                ->update([
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                ]);

        return redirect()->back()->with($request->session()->flash('upSlider-status', 'Past event updated successfully!'));
    }

    public function deletePastEvents(Request $request, $id)
    {
        PastEvents::where('id', $id)->delete();

        return redirect('/admin/past-events')->with($request->session()->flash('upSlider-status', 'Past event deleted successfully'));
    }
}
