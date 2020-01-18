<?php


namespace App\Http\Services;


use Adldap\AdldapInterface;

class LdapUser
{
    /**
     * @var AdldapInterface
     */
    private $ldap;

    public function __construct(AdldapInterface $ldap)
    {

        $this->ldap = $ldap;
    }

    public function setPassword($name, $password)
    {
        $user = $this->ldap->connect()->search()->users()->find($name);
        $user->setAttribute('userpassword', $password);
        $user->save();
    }

    public function createUser(...$data)
    {
        $user = $this->ldap->connect()->make()->user([
            'uid'           => $data[0],
            'cn'            => $data[1],
            'mail'          => $data[2],
            'sn'            => $data[3],
            'userpassword'  => $data[4],
        ]);

        $user->save();
    }
}
