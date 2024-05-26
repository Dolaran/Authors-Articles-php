<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AuthorController extends Controller
{
    public function list(Request $request): View
    {
        $authors = $this->get_queryset();

        return view('authors.list', ['authors' => $authors]);
    }

    public function details(Request $request, int $id): View
    {
        $author = DB::select('SELECT id, email, username, name, address, created_at FROM authors WHERE id = ?', [$id]);
        if (empty($author)) {
            abort(404, 'Author not found');
        }

        return view('authors.details', ['author' => $author[0]]);
    }

    public function create(Request $request): View
    {
        return view('authors.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:authors,email',
            'username' => 'required|string|max:255|unique:authors,username',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:12|max:255',
        ]);

        DB::insert('INSERT INTO authors (name, email, username, address, password) VALUES (?, ?, ?, ?, ?)', [
            $request->input('name'),
            $request->input('email'),
            $request->input('username'),
            $request->input('address'),
            bcrypt($request->input('password')),
        ]);
        
        $id = DB::select('SELECT LAST_INSERT_ID() as id');
        $id = $id[0]->id;

        return redirect("/authors/{$id}");
    }

    public function edit(Request $request, int $id): View
    {
        $author = DB::select('SELECT id, email, username, name, address FROM authors WHERE id = ?', [$id]);
        if (empty($author)) {
            abort(404, 'Author not found');
        }

        return view('authors.edit', ['author' => $author[0]]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        DB::update('UPDATE authors SET name = ?, email = ?, username = ?, address = ? WHERE id = ?', [
            $request->input('name'),
            $request->input('email'),
            $request->input('username'),
            $request->input('address'),
            $id,
        ]);

        return redirect("/authors/{$id}");
    }

    public function delete(Request $request, int $id): View
    {
        $author = DB::select('SELECT id, email, username, name, address FROM authors WHERE id = ?', [$id]);
        if (empty($author)) {
            abort(404, 'Author not found');
        }

        return view('authors.delete', ['author' => $author[0]]);
    }

    public function destroy(Request $request, int $id): RedirectResponse
    {
        DB::delete('DELETE FROM authors WHERE id = ?', [$id]);

        return redirect('/authors');
    }

    protected function get_search_params(): array
    {
        $request = request();

        return [
            "query" => $request->get("query"),
            "start_date" => $request->get("start_date"),
            "end_date" => $request->get("end_date"),
        ];
    }

    protected function get_queryset(): array
    {
        ["query" => $query, "start_date" => $start_date, "end_date" => $end_date] = $this->get_search_params();
        $params = [];
        $sql = "SELECT * FROM authors WHERE 1=1";

        if ($query) {
            $sql .= " AND (name LIKE ? OR username LIKE ? OR email LIKE ? OR address LIKE ?)";
            array_push($params, "%$query%", "%$query%", "%$query%", "%$query%");
        }

        if ($start_date && $end_date) {
            $sql .= " AND created_at BETWEEN ? AND ?";
            array_push($params, $start_date, $end_date);
        }

        $sql .= " ORDER BY created_at DESC LIMIT 10";

        return DB::select($sql, $params);
    }

    protected function validate(Request $request, array $rules): void
    {
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
