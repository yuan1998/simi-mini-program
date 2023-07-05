<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection sortable
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection cover_path
     * @property Grid\Column|Collection author
     * @property Grid\Column|Collection publish_date
     * @property Grid\Column|Collection views
     * @property Grid\Column|Collection likes
     * @property Grid\Column|Collection abstract
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection target
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection target_type
     * @property Grid\Column|Collection header_banner
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection product_id
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection sku
     * @property Grid\Column|Collection sell
     * @property Grid\Column|Collection store
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection cover
     * @property Grid\Column|Collection images
     * @property Grid\Column|Collection doctor_id
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection project_id
     * @property Grid\Column|Collection score
     * @property Grid\Column|Collection answers
     * @property Grid\Column|Collection question_data
     * @property Grid\Column|Collection end_msg
     * @property Grid\Column|Collection nike_name
     * @property Grid\Column|Collection language
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection country
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection openid
     * @property Grid\Column|Collection session_key
     * @property Grid\Column|Collection unionid
     *
     * @method Grid\Column|Collection sortable(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection cover_path(string $label = null)
     * @method Grid\Column|Collection author(string $label = null)
     * @method Grid\Column|Collection publish_date(string $label = null)
     * @method Grid\Column|Collection views(string $label = null)
     * @method Grid\Column|Collection likes(string $label = null)
     * @method Grid\Column|Collection abstract(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection target(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection target_type(string $label = null)
     * @method Grid\Column|Collection header_banner(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection product_id(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection sku(string $label = null)
     * @method Grid\Column|Collection sell(string $label = null)
     * @method Grid\Column|Collection store(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection cover(string $label = null)
     * @method Grid\Column|Collection images(string $label = null)
     * @method Grid\Column|Collection doctor_id(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection project_id(string $label = null)
     * @method Grid\Column|Collection score(string $label = null)
     * @method Grid\Column|Collection answers(string $label = null)
     * @method Grid\Column|Collection question_data(string $label = null)
     * @method Grid\Column|Collection end_msg(string $label = null)
     * @method Grid\Column|Collection nike_name(string $label = null)
     * @method Grid\Column|Collection language(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection country(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection openid(string $label = null)
     * @method Grid\Column|Collection session_key(string $label = null)
     * @method Grid\Column|Collection unionid(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection sortable
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection cover_path
     * @property Show\Field|Collection author
     * @property Show\Field|Collection publish_date
     * @property Show\Field|Collection views
     * @property Show\Field|Collection likes
     * @property Show\Field|Collection abstract
     * @property Show\Field|Collection content
     * @property Show\Field|Collection status
     * @property Show\Field|Collection path
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection target
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection target_type
     * @property Show\Field|Collection header_banner
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection product_id
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection sku
     * @property Show\Field|Collection sell
     * @property Show\Field|Collection store
     * @property Show\Field|Collection price
     * @property Show\Field|Collection cover
     * @property Show\Field|Collection images
     * @property Show\Field|Collection doctor_id
     * @property Show\Field|Collection date
     * @property Show\Field|Collection project_id
     * @property Show\Field|Collection score
     * @property Show\Field|Collection answers
     * @property Show\Field|Collection question_data
     * @property Show\Field|Collection end_msg
     * @property Show\Field|Collection nike_name
     * @property Show\Field|Collection language
     * @property Show\Field|Collection province
     * @property Show\Field|Collection country
     * @property Show\Field|Collection city
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection openid
     * @property Show\Field|Collection session_key
     * @property Show\Field|Collection unionid
     *
     * @method Show\Field|Collection sortable(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection cover_path(string $label = null)
     * @method Show\Field|Collection author(string $label = null)
     * @method Show\Field|Collection publish_date(string $label = null)
     * @method Show\Field|Collection views(string $label = null)
     * @method Show\Field|Collection likes(string $label = null)
     * @method Show\Field|Collection abstract(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection target(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection target_type(string $label = null)
     * @method Show\Field|Collection header_banner(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection product_id(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection sku(string $label = null)
     * @method Show\Field|Collection sell(string $label = null)
     * @method Show\Field|Collection store(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection cover(string $label = null)
     * @method Show\Field|Collection images(string $label = null)
     * @method Show\Field|Collection doctor_id(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection project_id(string $label = null)
     * @method Show\Field|Collection score(string $label = null)
     * @method Show\Field|Collection answers(string $label = null)
     * @method Show\Field|Collection question_data(string $label = null)
     * @method Show\Field|Collection end_msg(string $label = null)
     * @method Show\Field|Collection nike_name(string $label = null)
     * @method Show\Field|Collection language(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection country(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection openid(string $label = null)
     * @method Show\Field|Collection session_key(string $label = null)
     * @method Show\Field|Collection unionid(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
