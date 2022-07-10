<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Infrastructures\Models\User;
use Illuminate\Support\Facades\Auth;

final class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $user = User::find(Auth::id());

        if (! $user->isCompany()) {
            abort(403);
        }

        $users = User::where('company_id', '=', $user->company_id)->get();

        return view('frontend.account.index', compact('users'));
    }
}
