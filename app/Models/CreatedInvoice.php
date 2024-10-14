<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatedInvoice extends Model
{
    use HasFactory;

    protected $table = 'created_invoices';

    protected $fillable = [
        'user_id',
        'invoice_number',
        'innvoice_date',
        'invoice_due_date',
        'logo_path',
        'from_id',
        'to_id',
        'item_id',
        'payment_id',
        'customer_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'invoice_number' => 'integer',
        'innvoice_date' => 'date',
        'invoice_due_date' => 'date',
        'logo_path' => 'string',
        'from_id' => 'integer',
        'to_id' => 'integer',
        'item_id' => 'integer',
        'payment_id' => 'integer',
        'customer_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function from()
    {
        return $this->belongsTo(From::class, foreignKey: 'from_id');
    }
}
