<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FixtureController extends Controller {

  public function index() {
    return view('fixtures.index', [
      'fixtures' => Fixture::orderBy('fixture_date', 'DESC')->filter(request(['tag', 'search']))->paginate(12)
    ]);
  }

  public function show(Fixture $fixture) {
    return view('fixtures.show', [
      'fixture' => $fixture
    ]);
  }

  public function create() {
    return view('fixtures.create');
  }

  public function store(Request $request) {
    $formFields = $request->validate([
      'title' => ['required', Rule::unique('fixtures', 'title')],
      "competition" => 'required',
      "home_team" => 'required',
      "away_team" => 'required',
      "fixture_date" => ['required', 'date'],
      "fixture_time" => 'required',
      "tags" => 'required',
      "description" => 'required'
    ]);

    if ($request->hasFile('fixture_image')) {
      $formFields['fixture_image'] = $request->file('fixture_image')->store('fixtureImages', "public");
    }

    $formFields['user_id'] = auth()->user()->id;

    Fixture::create($formFields);

    return redirect('/')->with('message', 'Fixture added successfully.');
  }

  public function edit(Fixture $fixture) {
    return view('fixtures.edit', ['fixture' => $fixture]);
  }

  public function update(Request $request, Fixture $fixture) {

    if ($fixture->user_id != auth()->id()) {
      abort(403, 'Unauthorised');
    }

    $formFields = $request->validate([
      'title' => 'required',
      "competition" => 'required',
      "home_team" => 'required',
      "away_team" => 'required',
      "fixture_date" => ['required', 'date'],
      "fixture_time" => 'required',
      "tags" => 'required',
      "description" => 'required'
    ]);

    if ($request->hasFile('fixture_image')) {
      $formFields['fixture_image'] = $request->file('fixture_image')->store('fixtureImages', "public");
    }

    $fixture->update($formFields);

    return back()->with('message', 'Fixture changed successfully.');
  }

  public function destroy(Fixture $fixture) {
    $fixture->delete();
    return redirect('/')->with('message', 'Fixture removed.');
  }

  public function manage() {
    return view('fixtures.manage', ['fixtures' => auth()->user()->fixtures()->get()]);
  }
}
