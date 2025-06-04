<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        return view('subscribers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|min:2|max:50',
            'lastname' => 'required|string|min:2|max:50',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = new Subscriber($validated);
        $subscriber->newsletter = $request->exists('newsletter');
        $subscriber->save();

        return redirect()->route('subscribers.index')->with('success', 'Subscriber created!');
    }

    public function edit(Subscriber $subscriber)
    {
        return view('subscribers.edit', compact('subscriber'));
    }

    public function update(Request $request, Subscriber $subscriber)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|min:2|max:50',
            'lastname' => 'required|string|min:2|max:50',
            'email' => 'required|email|unique:subscribers,email,' . $subscriber->id,
        ]);

        $subscriber->fill($validated);
        $subscriber->newsletter = $request->exists('newsletter');
        $subscriber->save();

        return redirect()->route('subscribers.index')->with('success', 'Subscriber updated!');
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('subscribers.index')->with('success', 'Subscriber deleted!');
    }
}
