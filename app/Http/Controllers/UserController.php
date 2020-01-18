<?php


namespace App\Http\Controllers;


use Adldap\Adldap;
use Adldap\AdldapInterface;
use App\Http\Services\LdapUser;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * @var Adldap
     */
    protected $ldap;

    /**
     * Constructor.
     *
     * @param AdldapInterface $ldap
     */
    public function __construct(AdldapInterface $ldap)
    {
        $this->ldap = $ldap;
    }

       public function index()
    {
        /*$users = $this->ldap->connect()->search()->groups()->get();
        dd($users);*/
        return redirect()->home();
    }

    /**
     * Displays the specified LDAP user.
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = $this->ldap->connect()->search()->findByGuid($id);


        return view('users.show', compact('user'));
    }

    public function resetPassword()
    {
        $reset_password = new LdapUser($this->ldap);
        $reset_password->setPassword('Ira', 'password');
    }

    public function createUser()
    {
        $ldap_service = new LdapUser($this->ldap);
        //$ldap_service->createUser('Ira', 'ira', 'ira@mail.ru', 'ira', '111111');
        $group = $this->ldap->connect()->make()->group();
        $dn = $group->getDnBuilder();
        $dn->addOu('SES');
        $dn->addCn("Managers");
        $group->setDn($dn);
        $group->save();
        dd ($group);
    }
}
