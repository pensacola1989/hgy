<?php
/**
 * Created by PhpStorm.
 * User: danielwu
 * Date: 11/17/14
 * Time: 8:59 PM
 */

use Hgy\Account\User;
use Hgy\Account\UserRepository;

class UserController extends BaseController {

    protected $layout = 'layouts.home';

    private $userRepo;

    public function __construct(UserRepository $repo)
    {
        $this->userRepo = $repo;
    }
    /*
     * Org user's dashboard
     */
    public function index()
    {
        $this->title = '欢迎来到哈公益';
        $this->view('user.index');
    }

    /*
     * Org user's register page
     */
    public function register()
    {
        if(Auth::check()) return $this->redirectAction('UserController@index');
        $this->title = '组织用户注册';
        $this->view('user.register');
    }

    /*
     * HTTPPOST
     * add a user
     */
    public function add()
    {
        $input = Input::all();
        $newUser = $this->userRepo->storeData($input);
        if($newUser) Auth::login($newUser,false);
        return $this->redirectBack(['errors'=>$this->userRepo->getError()]);
    }

    public function logout()
    {
        Auth::logout();
        return $this->redirectAction('UserContro;ller@login');
    }
}