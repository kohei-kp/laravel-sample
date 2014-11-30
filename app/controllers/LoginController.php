<?php

class LoginController extends BaseController {

    /**
     * ログインページへ
     * @method getIndex
     */
    public function getIndex() {

        return View::make('login.login');
    }
    /**
     * ログイン
     * @method login
     */
    public function login() {

        if (Auth::attempt(Input::only('username', 'password'))) {
            return Redirect::intended('admin/top');
        }

        return Redirect::back()->withInput();
    }

    /**
     * ログアウト
     * @method logout
     */
    public function logout() {
        Auth::logout();

        return Redirect::to('admin/');
    }
}
