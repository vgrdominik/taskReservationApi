<?php
namespace App\Modules\User\Domain;

use App\Modules\Base\Domain\BaseDomainInterface;
use App\Modules\Base\Traits\Descriptive;
use App\Modules\Base\Traits\DescriptiveInterface;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Airlock\HasApiTokens;

class User extends Authenticatable implements BaseDomainInterface, DescriptiveInterface
{
    use HasApiTokens,Notifiable,Descriptive;

    const VALIDATION_COTNEXT = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELATIONS

    public function events()
    {
        return $this->hasMany('App\Modules\Event\Domain\Event');
    }

    // GETTERS

    public function getValidationContext(): array
    {
        return self::VALIDATION_COTNEXT;
    }

    public function getIcon(): string
    {
        return 'user';
    }

    public function getDescription(): string
    {
        return optional($this->name) ?? 'Sin descripción';
    }

    // OTHERS

    public function remove(): bool
    {
        return $this->delete();
    }

    public function __toString()
    {
        return $this->getDescription();
    }
}