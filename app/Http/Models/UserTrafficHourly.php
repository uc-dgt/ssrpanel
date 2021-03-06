<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户流量每小时统计
 * Class Article
 * @package App\Http\Models
 */
class UserTrafficHourly extends Model
{
    protected $table = 'user_traffic_hourly';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'node_id',
        'u',
        'd',
        'total',
        'traffic'
    ];

}