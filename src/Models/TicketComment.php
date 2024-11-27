<?php

namespace TomatoPHP\FilamentSupport\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ticket_id
 * @property string $accountable_type
 * @property int $accountable_id
 * @property string $response
 * @property string $created_at
 * @property string $updated_at
 * @property Ticket $ticket
 */
class TicketComment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ticket_id', 'accountable_type', 'accountable_id', 'response', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('TomatoPHP\FilamentSupport\Models\Ticket');
    }
}
