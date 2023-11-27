<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InfaqModel;
use CodeIgniter\Database\Query;
use \Myth\Auth\Entities\User;
use \Myth\Auth\Authorization\GroupModel;
use \Myth\Auth\Config\Auth as AuthConfig;

class SuperController extends BaseController
{
    protected $auth;
    protected $config;
 
    public function __construct()
    {
    $this->config = config('Auth');
    $this->auth = service('authentication');
    }

    public function add()
    {        
 
    $data = [            
        // 'title' => 'Add Users',
        'config' => $this->config,
 
    ];
 
    return view('/super-admin/tambah', $data);            
    }

    public function index()
    {
        
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        
        $data['users'] = $query->getResult();

        return view('super-admin/index', $data);
    }

    // public function save()
    // {
    // $users = model(UserModel::class);
 
    // $rules = [
    //     'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
    //     'email'    => 'required|valid_email|is_unique[users.email]',
    // ];
 
    // if (! $this->validate($rules))
    // {
    //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    // }
 
    // $rules = [
    //     'password'     => 'required|strong_password',
    //     'pass_confirm' => 'required|matches[password]',
    // ];
 
    // if (! $this->validate($rules))
    // {
    //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    // }
 
    // // Save the user
    // $allowedPostFields = array_merge(['password'], $this->config->validFields);
    // $user = new User($this->request->getPost($allowedPostFields));
 
    // $this->config->requireActivation === null ? $user->activate() : $user->generateActivateHash();
 
    // // Ensure default group gets assigned if set
    // if (! empty($this->config->defaultUserGroup)) {
    //     $users = $users->withGroup($this->config->defaultUserGroup);
    // }
 
    // if (! $users->save($user))
    // {
    //     return redirect()->back()->withInput()->with('errors', $users->errors());
    // }
 
    // if ($this->config->requireActivation !== null)
    // {
    //     $activator = service('activator');
    //     $sent = $activator->send($user);
 
    //     if (! $sent)
    //     {
    //         return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
    //     }
 
    //     // Success!
    //     return redirect()->to(base_url('/users/index'));
    // }
 
    // // Success!
    // return redirect()->to(base_url('/users/index'));
    // }
}
