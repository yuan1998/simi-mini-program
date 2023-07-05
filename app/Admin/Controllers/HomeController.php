<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SiteSettingForm;
use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Admin;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Card;

class HomeController extends Controller
{

    public static function greetOfNow($date = null)
    {
        $date = $date ?: now();
        $hour = $date->format('H');
        if ($hour < 12) {
            return 1;
        }
        if ($hour < 18) {
            return 2;
        }
        return 3;
    }

    public static function greetOfNowCn($date = null)
    {
        $r = static::greetOfNow($date);
        $l = [
            1 => '早上',
            2 => '下午',
            3 => '晚上',
        ];
        return data_get($l, $r);
    }

    public function index(Content $content): Content
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->body(function (Row $row) {
                $user = Admin::user();
                $row->column(6, function (Column $column) use ($user) {
                    $params = [
                        'greeting' => static::greetOfNowCn(),
                        'username' => $user->name,
                        'avatar' => $user->getAvatar(),
                    ];
                    $title = view('admin::dashboard.title', $params);
                    $column->row($title);
                });
            });
    }


    public function setting(Content $content): Content
    {
        return $content
            ->header('系统配置')
            ->body(new Card(new SiteSettingForm()));
    }
}
