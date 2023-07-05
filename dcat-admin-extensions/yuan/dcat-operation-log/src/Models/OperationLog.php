<?php

namespace Weiaibaicai\OperationLog\Models;

use Dcat\Admin\Admin;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class OperationLog extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'admin_operation_log';

    protected $fillable = ['user_id', 'path', 'method', 'ip', 'input', 'app_type','target_type'];

    public static $methodColors = [
        'GET'    => 'primary',
        'POST'   => 'success',
        'PUT'    => 'blue',
        'DELETE' => 'danger',
    ];

    public static $methods = [
        'GET', 'POST', 'PUT', 'DELETE', 'OPTIONS', 'PATCH',
        'LINK', 'UNLINK', 'COPY', 'HEAD', 'PURGE',
    ];

    public function __construct(array $attributes = [])
    {
        $this->connection = config('database.connection') ?: config('database.default');

        parent::__construct($attributes);
    }

    public function user()
    {

        return $this->morphTo('user', 'target_type', 'user_id');
    }

    /**
     * 是否需要路由
     *
     * @return bool
     */
    public static function withRoutes():bool
    {
        return empty(config('admin.extensions.dcat_operation_log.close_routes'));
    }

    /**
     * 获取表的映射关系
     *
     * @param string $table 用户表
     *
     * @return string
     */
    public static function getUsersMap(string  $table):string
    {
        return config(sprintf('operation-log.users_map.%s', $table)) ?? '';
    }

    public static function makeLog($input, $path = null)
    {
        $user = Admin::user();
        $request = request();
        $log = [
            'user_id' => $user ? $user->id : 0,
            'path' => $path ?: substr($request->path(), 0, 255),
            'method' => $request->method(),
            'ip' => $request->getClientIp(),
            'input' => json_encode($input, JSON_UNESCAPED_UNICODE),
            'app_type' => Admin::app()->getName(),
            'target_type' => $user ? static::getUsersMap($user->getTable()) : null,
        ];

        try {
            static::create($log);
        } catch (\Exception $exception) {
            // pass
        }
    }
}
