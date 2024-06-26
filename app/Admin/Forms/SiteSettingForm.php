<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;

class SiteSettingForm extends Form
{


    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        admin_setting($input);
        return $this
            ->response()
            ->success('保存配置成功');
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text("BANNER_TITLE", '首页头图Banner标题');
        $this->text("CARD_TITLE", '首页卡片模块标题');
        $this->image("SHOP_COVER", '商店页COVER')->autoUpload()->removable(false);

    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return admin_setting()->toArray();
    }
}
