<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\admin\ForumPostRequest;
use App\Http\Requests\admin\ForumSessionPostRequest;
use App\Http\Requests\admin\TicketPostRequest;
use App\Models\Forum;
use App\Models\ForumSession;
use App\Models\Ticket;
use App\Models\User;

class AdminForumController extends Controller
{
    public function index()
    {
        return view('admin.forums.index');
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

        return view('admin.forums.step-two', [
            'token' => $token,
            'speakers' => $facilitators
        ]);
    }

    public function post_forum_step_two(ForumSessionPostRequest $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->validated();
            $forum = Forum::all()->where('token', $data['token'])->first();
            $data['forum'] = $forum['id'];

            ForumSession::create($data);

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
            $data['forum'] = $forum['id'];
            ForumSession::create($data);
            
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

        return redirect()->route('add_forum');
    }
}
