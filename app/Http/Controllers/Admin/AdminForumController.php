<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\admin\ForumPostRequest;
use App\Http\Requests\admin\ForumSessionPostRequest;
use App\Http\Requests\admin\ForumSponsorPostRequest;
use App\Http\Requests\admin\TicketPostRequest;
use App\Models\Forum;
use App\Models\ForumSession;
use App\Models\Ticket;
use App\Models\User;
use App\Models\ForumSessionSpeaker;
use App\Models\ForumSponsor;

class AdminForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();

        return view('admin.forums.index', [
            'forums' => $forums
        ]);
    }

    public function details($token)
    {
        $forum = Forum::all()->where('token', $token)->first();

        $sessions = ForumSession::all()->where('forum_id', $forum->id);

        $tickets = Ticket::all()->where('forum', $forum->id);

        $sponsors = ForumSponsor::all()->where('forum_id', $forum->id);

        return view('admin.forums.details', [
            'forum' => $forum,
            'sessions' => $sessions,
            'tickets' => $tickets,
            'sponsors' => $sponsors
        ]);

    }

    public function schedule_forum_step_one()
    {
        return view('admin.forums.step-one');
    }

    public function post_forum_step_one(ForumPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->validated();
            $data['picture'] = $request->file('picture')->store('forums');
            $data['token'] = Str::uuid();
            $forum = Forum::create($data);

            return redirect()->route('add_forum_step_two', [
                'token' => $forum['token']
            ]);
        }

        return redirect()->route('add_forum');
    }

    public function schedule_forum_step_two($token)
    {
        $facilitators = User::all()->where('user_role', 'ROLE_FACILITATOR');

        $forum = Forum::all()->where('token', $token)->first();

        $date1 = new DateTime($forum->end_date);
        $date2 = new DateTime($forum->start_date);
        $days = ($date1->diff($date2)->format('%a')) + 1;

        

        return view('admin.forums.step-two', [
            'token' => $token,
            'speakers' => $facilitators,
            'days' => $days
        ]);
    }

    public function post_forum_step_two(ForumSessionPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->validated();
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum_id'] = $forum['id'];

            $forum_session = ForumSession::create($data);

            $speakers = array_unique($request->input('speakers'));
            foreach ($speakers as $key => $speaker) {
                ForumSessionSpeaker::create([
                    'forum_session_id' => $forum_session['id'],
                    'speaker_id' => $speaker
                ]);
            }

            return redirect()->route('add_forum_step_three', [
                'token' => $data['token']
            ]);
        }
    }

    public function post_forum_session(ForumSessionPostRequest $request)
    {
        
        if ($request->method() == 'POST') {
            $data = $request->validated();
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum_id'] = $forum['id'];
            
            $forum_session = ForumSession::create($data);

            $speakers = array_unique($request->input('speakers'));
            foreach ($speakers as $key => $speaker) {
                ForumSessionSpeaker::create([
                    'forum_session_id' => $forum_session['id'],
                    'speaker_id' => $speaker
                ]);
            }

        }

        return redirect()->route('add_forum_step_two', [
            'token' => $request->input('token')
        ]);
       
    }

    public function schedule_forum_step_three($token)
    {
        return view('admin.forums.step-three', [
            'token' => $token,
        ]);
    }

    public function post_forum_ticket(TicketPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->input();
            $data['code'] = Str::random(8);
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum'] = $forum['id'];
            Ticket::create($data);
        }

        return redirect()->route('add_forum_step_three', [
            'token' => $request->input('token')
        ]);

    }

    public function post_forum_step_three(TicketPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->input();
            $data['code'] = Str::random(8);
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum'] = $forum['id'];
            Ticket::create($data);
        }

        return redirect()->route('add_forum_step_four', [
            'token' => $request->input('token')
        ]);

    }

    public function schedule_forum_step_four($token)
    {
        return view('admin.forums.step-four', [
            'token' => $token,
        ]);
    }

    public function post_forum_sponsor(ForumSponsorPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->input();
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum_id'] = $forum['id'];
            $data['logo'] = $request->file('logo')->store('sponsors');
            ForumSponsor::create($data);
        }

        return redirect()->route('add_forum_step_four', [
            'token' => $request->input('token')
        ]);
    }

    public function post_forum_step_four(ForumSponsorPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->input();
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum_id'] = $forum['id'];
            $data['logo'] = $request->file('logo')->store('sponsors');
            ForumSponsor::create($data);
        }

        return redirect()->route('add_forum');
    }

}
