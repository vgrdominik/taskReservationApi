<?php
namespace App\Modules\Event\Domain;

use App\Modules\Base\Domain\BaseDomain;
use App\Modules\Base\Traits\Descriptive;

class Event extends BaseDomain
{
    use Descriptive;

    const VALIDATION_COTNEXT = [
        'description' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'details' => ['required', 'string', 'min:8', 'max:2000'],
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'reservated_at' => 'datetime',
    ];

    // RELATIONS

    public function creator()
    {
        return $this->belongsTo('App\Modules\User\Domain\User', 'creator_id');
    }

    // GETTERS

    public function getValidationContext(): array
    {
        return self::VALIDATION_COTNEXT;
    }

    public function getIcon(): string
    {
        return 'calendar-day';
    }

    // Others

    public function remove(): bool
    {
        return $this->delete();
    }
}
