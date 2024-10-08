<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsIssueDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'goods_issue_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount'
    ];

    public function goodsIssue()
    {
        return $this->belongsTo(GoodsIssue::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
