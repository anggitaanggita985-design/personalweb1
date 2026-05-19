<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Contact;

class HomeController extends Controller
{
    public function profile()
    {
        $profile = Profile::first();
        $title = "WELCOME!";

        return view('profile', compact('profile', 'title'));
    }

    public function about()
    {
        $skills = Skill::all();
        $experiences = Experience::all();

        return view('about', compact('skills', 'experiences'));
    }

    public function project()
    {
        $projects = Project::all();

        return view('project', compact('projects'));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('contact', compact('contact'));
    }
}